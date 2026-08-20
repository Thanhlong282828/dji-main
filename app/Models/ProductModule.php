<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class ProductModule extends Model
{
    protected $fillable = ['code', 'slug', 'name', 'pillar', 'summary', 'description', 'capabilities', 'outcomes', 'icon', 'sort_order', 'is_featured', 'is_active'];

    protected function casts(): array
    {
        return ['capabilities' => 'array', 'outcomes' => 'array', 'is_featured' => 'boolean', 'is_active' => 'boolean'];
    }
}
