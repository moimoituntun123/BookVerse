@extends('layouts.bookverse')
@section('title', 'Đăng nhập - BookVerse')
@section('content')
<section class="container-site py-8 sm:py-14">
    <div class="mx-auto grid max-w-[980px] overflow-hidden rounded-2xl border border-[#f0e7eb] bg-white shadow-sm md:grid-cols-[.93fr_1.07fr]">
        <div class="auth-promo relative hidden min-h-[525px] flex-col justify-between overflow-hidden bg-[#ffe5ed] p-10 md:flex">
            <div class="relative z-10"><span class="inline-flex rounded-full bg-white/80 px-3 py-1 text-xs font-bold text-[#cf2c6a]">CHÀO MỪNG TRỞ LẠI</span><h1 class="mt-6 max-w-[320px] text-[34px] font-extrabold leading-[1.2] tracking-tight text-[#602d4a]">Một thế giới sách đang chờ bạn!</h1><p class="mt-4 max-w-[310px] text-sm leading-7 text-[#875b71]">Đăng nhập để tiếp tục khám phá những cuốn sách yêu thích tại BookVerse.</p></div>
            <div class="pointer-events-none relative flex justify-center"><div class="absolute -bottom-20 h-72 w-72 rounded-full bg-white/30"></div><img src="/images/books/cay-cam-ngot-cua-toi.svg" alt="" class="relative z-10 h-52 w-auto -rotate-12 drop-shadow-2xl"><img src="/images/books/nha-gia-kim.svg" alt="" class="relative z-10 -ml-8 mt-8 h-48 w-auto rotate-12 drop-shadow-2xl"></div>
        </div>
        <div class="px-6 py-9 sm:px-11 sm:py-12">
            <div class="mb-7"><h2 class="text-[27px] font-extrabold tracking-tight">Đăng nhập</h2><p class="mt-2 text-sm text-[#888491]">Rất vui được gặp lại bạn ở BookVerse!</p></div>
            <form action="{{ route('login.submit') }}" method="POST" class="space-y-4"> 
                <div><label for="login-email" class="mb-1.5 block text-sm font-semibold">Email</label><div class="auth-input-wrap"><x-icon name="mail" class="h-5 w-5 shrink-0 text-[#a5a0ac]" /><input id="login-email" name="email" type="email" autocomplete="email" placeholder="example@gmail.com" required class="auth-input"></div></div>
                <div><div class="mb-1.5 flex items-center justify-between"><label for="login-password" class="text-sm font-semibold">Mật khẩu</label></div><div class="auth-input-wrap"><x-icon name="lock" class="h-5 w-5 shrink-0 text-[#a5a0ac]" /><input id="login-password" name="password" type="password" autocomplete="current-password" minlength="6" placeholder="Nhập mật khẩu" required class="auth-input"><button type="button" data-toggle-password aria-label="Hiện hoặc ẩn mật khẩu" class="text-[#8e8995] hover:text-[#d92768]"><x-icon name="eye" class="h-5 w-5" /></button></div></div>
                <button type="submit" class="button-pink mt-2 w-full py-3.5">Đăng nhập</button>
                <p class="hidden rounded-lg bg-green-50 px-3 py-3 text-sm text-green-800" data-demo-message role="status"></p>
            </form>
            <div class="mt-6 text-center text-sm text-[#817d89]">Chưa có tài khoản? <a href="{{ route('register') }}" class="font-bold text-[#d92768] hover:underline">Đăng ký ngay</a></div>
            <div class="mt-8 border-t border-[#f2eef1] pt-5 text-center"><a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-xs font-semibold text-[#8d8894] hover:text-[#d92768]"><x-icon name="chevron-left" class="h-4 w-4" /> Quay về trang chủ</a></div>
        </div>
    </div>
</section>
@endsection
