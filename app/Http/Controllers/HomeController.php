<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $posts = Post::join('categories', 'categories.id', '=', 'posts.category_id')
            ->where('posts.status',1)
            ->orderBy('date', 'desc')
            ->get(['posts.id', 'posts.title', 'posts.image', 'posts.created_at as date', 'categories.name as category']);

        $categories = Category::limit(4)->get();
        return view('index', compact('posts', 'categories'));
    }
}
