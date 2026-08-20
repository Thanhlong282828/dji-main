<?php

namespace Database\Seeders;

use App\Models\ProductModule;
use Illuminate\Database\Seeder;

final class ProductModuleSeeder extends Seeder
{
    public function run(): void
    {
        foreach (config('hrm.modules') as $index => [$slug, $name, $pillar, $summary, $capabilities]) {
            ProductModule::query()->updateOrCreate(['slug' => $slug], [
                'code' => 'SCM-'.str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT),
                'name' => $name,
                'pillar' => $pillar,
                'summary' => $summary,
                'description' => "SCHEMA {$name} được thiết kế cho doanh nghiệp vừa và lớn, vận hành trên một nguồn dữ liệu thống nhất. Phân hệ kết hợp workflow có kiểm soát, phân quyền theo phạm vi và báo cáo thời gian thực để giảm thao tác thủ công, tăng tính tuân thủ và tạo trải nghiệm nhất quán cho toàn tổ chức.",
                'capabilities' => $capabilities,
                'outcomes' => ['Dữ liệu thống nhất và kiểm toán được', 'Rút ngắn thời gian vận hành', 'Ra quyết định dựa trên dữ liệu'],
                'sort_order' => $index + 1,
                'is_featured' => $index < 6,
                'is_active' => true,
            ]);
        }
    }
}
