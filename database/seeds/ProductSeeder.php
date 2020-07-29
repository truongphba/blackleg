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
            [
                'id' => 19,
                'category_id' => 3,
                'name' => 'ĐẦM XÒE LỤA NỀN XANH HAI DÂY',
                'price' => '1499000',
                'thumbnail' => '',
                'colors' => 'Xanh',
                'description' => 'https://ferosh.vn/storage/images/d94500cbf74c4ea234acc780c04913a2/525x787/P7clnBppXmthRsLt8OeB4OUAWtGOFzFFRWxgTAlM.jpeg',
                'detail' => '- Chất liệu: Lụa</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 1,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 20,
                'category_id' => 3,
                'name' => 'ĐẦM LỤA XÒE TRẮNG',
                'price' => '1099000',
                'thumbnail' => '',
                'colors' => 'Trắng',
                'description' => 'https://ferosh.vn/storage/images/2188a2fe8f909b85070d055dfe363142/525x787/BZZxgrbycyr6gxWepaMS9aKzeoFiZJ06Qz7CLWKm.jpeg',
                'detail' => '- Chất liệu: Lụa</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 1,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 21,
                'category_id' => 3,
                'name' => 'ĐẦM XÒE THÔ CÓ DÂY ĐAI',
                'price' => '1399000',
                'thumbnail' => '',
                'colors' => 'Đen',
                'description' => 'https://ferosh.vn/storage/images/8646de4bf4a5dc60490bf6479ada9250/525x787/C8GzJ6BJh22jnzfTxYvSJ400fJIHWAkT1oLUX6zw.jpeg',
                'detail' => '- Chất liệu: Thô</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 22,
                'category_id' => 3,
                'name' => 'ĐẦM THÔ KHOÉT NGỰC',
                'price' => '1399000',
                'thumbnail' => '',
                'colors' => 'Kem họa tiết',
                'description' => 'https://ferosh.vn/storage/images/2ef1bbdc45ad8e0abaa18d187033bca2/525x787/CjneRHpR0Rf7HDp95fDV05xB57BbT7krw2dHs5Ub.jpeg',
                'detail' => '- Chất liệu: Thô</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 23,
                'category_id' => 3,
                'name' => 'ĐẦM THÔ DÁNG A SÁT NÁCH TUA RUA GẤU',
                'price' => '1499000',
                'thumbnail' => '',
                'colors' => 'Đen',
                'description' => 'https://ferosh.vn/storage/images/f133b30511fd4fcb683d685de5514bc7/525x787/70uGXzF1ITd9PRnNrywjzCSxknqd9e0ALYf2CHVC.jpeg',
                'detail' => '- Chất liệu: Thô</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 24,
                'category_id' => 3,
                'name' => 'ĐẦM THÔ SUÔNG XANH NAVY HỌA TIẾT',
                'price' => '1499000',
                'thumbnail' => 'https://ferosh.vn/storage/images/8fc2ff25a36a84a76e695d7a30819c21/525x787/igsPT7sR7pwGKlXIqHXWX9ypFa7qYOztHpEmCIRT.jpeg',
                'colors' => 'Xanh navy họa tiết',
                'description' => '',
                'detail' => '- Chất liệu: Thô</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 25,
                'category_id' => 3,
                'name' => 'ĐẦM LỤA ÔM DÂY LƯNG',
                'price' => '1299000',
                'thumbnail' => 'https://ferosh.vn/storage/images/96f10132748c7049e3bbf5ca0b275f18/525x787/YmKsB5dNUwUt77E1ydq2NEIkJLOxKYP9A0QvGC2g.jpeg',
                'colors' => 'Họa tiết đỏ, xanh, cam',
                'description' => '',
                'detail' => '- Chất liệu: Lụa</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 26,
                'category_id' => 1,
                'name' => 'ÁO SƠ MI LỤA LOANG',
                'price' => '540000',
                'thumbnail' => 'https://ferosh.vn/storage/images/5033fd9ca925f86dbd50b35dcdd85206/420x630/2KvNjB2gAEaVCaNkJSJI3cj2KqxxgsL9CO2c1Lad.jpeg',
                'colors' => 'Loang',
                'description' => 'Áo dáng rộng freesize cho người từ 45kg - 60kg',
                'detail' => '- Chất liệu: Lụa</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 27,
                'category_id' => 4,
                'name' => 'VÁY HỒNG XOẮN EO HỒNG',
                'price' => '790000',
                'thumbnail' => 'https://ferosh.vn/storage/images/80b34c84a6e5ed25df112c11de676adc/420x630/DsZ6QXsaWdMBJnMs3zsO7cypoJwwTNMMLFLmYsag.jpeg',
                'colors' => 'Hồng',
                'description' => '',
                'detail' => '- Chiều dài: 110cm</br>
                             - Chất liệu: Thô Hàn</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 1,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 28,
                'category_id' => 1,
                'name' => 'ÁO SƠ MI TƠ CỔ VEST',
                'price' => '720000 ',
                'thumbnail' => 'https://ferosh.vn/storage/images/5e26badb3867ac7f26d3624ca39a9df4/420x630/RTAK5G9QFUHcfbDaoYsVvbiTFc0CSuPVs5zU9ECd.jpeg',
                'colors' => 'Áo tơ mềm mại màu cam , cổ vest vai bồng',
                'description' => '',
                'detail' => '- Chất liệu: Tơ non</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 29,
                'category_id' => 4,
                'name' => 'VÁY COTTON TRỄ VAI',
                'price' => '720000',
                'thumbnail' => 'https://ferosh.vn/storage/images/a463cac2327534f6f02563ffbdf92918/420x630/vPFV6bPPT9DRGYkIc4x4IKotZpub2hgZyhYwf18U.jpeg',
                'colors' => 'Vàng',
                'description' => '',
                'detail' => '- Chất liệu: Cotton</br>
                             - Lót: Không</br>
                             - Co giãn: Có',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 30,
                'category_id' => 5,
                'name' => 'JUMPSUIT ĐŨI CHUN EO HỒNG',
                'price' => '830000',
                'thumbnail' => 'https://ferosh.vn/storage/images/7532e11ff40e244cedde99f723f5e882/420x630/duV5oye5kGOP51g6ixnrgoHCDfMPQKDb5gaPPikY.jpeg',
                'colors' => 'Hồng',
                'description' => 'Chất liệu đũi lụa mềm mịn với màu hồng và đũi thô hơi ráp với màu hồng',
                'detail' => '- Chất liệu: Đũi</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 31,
                'category_id' => 5,
                'name' => 'JUMPSUIT ĐŨI CHUN EO ĐỎ',
                'price' => '830000',
                'thumbnail' => 'https://ferosh.vn/storage/images/f7b80214c9564ac1bd11fd91a037d17b/420x630/dkPnBxuksQncpDrmuwug8s1zHw8XB9Dbv4KNUUGE.jpeg',
                'colors' => 'Đỏ',
                'description' => 'Chất liệu đũi lụa mềm mịn với màu hồng và đũi thô hơi ráp với màu đỏ đô',
                'detail' => '- Chất liệu: Đũi</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 32,
                'category_id' => 4,
                'name' => 'VÁY BÈO VAI HOA XANH',
                'price' => '680000',
                'thumbnail' => 'https://ferosh.vn/storage/images/7f65d29fa86be6c6036fd73bae7e3cd3/420x630/ne42CgceEMHkypxYDPYx9b5thIFZ5iK463CMMsME.jpeg',
                'colors' => 'Xanh',
                'description' => '',
                'detail' => '- Chất liệu: Thô Hàn</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 33,
                'category_id' => 7,
                'name' => 'BỘ MẶC NHÀ LỤA QUẦN LỬNG ÁO CỘC TAY TÍM THAN',
                'price' => '459000',
                'thumbnail' => 'https://ferosh.vn/storage/images/e575af3f6d64da1287b8b6552b65a1df/420x630/EihzfYUVG2mVYyaLt0SgLn23N3El0vjwjsc441sa.jpeg',
                'colors' => 'Tím Than Con Bướm',
                'description' => 'Bộ mặc nhà EMMA được may từ chất liệu vải Lụa cao cấp, thiết kế đơn giản mang đến cho phái đẹp nét gọn gàng và duyên dáng. Những bộ mặc nhà truyền thống nhưng không bao giờ lỗi mốt bởi vẻ đẹp nền nã của nó. Đây là dòng trang phục mặc nhà cần có trong tủ đồ bởi sự tính tế, thời trang với sự phối họa tiết đơn giản mà hoàn hảo. Đường may chắc chắn và tỉ mỉ, mang đến độ bền đẹp lâu dài cho sản phẩm..',
                'detail' => '- Chất liệu: Lụa</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 34,
                'category_id' => 7,
                'name' => 'BỘ MẶC NHÀ LỤA QUẦN LỬNG ÁO CỘC TAY TÍM THAN',
                'price' => '489000',
                'thumbnail' => 'https://ferosh.vn/storage/images/9dc0a5e5bfcf4d73878002040de152ae/420x630/lqqIp9kceUhAAL4XvM8AFWp0dODFEtnJSsvv3uw4.jpeg',
                'colors' => 'Tím Than',
                'description' => 'Bộ mặc nhà EMMA được may từ chất liệu vải Lụa cao cấp, thiết kế đơn giản mang đến cho phái đẹp nét gọn gàng và duyên dáng. Những bộ mặc nhà truyền thống nhưng không bao giờ lỗi mốt bởi vẻ đẹp nền nã của nó. Đây là dòng trang phục mặc nhà cần có trong tủ đồ bởi sự tính tế, thời trang với sự phối họa tiết đơn giản mà hoàn hảo. Đường may chắc chắn và tỉ mỉ, mang đến độ bền đẹp lâu dài cho sản phẩm..',
                'detail' => '- Chất liệu: Lụa</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 35,
                'category_id' => 7,
                'name' => 'BỘ MẶC NHÀ LỤA HAI DÂY QUẦN LỬNG',
                'price' => '429000',
                'thumbnail' => 'https://ferosh.vn/storage/images/67efce7bbed5fa3ea002e27e0387fa1e/420x630/aNigUJwuYtmfBnLVpzRz3gHRMYDp6r2YvTgDGmYb.jpeg',
                'colors' => 'Kẻ Đỏ Đô',
                'description' => 'Bộ mặc nhà EMMA được may từ chất liệu vải Lụa cao cấp, thiết kế đơn giản mang đến cho phái đẹp nét gọn gàng và duyên dáng. Những bộ mặc nhà truyền thống nhưng không bao giờ lỗi mốt bởi vẻ đẹp nền nã của nó. Đây là dòng trang phục mặc nhà cần có trong tủ đồ bởi sự tính tế, thời trang với sự phối họa tiết đơn giản mà hoàn hảo. Đường may chắc chắn và tỉ mỉ, mang đến độ bền đẹp lâu dài cho sản phẩm..',
                'detail' => '- Chất liệu: Lụa</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 36,
                'category_id' => 7,
                'name' => 'BỘ MẶC NHÀ COTTON ÁO CỘC TAY QUẦN LỬNG RÊU',
                'price' => '379000',
                'thumbnail' => 'https://ferosh.vn/storage/images/247ad943f6dde95b3429e21616e96ae9/420x630/yTo5bM4xzB6tvbZinGfMZr5S0eRRhDn1OmtHuYKp.jpeg',
                'colors' => 'Rêu',
                'description' => 'Bộ mặc nhà EMMA được may từ chất liệu vải Lụa cao cấp, thiết kế đơn giản mang đến cho phái đẹp nét gọn gàng và duyên dáng. Những bộ mặc nhà truyền thống nhưng không bao giờ lỗi mốt bởi vẻ đẹp nền nã của nó. Đây là dòng trang phục mặc nhà cần có trong tủ đồ bởi sự tính tế, thời trang với sự phối họa tiết đơn giản mà hoàn hảo. Đường may chắc chắn và tỉ mỉ, mang đến độ bền đẹp lâu dài cho sản phẩm..',
                'detail' => '- Chất liệu: Lụa</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 37,
                'category_id' => 7,
                'name' => 'BỘ MẶC NHÀ LỤA QUẦN ĐÙI ÁO HAI DÂY XANH THAN',
                'price' => '399000',
                'thumbnail' => 'https://ferosh.vn/storage/images/8c3429b990429dca8fbe1cd6cf2e9636/420x630/hSmF3P6bl9QOFAGDWTRpN4SwVtwO5kh27YPRXkRE.jpeg',
                'colors' => 'Xanh Than',
                'description' => 'Bộ mặc nhà EMMA được may từ chất liệu vải Lụa cao cấp, thiết kế đơn giản mang đến cho phái đẹp nét gọn gàng và duyên dáng. Những bộ mặc nhà truyền thống nhưng không bao giờ lỗi mốt bởi vẻ đẹp nền nã của nó. Đây là dòng trang phục mặc nhà cần có trong tủ đồ bởi sự tính tế, thời trang với sự phối họa tiết đơn giản mà hoàn hảo. Đường may chắc chắn và tỉ mỉ, mang đến độ bền đẹp lâu dài cho sản phẩm..',
                'detail' => '- Chất liệu: Lụa</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 1,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 38,
                'category_id' => 7,
                'name' => 'BỘ MẶC NHÀ LỤA QUẦN ĐÙI ÁO HAI DÂY HỒNG ĐẬM',
                'price' => '399000',
                'thumbnail' => 'https://ferosh.vn/storage/images/3398f11e14b079df6c5b2e2541ea641e/420x630/JgRm49f67In5tme2DOUgwTfGvNdOCEiZQT3nY9l5.jpeg',
                'colors' => 'Hồng Đậm',
                'description' => 'Bộ mặc nhà EMMA được may từ chất liệu vải Lụa cao cấp, thiết kế đơn giản mang đến cho phái đẹp nét gọn gàng và duyên dáng. Những bộ mặc nhà truyền thống nhưng không bao giờ lỗi mốt bởi vẻ đẹp nền nã của nó. Đây là dòng trang phục mặc nhà cần có trong tủ đồ bởi sự tính tế, thời trang với sự phối họa tiết đơn giản mà hoàn hảo. Đường may chắc chắn và tỉ mỉ, mang đến độ bền đẹp lâu dài cho sản phẩm..',
                'detail' => '- Chất liệu: Lụa</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 39,
                'category_id' => 7,
                'name' => 'BỘ MẶC NHÀ LỤA QUẦN ĐÙI ÁO CỘC TAY',
                'price' => '389000',
                'thumbnail' => 'https://ferosh.vn/storage/images/07a498d2be79102ce2ca947bae2c53eb/420x630/fJyPqUAyHMDxw5oZzPCGwdUdPxiKeANrv9BTvyCi.jpeg',
                'colors' => 'Vàng Họa Tiết',
                'description' => 'Bộ mặc nhà EMMA được may từ chất liệu vải Lụa cao cấp, thiết kế đơn giản mang đến cho phái đẹp nét gọn gàng và duyên dáng. Những bộ mặc nhà truyền thống nhưng không bao giờ lỗi mốt bởi vẻ đẹp nền nã của nó. Đây là dòng trang phục mặc nhà cần có trong tủ đồ bởi sự tính tế, thời trang với sự phối họa tiết đơn giản mà hoàn hảo. Đường may chắc chắn và tỉ mỉ, mang đến độ bền đẹp lâu dài cho sản phẩm..',
                'detail' => '- Chất liệu: Lụa</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 40,
                'category_id' => 7,
                'name' => 'BỘ MẶC NHÀ LỤA QUẦN ĐÙI ÁO CỘC TAY XANH THAN',
                'price' => '389000',
                'thumbnail' => 'https://ferosh.vn/storage/images/58111ca2842fcb35ecbfd51fd89eb79a/420x630/F06Xc0F3Q2qdKkfqphdupHUCaoimwoUAdM1eGJgb.jpeg',
                'colors' => 'Xanh Than Tim Trắng',
                'description' => 'Bộ mặc nhà EMMA được may từ chất liệu vải Lụa cao cấp, thiết kế đơn giản mang đến cho phái đẹp nét gọn gàng và duyên dáng. Những bộ mặc nhà truyền thống nhưng không bao giờ lỗi mốt bởi vẻ đẹp nền nã của nó. Đây là dòng trang phục mặc nhà cần có trong tủ đồ bởi sự tính tế, thời trang với sự phối họa tiết đơn giản mà hoàn hảo. Đường may chắc chắn và tỉ mỉ, mang đến độ bền đẹp lâu dài cho sản phẩm..',
                'detail' => '- Chất liệu: Lụa</br>
                             - Lót: Không</br>
                             - Co giãn: Không',
                'highlight' => 1,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
