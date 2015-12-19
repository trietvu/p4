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
            'name' => 'Commerce Bank',
            'type' => 'Checking',
            'number' => '0123456789',
            'streetaddress' => '100 Quenton Street',
            'streetaddress2' => '',
            'city' => 'Wichita',
            'state_id' => '16',
            'zip' => '66046',
            'phone' => '316-222-1111',
            'website' => 'www.commercebank.com',
            'username' => 'jillybean',
            'user_id' => '1',
        ]);
        DB::table('accounts')->insert([
            'name' => 'Country Club Bank',
            'type' => 'Savings',
            'number' => '9876543210',
            'streetaddress' => '301 Mechanic Ave',
            'streetaddress2' => '',
            'city' => 'Raymore',
            'state_id' => '25',
            'zip' => '64701',
            'phone' => '816-555-1111',
            'website' => 'www.countryclubbank.com',
            'username' => 'jamally',
            'user_id' => '2',
        ]);
    }
}
