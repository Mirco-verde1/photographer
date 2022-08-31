<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Still Life',
        ]);

        Category::create([
            'name' => 'Matrimonio',
        ]);

        Category::create([
            'name' => 'Eventi',
        ]);

        Category::create([
            'name' => 'Sport',
        ]);
    }
}
