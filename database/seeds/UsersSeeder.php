<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $developer = new User();
        $developer->name ="Daniil";
        $developer->email = "daniilborowkow@ya.ru";
        $developer->password = bcrypt("1234567890");
        $developer->save();
    }
}
