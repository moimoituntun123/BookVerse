@extends('layouts.bookverse')
@section('title', 'BookVerse - Sách hay, giá tốt mỗi ngày')
@section('content')
@if($keyword === '' && $category === '')
    <div class="container-site py-5 sm:py-6">
        <div class="grid gap-3 lg:grid-cols-[2.05fr_1fr]">
            <section class="hero-pink relative min-h-[345px] overflow-hidden rounded-xl bg-[#ffe5ec] sm:min-h-[390px]">
                <div class="relative z-10 flex h-full w-full flex-col justify-center px-7 py-9 sm:w-[54%] sm:px-10 lg:px-12">
                    <div class="mb-4 inline-flex w-fit items-center gap-1.5 rounded-full bg-white/90 px-3 py-1.5 text-[11px] font-bold tracking-[.05em] text-[#c92c67]"><x-icon name="sparkles" class="h-3.5 w-3.5" /> THÁNG SÁCH BOOKVERSE</div>
                    <h1 class="max-w-[500px] text-[32px] font-extrabold leading-[1.16] tracking-[-.045em] text-[#44243a] sm:text-[42px] xl:text-[48px]">Sách hay mỗi ngày.<br><span class="text-[#df3271]">Giá yêu thương.</span></h1>
                    <p class="mt-4 max-w-sm text-[13px] leading-6 text-[#785d6e] sm:text-sm">Dành một chút thời gian cho những câu chuyện hay. Nhiều tựa sách nổi bật đang chờ bạn khám phá.</p>
                    <div class="mt-6 flex flex-wrap gap-2.5"><a href="#ban-chay" class="button-pink">Khám phá sách <x-icon name="arrow-right" class="h-4 w-4" /></a><a href="#danh-muc" class="button-light">Xem danh mục</a></div>
                </div>
                <div class="pointer-events-none absolute -right-10 -top-16 hidden h-[460px] w-[460px] rounded-full border-[55px] border-white/30 sm:block"></div>
                <div class="pointer-events-none absolute bottom-0 right-0 hidden h-full w-[47%] items-center justify-center sm:flex">
                    <img src="{{ asset('images/categories/sach-lich-su.jpg') }}" alt="Bìa sách lịch sử" class="hero-book hero-book-left absolute bottom-[54px] left-[7%] h-[206px] w-auto -rotate-[16deg] object-contain drop-shadow-2xl lg:h-[248px]" />
                    <img src="{{ asset('images/banners/hero-psychology.jpg') }}" alt="Bìa sách tâm lý và kỹ năng" class="hero-book relative z-20 h-[265px] w-auto rotate-[7deg] object-contain drop-shadow-2xl lg:h-[305px]" />
                    <img src="{{ asset('images/categories/sach-giao-khoa.png') }}" alt="Bìa sách giáo khoa" class="hero-book hero-book-right absolute bottom-[47px] right-[5%] h-[210px] w-auto rotate-[17deg] object-contain drop-shadow-2xl lg:h-[250px]" />
                </div>
            </section>
            <div class="grid grid-cols-2 gap-3 lg:grid-cols-1">
                <a href="#sach-uu-dai" class="relative flex min-h-[165px] flex-col justify-center overflow-hidden rounded-xl bg-[#ffdce6] px-5 py-6 sm:px-7">
                    <div class="relative z-10 max-w-[70%]"><p class="text-xs font-bold tracking-[.04em] text-[#d92a6c]">ƯU ĐÃI ĐẶC BIỆT</p><h2 class="mt-2 text-[18px] font-extrabold leading-snug text-[#562f45] sm:text-[23px]">Sách giảm giá<br>đến 35%</h2><span class="mt-3 inline-flex items-center gap-1 text-xs font-bold text-[#d92a6c]">Xem ngay <x-icon name="arrow-right" class="h-3.5 w-3.5" /></span></div>
                    <img src="{{ asset('images/banners/banner-economics.png') }}" alt="Bìa sách kinh tế" class="absolute -bottom-7 right-3 h-[152px] w-auto object-contain rotate-[13deg] drop-shadow-lg sm:h-[172px]" />
                </a>
                <a href="{{ route('home', ['category'=>'ngoai-ngu']) }}" class="relative flex min-h-[165px] flex-col justify-center overflow-hidden rounded-xl bg-[#e8e8ff] px-5 py-6 sm:px-7">
                    <div class="relative z-10 max-w-[70%]"><p class="text-xs font-bold tracking-[.04em] text-[#6c58b0]">GÓC NGOẠI NGỮ</p><h2 class="mt-2 text-[18px] font-extrabold leading-snug text-[#4b3c7b] sm:text-[23px]">Sách học tiếng Anh<br>và ngoại ngữ</h2><span class="mt-3 inline-flex items-center gap-1 text-xs font-bold text-[#6c58b0]">Khám phá <x-icon name="arrow-right" class="h-3.5 w-3.5" /></span></div>
                    <img src="{{ asset('images/banners/banner-foreign-language.jpg') }}" alt="Bìa sách học ngoại ngữ" class="absolute -bottom-7 right-3 h-[152px] w-auto object-contain rotate-[13deg] drop-shadow-lg sm:h-[172px]" />
                </a>
            </div>
        </div>
        <div class="mt-4 grid grid-cols-2 gap-3 rounded-lg bg-white px-4 py-4 sm:grid-cols-4 sm:px-6">
            <div class="flex items-center gap-2.5"><x-icon name="truck" class="h-6 w-6 shrink-0 text-[#e43b79]" /><div><strong class="block text-xs sm:text-[13px]">Freeship từ 250k</strong><span class="text-[11px] text-[#96939c]">Giao hàng tiện lợi</span></div></div>
            <div class="flex items-center gap-2.5"><x-icon name="shield" class="h-6 w-6 shrink-0 text-[#e43b79]" /><div><strong class="block text-xs sm:text-[13px]">Sách chất lượng</strong><span class="text-[11px] text-[#96939c]">Tuyển chọn cẩn thận</span></div></div>
            <div class="flex items-center gap-2.5"><x-icon name="return" class="h-6 w-6 shrink-0 text-[#e43b79]" /><div><strong class="block text-xs sm:text-[13px]">Dễ dàng chọn mua</strong><span class="text-[11px] text-[#96939c]">Giao diện thuận tiện</span></div></div>
            <div class="flex items-center gap-2.5"><x-icon name="book" class="h-6 w-6 shrink-0 text-[#e43b79]" /><div><strong class="block text-xs sm:text-[13px]">Đa dạng thể loại</strong><span class="text-[11px] text-[#96939c]">Tìm sách phù hợp</span></div></div>
        </div>
    </div>
