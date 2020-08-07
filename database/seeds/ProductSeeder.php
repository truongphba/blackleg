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
//                'name' => 'ÁO SƠ MI CỔ BÈO NGANG RÊU',
                'name' => 'IRISH SHIRT WITH RUFFLED COLLAR',
                'price' => '510000',
                'thumbnail' => 'https://ferosh.vn/storage/images/bc140cb5cb4c500db60537d94455756b/420x630/pB65Wcry3zGeeFe91CoM3LhQwwKEtfWtMBkK0oaT.jpeg',
                'colors' => 'Irish',
                'description' => 'Need a simple shirt that fits many shapes, can be used for both work and go out? This shirt is a perfect choice.',
                'detail' => '- Material: 40% Viscose 60% polyester.</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'category_id' => 2,
//                'name' => 'ĐẦM KẺ XUÔNG BÈO GẤU KẺ NÂU',
                'name' => 'BROWN STRIPPED DROP WAIST DRESS',
                'price' => '885000',
                    'thumbnail' => 'https://ferosh.vn/storage/images/0c28423a88b5dbffd0d1ee2aec41efd0/420x630/RrPhuNQc1LiOz64MVF9cZVOlFGMHBaUXMJThvI1l.jpeg',
                'colorss' => 'Brown',
                'description' => 'A lightweight dress with a airy design that can be worn at home or out',
                'detail' => '- Pads: Yes</br>
                             - Material: Korean Raw Linen</br>
                             - Elasticity: No',
                'highlight' => 1,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'category_id' => 3,
//                'name' => 'JUMPSUIT SOOC VẠT CHỒNG HOA NỀN XANH BIỂN',
                'name' => 'LIGHT BLUE FLORAL JUMPSUIT',
                'price' => '745000',
                'thumbnail' => 'https://ferosh.vn/storage/images/9d2596a5514f8021eaf84fc7e42f792b/420x630/pR6DDDFSpl2QCILHzVzwDiq6N0ktvPIQ06I6Oern.jpeg',
                'colors' => 'Blue Navy',
                'description' => 'If you need a feminine dress to go out or go on a picnic in the summer and fall, this dress is a perfect choice',
                'detail' => '- Pattern: Floral</br>
                             - Material: Korean Sand Chiffon</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'category_id' => 3,
//                'name' => 'JUMPSUIT SOOC VẠT CHỒNG HOA NỀN TÍM THAN',
                'name' => 'NAVY BLUE FLORAL JUMPSUIT',
                'price' => '745000',
                'thumbnail' => 'https://ferosh.vn/storage/images/66a7bb0bfc7f4f952d518528c1c7e024/420x630/zwdag2m5k13NirHPQRS3ihKRY07VvsOPZ3yKhPYz.jpeg',
                'colors' => 'Navy Blue',
                'description' => 'If you need a feminine clothes to go out or go on a picnic in the summer and fall, this jumpsuit is a perfect choice',
                'detail' => '- Pattern: Floral</br>
                             - Material: Korean Sand Chiffon</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'category_id' => 2,
//                'name' => 'ĐẦM LIỀN BUỘC KHĂN CỔ CHÂN A XANH RÊU',
                'name' => 'GREY GORE DRESS WITH SCARF',
                'price' => '1397000 ',
                'thumbnail' => 'https://ferosh.vn/storage/images/912527e69aef16ac97324684dda53015/420x630/DbPEVnJpRDKw09OC6PAAGa4q6buFoZjR5wTNQdrq.jpeg',
                'colors' => 'Grey',
                'description' => 'A dress suitable for all seasons',
                'detail' => '- Material: Silk Chiffon, Silk</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'category_id' => 2,
//                'name' => 'ĐẦM LIỀN BUỘC KHĂN CỔ CHÂN A ĐỎ ĐÔ',
                'name' => 'CHERRY GORE DRESS WITH SCARF',
                'price' => '1397000 ',
                'thumbnail' => 'https://ferosh.vn/storage/images/0f796eb02238d62a7ace5b8f2c416d91/420x630/35PGrsCIbpWDEhmfn03LF5Pa4gjrFOD349J774Tp.jpeg',
                'colors' => 'Cherry',
                'description' => 'A dress suitable for all seasons',
                'detail' => '- Material: Silk Chiffon, Silk</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'category_id' => 2,
