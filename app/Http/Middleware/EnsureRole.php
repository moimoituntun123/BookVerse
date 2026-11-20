<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureRole
{
    public function handle(
        Request $request,
        Closure $next,
        string $role
    ): Response {

        // Lấy tài khoản từ Session
        $user = $request->session()->get('demo_user');

        // Chưa đăng nhập
        if (!$user) {
            return redirect()->route('login');
        }

        // Không đúng quyền
        if (($user['role'] ?? null) !== $role) {
            abort(403, 'Bạn không có quyền truy cập.');
        }

        return $next($request);
    }
}
