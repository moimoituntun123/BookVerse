@extends('layouts.bookverse')
@section('title', 'Giỏ hàng - BookVerse')
@section('content')
<section class="container-site pt-7">
    <nav class="mb-4 flex items-center gap-1.5 text-xs text-[#9a96a1]"><a href="{{ route('home') }}" class="hover:text-[#d92768]">Trang chủ</a><x-icon name="chevron-right" class="h-3.5 w-3.5" /><span class="text-[#44404d]">Giỏ hàng</span></nav>
    <div class="mb-5 flex items-center gap-3"><h1 class="text-[25px] font-extrabold tracking-tight sm:text-[29px]">Giỏ hàng của bạn</h1><span class="rounded-full bg-[#ffe8f0] px-3 py-1 text-xs font-bold text-[#d92768]">{{ $items->sum('quantity') }} sản phẩm</span></div>
    @if($items->isEmpty())
        <div class="rounded-xl bg-white px-6 py-20 text-center"><div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-[#fff0f5]"><x-icon name="cart" class="h-10 w-10 text-[#e43b79]" /></div><h2 class="mt-5 text-xl font-extrabold">Giỏ hàng đang trống</h2><p class="mx-auto mt-2 max-w-sm text-sm leading-6 text-[#8c8895]">Chưa có cuốn sách nào trong giỏ. Dạo một vòng BookVerse để tìm cuốn bạn yêu thích nhé!</p><a href="{{ route('home') }}" class="button-pink mt-6">Tiếp tục mua sắm <x-icon name="arrow-right" class="h-4 w-4" /></a></div>
    @else
        <div class="grid items-start gap-5 lg:grid-cols-[minmax(0,1fr)_340px]" data-cart-summary data-cart-authenticated="{{ session('demo_user') ? 'true' : 'false' }}">
            <div class="overflow-hidden rounded-xl bg-white">
                <div class="hidden grid-cols-[28px_1fr_130px_120px] gap-5 border-b border-[#f0edf0] px-6 py-4 text-xs font-bold text-[#827e8b] sm:grid">
                    <label class="flex items-center"><input type="checkbox" data-cart-select-all aria-label="Chọn tất cả sản phẩm" class="h-4 w-4 accent-[#d92768]"></label>
                    <span>Sản phẩm</span>
                    <span class="text-center">Số lượng</span>
                    <span class="text-right">Thành tiền</span>
                </div>
                <label class="flex items-center gap-2 border-b border-[#f0edf0] px-4 py-3 text-xs font-bold text-[#827e8b] sm:hidden">
                    <input type="checkbox" data-cart-select-all aria-label="Chọn tất cả sản phẩm" class="h-4 w-4 accent-[#d92768]">
                    Chọn tất cả
                </label>
                @foreach($items as $item)
                    @php $book = $item['book']; @endphp
                    <div class="grid grid-cols-[28px_minmax(0,1fr)] gap-3 border-b border-[#f0edf0] px-4 py-5 last:border-0 sm:grid-cols-[28px_minmax(0,1fr)_130px_120px] sm:items-center sm:gap-5 sm:px-6" data-cart-item data-slug="{{ $book['slug'] }}" data-price="{{ $book['price'] }}">
                        <label class="flex pt-12 sm:pt-0"><input type="checkbox" data-cart-select aria-label="Chọn {{ $book['title'] }}" class="h-4 w-4 accent-[#d92768]"></label>
                        <div class="flex min-w-0 items-start gap-3.5 sm:gap-4"><a href="{{ route('books.show', $book['slug']) }}" class="flex h-28 w-[78px] shrink-0 items-center justify-center rounded-md bg-[#faf8fa] p-2 sm:h-32 sm:w-[90px]"><img class="h-full w-full object-contain drop-shadow-md" alt="{{ $book['title'] }}" src="{{ '/images/books/' . $book['cover'] }}"></a><div class="min-w-0"><a href="{{ route('books.show', $book['slug']) }}" class="line-clamp-2 text-sm font-bold leading-6 hover:text-[#d92768]">{{ $book['title'] }}</a><p class="mt-1 text-xs text-[#93909d]">{{ $book['author'] }}</p><p class="mt-3 font-extrabold text-[#e23560]">{{ number_format($book['price'],0,',','.') }}đ</p><form action="{{ route('cart.remove', $book['slug']) }}" method="POST" class="mt-2">@csrf @method('DELETE')<button class="flex items-center gap-1 text-xs text-[#99949f] hover:text-[#d92768]"><x-icon name="trash" class="h-4 w-4" /> Xóa</button></form></div></div>
                        <form action="{{ route('cart.update', $book['slug']) }}" method="POST" class="col-start-2 flex items-center gap-2 sm:col-start-auto sm:justify-center">@csrf @method('PATCH')<input type="number" min="1" max="20" name="quantity" value="{{ $item['quantity'] }}" data-cart-quantity aria-label="Số lượng {{ $book['title'] }}" class="w-16 rounded-md border border-[#eae6ec] px-2 py-2 text-center text-sm outline-none focus:border-[#e43b79]"><button type="submit" class="rounded-md bg-[#fff0f5] px-2.5 py-2 text-xs font-bold text-[#d92768] hover:bg-[#ffe0eb]">Lưu</button></form>
                        <div class="col-start-2 text-left text-sm font-extrabold text-[#34313e] sm:col-start-auto sm:text-right" data-cart-line>{{ number_format($item['lineTotal'],0,',','.') }}đ</div>
                    </div>
                @endforeach
            </div>
            <aside class="rounded-xl bg-white p-5 sm:p-6"><h2 class="text-lg font-extrabold">Thông tin đơn hàng</h2><div class="mt-5 space-y-4 text-sm"><div class="flex justify-between gap-3"><span class="text-[#84808c]">Tạm tính</span><strong data-cart-subtotal>0đ</strong></div><div class="flex justify-between gap-3"><span class="text-[#84808c]">Phí giao hàng (minh họa)</span><strong data-cart-shipping>0đ</strong></div></div><div class="my-5 border-t border-[#ece9ee]"></div><div class="flex items-start justify-between gap-3"><span class="text-sm font-bold">Tổng cộng</span><div class="text-right"><p class="text-[24px] font-extrabold leading-none text-[#e23560]" data-cart-total>0đ</p><p class="mt-2 text-[11px] text-[#99949f]">Chưa có thanh toán thực tế</p></div></div>
                <div class="mt-6 rounded-lg bg-[#fff6f9] px-3.5 py-3 text-xs leading-5 text-[#9d536f]" data-cart-free-shipping>Chọn sản phẩm để tính tổng đơn hàng.</div>
                <form action="{{ route('checkout.start') }}" method="POST" data-cart-checkout-form>
                    @csrf
                    <div data-cart-selected-inputs></div>
                    <button type="submit" disabled data-cart-checkout class="mt-5 w-full cursor-not-allowed rounded-lg bg-[#e43b79] px-4 py-3.5 text-sm font-bold text-white opacity-60" title="Vui lòng chọn ít nhất một sản phẩm">Thanh toán</button>
                </form>
                <a href="{{ route('home') }}" class="mt-4 flex items-center justify-center gap-2 text-sm font-semibold text-[#d92768] hover:underline"><x-icon name="chevron-left" class="h-4 w-4" /> Tiếp tục mua sắm</a>
            </aside>
        </div>
    @endif
    @if($errors->any())<div class="mt-4 rounded-lg bg-red-50 px-4 py-3 text-sm text-red-700">{{ $errors->first() }}</div>@endif
</section>
@endsection
