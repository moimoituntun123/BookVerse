<?php

it('renders a static cover when a book has only one image', function () {
    $response = $this->get(route('books.show', 'nha-gia-kim'));

    $response->assertOk()
        ->assertSee('/images/books/nha-gia-kim.svg')
        ->assertDontSee('data-autoplay-interval', false)
        ->assertDontSee('data-gallery-image', false)
        ->assertDontSee('data-gallery-next', false)
        ->assertDontSee('data-gallery-thumbnail', false);
});

it('combines the cover and every gallery image into an autoplaying slider', function () {
    $books = config('bookverse.books');
    $books[0]['images'] = ['nha-gia-kim.svg', 'doraemon-tap-1.svg', 'conan-tap-1.svg'];
    config(['bookverse.books' => $books]);

    $response = $this->get(route('books.show', 'nha-gia-kim'));

    $response->assertOk()
        ->assertSee('data-autoplay-interval="3000"', false)
        ->assertSee('data-gallery-prev', false)
        ->assertSee('data-gallery-next', false)
        ->assertSee('aria-label="Xem ảnh 3"', false)
        ->assertSee('/images/books/nha-gia-kim.svg')
        ->assertSee('/images/books/doraemon-tap-1.svg')
        ->assertSee('/images/books/conan-tap-1.svg');

    expect(substr_count($response->getContent(), 'data-gallery-image'))->toBe(3);
});
