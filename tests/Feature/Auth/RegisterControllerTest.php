<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

uses(RefreshDatabase::class);

it('shows the fields required to register', function () {
    $response = $this->get(route('register'));

    $response->assertOk()
        ->assertSee('name="name"', false)
        ->assertSee('name="email"', false)
        ->assertSee('name="phone_number"', false)
        ->assertSee('name="password"', false);
});

it('creates a customer account with a hashed password', function () {
    $response = $this->post(route('register.submit'), [
        'name' => 'Nguyễn Văn A',
        'email' => 'new-customer@example.com',
        'phone_number' => '0912345678',
        'password' => 'Password123',
        'password_confirmation' => 'Password123',
        'role' => 3,
    ]);

    $response->assertRedirect(route('register'))
        ->assertSessionHas('registered', true);

    $user = User::where('email', 'new-customer@example.com')->firstOrFail();

    $this->assertModelExists($user);
    expect($user->name)->toBe('Nguyễn Văn A')
        ->and($user->phone_number)->toBe('0912345678')
        ->and($user->role)->toBe(1)
        ->and(Hash::check('Password123', $user->password))->toBeTrue();
});

it('shows a success message with confirmation that links to login', function () {
    $response = $this->withSession([
        'registered' => true,
    ])->get(route('register'));

    $response->assertOk()
        ->assertSee('Tạo tài khoản thành công. Nhấn xác nhận để chuyển đến trang đăng nhập.')
        ->assertSee('href="'.route('login').'"', false)
        ->assertSee('>Xác nhận</a>', false)
        ->assertDontSee('name="email"', false);
});

it('requires all registration fields', function () {
    $response = $this->from(route('register'))->post(route('register.submit'), []);

    $response->assertRedirect(route('register'))
        ->assertSessionHasErrors(['name', 'email', 'phone_number', 'password']);

    $this->assertDatabaseCount('users', 0);
});

it('does not create an account when password confirmation does not match', function () {
    $response = $this->from(route('register'))->post(route('register.submit'), [
        'name' => 'Nguyễn Văn C',
        'email' => 'mismatched-password@example.com',
        'phone_number' => '0901234567',
        'password' => 'Password123',
        'password_confirmation' => 'DifferentPassword123',
    ]);

    $response->assertRedirect(route('register'))
        ->assertSessionHasErrors('password');

    $this->assertDatabaseCount('users', 0);
});

it('rejects an email address that is already registered', function () {
    User::factory()->create([
        'email' => 'existing@example.com',
    ]);

    $response = $this->post(route('register.submit'), [
        'name' => 'Nguyễn Văn B',
        'email' => 'existing@example.com',
        'phone_number' => '0987654321',
        'password' => 'Password123',
        'password_confirmation' => 'Password123',
    ]);

    $response->assertSessionHasErrors('email');
    $this->assertDatabaseCount('users', 1);
});
