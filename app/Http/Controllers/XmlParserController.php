<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;

class XmlParserController extends Controller
{
    public function index()
    {
        $parser = XmlParser::load('https://news.yandex.ru/army.rss');

        $news = $parser->parse([
            'news' => [
                'uses' => 'channel.item[title,link,description]'
            ]
        ]);
    }
}
