<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $home = true;
        $cates = Category::all();
        return view('home', compact('home', 'cates'));
    }

}
