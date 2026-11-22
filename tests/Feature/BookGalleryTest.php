<?php

it('renders a static cover when a book has only one image', function () {
    $response = $this->get(route('books.show', 'thoi-quen-nguyen-tu'));

    $response->assertOk()
        ->assertSee('/images/books/thoi-quen-nguyen-tu.svg')
        ->assertDontSee('data-autoplay-interval', false)
        ->assertDontSee('data-gallery-image', false)
        ->assertDontSee('data-gallery-next', false)
        ->assertDontSee('data-gallery-thumbnail', false);
});

it('shows the configured book images in an autoplaying slider', function () {
    $books = config('bookverse.books');
    $galleryImages = [
        'nha-gia-kim-oasis.svg',
        'nha-gia-kim-journey.svg',
        'nha-gia-kim-gallery-03.svg',
        'nha-gia-kim-gallery-04.svg',
        'nha-gia-kim-gallery-05.svg',
        'nha-gia-kim-gallery-06.svg',
        'nha-gia-kim-gallery-07.svg',
        'nha-gia-kim-gallery-08.svg',
        'nha-gia-kim-gallery-09.svg',
        'nha-gia-kim-gallery-10.svg',
    ];
    $books[0]['images'] = $galleryImages;
    config(['bookverse.books' => $books]);

    $response = $this->get(route('books.show', 'nha-gia-kim'));

    $response->assertOk()
        ->assertSee('data-autoplay-interval="3000"', false)
        ->assertSee('data-gallery-prev', false)
        ->assertSee('data-gallery-next', false)
        ->assertSee('aria-label="Xem ảnh 11"', false);

    foreach (['nha-gia-kim.svg', ...$galleryImages] as $image) {
        $response->assertSee('/images/books/'.$image);
    }

    expect(substr_count($response->getContent(), 'data-gallery-image'))->toBe(11);
});
