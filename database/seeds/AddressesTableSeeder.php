<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('addresses')->insert([
            'streetaddress' => '111 Main Street',
            'streetaddress2' => '',
            'city' => 'Kansas City',
            'state_id' => '25',
            'zip' => '64110',
            'phone' => '816-555-1212',
            'user_id' => '1',
        ]);

        DB::table('addresses')->insert([
            'streetaddress' => '222 Front Street',
            'streetaddress2' => '',
            'city' => 'Boston',
            'state_id' => '21',
            'zip' => '02108',
            'phone' => '978-555-1212',
            'user_id' => '2',
        ]);
    }
}
