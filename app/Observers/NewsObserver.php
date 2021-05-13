<?php

namespace App\Observers;

use App\Models\News;

class NewsObserver
{
    public function creating(News $news)
    {
        if (!$news->rating) {
            $news->rating = rand(1,5);
        }

        \Log::info("Model is creating. ID: {$news->id}");
    }

    public function created(News $news)
    {
        \Log::info("Model created. ID: {$news->id}");
    }
}
