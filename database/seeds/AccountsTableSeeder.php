<?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('accounts')->insert([
            'name' => 'Citizens Bank',
            'type' => 'Checking',
            'number' => '1234',
            'streetaddress' => '100 Quenton Street',
            'streetaddress2' => '',
            'city' => 'Wichita',
            'state_id' => '16',
            'zip' => '66046',
            'phone' => '316-222-1111',
            'website' => 'www.citizensebank.com',
            'username' => 'jillybean',
            'user_id' => '1',
        ]);
        DB::table('accounts')->insert([
            'name' => 'Bank of America',
            'type' => 'Savings',
            'number' => '9876',
            'streetaddress' => '301 Mechanic Ave',
            'streetaddress2' => '',
            'city' => 'Raymore',
            'state_id' => '25',
            'zip' => '64701',
            'phone' => '816-555-1111',
            'website' => 'www.bankofamerica.com',
            'username' => 'jamally',
            'user_id' => '1',
        ]);
        DB::table('accounts')->insert([
            'name' => 'Citicard',
            'type' => 'Credit Card',
            'number' => '6543',
            'streetaddress' => '301 Mechanic Ave',
            'streetaddress2' => '',
            'city' => 'Raymore',
            'state_id' => '25',
            'zip' => '64701',
            'phone' => '816-555-1111',
            'website' => 'www.bankofamerica.com',
            'username' => 'jamally',
            'user_id' => '1',
        ]);
        DB::table('accounts')->insert([
            'name' => 'Wells Fargo',
            'type' => 'Checking',
            'number' => '2543',
            'streetaddress' => '100 Main Street',
            'streetaddress2' => '',
            'city' => 'Boston',
            'state_id' => '21',
            'zip' => '02210',
            'phone' => '316-222-1111',
            'website' => 'www.wellsfargo.com',
            'username' => 'jillybean',
            'user_id' => '2',
        ]);
        DB::table('accounts')->insert([
            'name' => 'Federal Reserve Bank',
            'type' => 'Savings',
            'number' => '7685',
            'streetaddress' => '301 Stuart Ave',
            'streetaddress2' => '',
            'city' => 'Cambridge',
            'state_id' => '21',
            'zip' => '02213',
            'phone' => '816-555-1111',
            'website' => 'www.federalreservebank.com',
            'username' => 'jamally',
            'user_id' => '2',
        ]);
        DB::table('accounts')->insert([
            'name' => 'Capital One',
            'type' => 'Credit Card',
            'number' => '3567',
            'streetaddress' => '301 Hoff Ave',
            'streetaddress2' => '',
            'city' => 'New York',
            'state_id' => '32',
            'zip' => '06115',
            'phone' => '816-555-1111',
            'website' => 'www.capitalone.com',
            'username' => 'jamally',
            'user_id' => '2',
        ]);
    }
}
