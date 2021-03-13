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
        for ($i = 1; $i <= 20; $i++) {
            DB::table('users')->insert([
                'username' => 'test_user' .$i,
                'email'  => 'TEST' .$i. '@gmail.com',
                'password' => Hash::make('123456'),
            ]);
        }
    }
}
