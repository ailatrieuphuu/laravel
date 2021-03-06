<?php

use Illuminate\Database\Seeder;
use App\NguoiChoi;
class ThemNguoiChoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count =1;
        while($count < 11){
            echo "Thêm người chơi thứ" . $count . "\n";
            $tendangnhap = Str::random(8);
            App\NguoiChoi::create([
                'ten_dang_nhap'=>$tendangnhap,
                'mat_khau'=>Hash::make(Str::random(6)),
                'email'=>$tendangnhap . '@gmail.com',
                'hinh_dai_dien'=>$tendangnhap . '.jpg',
                'diem_cao_nhat'=>rand(1000 , 5000),
                'credit'=>rand(10,500),
            ]);
            $count++;
        }
    }
}
