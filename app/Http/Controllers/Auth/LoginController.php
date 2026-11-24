<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Kiểm tra dữ liệu đầu vào
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Chỉ cho phép tài khoản đang hoạt động đăng nhập
        $credentials['account_status'] = 1;

        // Xác thực bằng dữ liệu trong bảng users
        if (!Auth::attempt($credentials)) {
            return back()
                ->withErrors([
                    'email' => 'Email hoặc mật khẩu không đúng, hoặc tài khoản đã bị khóa.',
                ])
                ->onlyInput('email');
        }

        // Tạo lại session để bảo mật
        $request->session()->regenerate();

        // Lấy thông tin người dùng đang đăng nhập
        $user = Auth::user();

        // Điều hướng theo quyền
        return match ((int) $user->role) {
            1 => redirect()->route('home'),
            2 => redirect()->route('staff.dashboard'),
            3 => redirect()->route('admin.dashboard'),
            default => $this->invalidRole($request),
        };
    }

    // Xử lý tài khoản có role không hợp lệ
    private function invalidRole(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')
            ->withErrors([
                'email' => 'Tài khoản chưa được phân quyền hợp lệ.',
            ]);
    }

    // Đăng xuất
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
