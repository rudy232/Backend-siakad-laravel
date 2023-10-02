<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(200)->create();

    User::create([
    'name'=> 'Rudy Admin',
    'email'=>'rudy@fic.com',
    'email_verified_at' => now(),
    'password' => Hash::make('12345678'),
    'roles' => 'mahasiswa',
]);
    }
}
