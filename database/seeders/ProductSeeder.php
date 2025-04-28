<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create(['name' => 'Product 1', 'quantity' => 10]);
        Product::create(['name' => 'Product 2', 'quantity' => 20]);
    }
}