<?php

use App\Http\Controllers\BookVerseController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\EnsureRole;
use Illuminate\Support\Facades\Route;

// TRANG KHÁCH HÀNG
Route::get('/', [BookVerseController::class, 'index'])
    ->name('home');

Route::get('/sach/{slug}', [BookVerseController::class, 'show'])
    ->name('books.show');

// GIỎ HÀNG
Route::get('/gio-hang', [BookVerseController::class, 'cart'])
    ->name('cart');

Route::post('/gio-hang/them/{slug}', [BookVerseController::class, 'addToCart'])
    ->name('cart.add');

Route::patch('/gio-hang/{slug}', [BookVerseController::class, 'updateCart'])
    ->name('cart.update');

Route::delete('/gio-hang/{slug}', [BookVerseController::class, 'removeFromCart'])
    ->name('cart.remove');

// ĐĂNG NHẬP
Route::get('/dang-nhap', [BookVerseController::class, 'login'])
    ->name('login');

Route::post('/dang-nhap', [LoginController::class, 'login'])
    ->name('login.submit');

// ĐĂNG KÝ DEMO
Route::get('/dang-ky', [BookVerseController::class, 'register'])
    ->name('register');

Route::post('/demo/dang-ky', [BookVerseController::class, 'demoAuth'])
    ->name('register.demo');

// ĐĂNG XUẤT
Route::post('/dang-xuat', [LoginController::class, 'logout'])
    ->name('logout');

// NHÂN VIÊN
Route::view('/nhan-vien', 'staff.dashboard')
    ->middleware(EnsureRole::class . ':staff')
    ->name('staff.dashboard');

// ADMIN
Route::view('/admin', 'admin.dashboard')
    ->middleware(EnsureRole::class . ':admin')
    ->name('admin.dashboard');
