<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'=>'Joharflo Shoro',
            'email'=>'Joharflo@hotmail.com',
            'password'=>bcrypt('12345678')
        ]);

        factory(User::class,10)->create();
    }
}