//                'name' => 'ĐẦM ÔM REN CỔ ĐÁ TRẮNG',
                'name' => 'WHITE SLIM LACE DRESS',
                'price' => '990000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/02-10-2019/420x630/VL1902082Tr-1.jpg',
                'colors' => 'White',
                'description' => 'A perfect dress for a girl night out',
                'detail' => '- Material: Stretchy Tuytsi</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 8,
                'category_id' => 1,
//                'name' => 'ÁO BÈO GẤU HỒNG',
                'name' => 'PINK RUFFLE SHIRT',
                'price' => '495000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/03-07-2019/420x630/BLS10212-5.jpg',
                'colors' => 'Pink',
                'description' => 'This comfortable shirt is perfect for you whether you go to work or out',
                'detail' => '- Material: Sand Chiffon</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 9,
                'category_id' => 2,
//                'name' => 'ĐẦM REN CHOÀNG TRẮNG VÂN ĐEN',
                'name' => 'WHITE LACE BODY DRESS WITH BLACK BELT',
                'price' => '1750000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1981.jpg',
                'colors' => 'White',
                'description' => 'A perfect dress for a girl night out',
                'detail' => '- Product dimensions: 98,100,102cm.</br>
                             - Material: Ren.</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 1,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 10,
                'category_id' => 2,
//                'name' => 'ĐẦM BODY TAY BỒNG HOA EO',
                'name' => 'RUBY BODY DRESS WITH WAIST ROSE',
                'price' => '1980000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2126.jpg',
                'colors' => 'Ruby',
                'description' => 'A luxurious dress for events or parties ',
                'detail' => '- Product dimensions: 98,100,102cm.</br>
                             - Material: Twead.</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 11,
                'category_id' => 2,
    //                'name' => 'ĐẦM BODY HOA XOẮN VAI',
                'name' => 'ORANGE BODY DRESS WITH SHOULDER FLOWER',
                'price' => '1750000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1761.jpg',
                'colors' => 'Orange',
                'description' => 'A luxurious dress for events or parties',
                'detail' => '- Product dimensions: 98,100,102cm.</br>
                             - Material: Crepe.</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 12,
                'category_id' => 2,
//                'name' => 'ĐẦM REN CHOÀNG ĐÍNH NGỌC TRAI ĐEN',
                'name' => 'LACE BODY DRESS WITH BLACK PEARS',
                'price' => '1860000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL1368.jpg',
                'colors' => 'Đen',
                'description' => 'A luxurious dress for events or parties',
                'detail' => '- Product dimensions: 98,100,102cm.</br>
                             - Material: Lace</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 13,
                'category_id' => 2,
//                'name' => 'ĐẦM RỚT VAI CÀI HOA CẨM TÚ',
                'name' => 'ONE SHOULDER DRESS WITH HYDRANGEAS',
                'price' => '1890000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2014.jpg',
                'colors' => 'Salmon',
                'description' => 'A luxurious dress for events or parties',
                'detail' => '- Product dimensions: 105,107,109cm.</br>
                             - Material: Bonte.</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 14,
                'category_id' => 2,
//                'name' => 'ĐẦM XẾP NẾP VÒNG CỔ LASER',
                'name' => 'BLACK DRESS WITH LACE NECKLACE',
                'price' => '1750000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/16-01-2020/420x630/IMGL2204.jpg',
                'colors' => 'Black',
                'description' => 'A luxurious dress for events or parties',
                'detail' => '- Product dimensions: 98,100,102cm.</br>
                             - Material: Crepe.</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 15,
                'category_id' => 2,
//                'name' => 'ĐẦM SÁT NÁCH CẮT LASER ĐEN',
                'name' => 'BLACK SLEEVELESS DRESS WITH LASER CUT',
                'price' => '1560000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8389.jpg',
                'colors' => 'Black',
                'description' => 'A slim skirt suitable for work and out',
                'detail' => '- Product dimensions: 96/98/100/101.5cm.</br>
                             - Material: Umi.</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 16,
                'category_id' => 4,
//                'name' => 'CHÂN VÁY MIDI LASER HỒNG ĐẬM',
                'name' => 'LASER MIDI SKIRT',
                'price' => '790000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8308(1).jpg',
                'colors' => 'Pink',
                'description' => 'A slim skirt suitable for work and out',
                'detail' => '- Product dimensions: 59/60/62cm. </br>
                             - Material: Crep.</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 17,
                'category_id' => 4,
