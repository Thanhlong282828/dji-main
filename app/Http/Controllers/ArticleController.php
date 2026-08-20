<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\View\View;

final class ArticleController extends Controller
{
    public function show(string $slug): View
    {
        $article = Article::query()->published()->where('slug', $slug)->firstOrFail();
        $related = Article::query()->published()->whereKeyNot($article->id)->limit(3)->get();

        return view('articles.show', compact('article', 'related'));
    }
}
