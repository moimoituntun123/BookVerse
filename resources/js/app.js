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
