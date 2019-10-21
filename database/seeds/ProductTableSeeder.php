<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            ['name' => 'Áo thun in dáng người',
            'category_id' => '1',
            'description' => '
            Áo thun in dáng người.
            Size: S/M.           
            Đặc tính: Trẻ trung – năng động.            
            Thể loại: Trang phục dạo phố.           
            Màu sắc: Đen – Trắng.           
            Chất liệu: Thun.',
            'unit_price' => '290000',
            'promotion_price' => '20',
            'status' => '1',
            'new' => '1',
            'hot' => '1'],
           [ 'name' => 'ÁO SƠ MI BASIC LỆCH TÀ',
            'category_id' => '2',
            'description' => '
            Áo sơ mi basic lệch tà.
            Size: S/M/L.   
            Đặc tính: Trẻ trung – thanh lịch. 
            Thể loại: Trang phục công sở.
            Màu sắc: Vàng sọc trắng – Đen sọc trắng.
            Chất liệu: Lụa sọc.',
            'unit_price' => '359000',
            'promotion_price' => '20',
            'status' => '1',
            'new' => '1',
            'hot' => '1'],
            ['name' => 'KHOÁC TAY DÀI BASIC',
            'category_id' => '3',
            'description' => '
            Khoác tay dài basic xẻ lai tay.
            Size: S/M/L.
            Đặc tính: Trẻ trung – thanh lịch.
            Thể loại: Trang phục công sở.
            Màu sắc: Đen - Nâu.
            Chất liệu: Bố sọc nhuyễn.',
            'unit_price' => '370000',
            'promotion_price' => '20',
            'status' => '1',
            'new' => '1',
            'hot' => '1'],
            ['name' => 'ÁO CROPTOP BẸT VAI LỤA BÓNG',
            'category_id' => '4',
            'description' => '
            Áo croptop bẹt vai.
            Size: S/M/L/XL.
            Đặc tính: Trẻ trung –hiện đại.
            Thể loại: Trang phục đi tiệc.
            Màu sắc: Xanh – trắng.
            Chất liệu: Lạu dày gân nổi.',
            'unit_price' => '359000',
            'promotion_price' => '20',
            'status' => '1',
            'new' => '1',
            'hot' => '1'],
            ['name' => 'QUẦN KAKI JEAN BASIC',
            'category_id' => '5',
            'description' => '
            Quần dài skinny basic trơn.
            Size: 27/28/29/30.
            Đặc tính: Thanh lịch, hiện đại.
            Thể loại: Trang phục dạo phố.
            Màu sắc: Xanh nhạt – Xanh đậm.
            Chất liệu: Denim (100% cotton, không ra màu, thấm hút mồ hôi tốt).
            Số đo mẫu nữ: Chiều cao: 172 cm. Số đo 3 vòng: 83 - 59 - 89.',
            'unit_price' => '590000',
            'promotion_price' => '20',
            'status' => '1',
            'new' => '1',
            'hot' => '1'],
            ['name' => 'QUẦN SHORT ỐNG RỘNG CỘT DÂY MỎNG',
            'category_id' => '6',
            'description' => '
            Quần short ống rộng cột dây mỏng.
            Size: S/M/L/XL.
            Đặc tính: Trẻ trung – hiện đại.
            Thể loại: Trang phục dạo phố.
            Màu sắc: Đen - Nâu.
            Chất liệu: Bố sọc nhuyễn.
            Số đo mẫu nữ: Chiều cao: 175 cm. Số đo 3 vòng: 76 - 56 - 88.',
            'unit_price' => '590000',
            'promotion_price' => '20',
            'status' => '1',
            'new' => '1',
            'hot' => '1'],
            ['name' => 'VÁY A BẤT ĐỐI XỨNG PHỐI VẢI',
            'category_id' => '7',
            'description' => '
            Váy A bất đối xứng phối vải.
            Size: S/M/L/XL.
            Đặc tính: Trẻ trung –thanh lịch.
            Thể loại: Trang phục công sở - dạo phố.
            Màu sắc: Đen
            Chất liệu: cotton lụa phối vải nhún.',
            'unit_price' => '399000',
            'promotion_price' => '20',
            'status' => '1',
            'new' => '1',
            'hot' => '1'],
            ['name' => 'ĐẦM SUÔNG CỔ VEST',
            'category_id' => '8',
            'description' => '
            Đầm suông cổ vest phối nút kim loại.
            Size: S/M/L.            
            Đặc tính: Thanh lịch – sang trọng.            
            Thể loại: Trang phục tiệc.           
            Màu sắc: Trắng - đen.  
            Chất liệu: Bố chéo.',
           'unit_price' => '569000',
            'promotion_price' => '20',
            'status' => '1',
            'new' => '1',
            'hot' => '1'],
            ['name' => 'TÚI NHỎ VIỀN NỔI',
            'category_id' => '9',
            'description' => '
            Túi nhỏ viền nổi, có 2 ngăn phụ , khóa kéo đồng, dây đeo tháo rời phối mắc xích kim loại.
            Size: Cao x Rộng x Sâu: 15 x 15 x 8.
            Đặc tính: Trẻ trung. thanh lịch.
            Thể loại: Dạo phố.
            Màu sắc: Vàng - Đen – Xanh rêu.
            Chất liệu: Giả da.',
            'unit_price' => '449000',
            'promotion_price' => '20',
            'status' => '1',
            'new' => '1',
            'hot' => '1'],
            ['name' => 'JUMPSUIT DÀI KHOEN VAI',
            'category_id' => '10',
            'description' => '
            Jumpsuit dài khoen vai.
            Size: S/M/L.
            Đặc tính: Sang trọng – hiện đại.
            Thể loại: Trang phục tiệc.
            Màu sắc: Đen.
            Chất liệu: Nhung dập.',
            'unit_price' => '899000',
            'promotion_price' => '20',
            'status' => '1',
            'new' => '1',
            'hot' => '1']
        ]);
    }
}
