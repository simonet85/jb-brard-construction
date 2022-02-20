<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = User::create([

            'name' => 'chris',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'admin' => 1,
            'photo' => 'noimage.png',

        ]);
    }
}
