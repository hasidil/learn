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
        $user = User::Create([
        		'name' => 'admin',
        		'email' => 'admin@mail.com',
        		'password' => '12345678'
        	]);
    }
}
