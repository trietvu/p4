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
            'recipient' => 'Citizens Bank',
            'memo' => 'My first deposit',
            'receipt_url' => '',
            'account_id' => '1',
        ]);
        DB::table('transactions')->insert([
            'trans_name' => 'Weekly Groceries',
            'trans_type' => 'Groceries',
            'amount' => '65.34.00',
            'recipient' => 'HEB',
            'memo' => 'My weekly groceries',
            'receipt_url' => '/uploads/rec_img1.jpg',
            'account_id' => '1',
        ]);
        DB::table('transactions')->insert([
            'trans_name' => 'My makeup',
            'trans_type' => 'Health & Beauty',
            'amount' => '23.15',
            'recipient' => 'Target',
            'memo' => 'My first deposit',
            'receipt_url' => '/uploads/rec_img2.jpg',
            'account_id' => '1',
        ]);
        DB::table('transactions')->insert([
            'trans_name' => 'Initial Deposit',
            'trans_type' => 'Deposit',
            'amount' => '200.00',
            'recipient' => 'Bank of America',
            'memo' => 'Start my savings account',
            'receipt_url' => '',
            'account_id' => '2',
        ]);
        DB::table('transactions')->insert([
            'trans_name' => 'Regular Deposit',
            'trans_type' => 'Deposit',
            'amount' => '50.00',
            'recipient' => 'Bank of America',
            'memo' => 'Weekly deposit',
            'receipt_url' => '',
            'account_id' => '2',
        ]);
        DB::table('transactions')->insert([
            'trans_name' => 'Extra Deposit',
            'trans_type' => 'Deposit',
            'amount' => '100.00',
            'recipient' => 'Bank of America',
            'memo' => 'Extra cash deposit',
            'receipt_url' => '',
            'account_id' => '2',
        ]);
        DB::table('transactions')->insert([
            'trans_name' => 'Oil change',
            'trans_type' => 'Automobile',
            'amount' => '39.75',
            'recipient' => 'Jiffy Lube',
            'memo' => 'Regular oil change',
            'receipt_url' => '/uploads/rec_img3.jpg',
            'account_id' => '3',
        ]);
        DB::table('transactions')->insert([
            'trans_name' => 'Movie night',
            'trans_type' => 'Meals & Entertainment',
            'amount' => '32.50',
            'recipient' => 'AMC Theatres',
            'memo' => 'Star Wars',
            'receipt_url' => '/receipts/rec_img4.jpg',
            'account_id' => '3',
        ]);
        DB::table('transactions')->insert([
            'trans_name' => 'Dinner out',
            'trans_type' => 'Meals & Entertainment',
            'amount' => '54.38',
            'recipient' => 'Virgils BBQ',
            'memo' => 'Date night dinner',
            'receipt_url' => '/receipts/rec_img5.jpg',
            'account_id' => '3',
        ]);
        DB::table('transactions')->insert([
            'trans_name' => 'Initial Deposit',
            'trans_type' => 'Deposit',
            'amount' => '500.00',
            'recipient' => 'Wells Fargo',
            'memo' => 'Initial deposit',
            'receipt_url' => '',
            'account_id' => '4',
        ]);
        DB::table('transactions')->insert([
            'trans_name' => 'Prescription refill',
            'trans_type' => 'Medical Expense',
            'amount' => '125.65',
            'recipient' => 'Walgreens',
            'memo' => 'Prescription',
            'receipt_url' => '/receipts/rec_img6.jpg',
            'account_id' => '4',
        ]);
        DB::table('transactions')->insert([
            'trans_name' => 'Car insurance',
            'trans_type' => 'Insurance',
            'amount' => '135.48',
            'recipient' => 'Geico',
            'memo' => 'Quarterly insurance',
            'receipt_url' => '/receipts/rec_img7.jpg',
            'account_id' => '4',
        ]);
        DB::table('transactions')->insert([
            'trans_name' => 'Initial Deposit',
            'trans_type' => 'Deposit',
            'amount' => '450.00',
            'recipient' => 'Federal Reserve Bank',
            'memo' => 'Start my savings account',
            'receipt_url' => '',
            'account_id' => '5',
        ]);
        DB::table('transactions')->insert([
            'trans_name' => 'Monthly Deposit',
            'trans_type' => 'Deposit',
            'amount' => '60.00',
            'recipient' => 'Federal Reserve Bank',
            'memo' => 'Weekly deposit',
            'receipt_url' => '',
            'account_id' => '5',
        ]);
        DB::table('transactions')->insert([
            'trans_name' => 'Additional Deposit',
            'trans_type' => 'Deposit',
            'amount' => '80.00',
            'recipient' => 'Federal Reserve Bank',
            'memo' => 'Extra cash deposit',
            'receipt_url' => '',
            'account_id' => '5',
        ]);
        DB::table('transactions')->insert([
            'trans_name' => 'Heating Oil',
            'trans_type' => 'Utilities',
            'amount' => '236.75',
            'recipient' => 'Metro Energy',
            'memo' => 'Heating oil refill',
            'receipt_url' => '/uploads/rec_img8.jpg',
            'account_id' => '6',
        ]);
        DB::table('transactions')->insert([
            'trans_name' => 'Dinner out',
            'trans_type' => 'Meals & Entertainment',
            'amount' => '32.50',
            'recipient' => 'Popeyes Chicken',
            'memo' => 'Not cooking tonight',
            'receipt_url' => '/receipts/rec_img9.jpg',
            'account_id' => '6',
        ]);
        DB::table('transactions')->insert([
            'trans_name' => 'New winter coat',
            'trans_type' => 'Miscellaneous',
            'amount' => '114.72',
            'recipient' => 'Nordstrom',
            'memo' => 'Need a new coat',
            'receipt_url' => '/receipts/rec_img10.jpg',
            'account_id' => '6',
        ]);
    }
}
