<?php

namespace App\Http\Controllers;

use App\Models\ProductModule;
use Illuminate\View\View;

final class ProductController extends Controller
{
    public function index(): View
    {
        $modules = ProductModule::query()->where('is_active', true)->orderBy('sort_order')->get()->groupBy('pillar');

        return view('products.index', compact('modules'));
    }

    public function show(string $slug): View
    {
        $module = ProductModule::query()->where('is_active', true)->where('slug', $slug)->firstOrFail();
        $related = ProductModule::query()->where('pillar', $module->pillar)->whereKeyNot($module->id)->limit(3)->get();

        return view('products.show', compact('module', 'related'));
    }
}
