@php
    $navCategories = config('bookverse.categories', []);
    $cartCount = array_sum(session('cart', []));
    $wishlistCount = count(session('wishlist', []));
@endphp
<header class="border-b border-line bg-white">
    <div class="bg-navy text-white">
        <div class="container-shop flex min-h-9 items-center justify-between gap-4 text-[11px] sm:text-xs">
            <span>Ưu đãi phí vận chuyển cho đơn từ 250.000đ</span>
            <span class="hidden text-white/75 sm:block">BookVerse · Đọc nhiều hơn mỗi ngày</span>
        </div>
    </div>

    <div class="container-shop flex min-h-[86px] items-center gap-4 py-4 lg:gap-10">
        <a href="{{ route('home') }}" class="flex shrink-0 items-center gap-2.5" aria-label="Trang chủ BookVerse">
            <span class="flex h-10 w-10 items-center justify-center rounded-md bg-navy font-serif text-[25px] font-bold text-white">B</span>
            <span class="leading-tight">
                <span class="block font-serif text-[23px] font-semibold tracking-tight text-navy">BookVerse</span>
                <span class="block text-[10px] tracking-[0.14em] text-muted">NHÀ SÁCH TRỰC TUYẾN</span>
            </span>
        </a>

        <form action="{{ route('home') }}" method="GET" role="search" class="hidden max-w-xl flex-1 items-center overflow-hidden rounded-md border border-line bg-paper focus-within:border-forest md:flex">
            <label class="sr-only" for="header-search">Tìm sách, tác giả</label>
            <input id="header-search" type="search" name="q" value="{{ request('q') }}" placeholder="Tìm theo tên sách hoặc tác giả..." class="min-w-0 flex-1 bg-transparent px-4 py-3 text-sm outline-none placeholder:text-muted">
            <button type="submit" class="self-stretch bg-navy px-5 text-sm font-semibold text-white hover:bg-[#2c4b5e]">Tìm kiếm</button>
        </form>

        <div class="ml-auto flex shrink-0 items-center gap-3 sm:gap-6">
            <a href="{{ route('wishlist.index') }}" class="relative flex items-center gap-2 text-navy hover:text-forest" aria-label="Danh sách yêu thích">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 0 0-7.8 7.8L12 21l8.8-8.6a5.5 5.5 0 0 0 0-7.8Z"/></svg>
                <span class="hidden text-sm sm:block">Yêu thích</span>
                @if($wishlistCount > 0)<span class="absolute -right-2 -top-2 rounded-full bg-forest px-1.5 text-[10px] text-white">{{ $wishlistCount }}</span>@endif
            </a>
            <a href="{{ route('cart.index') }}" class="relative flex items-center gap-2 text-navy hover:text-forest" aria-label="Giỏ hàng">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 8h12l1 12H5L6 8Z"/><path d="M9 9V6a3 3 0 1 1 6 0v3"/></svg>
                <span class="hidden text-sm sm:block">Giỏ hàng</span>
                @if($cartCount > 0)<span class="absolute -right-2 -top-2 rounded-full bg-forest px-1.5 text-[10px] text-white">{{ $cartCount }}</span>@endif
            </a>
            <button type="button" data-menu-button aria-expanded="false" aria-controls="mobile-nav" class="p-1 text-navy md:hidden" aria-label="Mở menu">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>
    </div>

    <div class="container-shop pb-3 md:hidden">
        <form action="{{ route('home') }}" method="GET" role="search" class="flex overflow-hidden rounded-md border border-line bg-paper">
            <input name="q" type="search" value="{{ request('q') }}" placeholder="Tìm tên sách, tác giả..." aria-label="Tìm tên sách hoặc tác giả" class="w-full min-w-0 bg-transparent px-3 py-2.5 text-sm outline-none">
            <button class="bg-navy px-4 text-sm font-medium text-white">Tìm</button>
        </form>
    </div>

    <nav class="hidden border-t border-line md:block" aria-label="Danh mục chính">
        <div class="container-shop flex items-center gap-7 overflow-x-auto py-3 text-[13px] font-medium whitespace-nowrap">
            <a href="{{ route('home') }}" class="text-navy hover:text-forest">Trang chủ</a>
            @foreach(array_slice($navCategories, 0, 5) as $nav)
                <a href="{{ route('home', ['category' => $nav['slug']]) }}" class="text-[#505b5f] hover:text-forest">{{ $nav['name'] }}</a>
            @endforeach
            <a href="{{ route('home') }}#sach-ban-chay" class="text-[#505b5f] hover:text-forest">Sách bán chạy</a>
        </div>
    </nav>

    <nav id="mobile-nav" data-mobile-menu class="hidden border-t border-line bg-white md:hidden" aria-label="Menu điện thoại">
        <div class="container-shop grid grid-cols-2 gap-x-4 gap-y-3 py-4 text-sm">
            <a href="{{ route('home') }}">Trang chủ</a>
            @foreach($navCategories as $nav)
                <a href="{{ route('home', ['category' => $nav['slug']]) }}">{{ $nav['name'] }}</a>
            @endforeach
        </div>
    </nav>
</header>
