<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Database\Eloquent\Builder;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $news = $category->news()->get();

        //asd asd as
        return view('categories.show', compact('category', 'news'));
    }

    public function index()
    {
        $categories = Category::withCount('news')
            ->withAvg('news', 'rating')
            ->inRandomOrder()
            ->take(5)
            ->get();

        return view('categories.index', compact('categories'));
    }
}
