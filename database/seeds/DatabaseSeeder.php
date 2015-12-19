<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

            $this->call(UsersTableSeeder::class);
            $this->call(AccountsTableSeeder::class);
            $this->call(TransactionsTableSeeder::class);
            $this->call(AddressesTableSeeder::class);
            $this->call(StatesTableSeeder::class);

        Model::reguard();
    }
}
