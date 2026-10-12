<?php

namespace Database\Seeders;

use App\Models\Alcohol;
use App\Models\Category;
use Illuminate\Database\Seeder;

class AlcoholSeeder extends Seeder
{
    public function run(): void
    {
        $categories = Category::all();

        foreach ($categories as $category) {

            Alcohol::create([
                'name' => $category->name . ' 1',
                'category_id' => $category->id,
            ]);

            Alcohol::create([
                'name' => $category->name . ' 2',
                'category_id' => $category->id,
            ]);
        }
    }
}
