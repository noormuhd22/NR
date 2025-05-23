<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;  // Make sure the User model is imported
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'noor',
            'email' => 'noor@gmail.com',
            'password' => Hash::make('12345678'),  // Hash the password for security
        ]);
    }
}
