<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#e43b79">
    <meta name="description" content="BookVerse - Giao diện demo nhà sách trực tuyến">
    <title>@yield('title', 'BookVerse - Nhà sách trực tuyến')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#f7f7f8] text-[#292935] antialiased">
    @php
        $cartCount = array_sum(array_map('intval', session('bookverse_cart', [])));
        $activeCategory = request('category', '');
    @endphp
    <div class="bg-[#e43b79] text-white">
        <div class="container-site flex min-h-9 items-center justify-between gap-4 text-[12px] font-medium sm:text-[13px]">
            <div class="flex items-center gap-2"><x-icon name="truck" class="h-4 w-4" /> Miễn phí vận chuyển đơn từ 250.000đ</div>
            <div class="hidden items-center gap-5 sm:flex"><span>Đọc sách hay, giá thêm vui</span><span class="border-l border-white/40 pl-5">BookVerse</span></div>
        </div>
    </div>

    <header class="sticky top-0 z-40 border-b border-[#ececf0] bg-white/95 backdrop-blur-sm">
        <div class="container-site flex min-h-[82px] items-center gap-5 py-3 lg:gap-9">
            <a href="{{ route('home') }}" class="flex shrink-0 items-center gap-2.5" aria-label="Trang chủ BookVerse">
                <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-[#e43b79] text-white shadow-sm"><x-icon name="book" class="h-7 w-7" /></span>
                <span><span class="block text-[24px] font-extrabold leading-none tracking-[-0.045em] text-[#d92768]">BookVerse</span><span class="mt-1 block text-[10px] font-semibold tracking-[0.11em] text-[#81818d]">NHÀ SÁCH TRỰC TUYẾN</span></span>
            </a>

            <form action="{{ route('home') }}" method="GET" role="search" class="hidden h-11 max-w-[650px] min-w-0 flex-1 items-center overflow-hidden rounded-lg border-2 border-[#e43b79] bg-white md:flex">
                <input type="search" name="q" value="{{ request('q') }}" placeholder="Tìm tên sách, tác giả bạn yêu thích..." class="h-full w-full min-w-0 flex-1 px-4 text-sm outline-none placeholder:text-[#a1a1aa]" aria-label="Tìm kiếm sách">
                <button type="submit" class="flex h-full w-14 shrink-0 items-center justify-center bg-[#e43b79] text-white transition hover:bg-[#cc2c67]" aria-label="Tìm kiếm"><x-icon name="search" class="h-5 w-5" /></button>
            </form>

            <div class="ml-auto flex shrink-0 items-center gap-3 sm:gap-6">
                @if(session('demo_user'))
                    <form action="{{ route('logout') }}" method="POST" class="group flex items-center gap-2 text-[#666574]">
                        @csrf
                        <x-icon name="user" class="h-6 w-6" />
                        <span class="hidden text-[13px] leading-tight lg:block">{{ session('demo_user.name') }}<button type="submit" class="block font-semibold text-[#292935] group-hover:text-[#e43b79]">Đăng xuất</button></span>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="group flex items-center gap-2 text-[#666574] transition hover:text-[#e43b79]"><x-icon name="user" class="h-6 w-6" /><span class="hidden text-[13px] leading-tight lg:block">Tài khoản<span class="block font-semibold text-[#292935] group-hover:text-[#e43b79]">Đăng nhập</span></span></a>
                @endif
                <a href="{{ route('cart') }}" class="group flex items-center gap-2 text-[#666574] transition hover:text-[#e43b79]"><span class="relative"><x-icon name="cart" class="h-7 w-7" />@if($cartCount > 0)<span class="absolute -right-2 -top-2 grid min-h-4 min-w-4 place-items-center rounded-full bg-[#e43b79] px-1 text-[10px] font-bold text-white">{{ $cartCount }}</span>@endif</span><span class="hidden text-[13px] leading-tight lg:block">Giỏ hàng<span class="block font-semibold text-[#292935] group-hover:text-[#e43b79]">{{ $cartCount }} sản phẩm</span></span></a>
                <button type="button" class="rounded-lg p-1.5 text-[#292935] hover:bg-pink-50 md:hidden" data-menu-toggle aria-label="Mở menu" aria-expanded="false"><x-icon name="menu" class="h-6 w-6" /></button>
            </div>
        </div>
        <div class="container-site pb-3 md:hidden">
            <form action="{{ route('home') }}" method="GET" class="flex overflow-hidden rounded-lg border border-[#e7a2b8] bg-white">
                <input type="search" name="q" value="{{ request('q') }}" placeholder="Tìm sách, tác giả..." class="min-w-0 flex-1 px-3 py-2.5 text-sm outline-none">
                <button class="bg-[#e43b79] px-4 text-white" aria-label="Tìm kiếm"><x-icon name="search" class="h-5 w-5" /></button>
            </form>
        </div>
        <nav class="border-t border-[#f2eef0] bg-white" aria-label="Điều hướng chính">
            <div class="container-site hidden items-center gap-5 overflow-x-auto py-3 text-[13px] font-semibold whitespace-nowrap md:flex">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') && request('category') === null ? 'text-[#e43b79]' : 'text-[#555260]' }} hover:text-[#e43b79]">Trang chủ</a>
                @foreach($categories ?? config('bookverse.categories', []) as $cat)
                    <a href="{{ route('home', ['category' => $cat['slug']]) }}" class="shrink-0 hover:text-[#e43b79] {{ $activeCategory === $cat['slug'] ? 'text-[#e43b79]' : 'text-[#555260]' }}">{{ $cat['name'] }}</a>
                @endforeach
                <a href="{{ route('home') }}#sach-uu-dai" class="ml-auto flex items-center gap-1.5 text-[#e43b79]"><x-icon name="tag" class="h-4 w-4" /> Sách giảm giá</a>
            </div>
            <div class="container-site hidden flex-wrap gap-4 border-t border-[#f2eef0] py-3 text-sm font-medium md:hidden" data-mobile-menu>
                <a href="{{ route('home') }}" class="text-[#e43b79]">Trang chủ</a>
                @foreach(config('bookverse.categories', []) as $cat)<a href="{{ route('home', ['category'=>$cat['slug']]) }}">{{ $cat['name'] }}</a>@endforeach
                <a href="{{ route('register') }}">Đăng ký</a>
            </div>
        </nav>
    </header>

    @if(session('success'))
        <div class="container-site pt-4"><div class="flex items-center gap-2 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800"><x-icon name="check-circle" class="h-5 w-5" /> {{ session('success') }}</div></div>
    @endif
    @if(session('notice'))
        <div class="container-site pt-4"><div class="rounded-lg border border-pink-200 bg-pink-50 px-4 py-3 text-sm text-[#aa2b5a]">{{ session('notice') }}</div></div>
    @endif

    <main class="min-h-[65vh]">@yield('content')</main>

    <footer class="mt-12 border-t border-[#ececf0] bg-white">
        <div class="container-site grid gap-8 py-11 sm:grid-cols-2 lg:grid-cols-4">
            <div><div class="text-[25px] font-extrabold tracking-tight text-[#d92768]">BookVerse</div><p class="mt-3 max-w-xs text-[13px] leading-6 text-[#777482]">Góc sách nhỏ dành cho mọi người. Khám phá những tựa sách mới và tìm một cuốn thật hợp với bạn.</p><p class="mt-4 text-xs text-[#9a98a3]">Giao diện minh họa · Không bán hàng thật</p></div>
            <div><h3 class="mb-4 text-sm font-bold">Về BookVerse</h3><div class="space-y-2.5 text-[13px] text-[#777482]"><a href="{{ route('home') }}" class="block hover:text-[#e43b79]">Trang chủ</a><a href="{{ route('home') }}#danh-muc" class="block hover:text-[#e43b79]">Danh mục sách</a><a href="{{ route('home') }}#ban-chay" class="block hover:text-[#e43b79]">Sách bán chạy</a></div></div>
            <div><h3 class="mb-4 text-sm font-bold">Hỗ trợ khách hàng</h3><div class="space-y-2.5 text-[13px] text-[#777482]"><p>Giao diện mô phỏng nhà sách</p><p>Giỏ hàng lưu trên trình duyệt (session)</p><p>Chưa tích hợp thanh toán</p></div></div>
            <div><h3 class="mb-4 text-sm font-bold">Tài khoản</h3><div class="space-y-2.5 text-[13px] text-[#777482]"><a href="{{ route('login') }}" class="block hover:text-[#e43b79]">Đăng nhập</a><a href="{{ route('register') }}" class="block hover:text-[#e43b79]">Đăng ký</a><a href="{{ route('cart') }}" class="block hover:text-[#e43b79]">Giỏ hàng</a></div></div>
        </div>
        <div class="border-t border-[#f1edf0] py-4"><div class="container-site text-center text-xs text-[#92919c] sm:text-left">© 2026 BookVerse. Bản giao diện thực hành Laravel Blade + Tailwind CSS.</div></div>
    </footer>
</body>
</html>