//                'name' => 'CHÂN VÁY MIDI VẠT LỆCH XANH CỔ VỊT',
                'name' => 'BLUE MIDI SKIRT',
                'price' => '790000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/23-12-2019/420x630/-34A8303(1).jpg',
                'colors' => 'Dark Blue',
                'description' => 'A slim skirt suitable for work and out',
                'detail' => '- Product dimensions: 71/72/73cm.</br>
                             - Material: Crep</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 18,
                'category_id' => 4,
//                'name' => 'COFASON CHÂN VÁY A CARO XANH MINT',
                'name' => 'GREY CHECKERED SKIRT WITH FRONT POCKETS',
                'price' => '790000 ',
                'thumbnail' => 'https://ferosh.vn/uploads/09-11-2019/420x630/3M3A8351.jpg',
                'colors' => 'Grey',
                'description' => 'With a familiar but never outdated pattern, this skirt can go with a lot of outfits',
                'detail' => '- Product dimensions upon sizes: 65,66,67,68cm.</br>
                             - Material: Boi.</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 19,
                'category_id' => 2,
//                'name' => 'ĐẦM XÒE LỤA NỀN XANH HAI DÂY',
                'name' => 'PAISLEY BODYCON DRESS',
                'price' => '1499000',
                'thumbnail' => 'https://ferosh.vn/storage/images/d94500cbf74c4ea234acc780c04913a2/525x787/P7clnBppXmthRsLt8OeB4OUAWtGOFzFFRWxgTAlM.jpeg',
                'colors' => 'Blue',
                'description' => 'A girly dress for gatherings and parties',
                'detail' => '- Material: Silk</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 1,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 20,
                'category_id' => 2,
//                'name' => 'ĐẦM LỤA XÒE TRẮNG',
                'name' => 'WHITE BLOUSON DRESS',
                'price' => '1099000',
                'thumbnail' => 'https://ferosh.vn/storage/images/2188a2fe8f909b85070d055dfe363142/525x787/BZZxgrbycyr6gxWepaMS9aKzeoFiZJ06Qz7CLWKm.jpeg',
                'colors' => 'White',
                'description' => 'A girly dress for gatherings and parties',
                'detail' => '- Material: Silk</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 1,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 21,
                'category_id' => 2,
//                'name' => 'ĐẦM XÒE THÔ CÓ DÂY ĐAI',
                'name' => 'FLORAL BLOUSON DRESS WITH BELT',
                'price' => '1399000',
                'thumbnail' => 'https://ferosh.vn/storage/images/8646de4bf4a5dc60490bf6479ada9250/525x787/C8GzJ6BJh22jnzfTxYvSJ400fJIHWAkT1oLUX6zw.jpeg',
                'colors' => 'Black',
                'description' => 'A girly dress for picnics and summer holidays',
                'detail' => '- Material: Raw Cloth</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 22,
                'category_id' => 2,
//                'name' => 'ĐẦM THÔ KHOÉT NGỰC',
                'name' => 'RAW CLOTH CUT_OFF DRESS',
                'price' => '1399000',
                'thumbnail' => 'https://ferosh.vn/storage/images/2ef1bbdc45ad8e0abaa18d187033bca2/525x787/CjneRHpR0Rf7HDp95fDV05xB57BbT7krw2dHs5Ub.jpeg',
                'colors' => 'CREAM',
                'description' => 'A girly dress for gatherings and parties',
                'detail' => '- Material: Raw Cloth</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 23,
                'category_id' => 2,
//                'name' => 'ĐẦM THÔ DÁNG A SÁT NÁCH TUA RUA GẤU',
                'name' => 'A-LINE DRESS WITH FRINGE',
                'price' => '1499000',
                'thumbnail' => 'https://ferosh.vn/storage/images/f133b30511fd4fcb683d685de5514bc7/525x787/70uGXzF1ITd9PRnNrywjzCSxknqd9e0ALYf2CHVC.jpeg',
                'colors' => 'Black',
                'description' => 'A girly dress for gatherings and parties',
                'detail' => '- Material: Raw Cloth</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 24,
                'category_id' => 2,
