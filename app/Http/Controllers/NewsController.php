<?php

namespace App\Http\Controllers;

use App\Http\Requests\News\StoreNewsRequest;
use App\Http\Requests\NewsShowRequest;
use App\Models\Category;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::with('category')->get();
        return view('news.index', compact('news'));
    }

    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('news.create', compact('categories'));
    }

    public function store(StoreNewsRequest $request)
    {
        News::create($request->validated());

        return redirect()->route('news.index')->with('success', 'Новость успешно добавлена');
    }
}
