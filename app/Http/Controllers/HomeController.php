<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
            'categories' => Category::with('children', 'sites')->get(),
        ]);
    }
}
