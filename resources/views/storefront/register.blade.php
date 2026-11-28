@extends('layouts.bookverse')
@section('title', 'Đăng ký - BookVerse')
@section('content')
<section class="container-site py-8 sm:py-14">
    <div class="mx-auto grid max-w-[980px] overflow-hidden rounded-2xl border border-[#f0e7eb] bg-white shadow-sm md:grid-cols-[.93fr_1.07fr]">
        <div class="auth-promo relative hidden min-h-[585px] flex-col justify-between overflow-hidden bg-[#f8e8f8] p-10 md:flex">
            <div class="relative z-10"><span class="inline-flex rounded-full bg-white/80 px-3 py-1 text-xs font-bold text-[#b34f9d]">THAM GIA BOOKVERSE</span><h1 class="mt-6 max-w-[320px] text-[34px] font-extrabold leading-[1.2] tracking-tight text-[#60355b]">Bắt đầu hành trình đọc sách.</h1><p class="mt-4 max-w-[310px] text-sm leading-7 text-[#815d7d]">Thêm một cuốn vào kệ sách, thêm một điều thú vị cho mỗi ngày.</p></div>
            <div class="pointer-events-none relative flex justify-center"><div class="absolute -bottom-20 h-72 w-72 rounded-full bg-white/40"></div><img src="/images/books/hoang-tu-be.svg" alt="" class="relative z-10 h-52 w-auto -rotate-12 drop-shadow-2xl"><img src="/images/books/thoi-quen-nguyen-tu.svg" alt="" class="relative z-10 -ml-8 mt-8 h-48 w-auto rotate-12 drop-shadow-2xl"></div>
        </div>
        <div class="px-6 py-9 sm:px-11 sm:py-12">
            <div class="mb-6"><h2 class="text-[27px] font-extrabold tracking-tight">Tạo tài khoản</h2><p class="mt-2 text-sm text-[#888491]">Chào mừng bạn đến với BookVerse!</p></div>
            @if (session('registered'))
                <div class="space-y-4">
                    <p class="rounded-lg bg-green-50 px-3 py-3 text-sm text-green-800" role="status">Tạo tài khoản thành công. Nhấn xác nhận để chuyển đến trang đăng nhập.</p>
                    <a href="{{ route('login') }}" class="button-pink block w-full py-3.5 text-center">Xác nhận</a>
                </div>
            @else
                <form action="{{ route('register.submit') }}" method="POST" class="space-y-3.5">
                    @csrf
                    @if ($errors->any())
                        <div class="rounded-lg bg-red-50 px-3 py-3 text-sm text-red-700" role="alert">
                            <ul class="list-inside list-disc">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div><label for="name" class="mb-1.5 block text-sm font-semibold">Họ và tên</label><div class="auth-input-wrap"><x-icon name="user" class="h-5 w-5 shrink-0 text-[#a5a0ac]" /><input id="name" name="name" type="text" autocomplete="name" value="{{ old('name') }}" placeholder="Nguyễn Văn A" minlength="2" maxlength="100" required class="auth-input"></div></div>
                    <div><label for="register-email" class="mb-1.5 block text-sm font-semibold">Email</label><div class="auth-input-wrap"><x-icon name="mail" class="h-5 w-5 shrink-0 text-[#a5a0ac]" /><input id="register-email" name="email" type="email" autocomplete="email" value="{{ old('email') }}" maxlength="100" placeholder="example@gmail.com" required class="auth-input"></div></div>
                    <div><label for="phone-number" class="mb-1.5 block text-sm font-semibold">Số điện thoại</label><div class="auth-input-wrap"><input id="phone-number" name="phone_number" type="tel" autocomplete="tel" value="{{ old('phone_number') }}" maxlength="20" placeholder="0912345678" required class="auth-input"></div></div>
                    <div><label for="register-password" class="mb-1.5 block text-sm font-semibold">Mật khẩu</label><div class="auth-input-wrap"><x-icon name="lock" class="h-5 w-5 shrink-0 text-[#a5a0ac]" /><input id="register-password" name="password" type="password" autocomplete="new-password" minlength="6" placeholder="Ít nhất 6 ký tự" required class="auth-input"><button type="button" data-toggle-password aria-label="Hiện hoặc ẩn mật khẩu"><x-icon name="eye" class="h-5 w-5 text-[#a5a0ac]" /></button></div></div>
                    <div><label for="confirm-password" class="mb-1.5 block text-sm font-semibold">Nhập lại mật khẩu</label><div class="auth-input-wrap"><x-icon name="lock" class="h-5 w-5 shrink-0 text-[#a5a0ac]" /><input id="confirm-password" name="password_confirmation" type="password" autocomplete="new-password" minlength="6" placeholder="Nhập lại mật khẩu" required class="auth-input"></div></div>
                    <button type="submit" class="button-pink mt-2 w-full py-3.5">Đăng ký</button>
                </form>
                <div class="mt-5 text-center text-sm text-[#817d89]">Đã có tài khoản? <a href="{{ route('login') }}" class="font-bold text-[#d92768] hover:underline">Đăng nhập</a></div>
            @endif
            <div class="mt-7 border-t border-[#f2eef1] pt-5 text-center"><a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-xs font-semibold text-[#8d8894] hover:text-[#d92768]"><x-icon name="chevron-left" class="h-4 w-4" /> Quay về trang chủ</a></div>
        </div>
    </div>
</section>
@endsection
