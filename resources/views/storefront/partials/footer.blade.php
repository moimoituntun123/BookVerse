<footer class="mt-20 border-t border-line bg-[#f0eee8]">
    <div class="container-shop grid gap-10 py-12 sm:grid-cols-2 lg:grid-cols-4">
        <div class="sm:col-span-2 lg:col-span-2">
            <a href="{{ route('home') }}" class="font-serif text-2xl font-semibold text-navy">BookVerse</a>
            <p class="mt-3 max-w-sm text-sm leading-7 text-[#646a69]">Một góc nhỏ dành cho những người thích đọc. Tìm cuốn sách bạn cần, khám phá thêm những câu chuyện mới.</p>
        </div>
        <div>
            <h3 class="text-sm font-semibold text-navy">Khám phá</h3>
            <div class="mt-4 grid gap-3 text-sm text-[#606867]">
                <a href="{{ route('home', ['category' => 'van-hoc']) }}" class="hover:text-forest">Văn học</a>
                <a href="{{ route('home', ['category' => 'tam-ly']) }}" class="hover:text-forest">Tâm lý - Kỹ năng</a>
                <a href="{{ route('home') }}#sach-ban-chay" class="hover:text-forest">Sách bán chạy</a>
            </div>
        </div>
        <div>
            <h3 class="text-sm font-semibold text-navy">Tài khoản của bạn</h3>
            <div class="mt-4 grid gap-3 text-sm text-[#606867]">
                <a href="{{ route('cart.index') }}" class="hover:text-forest">Giỏ hàng</a>
                <a href="{{ route('wishlist.index') }}" class="hover:text-forest">Sách yêu thích</a>
                <a href="{{ route('home') }}" class="hover:text-forest">Tiếp tục mua sắm</a>
            </div>
        </div>
    </div>
    <div class="border-t border-[#e0ded7]">
        <div class="container-shop flex flex-wrap justify-between gap-2 py-5 text-xs text-muted">
            <span>© {{ date('Y') }} BookVerse</span>
            <span>Bản mẫu giao diện · Dữ liệu sách minh họa</span>
        </div>
    </div>
</footer>
