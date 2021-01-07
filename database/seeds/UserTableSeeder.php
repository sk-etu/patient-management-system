<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('12345'),
            'role'=>'admin'
        ]);

        User::create([
            'name'=>'Dr. Fatema',
            'email'=>'doctor@gmail.com',
            'password'=>bcrypt('12345'),
            'role'=>'doctor'
        ]);
    
    }
    
}
