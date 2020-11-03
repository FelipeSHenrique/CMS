<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();

        $user->name = 'Pedro';
        $user->email = 'pedro2@teste.com';
        $user->password = bcrypt("4321");

        $user->save();
    }
}