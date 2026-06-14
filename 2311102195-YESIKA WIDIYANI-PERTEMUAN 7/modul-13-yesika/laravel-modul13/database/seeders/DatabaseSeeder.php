<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
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

        $product1 = Product::create([
            'name' => 'Laptop ROG GX502',
            'price' => 25000000,
        ]);

        $product2 = Product::create([
            'name' => 'MacBook Pro M2',
            'price' => 32000000,
        ]);

        Variant::create([
            'product_id' => $product1->id,
            'name' => 'Model High-End 2024',
            'description' => 'Edisi layar 240Hz dengan GPU RTX 4070.',
            'processor' => 'Intel Core i9 13900H',
            'memory' => '32 GB',
            'storage' => '2 TB SSD',
        ]);

        Variant::create([
            'product_id' => $product1->id,
            'name' => 'Model Standar',
            'description' => 'Edisi standar untuk kebutuhan produktivitas harian.',
            'processor' => 'Intel Core i7 13700H',
            'memory' => '16 GB',
            'storage' => '1 TB SSD',
        ]);

        Variant::create([
            'product_id' => $product2->id,
            'name' => 'Model Base',
            'description' => 'Model dasar Apple untuk kebutuhan kerja dan kuliah.',
            'processor' => 'Apple M2 Pro',
            'memory' => '16 GB',
            'storage' => '512 GB SSD',
        ]);
    }
}
