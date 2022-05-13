<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');
        foreach(range(1,1) as $item){
            User::create([
                'role' => '1',
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
            ]);
        }

    }
}
