// JavaScript thuần, không cần thư viện, không kết nối DB.
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-book-gallery][data-autoplay-interval]').forEach((gallery) => {
        const images = [...gallery.querySelectorAll('[data-gallery-image]')];
        const thumbnails = [...gallery.querySelectorAll('[data-gallery-thumbnail]')];
        const interval = Number(gallery.dataset.autoplayInterval);
        if (images.length < 2 || !Number.isFinite(interval) || interval <= 0) return;

        let activeIndex = images.findIndex((image) => image.classList.contains('is-active'));
        let autoplayTimer;

        const showImage = (index) => {
            activeIndex = (index + images.length) % images.length;
            images.forEach((image, imageIndex) => {
                const isActive = imageIndex === activeIndex;
                image.classList.toggle('is-active', isActive);
                image.classList.toggle('opacity-100', isActive);
                image.classList.toggle('opacity-0', !isActive);
                image.setAttribute('aria-hidden', String(!isActive));
            });
            thumbnails.forEach((thumbnail, thumbnailIndex) => {
                const isActive = thumbnailIndex === activeIndex;
                thumbnail.setAttribute('aria-pressed', String(isActive));
                thumbnail.classList.toggle('border-[#d92768]', isActive);
                thumbnail.classList.toggle('border-transparent', !isActive);
            });
        };

        const stopAutoplay = () => {
            window.clearInterval(autoplayTimer);
            autoplayTimer = undefined;
        };
        const startAutoplay = () => {
            if (autoplayTimer || gallery.matches(':hover') || gallery.contains(document.activeElement)) return;
            autoplayTimer = window.setInterval(() => showImage(activeIndex + 1), interval);
        };

        gallery.querySelector('[data-gallery-prev]')?.addEventListener('click', () => showImage(activeIndex - 1));
        gallery.querySelector('[data-gallery-next]')?.addEventListener('click', () => showImage(activeIndex + 1));
        thumbnails.forEach((thumbnail, index) => {
            thumbnail.addEventListener('click', () => showImage(index));
        });

        gallery.addEventListener('mouseenter', stopAutoplay);
        gallery.addEventListener('mouseleave', startAutoplay);
        gallery.addEventListener('focusin', stopAutoplay);
        gallery.addEventListener('focusout', (event) => {
            if (!gallery.contains(event.relatedTarget)) startAutoplay();
        });

        startAutoplay();
    });

    const menuButton = document.querySelector('[data-menu-toggle]');
    const mobileMenu = document.querySelector('[data-mobile-menu]');
    if (menuButton && mobileMenu) {
        menuButton.addEventListener('click', () => {
            const visible = mobileMenu.classList.toggle('hidden');
            menuButton.setAttribute('aria-expanded', String(!visible));
        });
    }

    document.querySelectorAll('[data-quantity-picker]').forEach((picker) => {
        const input = picker.querySelector('input[type="number"]');
        const minus = picker.querySelector('[data-qty-minus]');
        const plus = picker.querySelector('[data-qty-plus]');
        if (!input) return;
        const update = (direction) => {
            const val = Number.parseInt(input.value || '1', 10) || 1;
            input.value = String(Math.max(1, Math.min(20, val + direction)));
        };
        minus?.addEventListener('click', () => update(-1));
        plus?.addEventListener('click', () => update(1));
    });

    document.querySelectorAll('[data-cart-summary]').forEach((cart) => {
        const items = [...cart.querySelectorAll('[data-cart-item]')];
        const checkboxes = [...cart.querySelectorAll('[data-cart-select]')];
        const selectAll = [...cart.querySelectorAll('[data-cart-select-all]')];
        const subtotalElement = cart.querySelector('[data-cart-subtotal]');
        const shippingElement = cart.querySelector('[data-cart-shipping]');
        const totalElement = cart.querySelector('[data-cart-total]');
        const freeShippingElement = cart.querySelector('[data-cart-free-shipping]');
        const checkoutButton = cart.querySelector('[data-cart-checkout]');
        const selectedInputs = cart.querySelector('[data-cart-selected-inputs]');
        const isAuthenticated = cart.dataset.cartAuthenticated === 'true';
        const formatMoney = (amount) => `${new Intl.NumberFormat('vi-VN').format(amount)}đ`;

        const updateSummary = () => {
            let subtotal = 0;
            let selectedCount = 0;
            if (selectedInputs) selectedInputs.innerHTML = '';

            items.forEach((item) => {
                const checkbox = item.querySelector('[data-cart-select]');
                const quantity = item.querySelector('[data-cart-quantity]');
                const line = item.querySelector('[data-cart-line]');
                const price = Number(item.dataset.price) || 0;
                const itemQuantity = Math.max(1, Math.min(20, Number.parseInt(quantity?.value || '1', 10) || 1));
                const amount = price * itemQuantity;

                if (line) line.textContent = formatMoney(amount);
                if (checkbox?.checked) {
                    subtotal += amount;
                    selectedCount += 1;
                    const slug = item.dataset.slug;
                    if (selectedInputs && slug) {
                        const input = document.createElement('input');
                        input.type = 'hidden';
                        input.name = `selected[${slug}]`;
                        input.value = String(itemQuantity);
                        selectedInputs.appendChild(input);
                    }
                }
            });

            const shipping = selectedCount === 0 || subtotal >= 250000 ? 0 : 30000;
            subtotalElement.textContent = formatMoney(subtotal);
            shippingElement.textContent = selectedCount === 0
                ? '0đ'
                : shipping === 0
                    ? 'Miễn phí'
                    : formatMoney(shipping);
            shippingElement.classList.toggle('text-green-600', selectedCount > 0 && shipping === 0);
            totalElement.textContent = formatMoney(subtotal + shipping);

            if (selectedCount === 0) {
                freeShippingElement.textContent = 'Chọn sản phẩm để tính tổng đơn hàng.';
                freeShippingElement.className = 'mt-6 rounded-lg bg-[#fff6f9] px-3.5 py-3 text-xs leading-5 text-[#9d536f]';
            } else if (subtotal >= 250000) {
                freeShippingElement.textContent = 'Đã đạt mức miễn phí vận chuyển!';
                freeShippingElement.className = 'mt-6 flex items-center gap-2 rounded-lg bg-green-50 px-3.5 py-3 text-xs font-medium text-green-700';
            } else {
                freeShippingElement.textContent = `Thêm ${formatMoney(250000 - subtotal)} để đạt mức miễn phí vận chuyển (minh họa).`;
                freeShippingElement.className = 'mt-6 rounded-lg bg-[#fff6f9] px-3.5 py-3 text-xs leading-5 text-[#9d536f]';
            }

            const allSelected = checkboxes.length > 0 && checkboxes.every((checkbox) => checkbox.checked);
            selectAll.forEach((checkbox) => {
                checkbox.checked = allSelected;
                checkbox.indeterminate = selectedCount > 0 && selectedCount < checkboxes.length;
            });

            if (checkoutButton) {
                const canSubmit = selectedCount > 0 && isAuthenticated;
                checkoutButton.disabled = !canSubmit;
                checkoutButton.classList.toggle('cursor-not-allowed', !canSubmit);
                checkoutButton.classList.toggle('opacity-60', !canSubmit);
                checkoutButton.textContent = !isAuthenticated && selectedCount > 0
                    ? 'Đăng nhập để thanh toán'
                    : 'Thanh toán';
                checkoutButton.title = !isAuthenticated
                    ? 'Vui lòng đăng nhập để thanh toán'
                    : selectedCount === 0
                        ? 'Vui lòng chọn ít nhất một sản phẩm'
                        : 'Tiếp tục thanh toán';
            }
        };

        checkboxes.forEach((checkbox) => checkbox.addEventListener('change', updateSummary));
        selectAll.forEach((checkbox) => {
            checkbox.addEventListener('change', () => {
                checkboxes.forEach((itemCheckbox) => {
                    itemCheckbox.checked = checkbox.checked;
                });
                updateSummary();
            });
        });
        cart.querySelectorAll('[data-cart-quantity]').forEach((quantity) => {
            quantity.addEventListener('input', updateSummary);
        });

        updateSummary();
    });

    document.querySelectorAll('[data-toggle-password]').forEach((btn) => {
        const field = btn.closest('.auth-input-wrap')?.querySelector('input');
        if (!field) return;
        btn.addEventListener('click', () => {
            field.type = field.type === 'password' ? 'text' : 'password';
            btn.setAttribute('aria-label', field.type === 'password' ? 'Hiện mật khẩu' : 'Ẩn mật khẩu');
        });
    });

    document.querySelectorAll('[data-demo-form]').forEach((form) => {
        form.addEventListener('submit', (event) => {
            // Demo: ngăn gửi thông tin đăng nhập / đăng ký đi bất kỳ đâu.
            event.preventDefault();
            const confirmation = form.querySelector('#confirm-password');
            const password = form.querySelector('#register-password');
            const error = form.querySelector('[data-password-error]');
            if (confirmation && password && confirmation.value !== password.value) {
                error?.classList.remove('hidden');
                confirmation.focus();
                return;
            }
            error?.classList.add('hidden');
            const msg = form.querySelector('[data-demo-message]');
            if (msg) {
                msg.textContent = 'Đã kiểm tra biểu mẫu. Đây là bản demo nên không tạo phiên đăng nhập hay tài khoản.';
                msg.classList.remove('hidden');
                msg.scrollIntoView({behavior: 'smooth', block: 'nearest'});
            }
        });
    });
});
