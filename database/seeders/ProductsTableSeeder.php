<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'category_id' => 3,
                'name' => 'มาม่า',
                'cost_price' => 5,
                'sale_price' => 6
            ],
            [
                'category_id' => 1,
                'name' => 'ข้าวผัดหมู แช่แข็ง',
                'cost_price' => 35,
                'sale_price' => 40
            ],
            [
                'category_id' => 2,
                'name' => 'เบียร์ลีโอ',
                'cost_price' => 50,
                'sale_price' => 55
            ],
            [
                'category_id' => 2,
                'name' => 'เปบซี่',
                'cost_price' => 23,
                'sale_price' => 28
            ],
            [
                'category_id' => 2,
                'name' => 'โค้ก',
                'cost_price' => 25,
                'sale_price' => 27
            ]
        ]);
    }
}
