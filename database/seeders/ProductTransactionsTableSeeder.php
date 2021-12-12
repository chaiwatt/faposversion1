<?php

namespace Database\Seeders;

use DateTimeZone;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_transactions')->insert([
            [
                'code' => 'TF-'.Carbon::now(new DateTimeZone('Asia/Bangkok'))->format('Ymd').'001',
                'product_id' => 1,
                'quantity' => 100,
                'transaction_type' => 0,
                'total' => 100,
                'created_at' => Carbon::now(new DateTimeZone('Asia/Bangkok'))->toDateTimeString(),
            ],
            [
                'code' => 'SO-'.Carbon::now(new DateTimeZone('Asia/Bangkok'))->format('Ymd').'001',
                'product_id' => 1,
                'quantity' => 2,
                'transaction_type' => 1,
                'total' => 98,
                'created_at' => Carbon::now(new DateTimeZone('Asia/Bangkok'))->toDateTimeString(),
            ],
            [
                'code' => 'SO-'.Carbon::now(new DateTimeZone('Asia/Bangkok'))->format('Ymd').'002',
                'product_id' => 1,
                'quantity' => 1,
                'transaction_type' => 1,
                'total' => 97,
                'created_at' => Carbon::now(new DateTimeZone('Asia/Bangkok'))->toDateTimeString(),
            ],
            [
                'code' => 'TF-'.Carbon::now(new DateTimeZone('Asia/Bangkok'))->format('Ymd').'002',
                'product_id' => 1,
                'quantity' => 50,
                'transaction_type' => 0,
                'total' => 147,
                'created_at' => Carbon::now(new DateTimeZone('Asia/Bangkok'))->toDateTimeString(),
            ],
            [
                'code' => 'SO-'.Carbon::now(new DateTimeZone('Asia/Bangkok'))->format('Ymd').'003',
                'product_id' => 1,
                'quantity' => 10,
                'transaction_type' => 1,
                'total' => 137,
                'created_at' => Carbon::now(new DateTimeZone('Asia/Bangkok'))->toDateTimeString(),
            ]
        ]);
    }
}