//                'name' => 'ĐẦM THÔ SUÔNG XANH NAVY HỌA TIẾT',
                'name' => 'PATTERN SHIRT DRESS',
                'price' => '1499000',
                'thumbnail' => 'https://ferosh.vn/storage/images/8fc2ff25a36a84a76e695d7a30819c21/525x787/igsPT7sR7pwGKlXIqHXWX9ypFa7qYOztHpEmCIRT.jpeg',
                'colors' => 'Blue, yellow',
                'description' => 'A stylist dress for gatherings and parties',
                'detail' => '- Material: Raw Cloth</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 25,
                'category_id' => 2,
//                'name' => 'ĐẦM LỤA ÔM DÂY LƯNG',
                'name' => 'PEGGED DRESS WITH BELT',
                'price' => '1299000',
                'thumbnail' => 'https://ferosh.vn/storage/images/96f10132748c7049e3bbf5ca0b275f18/525x787/YmKsB5dNUwUt77E1ydq2NEIkJLOxKYP9A0QvGC2g.jpeg',
                'colors' => 'Red,blue,green',
                'description' => 'Gentle but no less luxurious for the meetings',
                'detail' => '- Material: Silk</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 26,
                'category_id' => 1,
//                'name' => 'ÁO SƠ MI LỤA LOANG',
                'name' => 'ABSTRACT PATTERN SHIRT',
                'price' => '540000',
                'thumbnail' => 'https://ferosh.vn/storage/images/5033fd9ca925f86dbd50b35dcdd85206/420x630/2KvNjB2gAEaVCaNkJSJI3cj2KqxxgsL9CO2c1Lad.jpeg',
                'colors' => 'Black',
                'description' => 'With motifs and personality styles, this freesize shirt is suitable for people who weigh from 45 to 60 kg.',
                'detail' => '- Material: Silk</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 27,
                'category_id' => 2,
//                'name' => 'VÁY HỒNG XOẮN EO HỒNG',
                'name' => 'PINK TWISTED FLORAL DRESS',
                'price' => '790000',
                'thumbnail' => 'https://ferosh.vn/storage/images/80b34c84a6e5ed25df112c11de676adc/420x630/DsZ6QXsaWdMBJnMs3zsO7cypoJwwTNMMLFLmYsag.jpeg',
                'colors' => 'Pink',
                'description' => 'With a feminine design and light textures, along with a cool material, this dress is a perfect choice for autumn weather.',
                'detail' => '- Length: 110cm</br>
                             - Material: Korean Raw Cloth</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 1,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 28,
                'category_id' => 1,
//                'name' => 'ÁO SƠ MI TƠ CỔ VEST',
                'name' => 'VEST TOP SILK PAJAMAS',
                'price' => '720000 ',
                'thumbnail' => 'https://ferosh.vn/storage/images/5e26badb3867ac7f26d3624ca39a9df4/420x630/RTAK5G9QFUHcfbDaoYsVvbiTFc0CSuPVs5zU9ECd.jpeg',
                'colors' => 'Orange',
                'description' => 'This high fashion shirt is suitable not only for work but also for events.',
                'detail' => '- Material: Silk</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 29,
                'category_id' => 2,
//                'name' => 'VÁY COTTON TRỄ VAI',
                'name' => 'ONE SHOULDER BODYCON COTTON DRESS',
                'price' => '720000',
                'thumbnail' => 'https://ferosh.vn/storage/images/a463cac2327534f6f02563ffbdf92918/420x630/vPFV6bPPT9DRGYkIc4x4IKotZpub2hgZyhYwf18U.jpeg',
                'colors' => 'Yellow',
                'description' => 'This dress will make you stand out from the crowd, with its captivating designs and feminine looks',
                'detail' => '- Material: Cotton</br>
                             - Pads: No</br>
                             - Elasticity: Yes',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 30,
                'category_id' => 3,
//                'name' => 'JUMPSUIT ĐŨI CHUN EO HỒNG',
                'name' => 'PINK SHORT JUMPSUIT',
                'price' => '830000',
                'thumbnail' => 'https://ferosh.vn/storage/images/7532e11ff40e244cedde99f723f5e882/420x630/duV5oye5kGOP51g6ixnrgoHCDfMPQKDb5gaPPikY.jpeg',
                'colors' => 'Pink',
                'description' => 'This high fashion jumpsuit is designed with a dynamic and neat style. Perfect for city walks and picnics.',
                'detail' => '- Material: Linen</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 31,
                'category_id' => 3,