@endif

<section id="danh-muc" class="container-site {{ $keyword === '' && $category === '' ? 'pt-3' : 'pt-7' }}">
    <div class="rounded-xl bg-white p-5 sm:p-6">
        <div class="mb-5 flex items-end justify-between gap-3"><div><span class="section-eyebrow">KHÁM PHÁ BOOKVERSE</span><h2 class="section-title">Danh mục sách</h2></div><a href="{{ route('home') }}#danh-muc" class="inline-flex items-center gap-1 text-xs font-semibold text-[#d92768]">Tất cả <x-icon name="chevron-right" class="h-4 w-4" /></a></div>
        <div class="grid grid-cols-2 gap-3 sm:grid-cols-4 sm:gap-4 lg:grid-cols-7">
            @foreach($categories as $cat)
                <a href="{{ route('home', ['category' => $cat['slug']]) }}" class="group flex flex-col items-center gap-2.5 rounded-lg px-1 py-2 text-center transition hover:bg-[#fff8fa] {{ $category === $cat['slug'] ? 'ring-1 ring-pink-200 bg-pink-50' : '' }}">
                    <img src="{{ asset('images/categories/' . $cat['image']) }}" alt="" loading="lazy" class="h-[88px] w-[68px] rounded-md object-cover shadow-sm transition group-hover:-translate-y-0.5 sm:h-[100px] sm:w-[76px]">
                    <span class="max-w-[115px] text-[12px] font-semibold leading-4 text-[#524e5b] sm:text-[13px]">{{ $cat['name'] }}</span>
                </a>
            @endforeach
        </div>
    </div>
