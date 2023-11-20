<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'division' => 'Web Development',
            'field_of_study' => 'Informatika',
            'nim' => '1203220082',
            'batch' => '2022',
            'phone_number' => '087859967039',
        ]);
        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
            'division' => 'Web Development',
            'field_of_study' => 'Informatika',
            'nim' => '1203220082',
            'batch' => '2022',
            'phone_number' => '087859967039',
        ]);
        $user->assignRole('user');
    }
}
