<?php

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('transactions')->insert([
            'trans_name' => 'Initial Deposit',
            'trans_type' => 'Deposit',
            'amount' => '350.00',
            'recipient' => 'Commerce Bank',
            'memo' => 'My first deposit',
            'receipt_id' => '1',
            'receipt_url' => '/receipts/rec_img1.jpg',
            'account_id' => '1',
        ]);

        DB::table('transactions')->insert([
            'trans_name' => 'Initial Deposit',
            'trans_type' => 'Deposit',
            'amount' => '200.00',
            'recipient' => 'Country Club Bank',
            'memo' => 'Start my savings account',
            'receipt_id' => '2',
            'receipt_url' => '/receipts/rec_img2.jpg',
            'account_id' => '2',
        ]);
    }
}
