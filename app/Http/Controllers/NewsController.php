<?php

namespace App\Http\Controllers;

use App\Http\Requests\News\StoreNewsRequest;
use App\Http\Requests\News\UpdateNewsRequest;
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

    public function edit(News $news)
    {
        $categories = Category::all();
        return view('news.update', compact('categories', 'news'));
    }

    public function update(News $news, UpdateNewsRequest $request)
    {
        $news->update($request->validated());

        //@TODO add event on update

        return redirect()->route('news.index')->with('success', 'Новость успешно обновлена');
    }
}
