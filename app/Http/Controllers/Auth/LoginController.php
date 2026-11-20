<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        
        abort_unless(app()->environment('local'), 403);

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $accounts = [
            'customer@bookverse.test' => [
                'password' => 'Khach@12345',
                'name' => 'Khách hàng',
                'role' => 'customer',
            ],

            'staff@bookverse.test' => [
                'password' => 'Staff@12345',
                'name' => 'Nhân viên',
                'role' => 'staff',
            ],

            'admin@bookverse.test' => [
                'password' => 'Admin@12345',
                'name' => 'Quản trị viên',
                'role' => 'admin',
            ],
        ];

        $email = strtolower(trim($request->email));
        $password = $request->password;

        $account = $accounts[$email] ?? null;

        // Kiểm tra tài khoản
        if (!$account ||
            !hash_equals($account['password'], $password)) {
            return back()
                ->withErrors([
                    'email' => 'Email hoặc mật khẩu không đúng.'
                ])
                ->onlyInput('email');
        }

        // Lưu thông tin đăng nhập vào Session
        $request->session()->regenerate();

        $request->session()->put('demo_user', [
            'name' => $account['name'],
            'email' => $email,
            'role' => $account['role'],
        ]);

        // Điều hướng theo quyền
        return match ($account['role']) {
            'admin' => redirect()->route('admin.dashboard'),
            'staff' => redirect()->route('staff.dashboard'),
            'customer' => redirect()->route('home'),
        };
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
