<?php

use App\Models\User;

it('provides logout actions on the admin and staff dashboards', function (int $role, string $dashboardRoute) {
    $user = new User([
        'role' => $role,
        'account_status' => 1,
    ]);

    $response = $this->actingAs($user)->get(route($dashboardRoute));

    $response->assertOk()
        ->assertSee(route('logout'), false)
        ->assertSee('method="POST"', false)
        ->assertSee('Đăng xuất');
})->with([
    'admin' => [3, 'admin.dashboard'],
    'staff' => [2, 'staff.dashboard'],
]);

it('logs out admin and staff users and redirects them to the login page', function (int $role) {
    $user = new User([
        'role' => $role,
        'account_status' => 1,
    ]);

    $response = $this->actingAs($user)->post(route('logout'));

    $response->assertRedirect(route('login'));
    $this->assertGuest();
})->with([
    'admin' => [3],
    'staff' => [2],
]);
