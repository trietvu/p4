<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = \App\User::firstOrCreate(['email' => 'jill@harvard.edu']);
        $user->name = 'Jill';
        $user->lastname = 'Smith';
        $user->middlename = 'Jane';
        $user->email = 'jill@harvard.edu';
        $user->password = \Hash::make('helloworld');
        $user->save();

        $user = \App\User::firstOrCreate(['email' => 'jamal@harvard.edu']);
        $user->name = 'Jamal';
        $user->lastname = 'Warner';
        $user->middlename = 'Louis';
        $user->email = 'jamal@harvard.edu';
        $user->password = \Hash::make('helloworld');
        $user->save();
    }
}
