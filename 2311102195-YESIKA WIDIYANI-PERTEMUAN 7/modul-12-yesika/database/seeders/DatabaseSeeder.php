<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Farrel Akmal',
            'email' => 'farrel.akmal@example.com',
            'password' => Hash::make('password'),
        ]);

        Product::insert([
            [
                'name' => 'iphone 11',
                'price' => 3000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'iphone 13',
                'price' => 7000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Samsung s21 fe',
                'price' => 3500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
