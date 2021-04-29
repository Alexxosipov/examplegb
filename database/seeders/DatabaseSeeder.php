<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\News;
use Database\Factories\NewsFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::factory(5)
            ->has(News::factory(10))
            ->create();
    }
}
