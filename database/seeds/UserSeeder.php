<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name'=>'cristian',
            'email'=>'once@once.com',
            'password'=>bcrypt('libertadores')
        ]);
    }
}
