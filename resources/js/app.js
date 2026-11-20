// JavaScript thuần, không cần thư viện, không kết nối DB.
document.addEventListener('DOMContentLoaded', () => {
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
