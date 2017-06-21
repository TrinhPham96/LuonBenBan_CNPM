<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// $this->call(HinhAnh::class);
    	// $this->call(Khoa::class);
    	// $this->call(LoaiThuoc::class);
    	// $this->call(NguoiDung::class);
    	// $this->call(Meo::class);
    	// $this->call(TinTuc::class);
    	// $this->call(BacSi::class);
    	// $this->call(Benh::class);
    	// $this->call(Thuoc::class);
    	// $this->call(TracNghiem::class);
    	// $this->call(ThongTin::class);
        $this->call(HoTro::class);
    	
    	// Search kiểu Date table Bác sĩ là ra hết nhaaaa
    }
}
