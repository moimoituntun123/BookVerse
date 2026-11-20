@props(['book'])
@php
    $discount = $book['original_price'] > $book['price']
        ? (int) round(100 * (1 - $book['price'] / $book['original_price']))
        : 0;
@endphp
<article class="book-card group min-w-0 overflow-hidden rounded-lg border border-[#eeeaf0] bg-white transition duration-200 hover:-translate-y-0.5 hover:border-pink-200 hover:shadow-lg hover:shadow-pink-100/70">
    <a href="{{ route('books.show', $book['slug']) }}" class="relative flex h-[200px] items-center justify-center bg-[#faf8fa] px-6 py-4 sm:h-[226px]" aria-label="Xem {{ $book['title'] }}">
        <img src="{{ '/images/books/' . $book['cover'] }}" alt="Bìa sách {{ $book['title'] }}" loading="lazy" class="h-full max-w-full object-contain drop-shadow-[4px_7px_5px_rgba(0,0,0,.13)] transition duration-200 group-hover:scale-[1.04]">
        @if($discount > 0)<span class="absolute right-2.5 top-2.5 rounded-md bg-[#ff5c72] px-2 py-1 text-xs font-extrabold text-white">-{{ $discount }}%</span>@endif
    </a>
    <div class="px-3.5 pb-4 pt-3.5 sm:px-4">
        <a href="{{ route('books.show', $book['slug']) }}" class="line-clamp-2 min-h-[40px] text-[13px] font-semibold leading-5 text-[#34323d] hover:text-[#d92768] sm:text-sm">{{ $book['title'] }}</a>
        <p class="mt-1 truncate text-xs text-[#92909d]">{{ $book['author'] }}</p>
        <div class="mt-2.5 flex items-center gap-1 text-[#f9a729]"><x-icon name="star" class="h-3.5 w-3.5 fill-current stroke-current" /><span class="text-xs font-semibold text-[#746f7e]">4.8</span><span class="text-xs text-[#a4a1ad]">(demo)</span></div>
        <div class="mt-3 flex flex-wrap items-baseline gap-x-2"><span class="text-base font-extrabold text-[#e23560]">{{ number_format($book['price'], 0, ',', '.') }}đ</span><span class="text-xs text-[#aaa7b1] line-through">{{ number_format($book['original_price'], 0, ',', '.') }}đ</span></div>
        <form action="{{ route('cart.add', $book['slug']) }}" method="POST" class="mt-3">@csrf<input type="hidden" name="quantity" value="1"><button type="submit" class="flex w-full items-center justify-center gap-1.5 rounded-md border border-[#ec6193] bg-white px-2 py-2 text-[12px] font-bold text-[#df3271] transition hover:bg-[#e43b79] hover:text-white"><x-icon name="cart" class="h-4 w-4" /> Thêm vào giỏ</button></form>
    </div>
</article>
