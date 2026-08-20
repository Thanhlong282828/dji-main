<?php

namespace Tests\Feature;

use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

final class HomePageTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_displays_featured_story(): void
    {
        Article::query()->create(['title' => 'AERIS ONE', 'slug' => 'aeris-one', 'excerpt' => 'Premium imaging', 'body' => 'Story', 'category' => 'FLY', 'hero_image' => 'https://example.com/a.jpg', 'author' => 'ORYX', 'status' => 'published', 'featured' => true, 'published_at' => now()]);
        $this->get('/')->assertOk()->assertSee('AERIS ONE');
    }
}
