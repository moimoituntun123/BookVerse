<?php

it('renders the seven requested categories with their matching images in order', function () {
    $response = $this->get(route('home'));

    $response->assertOk()
        ->assertSeeInOrder([
            'sach-giao-khoa.png',
            'Sách giáo khoa',
            'sach-lich-su.jpg',
            'Sách lịch sử',
            'sach-kinh-di.jpg',
            'Sách kinh dị',
            'sach-kinh-te.png',
            'Sách kinh tế',
            'sach-tam-ly-ki-nang.jpg',
            'Tâm lý kĩ năng',
            'sach-ngoai-ngu.jpg',
            'Góc ngoại ngữ',
            'sach-thieu-nhi.jpg',
            'Sách thiếu nhi',
        ]);

});

it('shows real book covers in the banners and links to the foreign language category', function () {
    $response = $this->get(route('home'));

    $response->assertOk()
        ->assertSee('GÓC NGOẠI NGỮ')
        ->assertSee('Sách học tiếng Anh')
        ->assertSee(route('home', ['category' => 'ngoai-ngu']), false);

    $content = $response->getContent();

    foreach ([
        'hero-psychology.jpg',
        'banner-economics.png',
        'banner-foreign-language.jpg',
    ] as $image) {
        expect(substr_count($content, 'src="'.asset('images/banners/'.$image).'"'))->toBe(1);
    }

    $bannerContent = strstr($content, '<section id="danh-muc"', true);

    expect($bannerContent)->not->toContain('/images/books/conan-tap-1.svg');
});

it('omits the lower literature and skills banners from the home page', function () {
    $response = $this->get(route('home'));

    $response->assertOk()
        ->assertDontSee('Góc văn học')
        ->assertDontSee('Tủ sách kỹ năng');
});

it('filters books using the updated history and psychology categories', function () {
    $historyResponse = $this->get(route('home', ['category' => 'sach-lich-su']));

    $historyResponse->assertOk()
        ->assertSee('Sapiens: Lược Sử Loài Người')
        ->assertDontSee('Thói Quen Nguyên Tử');

    $psychologyResponse = $this->get(route('home', ['category' => 'tam-ly-ki-nang']));

    $psychologyResponse->assertOk()
        ->assertSee('Thói Quen Nguyên Tử')
        ->assertSee('Tư Duy Nhanh Và Chậm')
        ->assertDontSee('Sapiens: Lược Sử Loài Người');
});
