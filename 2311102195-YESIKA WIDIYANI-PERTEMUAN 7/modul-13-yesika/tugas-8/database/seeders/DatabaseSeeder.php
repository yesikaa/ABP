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
        User::updateOrCreate(
            ['email' => 'yesika@example.com'],
            [
                'name' => 'Yesika Widiyani',
                'password' => Hash::make('password123'),
            ]
        );

        Product::updateOrCreate(
            ['name' => 'Beras Premium 5 Kg'],
            [
                'category' => 'Beras',
                'price' => 72000,
                'stock' => 25,
                'description' => 'Stok beras premium untuk kebutuhan harian.',
            ]
        );

        Product::updateOrCreate(
            ['name' => 'Minyak Goreng 2 Liter'],
            [
                'category' => 'Minyak',
                'price' => 39000,
                'stock' => 8,
                'description' => 'Stok mulai menipis sehingga perlu restock.',
            ]
        );

        Product::updateOrCreate(
            ['name' => 'Gula Pasir 1 Kg'],
            [
                'category' => 'Gula',
                'price' => 18000,
                'stock' => 30,
                'description' => 'Gula pasir untuk stok gudang sembako.',
            ]
        );
    }
}
