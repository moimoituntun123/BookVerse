@extends('layouts.bookverse')
@section('title', 'Thanh toán - BookVerse')
@section('content')
<section class="container-site py-7 sm:py-10">
    <nav class="mb-5 flex items-center gap-1.5 text-xs text-[#9a96a1]">
        <a href="{{ route('home') }}" class="hover:text-[#d92768]">Trang chủ</a>
        <x-icon name="chevron-right" class="h-3.5 w-3.5" />
        <a href="{{ route('cart') }}" class="hover:text-[#d92768]">Giỏ hàng</a>
        <x-icon name="chevron-right" class="h-3.5 w-3.5" />
        <span class="text-[#44404d]">Thanh toán</span>
    </nav>

    <h1 class="mb-6 text-[25px] font-extrabold tracking-tight sm:text-[29px]">Thanh toán đơn hàng</h1>

    <div class="grid items-start gap-5 lg:grid-cols-[minmax(0,1fr)_380px]">
        <div class="space-y-5">
            <div class="rounded-xl bg-white p-5 sm:p-6">
                <h2 class="text-lg font-extrabold">Sản phẩm đã chọn</h2>
                <div class="mt-4 divide-y divide-[#f0edf0]">
                    @foreach($items as $item)
                        @php $book = $item['book']; @endphp
                        <div class="flex gap-4 py-4 first:pt-0 last:pb-0">
                            <img class="h-24 w-16 rounded-md bg-[#faf8fa] object-contain p-1.5" src="{{ '/images/books/' . $book['cover'] }}" alt="{{ $book['title'] }}">
                            <div class="min-w-0 flex-1">
                                <p class="line-clamp-2 text-sm font-bold">{{ $book['title'] }}</p>
                                <p class="mt-1 text-xs text-[#93909d]">{{ $book['author'] }}</p>
                                <p class="mt-2 text-xs text-[#777482]">Số lượng: {{ $item['quantity'] }}</p>
                            </div>
                            <strong class="shrink-0 text-sm text-[#e23560]">{{ number_format($item['lineTotal'], 0, ',', '.') }}đ</strong>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="rounded-xl bg-white p-5 sm:p-6">
                <h2 class="text-lg font-extrabold">Thông tin nhận hàng</h2>
                <form class="mt-4 grid gap-4 sm:grid-cols-2">
                    <div>
                        <label for="checkout-name" class="mb-1.5 block text-sm font-semibold">Họ và tên</label>
                        <input id="checkout-name" type="text" value="{{ session('demo_user.name') }}" class="w-full rounded-lg border border-[#e7e3e9] px-3 py-3 text-sm outline-none focus:border-[#e43b79]" placeholder="Nhập họ và tên">
                    </div>
                    <div>
                        <label for="checkout-phone" class="mb-1.5 block text-sm font-semibold">Số điện thoại</label>
                        <input id="checkout-phone" type="tel" class="w-full rounded-lg border border-[#e7e3e9] px-3 py-3 text-sm outline-none focus:border-[#e43b79]" placeholder="Nhập số điện thoại">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="checkout-address" class="mb-1.5 block text-sm font-semibold">Địa chỉ nhận hàng</label>
                        <textarea id="checkout-address" rows="3" class="w-full rounded-lg border border-[#e7e3e9] px-3 py-3 text-sm outline-none focus:border-[#e43b79]" placeholder="Nhập địa chỉ nhận hàng"></textarea>
                    </div>
                </form>
            </div>
        </div>

        <aside class="rounded-xl bg-white p-5 sm:p-6">
            <h2 class="text-lg font-extrabold">Mã giảm giá</h2>
            <form action="{{ route('checkout.coupon') }}" method="POST" class="mt-3 flex gap-2">
                @csrf
                <input type="text" name="coupon" value="{{ $coupon }}" placeholder="Nhập mã" class="min-w-0 flex-1 rounded-lg border border-[#e7e3e9] px-3 py-2.5 text-sm uppercase outline-none focus:border-[#e43b79]">
                <button type="submit" class="rounded-lg bg-[#fff0f5] px-4 text-sm font-bold text-[#d92768] hover:bg-[#ffe0eb]">Áp dụng</button>
            </form>
            @if($errors->has('coupon'))
                <p class="mt-2 text-xs text-red-600">{{ $errors->first('coupon') }}</p>
            @else
                <p class="mt-2 text-xs text-[#99949f]">Thử mã demo: <strong>BOOK10</strong> hoặc <strong>FREESHIP</strong></p>
            @endif

            <div class="mt-5 space-y-4 border-t border-[#ece9ee] pt-5 text-sm">
                <div class="flex justify-between gap-3"><span class="text-[#84808c]">Tạm tính</span><strong>{{ number_format($subtotal, 0, ',', '.') }}đ</strong></div>
                @if($discount > 0)
                    <div class="flex justify-between gap-3 text-green-700"><span>Giảm giá ({{ $coupon }})</span><strong>-{{ number_format($discount, 0, ',', '.') }}đ</strong></div>
                @endif
                @if($coupon === 'FREESHIP')
                    <div class="flex justify-between gap-3 text-green-700"><span>Mã FREESHIP</span><strong>Miễn phí giao hàng</strong></div>
                @endif
                <div class="flex justify-between gap-3"><span class="text-[#84808c]">Phí giao hàng</span><strong class="{{ $shipping === 0 ? 'text-green-600' : '' }}">{{ $shipping === 0 ? 'Miễn phí' : number_format($shipping, 0, ',', '.') . 'đ' }}</strong></div>
            </div>

            <div class="my-5 border-t border-[#ece9ee]"></div>
            <div class="flex items-start justify-between gap-3">
                <span class="text-sm font-bold">Tổng thanh toán</span>
                <strong class="text-[24px] leading-none text-[#e23560]">{{ number_format($total, 0, ',', '.') }}đ</strong>
            </div>

            <button type="button" disabled class="mt-6 w-full cursor-not-allowed rounded-lg bg-[#e43b79] px-4 py-3.5 text-sm font-bold text-white opacity-60" title="Chức năng thanh toán thực tế chưa được triển khai">Xác nhận thanh toán</button>
            <a href="{{ route('cart') }}" class="mt-4 flex items-center justify-center gap-2 text-sm font-semibold text-[#d92768] hover:underline">
                <x-icon name="chevron-left" class="h-4 w-4" /> Quay lại giỏ hàng
            </a>
        </aside>
    </div>
</section>
@endsection
