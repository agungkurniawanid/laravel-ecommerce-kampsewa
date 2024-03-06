<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'fullname' => 'Agung Kurniawan',
            'number_phone' => '081331640909',
            'password' => bcrypt('11111'),
            'date_of_birth' => '2000-01-01',
            'gender' => 'Laki-laki',
            'photo' => null,
            'level' => 'Developer',
        ]);
    }
}