</section>

@if($keyword !== '' || $category !== '')
    <section class="container-site mt-5 rounded-xl bg-white p-5 sm:p-6">
        <div class="mb-5 flex flex-wrap items-center justify-between gap-3"><div><span class="section-eyebrow">KẾT QUẢ TÌM KIẾM</span><h2 class="section-title">{{ $keyword !== '' ? 'Tìm kiếm: ' . $keyword : ($categories->firstWhere('slug', $category)['name'] ?? 'Danh mục sách') }}</h2><p class="mt-2 text-sm text-[#8d8b97]">Có {{ $results->count() }} sách phù hợp</p></div><a href="{{ route('home') }}" class="button-outline">Xóa bộ lọc</a></div>
        @if($results->isEmpty())
            <div class="rounded-lg bg-[#fff8fa] px-6 py-14 text-center"><x-icon name="search" class="mx-auto h-10 w-10 text-[#e79cba]" /><h3 class="mt-3 font-bold">Không tìm thấy sách phù hợp</h3><p class="mt-2 text-sm text-[#8d8b97]">Thử tìm bằng tên sách, tên tác giả hoặc chọn thể loại khác nhé.</p></div>
        @else
            <div class="book-grid">@foreach($results as $book)<x-book-card :book="$book" />@endforeach</div>
        @endif
    </section>
@else
    <section id="sach-uu-dai" class="container-site mt-5">
        <div class="overflow-hidden rounded-xl border border-[#ffd1df] bg-[#fff0f5]">
            <div class="flex flex-wrap items-center justify-between gap-3 border-b border-[#ffd3df] px-5 py-4 sm:px-6"><div class="flex items-center gap-3"><span class="rounded-md bg-[#e83f75] px-2.5 py-1 text-xs font-extrabold uppercase tracking-[.09em] text-white">SALE</span><h2 class="text-[19px] font-extrabold text-[#b72858] sm:text-[23px]">Ưu đãi sách hay</h2><span class="hidden text-xs text-[#ad748c] sm:block">Giá tốt cho bạn đọc</span></div><a href="{{ route('home') }}#ban-chay" class="flex items-center gap-1 text-xs font-bold text-[#c63169]">Xem thêm <x-icon name="chevron-right" class="h-4 w-4" /></a></div>
            <div class="book-grid px-3 py-4 sm:px-5 sm:py-5">@foreach($saleBooks as $book)<x-book-card :book="$book" />@endforeach</div>
        </div>
    </section>

    <section id="ban-chay" class="container-site mt-6 rounded-xl bg-white p-5 sm:p-6">
        <div class="mb-5 flex items-end justify-between gap-3"><div><span class="section-eyebrow">ĐƯỢC YÊU THÍCH</span><h2 class="section-title">Sách bán chạy</h2></div><span class="text-xs text-[#9c98a4]">Gợi ý dành cho bạn</span></div>
        <div class="book-grid">@foreach($bestBooks as $book)<x-book-card :book="$book" />@endforeach</div>
    </section>

    <section class="container-site mt-6 rounded-xl bg-white p-5 sm:p-6">
        <div class="mb-5 flex items-end justify-between gap-3"><div><span class="section-eyebrow">THÊM NHIỀU GỢI Ý</span><h2 class="section-title">Có thể bạn sẽ thích</h2></div><a href="{{ route('home') }}#danh-muc" class="inline-flex items-center gap-1 text-xs font-bold text-[#d92768]">Khám phá danh mục <x-icon name="chevron-right" class="h-4 w-4" /></a></div>
        <div class="book-grid">@foreach($newBooks as $book)<x-book-card :book="$book" />@endforeach</div>
    </section>
@endif
@endsection
