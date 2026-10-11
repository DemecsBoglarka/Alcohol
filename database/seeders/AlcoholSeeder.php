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
                'name' => $alcohol->name . ' alcohol 1',
                'zip_code' => '1000',
                'alcohol_id' => $alcohol->id,
            ]);

            Alcohol::create([
                'name' => $alcohol->name . ' alcohol 2',
                'zip_code' => '2000',
                'alcohol_id' => $alcohol->id,
            ]);
        }
    }
}