//                'name' => 'JUMPSUIT ĐŨI CHUN EO ĐỎ',
                'name' => 'RED SHORT JUMPSUIT',
                'price' => '830000',
                'thumbnail' => 'https://ferosh.vn/storage/images/f7b80214c9564ac1bd11fd91a037d17b/420x630/dkPnBxuksQncpDrmuwug8s1zHw8XB9Dbv4KNUUGE.jpeg',
                'colors' => 'Cherry',
                'description' => 'This high fashion jumpsuit is designed with a dynamic and neat style. Perfect for city walks and picnics.',
                'detail' => '- Material: Linen</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 32,
                'category_id' => 2,
//                'name' => 'VÁY BÈO VAI HOA XANH',
                'name' => 'ONE SHOULDER FLORAL DRESS',
                'price' => '680000',
                'thumbnail' => 'https://ferosh.vn/storage/images/7f65d29fa86be6c6036fd73bae7e3cd3/420x630/ne42CgceEMHkypxYDPYx9b5thIFZ5iK463CMMsME.jpeg',
                'colors' => 'Teal',
                'description' => 'This dress is designed with gentle and feminine style. Suitable to wear in summer and autumn. Along with the floral motif, this dress is perfect for going out',
                'detail' => '- Material: Korean Raw Cloth</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 33,
                'category_id' => 5,
//                'name' => 'BỘ MẶC NHÀ LỤA QUẦN LỬNG ÁO CỘC TAY TÍM THAN',
                'name' => 'PURPLE SILK PAJAMAS WITH BUTTERFLY PATTERN',
                'price' => '459000',
                'thumbnail' => 'https://ferosh.vn/storage/images/e575af3f6d64da1287b8b6552b65a1df/420x630/EihzfYUVG2mVYyaLt0SgLn23N3El0vjwjsc441sa.jpeg',
                'colors' => 'Purple',
                'description' => 'EMMA sleepwear sets are made from high quality Silk fabric, simple design gives women neat and charming features. The clothes are traditionally worn but never outdated because of their beautiful beauty. This is the line of home wear needed in a closet by the sophistication and fashion with a simple but perfect texture. The seam is strong and meticulous, providing long lasting durability for the product ..',
                'detail' => '- Material: Silk</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 34,
                'category_id' => 5,
//                'name' => 'BỘ MẶC NHÀ LỤA QUẦN LỬNG ÁO CỘC TAY TÍM THAN',
                'name' => 'COBALT SILK PAJAMAS',
                'price' => '489000',
                'thumbnail' => 'https://ferosh.vn/storage/images/9dc0a5e5bfcf4d73878002040de152ae/420x630/lqqIp9kceUhAAL4XvM8AFWp0dODFEtnJSsvv3uw4.jpeg',
                'colors' => 'Cobalt',
                'description' => 'EMMA sleepwear sets are made from high quality Silk fabric, simple design gives women neat and charming features. The clothes are traditionally worn but never outdated because of their beautiful beauty. This is the line of home wear needed in a closet by the sophistication and fashion with a simple but perfect texture. The seam is strong and meticulous, providing long lasting durability for the product ..',
                'detail' => '- Material: Silk</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 35,
                'category_id' => 5,
//                'name' => 'BỘ MẶC NHÀ LỤA HAI DÂY QUẦN LỬNG',
                'name' => 'RED CHERRY SHOULDER STRAP PAJAMAS',
                'price' => '429000',
                'thumbnail' => 'https://ferosh.vn/storage/images/67efce7bbed5fa3ea002e27e0387fa1e/420x630/aNigUJwuYtmfBnLVpzRz3gHRMYDp6r2YvTgDGmYb.jpeg',
                'colors' => 'Cherry',
                'description' => 'EMMA sleepwear sets are made from high quality Silk fabric, simple design gives women neat and charming features. The clothes are traditionally worn but never outdated because of their beautiful beauty. This is the line of home wear needed in a closet by the sophistication and fashion with a simple but perfect texture. The seam is strong and meticulous, providing long lasting durability for the product ..',
                'detail' => '- Material: Silk</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 36,
                'category_id' => 5,
