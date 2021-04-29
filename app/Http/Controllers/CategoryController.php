<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $news = $category->news()->get();

        //asd asd as
        return view('categories.show', compact('category', 'news'));
    }
}
