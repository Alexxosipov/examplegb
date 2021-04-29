<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $category->title }}</title>
</head>
<body>
    <h1>Category: {{ $category->title }}</h1>
    <div>
        @foreach ($news as $newsItem)
            <li><a href="{{ route('news.show', ['news' => $newsItem]) }}">{{ $newsItem->title }}</a></li>
        @endforeach
    </div>
</body>
</html>
