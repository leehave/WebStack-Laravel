<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
            'categories' => Category::getWithArray(),
            'sites' => Category::where('parent_id', '<>', 0)->get(),
        ]);
    }
}
