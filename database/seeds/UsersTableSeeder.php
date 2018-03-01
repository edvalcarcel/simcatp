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
        //
        User::create(['name'=>"Daniel Valcarcel", 'email'=>"valcarcel-01@hotmail.com", 
            'password'=>  bcrypt("eder57036961462")]);
        
        User::create(['name'=>"Jorge Sierra", 'email'=>"jorgeicer@gmail.com", 
            'password'=>  bcrypt("jorgesierra2017")]);
    }
}
