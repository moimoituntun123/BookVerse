<?php

// Dữ liệu cố định phục vụ giao diện. Không sử dụng cơ sở dữ liệu / Eloquent.
return [
    'categories' => [
        ['slug' => 'van-hoc',   'name' => 'Văn học',         'icon' => 'book',     'color' => '#ffe3ed'],
        ['slug' => 'ky-nang',   'name' => 'Tâm lý - Kỹ năng', 'icon' => 'sparkles', 'color' => '#f8e5fc'],
        ['slug' => 'kinh-te',   'name' => 'Kinh tế',         'icon' => 'chart',    'color' => '#fff0d9'],
        ['slug' => 'manga',     'name' => 'Manga - Comic',    'icon' => 'smile',    'color' => '#dceeff'],
        ['slug' => 'thieu-nhi', 'name' => 'Thiếu nhi',       'icon' => 'sun',      'color' => '#e4f4dd'],
        ['slug' => 'khoa-hoc',  'name' => 'Khoa học',        'icon' => 'bulb',     'color' => '#e3eaff'],
    ],
    'books' => [
        ['slug'=>'nha-gia-kim', 'title'=>'Nhà Giả Kim', 'author'=>'Paulo Coelho', 'category'=>'van-hoc', 'price'=>99000, 'original_price'=>129000, 'cover'=>'nha-gia-kim.svg', 'tag'=>'Bán chạy', 'description'=>'Một chuyến phiêu lưu về ước mơ, lòng can đảm và hành trình lắng nghe tiếng gọi của chính mình.'],
        ['slug'=>'thoi-quen-nguyen-tu', 'title'=>'Thói Quen Nguyên Tử', 'author'=>'James Clear', 'category'=>'ky-nang', 'price'=>179000, 'original_price'=>230000, 'cover'=>'thoi-quen-nguyen-tu.svg', 'tag'=>'Bán chạy', 'description'=>'Những thay đổi nhỏ có thể tạo ra kết quả lớn khi ta duy trì thói quen tốt mỗi ngày.'],
        ['slug'=>'cay-cam-ngot-cua-toi', 'title'=>'Cây Cam Ngọt Của Tôi', 'author'=>'José Mauro de Vasconcelos', 'category'=>'van-hoc', 'price'=>89000, 'original_price'=>115000, 'cover'=>'cay-cam-ngot-cua-toi.svg', 'tag'=>'Yêu thích', 'description'=>'Câu chuyện tuổi thơ trong trẻo mà day dứt, mang theo tình yêu thương và sự trưởng thành.'],
        ['slug'=>'dac-nhan-tam', 'title'=>'Đắc Nhân Tâm', 'author'=>'Dale Carnegie', 'category'=>'ky-nang', 'price'=>74000, 'original_price'=>108000, 'cover'=>'dac-nhan-tam.svg', 'tag'=>'Bán chạy', 'description'=>'Những nguyên tắc giao tiếp và thấu hiểu con người được trình bày bằng nhiều tình huống gần gũi.'],
        ['slug'=>'sapiens', 'title'=>'Sapiens: Lược Sử Loài Người', 'author'=>'Yuval Noah Harari', 'category'=>'khoa-hoc', 'price'=>199000, 'original_price'=>299000, 'cover'=>'sapiens.svg', 'tag'=>'Nổi bật', 'description'=>'Một góc nhìn rộng về lịch sử loài người, từ những cộng đồng đầu tiên đến xã hội hiện đại.'],
        ['slug'=>'tam-ly-hoc-ve-tien', 'title'=>'Tâm Lý Học Về Tiền', 'author'=>'Morgan Housel', 'category'=>'kinh-te', 'price'=>139000, 'original_price'=>189000, 'cover'=>'tam-ly-hoc-ve-tien.svg', 'tag'=>'Bán chạy', 'description'=>'Những câu chuyện giúp hiểu rõ hơn về cách con người suy nghĩ và hành xử với tiền bạc.'],
        ['slug'=>'muon-kiep-nhan-sinh', 'title'=>'Muôn Kiếp Nhân Sinh', 'author'=>'Nguyên Phong', 'category'=>'van-hoc', 'price'=>165000, 'original_price'=>220000, 'cover'=>'muon-kiep-nhan-sinh.svg', 'tag'=>'Nổi bật', 'description'=>'Những suy ngẫm về cuộc sống và những mối liên hệ giữa con người với thế giới xung quanh.'],
        ['slug'=>'toi-thay-hoa-vang', 'title'=>'Tôi Thấy Hoa Vàng Trên Cỏ Xanh', 'author'=>'Nguyễn Nhật Ánh', 'category'=>'van-hoc', 'price'=>96000, 'original_price'=>125000, 'cover'=>'toi-thay-hoa-vang.svg', 'tag'=>'Yêu thích', 'description'=>'Một miền ký ức tuổi thơ bình dị, với những rung động đầu đời và tình cảm gia đình.'],
        ['slug'=>'conan-tap-1', 'title'=>'Thám Tử Lừng Danh Conan – Tập 1', 'author'=>'Gosho Aoyama', 'category'=>'manga', 'price'=>25000, 'original_price'=>30000, 'cover'=>'conan-tap-1.svg', 'tag'=>'Manga', 'description'=>'Khởi đầu những vụ án hấp dẫn của cậu thám tử tài năng trong bộ truyện tranh nổi tiếng.'],
        ['slug'=>'doraemon-tap-1', 'title'=>'Doraemon – Tập 1', 'author'=>'Fujiko F. Fujio', 'category'=>'manga', 'price'=>24000, 'original_price'=>30000, 'cover'=>'doraemon-tap-1.svg', 'tag'=>'Manga', 'description'=>'Những cuộc phiêu lưu vui nhộn của Doraemon, Nobita và các bạn.'],
        ['slug'=>'hoang-tu-be', 'title'=>'Hoàng Tử Bé', 'author'=>'Antoine de Saint-Exupéry', 'category'=>'thieu-nhi', 'price'=>62000, 'original_price'=>85000, 'cover'=>'hoang-tu-be.svg', 'tag'=>'Kinh điển', 'description'=>'Một câu chuyện giàu chất thơ về tình bạn, lòng yêu thương và cách nhìn thế giới bằng trái tim.'],
        ['slug'=>'chuyen-con-meo', 'title'=>'Chuyện Con Mèo Dạy Hải Âu Bay', 'author'=>'Luis Sepúlveda', 'category'=>'thieu-nhi', 'price'=>64000, 'original_price'=>89000, 'cover'=>'chuyen-con-meo.svg', 'tag'=>'Yêu thích', 'description'=>'Câu chuyện ấm áp về lời hứa, sự khác biệt và tình yêu thương không biên giới.'],
        ['slug'=>'tu-duy-nhanh-va-cham', 'title'=>'Tư Duy Nhanh Và Chậm', 'author'=>'Daniel Kahneman', 'category'=>'ky-nang', 'price'=>193000, 'original_price'=>265000, 'cover'=>'tu-duy-nhanh-va-cham.svg', 'tag'=>'Nổi bật', 'description'=>'Khám phá hai cách tư duy thường chi phối những lựa chọn và quyết định mỗi ngày.'],
        ['slug'=>'khi-hoi-tho', 'title'=>'Khi Hơi Thở Hóa Thinh Không', 'author'=>'Paul Kalanithi', 'category'=>'van-hoc', 'price'=>92000, 'original_price'=>128000, 'cover'=>'khi-hoi-tho.svg', 'tag'=>'Yêu thích', 'description'=>'Một cuốn hồi ký sâu lắng về cuộc đời, ý nghĩa sống và những điều thực sự quan trọng.'],
        ['slug'=>'buoc-cham-lai', 'title'=>'Bước Chậm Lại Giữa Thế Gian Vội Vã', 'author'=>'Hae Min', 'category'=>'ky-nang', 'price'=>97000, 'original_price'=>128000, 'cover'=>'buoc-cham-lai.svg', 'tag'=>'Nổi bật', 'description'=>'Một lời nhắc dịu dàng để sống chậm, lắng nghe mình và chăm sóc những mối quan hệ.'],
        ['slug'=>'luoc-su-thoi-gian', 'title'=>'Lược Sử Thời Gian', 'author'=>'Stephen Hawking', 'category'=>'khoa-hoc', 'price'=>109000, 'original_price'=>150000, 'cover'=>'luoc-su-thoi-gian.svg', 'tag'=>'Khoa học', 'description'=>'Những câu hỏi lớn về vũ trụ, thời gian và các quy luật tự nhiên được trình bày cuốn hút.'],
    ],
];
