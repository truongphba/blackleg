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
                'price' => '510000',
                'thumbnail' => 'https://ferosh.vn/storage/images/bc140cb5cb4c500db60537d94455756b/420x630/pB65Wcry3zGeeFe91CoM3LhQwwKEtfWtMBkK0oaT.jpeg',
                'colors' => 'Rêu',
                'description' => '',
                'detail' => '- Sản phẩm: Không lót</br>
                             - Chất liệu: 40% Viscose 60% polyester.</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'category_id' => 3,
                'name' => 'ĐẦM KẺ CỔ ĐỨC KẺ TRẮNG',
                'price' => '1215000',
                'thumbnail' => 'https://ferosh.vn/storage/images/e26af35311d1e3eb0873d862e83aa1d4/420x630/UxUyLVYQ6tz8Fm1kjirIzjuwSb94mVs8sWPa2hAr.jpeg',
                'colorss' => 'Trắng',
                'description' => '',
                'detail' => '- Sản phẩm: Có lót.</br>
                             - Chất liệu: Cotton Linen.</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 1,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'category_id' => 5,
                'name' => 'JUMPSUIT SOOC VẠT CHỒNG HOA NỀN XANH BIỂN',
                'price' => '745000',
                'thumbnail' => 'https://ferosh.vn/storage/images/9d2596a5514f8021eaf84fc7e42f792b/420x630/pR6DDDFSpl2QCILHzVzwDiq6N0ktvPIQ06I6Oern.jpeg',
                'colors' => 'Xanh biển',
                'description' => '',
                'detail' => '-Họa tiết lá cây, hoa</br>
                             -Chất liệu: Voan cát Hàn Quốc</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'category_id' => 5,
                'name' => 'JUMPSUIT SOOC VẠT CHỒNG HOA NỀN TÍM THAN',
                'price' => '745000',
                'thumbnail' => 'https://ferosh.vn/storage/images/66a7bb0bfc7f4f952d518528c1c7e024/420x630/zwdag2m5k13NirHPQRS3ihKRY07VvsOPZ3yKhPYz.jpeg',
                'colors' => 'Tím than',
                'description' => '',
                'detail' => '- Họa tiết hoa</br>
                             - Chất liệu: Voan Cát Hàn Quốc.</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'category_id' => 3,
                'name' => 'ĐẦM LIỀN BUỘC KHĂN CỔ CHÂN A XANH RÊU',
                'price' => '1397000 ',
                'thumbnail' => 'https://ferosh.vn/storage/images/912527e69aef16ac97324684dda53015/420x630/DbPEVnJpRDKw09OC6PAAGa4q6buFoZjR5wTNQdrq.jpeg',
                'colors' => 'Xanh rêu',
                'description' => '',
                'detail' => '- Chất liệu: Áo: Voan lụa, cát lụa phối chân váy tuýt si</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'category_id' => 3,
                'name' => 'ĐẦM LIỀN BUỘC KHĂN CỔ CHÂN A ĐỎ ĐÔ',
                'price' => '1397000 ',
                'thumbnail' => 'https://ferosh.vn/storage/images/0f796eb02238d62a7ace5b8f2c416d91/420x630/35PGrsCIbpWDEhmfn03LF5Pa4gjrFOD349J774Tp.jpeg',
                'colors' => 'Đỏ đô',
                'description' => '',
                'detail' => '- Chất liệu: Áo: Voan lụa, cát lụa phối chân váy tuýt si</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'category_id' => 3,
                'name' => 'ĐẦM CỔ TIM, XẾP CHỤM THÂN TRƯỚC XANH BIỂN',
                'price' => '990000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/13-09-2019/420x630/DRE1062-5.jpg',
                'colors' => 'Xanh biển',
                'description' => '',
                'detail' => '- Chất liệu: Tuyt si giãn.</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 8,
                'category_id' => 1,
                'name' => 'ÁO BÈO GẤU HỒNG',
                'price' => '495000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/03-07-2019/420x630/BLS10212-5.jpg',
                'colors' => 'Hồng',
                'description' => '',
                'detail' => '- Chất liệu: Voan cát</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 9,
                'category_id' => 3,
                'name' => 'ĐẦM REN CHOÀNG TRẮNG VÂN ĐEN',
                'price' => '1750000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1981.jpg',
                'colors' => 'Trắng vân đen',
                'description' => '',
                'detail' => '- Chiều dài sản phẩm: 98,100,102cm.</br>
                             - Chất liệu: Ren.</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 1,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 10,
                'category_id' => 3,
                'name' => 'ĐẦM BODY TAY BỒNG HOA EO',
                'price' => '1980000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2126.jpg',
                'colors' => 'Hồng sen',
                'description' => '',
                'detail' => '- Chiều dài sản phẩm: 98,100,102cm.</br>
                             - Chất liệu: Twead.</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 11,
                'category_id' => 3,
                'name' => 'ĐẦM BODY HOA XOẮN VAI',
                'price' => '1750000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1761.jpg',
                'colors' => 'Cam gạch',
                'description' => '',
                'detail' => '- Chiều dài sản phẩm: 98,100,102cm.</br>
                             - Chất liệu: Crepe.</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 12,
                'category_id' => 3,
                'name' => 'ĐẦM REN CHOÀNG ĐÍNH NGỌC TRAI ĐEN',
                'price' => '1860000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1368.jpg',
                'colors' => 'Đen',
                'description' => '',
                'detail' => '- Chiều dài sản phẩm: 98,100,102cm.</br>
                             - Chất liệu: Ren.</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 13,
                'category_id' => 3,
                'name' => 'ĐẦM RỚT VAI CÀI HOA CẨM TÚ',
                'price' => '1890000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2014.jpg',
                'colors' => 'Hồng đỗ',
                'description' => '',
                'detail' => '- Chiều dài sản phẩm: 105,107,109cm.</br>
                             - Chất liệu: Bonte.</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 14,
                'category_id' => 3,
                'name' => 'ĐẦM XẾP NẾP VÒNG CỔ LASER',
                'price' => '1750000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2204.jpg',
                'colors' => 'Đen',
                'description' => '',
                'detail' => '- Chiều dài sản phẩm: 98,100,102cm.</br>
                             - Chất liệu: Crepe.</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 15,
                'category_id' => 3,
                'name' => 'ĐẦM SÁT NÁCH CẮT LASER ĐEN',
                'price' => '1560000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8389.jpg',
                'colors' => 'Đen',
                'description' => '',
                'detail' => '- Chiều dài sản phẩm: 96/98/100/101.5cm.</br>
                             - Chất liệu: Umi.</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 16,
                'category_id' => 6,
                'name' => 'CHÂN VÁY MIDI LASER HỒNG ĐẬM',
                'price' => '790000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8308(1).jpg',
                'colors' => 'Hồng đậm',
                'description' => '',
                'detail' => '- Chiều dài sản phẩm: 59/60/62cm. </br>
                             - Chất liệu: Crep.</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 17,
                'category_id' => 6,
                'name' => 'CHÂN VÁY MIDI VẠT LỆCH XANH CỔ VỊT',
                'price' => '790000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8303(1).jpg',
                'colors' => 'Xanh cổ vịt',
                'description' => '',
                'detail' => '- Chiều dài sản phẩm: Điểm ngắn nhất: 55/56/57 Điểm dài nhất: 71/72/73cm.</br>
                             - Chất liệu: Crep</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 18,
                'category_id' => 6,
                'name' => 'COFASON CHÂN VÁY A CARO XANH MINT',
                'price' => '790000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/09-11-2019/420x630/3M3A8351.jpg',
                'colors' => 'Kẻ Caro Xanh Mint',
                'description' => '',
                'detail' => '- Chiều dài sản phẩm theo size: 65,66,67,68cm.</br>
                             - Chất liệu: Boi.</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],

        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