//                'name' => 'BỘ MẶC NHÀ COTTON ÁO CỘC TAY QUẦN LỬNG RÊU',
                'name' => 'GREEN COTTON PAJAMAS',
                'price' => '379000',
                'thumbnail' => 'https://ferosh.vn/storage/images/247ad943f6dde95b3429e21616e96ae9/420x630/yTo5bM4xzB6tvbZinGfMZr5S0eRRhDn1OmtHuYKp.jpeg',
                'colors' => 'Green',
                'description' => 'EMMA sleepwear sets are made from high quality Silk fabric, simple design gives women neat and charming features. The clothes are traditionally worn but never outdated because of their beautiful beauty. This is the line of home wear needed in a closet by the sophistication and fashion with a simple but perfect texture. The seam is strong and meticulous, providing long lasting durability for the product ..',
                'detail' => '- Material: Silk</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 37,
                'category_id' => 5,
//                'name' => 'BỘ MẶC NHÀ LỤA QUẦN ĐÙI ÁO HAI DÂY XANH THAN',
                'name' => '3 BUTTONS SHORTS PAJAMAS SLEEPWEAR',
                'price' => '399000',
                'thumbnail' => 'https://ferosh.vn/storage/images/8c3429b990429dca8fbe1cd6cf2e9636/420x630/hSmF3P6bl9QOFAGDWTRpN4SwVtwO5kh27YPRXkRE.jpeg',
                'colors' => 'Navy Blue',
                'description' => 'EMMA sleepwear sets are made from high quality Silk fabric, simple design gives women neat and charming features. The clothes are traditionally worn but never outdated because of their beautiful beauty. This is the line of home wear needed in a closet by the sophistication and fashion with a simple but perfect texture. The seam is strong and meticulous, providing long lasting durability for the product ..',
                'detail' => '- Material: Silk</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 1,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 38,
                'category_id' => 5,
//                'name' => 'BỘ MẶC NHÀ LỤA QUẦN ĐÙI ÁO HAI DÂY HỒNG ĐẬM',
                'name' => 'BLUSH SHORTS PAJAMAS SLEEPWEAR',
                'price' => '399000',
                'thumbnail' => 'https://ferosh.vn/storage/images/3398f11e14b079df6c5b2e2541ea641e/420x630/JgRm49f67In5tme2DOUgwTfGvNdOCEiZQT3nY9l5.jpeg',
                'colors' => 'Blush',
                'description' => 'EMMA sleepwear sets are made from high quality Silk fabric, simple design gives women neat and charming features. The clothes are traditionally worn but never outdated because of their beautiful beauty. This is the line of home wear needed in a closet by the sophistication and fashion with a simple but perfect texture. The seam is strong and meticulous, providing long lasting durability for the product ..',
                'detail' => '- Material: Silk</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 39,
                'category_id' => 5,
//                'name' => 'BỘ MẶC NHÀ LỤA QUẦN ĐÙI ÁO CỘC TAY',
                'name' => 'YELLOW SHORTS PAJAMAS SLEEPWEAR',
                'price' => '389000',
                'thumbnail' => 'https://ferosh.vn/storage/images/07a498d2be79102ce2ca947bae2c53eb/420x630/fJyPqUAyHMDxw5oZzPCGwdUdPxiKeANrv9BTvyCi.jpeg',
                'colors' => 'Yellow',
                'description' => 'EMMA sleepwear sets are made from high quality Silk fabric, simple design gives women neat and charming features. The clothes are traditionally worn but never outdated because of their beautiful beauty. This is the line of home wear needed in a closet by the sophistication and fashion with a simple but perfect texture. The seam is strong and meticulous, providing long lasting durability for the product ..',
                'detail' => '- Material: Silk</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 0,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 40,
                'category_id' => 5,
//                'name' => 'BỘ MẶC NHÀ LỤA QUẦN ĐÙI ÁO CỘC TAY XANH THAN',
                'name' => 'SHORTS PAJAMAS SLEEPWEAR WITH HEARTS',
                'price' => '389000',
                'thumbnail' => 'https://ferosh.vn/storage/images/58111ca2842fcb35ecbfd51fd89eb79a/420x630/F06Xc0F3Q2qdKkfqphdupHUCaoimwoUAdM1eGJgb.jpeg',
                'colors' => 'Navy Blue',
                'description' => 'EMMA sleepwear sets are made from high quality Silk fabric, simple design gives women neat and charming features. The clothes are traditionally worn but never outdated because of their beautiful beauty. This is the line of home wear needed in a closet by the sophistication and fashion with a simple but perfect texture. The seam is strong and meticulous, providing long lasting durability for the product...',
                'detail' => '- Material: Silk</br>
                             - Pads: No</br>
                             - Elasticity: No',
                'highlight' => 1,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
