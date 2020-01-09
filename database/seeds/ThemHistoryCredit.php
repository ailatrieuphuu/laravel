<?php

use Illuminate\Database\Seeder;

class ThemHistoryCredit extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goi_credit')->insert([
            ['nguoi_choi_id' => 1, 'goi_credit_id' => 1,'credit' => 100, 'so_tien' => 100000],
            ['nguoi_choi_id' => 2, 'goi_credit_id' => 2, 'credit' => 200, 'so_tien' => 200000],
            ['nguoi_choi_id' => 3, 'goi_credit_id' => 4, 'credit' => 300, 'so_tien' => 300000],
            ['nguoi_choi_id' => 4, 'goi_credit_id' => 3, 'credit' => 400, 'so_tien' => 400000]
        ]);
    }
}
