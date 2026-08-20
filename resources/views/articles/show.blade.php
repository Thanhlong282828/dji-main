@extends('layouts.site')
@section('title', $article->title.' — SCHEMA')
@section('content')
<main class="article-page">
    <section class="article-hero reveal"><img src="{{ $article->hero_image }}" alt="{{ $article->title }}"><div><span>{{ $article->category }} / {{ $article->published_at->format('d.m.Y') }}</span><h1>{{ $article->title }}</h1><p>{{ $article->excerpt }}</p></div></section>
    <article class="article-body reveal"><div class="byline">RESEARCH BY<br><strong>{{ $article->author }}</strong></div><div class="prose">@foreach(explode("\n\n", $article->body) as $paragraph)<p>{{ $paragraph }}</p>@endforeach</div></article>
    <section class="related"><span>SCHEMA INSIGHTS / ĐỌC TIẾP</span><div class="story-grid">@foreach($related as $item)<a class="story reveal" href="{{ route('articles.show', $item->slug) }}"><img src="{{ $item->hero_image }}" alt="{{ $item->title }}"><h3>{{ $item->title }}</h3></a>@endforeach</div></section>
</main>
@endsection
