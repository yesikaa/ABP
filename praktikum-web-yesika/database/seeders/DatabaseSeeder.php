<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Farrel Akmal',
            'email' => 'farrel.akmal@example.com',
        ]);

        Product::create([
            'nama_produk' => 'Keyboard Mechanical',
            'deskripsi' => 'Keyboard mechanical untuk kebutuhan mengetik dan bermain gim.',
            'harga' => 350000,
            'stok' => 12,
        ]);

        Product::create([
            'nama_produk' => 'Mouse Wireless',
            'deskripsi' => 'Mouse wireless dengan desain ringan dan responsif.',
            'harga' => 150000,
            'stok' => 20,
        ]);

        Product::create([
            'nama_produk' => 'Headset Gaming',
            'deskripsi' => 'Headset dengan mikrofon dan suara jernih.',
            'harga' => 275000,
            'stok' => 8,
        ]);
    }
}
