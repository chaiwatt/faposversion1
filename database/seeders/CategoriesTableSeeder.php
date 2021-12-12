<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'อาหาร'
            ],
            [
                'name' => 'เครื่องดื่ม'
            ],
            [
                'name' => 'อาหารแห้ง'
            ]
        ]);
    }
}