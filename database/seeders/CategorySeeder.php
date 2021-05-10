<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\News;
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
        Category::factory(50)
            ->has(News::factory(5))
            ->create();

        Category::factory(50)
            ->has(News::factory(15))
            ->create();
    }
}
