<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ProductModule;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

final class HomeController extends Controller
{
    public function __invoke(): View
    {
        $articles = Cache::remember('home.articles', 300, fn () => Article::query()->published()->latest('published_at')->get());

        return view('home', [
            'featured' => $articles->firstWhere('featured', true) ?? $articles->first(),
            'articles' => $articles,
            'modules' => ProductModule::query()->where('is_featured', true)->orderBy('sort_order')->get(),
        ]);
    }
}
