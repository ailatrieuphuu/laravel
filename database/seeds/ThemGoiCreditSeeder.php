<?php

use Illuminate\Database\Seeder;

class ThemGoiCreditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lich_su_mua_credit')->insert([
            ['ten_goi_credit' => 'Gói A', 'credit' => 100, 'so_tien' => 100000],
            ['ten_goi_credit' => 'Gói B', 'credit' => 200, 'so_tien' => 200000],
            ['ten_goi_credit' => 'Gói C', 'credit' => 300, 'so_tien' => 300000],
            ['ten_goi_credit' => 'Gói D', 'credit' => 400, 'so_tien' => 400000]
        ]);
    }
}
