<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = Product::create([
            'code' => 'M00122',
            'slug' => 'm00122',
            'name' => 'Vanilla',
            'type' => 'Sabor',
            'price' => 25.00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'stock' => 30,
            'image' => 'https://cdn.pixabay.com/photo/2015/01/06/02/52/vanilla-589820_960_720.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $product = Product::create([
            'code' => 'M00222',
            'slug' => 'm00222',
            'name' => 'Chocolate',
            'type' => 'Sabor',
            'price' => 25.00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'stock' => 30,
            'image' => 'https://cdn.pixabay.com/photo/2013/10/30/21/03/chocolate-203276_960_720.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $product = Product::create([
            'code' => 'M00322',
            'slug' => 'm00322',
            'name' => 'Fresa',
            'type' => 'Sabor',
            'price' => 25.00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'stock' => 30,
            'image' => 'https://cdn.pixabay.com/photo/2016/04/14/18/42/strawberry-jam-1329440_960_720.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $product = Product::create([
            'code' => 'M00422',
            'slug' => 'm00422',
            'name' => 'Limón',
            'type' => 'Sabor',
            'price' => 25.00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'stock' => 30,
            'image' => 'https://cdn.pixabay.com/photo/2020/05/29/06/07/watercolor-fruit-5233886_960_720.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $product = Product::create([
            'code' => 'M00522',
            'slug' => 'm00522',
            'name' => 'Trozos de chocolate',
            'type' => 'Adorno',
            'price' => 25.00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'stock' => 30,
            'image' => 'https://cdn.pixabay.com/photo/2013/09/18/18/24/chocolate-183543_960_720.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $product = Product::create([
            'code' => 'M00622',
            'slug' => 'm00622',
            'name' => 'Trozos de mango',
            'type' => 'Adorno',
            'price' => 25.00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'stock' => 30,
            'image' => 'https://cdn.pixabay.com/photo/2016/02/23/17/36/mango-1218147_960_720.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $product = Product::create([
            'code' => 'M00722',
            'slug' => 'm00722',
            'name' => 'Trozos de fresa',
            'type' => 'Adorno',
            'price' => 25.00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'stock' => 30,
            'image' => 'https://cdn.pixabay.com/photo/2018/04/19/17/43/food-3333790_960_720.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $product = Product::create([
            'code' => 'M00822',
            'slug' => 'm00822',
            'name' => 'Trozos de durazno',
            'type' => 'Adorno',
            'price' => 25.00,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'stock' => 30,
            'image' => 'https://cdn.pixabay.com/photo/2015/12/03/13/51/peach-1074997_960_720.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
