<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    const CATEGORIES = [
        'Erjesztett',
        'Égetett szesz',
        'Likőrök',
    ];

    public function run(): void
    {
        //Category::truncate();
        foreach (self::CATEGORIES as $name) {
            Category::create([
                'name' => $name,
            ]);
        }
    }
}
