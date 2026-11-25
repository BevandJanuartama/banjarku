<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->latest()->get();
        $categories = Category::all();
        return view('banjarku', compact('posts', 'categories'));
    }

    public function food()
    {
        $foodCategory = Category::where('name', 'Makanan')->first();
        $posts = $foodCategory
            ? Post::where('category_id', $foodCategory->id)->latest()->get()
            : collect();
        return view('food', compact('posts'));
    }

    public function culture()
    {
        $cultureCategory = Category::where('name', 'Budaya')->first();
        $posts = $cultureCategory
            ? Post::where('category_id', $cultureCategory->id)->latest()->get()
            : collect();
        return view('culture', compact('posts'));
    }

    public function soto()
    {
        return view('soto');
    }

    public function ketupat()
    {
        return view('ketupat');
    }

    public function sasirangan()
    {
        return view('sasirangan');
    }
    
    public function ulin()
    {
        return view('ulin');
    }
}
