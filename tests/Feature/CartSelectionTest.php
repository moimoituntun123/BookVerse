<?php

it('renders cart product selection controls', function () {
    $book = collect(config('bookverse.books'))->first();

    $response = $this->withSession([
        'bookverse_cart' => [$book['slug'] => 2],
    ])->get(route('cart'));

    $response->assertOk()
        ->assertSee('data-cart-select-all', false)
        ->assertSee('data-cart-select', false)
        ->assertSee('data-cart-subtotal', false)
        ->assertSee('data-cart-shipping', false)
        ->assertSee('data-cart-total', false)
        ->assertSee('Chọn sản phẩm để tính tổng đơn hàng.', false);
});

it('allows a logged in customer to start checkout with selected products', function () {
    $book = collect(config('bookverse.books'))->first();

    $response = $this->withSession([
        'demo_user' => [
            'name' => 'Khách hàng',
            'email' => 'customer@bookverse.test',
            'role' => 'customer',
        ],
        'bookverse_cart' => [$book['slug'] => 2],
    ])->post(route('checkout.start'), [
        'selected' => [$book['slug'] => 2],
    ]);

    $response->assertRedirect(route('checkout'));
});

it('redirects unauthenticated customers to login before checkout', function () {
    $book = collect(config('bookverse.books'))->first();

    $response = $this->withSession([
        'bookverse_cart' => [$book['slug'] => 1],
    ])->post(route('checkout.start'), [
        'selected' => [$book['slug'] => 1],
    ]);

    $response->assertRedirect(route('login'));
});

it('applies a valid coupon on the checkout page', function () {
    $book = collect(config('bookverse.books'))->first();

    $response = $this->withSession([
        'demo_user' => [
            'name' => 'Khách hàng',
            'email' => 'customer@bookverse.test',
            'role' => 'customer',
        ],
        'bookverse_checkout' => [$book['slug'] => 1],
    ])->post(route('checkout.coupon'), [
        'coupon' => 'BOOK10',
    ]);

    $response->assertRedirect()
        ->assertSessionHas('bookverse_coupon', 'BOOK10');
});

it('renders the selected items and discounted total on checkout', function () {
    $book = collect(config('bookverse.books'))->first();

    $response = $this->withSession([
        'demo_user' => [
            'name' => 'Khách hàng',
            'email' => 'customer@bookverse.test',
            'role' => 'customer',
        ],
        'bookverse_checkout' => [$book['slug'] => 1],
        'bookverse_coupon' => 'BOOK10',
    ])->get(route('checkout'));

    $response->assertOk()
        ->assertSee($book['title'], false)
        ->assertSee('-9.900đ', false)
        ->assertSee('119.100đ', false);
});
