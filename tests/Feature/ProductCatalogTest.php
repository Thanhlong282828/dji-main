<?php

namespace Tests\Feature;

use App\Models\ProductModule;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

final class ProductCatalogTest extends TestCase
{
    use RefreshDatabase;

    public function test_product_catalog_and_detail_are_routable(): void
    {
        $module = ProductModule::query()->create(['code' => 'SCM-01', 'slug' => 'organization', 'name' => 'Cơ cấu tổ chức', 'pillar' => 'Core HR', 'summary' => 'Quản trị tổ chức', 'description' => 'Mô tả', 'capabilities' => ['Định biên'], 'outcomes' => ['Dữ liệu đúng'], 'is_active' => true]);

        $this->get('/san-pham')->assertOk()->assertSee('Cơ cấu tổ chức');
        $this->get('/san-pham/'.$module->slug)->assertOk()->assertSee('Định biên');
    }
}
