<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class QASeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('q_a_s')->truncate();
        DB::table('q_a_s')->insert([
            [
                'id' => 1,
                'quest' => 'LIỆU THÔNG TIN CỦA TÔI CÓ ĐƯỢC BẢO MẬT? ',
                'answer' => 'Mọi thông tin của quý khách sẽ được Shop bảo mật tuyệt đối. Để biết thêm thông tin, vui lòng tham khảo Chính sách bảo mật.',
                'created_at' => Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'quest' => 'ĐỊA CHỈ GIAO HÀNG VÀ ĐỊA CHỈ THANH TOÁN CÓ THỂ KHÁC NHAU ĐƯỢC KHÔNG? ',
                'answer' => 'Có. Quý khách có thể thanh toán và gửi hàng đến địa chỉ khác',
                'created_at' => Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'quest' => 'LÀM THẾ NÀO ĐỂ THAY ĐỔI ĐỊA CHỈ GIAO HÀNG? ',
                'answer' => 'Trong quá trình thanh toán, muốn thay đổi địa chỉ giao hàng quý khách vui lòng liên lạc cho bộ phận chăm sóc khách hàng để được hỗ trợ đổi thông tin cho đơn hàng đã đặt.',
                'created_at' => Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'quest' => 'LÀM THẾ NÀO ĐỂ HUỶ ĐƠN HÀNG ĐÃ ĐẶT? ',
                'answer' => 'Quí khách vui lòng gọi trực tiếp hoặc email trong giờ hành chính trong vòng 24h sau khi đặt hàng cho bộ phận chăm sóc khách hàng của Shop, đọc mã đơn hàng để chúng tôi tiến hàng huỷ đơn.
                Lưu ý: Nếu quý khách quyết định huỷ đơn hàng quá muộn, nghĩa là tình trạng đơn hàng đã chuyển thành ĐANG VẬN CHUYỂN, quý khách sẽ không thể huỷ đơn hàng được nữa.',
                'created_at' => Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'quest' => 'TÔI CÓ THỂ HUỶ MỘT PHẦN CỦA ĐƠN HÀNG ĐƯỢC KHÔNG?',
                'answer' => 'Quý khách có thể huỷ một phần của đơn hàng khi sản phẩm quý khách muốn huỷ chưa được giao cho đơn vị vận chuyển.',
                'created_at' => Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'quest' => 'TÔI CÓ PHẢI TRẢ THÊM CHI PHÍ NÀO NẾU HUỶ ĐƠN HÀNG? ',
                'answer' => 'Nếu đơn hàng huỷ trước khi chúng tôi giao cho bên giao nhận, quý khách sẽ không mất phí huỷ hàng. Nếu đơn hàng huỷ sau khi chúng tôi giao nhận, quý khách sẽ chịu một khoản phí để bên giao nhận giao hàng lại cho chúng tôi.',
                'created_at' => Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'quest' => 'TÔI CÓ THỂ THAY ĐỔI SẢN PHẨM SAU KHI ĐẶT HÀNG KHÔNG? ',
                'answer' => 'Để thay đổi sản phẩm sau khi đặt hàng, quý khách vui lòng huỷ toàn bộ đơn đã đặt trước đó và tiến hành đặt lại một đơn hàng mới với sản phẩm mà quý khách muốn chọn.',
                'created_at' => Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 8,
                'quest' => 'SẢN PHẨM BỊ HƯ HẠI, TÔI PHẢI LÀM GÌ? ',
                'answer' => 'Trong trường hợp sản phẩm bị hư hại, trước tiên Shop chân thành xin lỗi quý khác vì trục trặc ngoài ý muốn này. Chúng tôi sẽ nhanh chóng đổi sản phẩm khác cho quý khách nếu quý khách muốn thay thế sản phẩm khác. Nếu quý khách muốn trả lại sản phẩm, Shop sẽ hoàn lại 100% giá trị sản phẩm cho quý khách.',
                'created_at' => Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
            [
                'id' => 9,
                'quest' => 'SHOP CÓ GIAO HÀNG RA NƯỚC NGOÀI KHÔNG',
                'answer' => 'Hiện nay Shop chỉ có thể chuyển hàng trên các tỉnh thành ở Việt Nam.',
                'created_at' => Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s')
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
