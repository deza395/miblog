<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Debora Zarate',
            'email'=>'deza395@gmail.com',
            'password'=>bcrypt('asd123456')
        ])->assignRole('admin');
        User::factory(1)->create();
    }
}
