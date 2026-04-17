<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Post::published()->latest()->paginate(9);
        $categories = Post::published()->select('category')->distinct()->pluck('category');
        
        return view('pages.berita.index', compact('articles', 'categories'));
    }

    public function pengumuman()
    {
        $articles = Post::published()->latest()->paginate(10);
        return view('pages.pengumuman', compact('articles'));
    }

    public function artikel()
    {
        $articles = Post::published()->latest()->paginate(10);
        return view('pages.artikel_kesehatan', compact('articles'));
    }

    public function show($slug)
    {
        $article = Post::published()->where('slug', $slug)->firstOrFail();
        $recent = Post::published()->where('id', '!=', $article->id)->latest()->take(3)->get();
        
        return view('pages.berita.show', compact('article', 'recent'));
    }
}

