<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    private int $age;

    public function __construct()
    {
        $this->age = 5;
    }

    public function index()
    {
        return view('index', ['age' => $this->age]);
    }
}
