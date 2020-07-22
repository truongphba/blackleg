<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'id' => 1,
                'category_id' => 1,
                'name' => 'ÁO SƠ MI CỔ BÈO NGANG RÊU',
                'price' => '510.000',
                'thumbnail' => 'https://ferosh.vn/storage/images/bc140cb5cb4c500db60537d94455756b/420x630/pB65Wcry3zGeeFe91CoM3LhQwwKEtfWtMBkK0oaT.jpeg',
                'color' => 'Rêu',
                'description' => '- Sản phẩm: Không lót
                                  - Chất liệu: 40% Viscose 60% polyester.',
                'size_id' => 3,
                'collection_id' => 1,
                'detail' => 'Lót: Không
                             Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'category_id' => 3,
                'name' => 'ĐẦM KẺ CỔ ĐỨC KẺ TRẮNG',
                'price' => '1.215.000',
                'thumbnail' => 'https://ferosh.vn/storage/images/e26af35311d1e3eb0873d862e83aa1d4/420x630/UxUyLVYQ6tz8Fm1kjirIzjuwSb94mVs8sWPa2hAr.jpeg',
                'color' => 'Trắng',
                'description' => '- Sản phẩm: Có lót.
                                  - Chất liệu: Cotton Linen.',
                'size_id' => 3,
                'collection_id' => 1,
                'detail' => 'Lót: Không
                             Co giãn: Không',
                'highlight' => 1,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'category_id' => 5,
                'name' => 'JUMPSUIT SOOC VẠT CHỒNG HOA NỀN XANH BIỂN',
                'price' => '745.000',
                'thumbnail' => 'https://ferosh.vn/storage/images/9d2596a5514f8021eaf84fc7e42f792b/420x630/pR6DDDFSpl2QCILHzVzwDiq6N0ktvPIQ06I6Oern.jpeg',
                'color' => 'Xanh biển',
                'description' => '-Họa tiết lá cây, hoa
                                  -Chất liệu: Voan cát Hàn Quốc',
                'size_id' => 4,
                'collection_id' => 1,
                'detail' => 'Lót: Không
                             Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'category_id' => 5,
                'name' => 'JUMPSUIT SOOC VẠT CHỒNG HOA NỀN TÍM THAN',
                'price' => '745.000',
                'thumbnail' => 'https://ferosh.vn/storage/images/66a7bb0bfc7f4f952d518528c1c7e024/420x630/zwdag2m5k13NirHPQRS3ihKRY07VvsOPZ3yKhPYz.jpeg',
                'color' => 'Tím than',
                'description' => '- Họa tiết hoa
                                  - Chất liệu: Voan Cát Hàn Quốc. ',
                'size_id' => 2,
                'collection_id' => 1,
                'detail' => 'Lót: Không
                             Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'category_id' => 3,
                'name' => 'ĐẦM LIỀN BUỘC KHĂN CỔ CHÂN A XANH RÊU',
                'price' => '1.397.000 ',
                'thumbnail' => 'https://ferosh.vn/storage/images/912527e69aef16ac97324684dda53015/420x630/DbPEVnJpRDKw09OC6PAAGa4q6buFoZjR5wTNQdrq.jpeg',
                'color' => 'Xanh rêu',
                'description' => 'Chất liệu: Áo: Voan lụa, cát lụa phối chân váy tuýt si',
                'size_id' => 3,
                'collection_id' => 1,
                'detail' => 'Lót: Không
                             Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'category_id' => 3,
                'name' => 'ĐẦM LIỀN BUỘC KHĂN CỔ CHÂN A ĐỎ ĐÔ',
                'price' => '1.397.000 ',
                'thumbnail' => 'https://ferosh.vn/storage/images/0f796eb02238d62a7ace5b8f2c416d91/420x630/35PGrsCIbpWDEhmfn03LF5Pa4gjrFOD349J774Tp.jpeg',
                'color' => 'Đỏ đô',
                'description' => 'Chất liệu: Áo: Voan lụa, cát lụa phối chân váy tuýt si',
                'size_id' => 5,
                'collection_id' => 1,
                'detail' => 'Lót: Không
                             Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'category_id' => 3,
                'name' => 'ĐẦM CỔ TIM, XẾP CHỤM THÂN TRƯỚC XANH BIỂN',
                'price' => '990.000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/13-09-2019/420x630/DRE1062-5.jpg',
                'color' => 'Xanh biển',
                'description' => 'Chất liệu: Tuyt si giãn.',
                'size_id' => 2,
                'collection_id' => 1,
                'detail' => 'Lót: Không
                             Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 8,
                'category_id' => 1,
                'name' => 'ÁO BÈO GẤU HỒNG',
                'price' => '495.000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/03-07-2019/420x630/BLS10212-5.jpg',
                'color' => 'Hồng',
                'description' => 'Chất liệu: Voan cát',
                'size_id' => 3,
                'collection_id' => 1,
                'detail' => 'Lót: Không
                             Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 9,
                'category_id' => 3,
                'name' => 'ĐẦM REN CHOÀNG TRẮNG VÂN ĐEN',
                'price' => '1.750.000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1981.jpg',
                'color' => 'Trắng vân đen',
                'description' => '- Chiều dài sản phẩm: 98,100,102cm.
                                  - Chất liệu: Ren.',
                'size_id' => 6,
                'collection_id' => 2,
                'detail' => 'Lót: Không
                             Co giãn: Không',
                'highlight' => 1,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 10,
                'category_id' => 3,
                'name' => 'ĐẦM BODY TAY BỒNG HOA EO',
                'price' => '1.980.000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2126.jpg',
                'color' => 'Hồng sen',
                'description' => '- Chiều dài sản phẩm: 98,100,102cm.
                                  - Chất liệu: Twead.',
                'size_id' => 7,
                'collection_id' => 2,
                'detail' => 'Lót: Không
                             Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 11,
                'category_id' => 3,
                'name' => 'ĐẦM BODY HOA XOẮN VAI',
                'price' => '1.750.000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1761.jpg',
                'color' => 'Cam gạch',
                'description' => '- Chiều dài sản phẩm: 98,100,102cm.
                                  - Chất liệu: Crepe.',
                'size_id' => 6,
                'collection_id' => 2,
                'detail' => 'Lót: Không
                             Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 12,
                'category_id' => 3,
                'name' => 'ĐẦM REN CHOÀNG ĐÍNH NGỌC TRAI ĐEN',
                'price' => '1.860.000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1368.jpg',
                'color' => 'Đen',
                'description' => '- Chiều dài sản phẩm: 98,100,102cm.
                                  - Chất liệu: Ren.',
                'size_id' => 8,
                'collection_id' => 2,
                'detail' => 'Lót: Không
                             Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 13,
                'category_id' => 3,
                    'name' => 'ĐẦM RỚT VAI CÀI HOA CẨM TÚ',
                'price' => '1.890.000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2014.jpg',
                'color' => 'Hồng đỗ',
                'description' => '- Chiều dài sản phẩm: 105,107,109cm.
                                  - Chất liệu: Bonte.',
                'size_id' => 2,
                'collection_id' => 2,
                'detail' => 'Lót: Không
                             Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 14,
                'category_id' => 3,
                'name' => 'ĐẦM XẾP NẾP VÒNG CỔ LASER',
                'price' => '1.750.000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2204.jpg',
                'color' => 'Đen',
                'description' => '- Chiều dài sản phẩm: 98,100,102cm.
                                  - Chất liệu: Crepe.',
                'size_id' => 8,
                'collection_id' => 2,
                'detail' => 'Lót: Không
                             Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 15,
                'category_id' => 3,
                'name' => 'ĐẦM SÁT NÁCH CẮT LASER ĐEN',
                'price' => '1.560.000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8389.jpg',
                'color' => 'Đen',
                'description' => '- Chiều dài sản phẩm: 96/98/100/101.5cm.
                                  - Chất liệu: Umi.',
                'size_id' => 3,
                'collection_id' => 2,
                'detail' => 'Lót: Không
                             Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 16,
                'category_id' => 6,
                'name' => 'CHÂN VÁY MIDI LASER HỒNG ĐẬM',
                'price' => '790.000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8308(1).jpg',
                'color' => 'Hồng đậm',
                'description' => '- Chiều dài sản phẩm: 59/60/62cm.
                                  - Chất liệu: Crep.',
                'size_id' => 2,
                'collection_id' => 2,
                'detail' => 'Lót: Không
                             Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 17,
                'category_id' => 6,
                'name' => 'CHÂN VÁY MIDI VẠT LỆCH XANH CỔ VỊT',
                'price' => '790.000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8303(1).jpg',
                'color' => 'Xanh cổ vịt',
                'description' => '- Chiều dài sản phẩm: Điểm ngắn nhất: 55/56/57 Điểm dài nhất: 71/72/73cm.
                                  - Chất liệu: Crep',
                'size_id' => 7,
                'collection_id' => 2,
                'detail' => 'Lót: Không
                             Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 18,
                'category_id' => 6,
                'name' => 'COFASON CHÂN VÁY A CARO XANH MINT',
                'price' => '790.000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/09-11-2019/420x630/3M3A8351.jpg',
                'color' => 'Kẻ Caro Xanh Mint',
                'description' => '- Chiều dài sản phẩm theo size: 65,66,67,68cm.
                                  - Chất liệu: Boi.',
                'size_id' => 3,
                'collection_id' => 2,
                'detail' => 'Lót: Không
                             Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],

        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
