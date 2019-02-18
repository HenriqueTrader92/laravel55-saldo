<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Henrique Araujo',
            'email' => 'henriquetrader@gmail.com',
            'password' => bcrypt('1234'),
        ]);

        User::create([
            'name' => 'Jubileu Senior',
            'email' => 'jubileu@gmail.com',
            'password' => bcrypt('1234'),
        ]);
    }
}
