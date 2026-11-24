<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureRole
{
    public function handle(
        Request $request,
        Closure $next,
        string $role
    ): Response {

        // Kiểm tra đăng nhập
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Lấy thông tin người dùng
        $user = Auth::user();

        // Ánh xạ role trong database
        $roles = [
            1 => 'customer',
            2 => 'staff',
            3 => 'admin',
        ];

        $userRole = $roles[(int) $user->role] ?? null;

        // Kiểm tra quyền truy cập
        if ($userRole !== $role) {
            abort(403, 'Bạn không có quyền truy cập.');
        }

        // Kiểm tra trạng thái tài khoản
        if ((int) $user->account_status !== 1) {
            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('login');
        }

        return $next($request);
    }
}
