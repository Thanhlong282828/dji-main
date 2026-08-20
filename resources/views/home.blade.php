@extends('layouts.site')
@section('content')
<main>
    <section class="schema-hero reveal">
        <div class="hero-grid"></div><div class="hero-glow"></div>
        <div class="hero-copy">
            <span class="eyebrow">THE OPERATING SYSTEM FOR PEOPLE</span>
            <h1>Workforce,<br><em>made whole.</em></h1>
            <p>SCHEMA kết nối con người, quy trình và dữ liệu trong một nền tảng HRM hợp nhất—được xây dựng cho doanh nghiệp Việt Nam vận hành ở quy mô lớn.</p>
            <div><a class="cta" href="{{ route('products.index') }}">Khám phá nền tảng</a><a class="text-link" href="mailto:hello@schema.vn">Đặt lịch demo ↗</a></div>
        </div>
        <div class="hero-metric"><strong>23</strong><span>phân hệ chuyên sâu</span></div>
        <div class="scroll">SCROLL TO EXPLORE</div>
    </section>

    <section class="trust reveal"><span>ĐƯỢC THIẾT KẾ CHO TỔ CHỨC PHỨC TẠP</span><div><b>12,500+</b> hồ sơ nhân sự</div><div><b>99.95%</b> uptime mục tiêu</div><div><b>24/7</b> audit trail</div></section>

    <section class="manifest reveal">
        <span>01 / ONE SOURCE OF TRUTH</span>
        <h2>Một hệ thống cho toàn bộ<br>vòng đời <em>nhân sự.</em></h2>
        <p>Từ kế hoạch định biên đến tuyển dụng, công–lương, phát triển nhân tài và phân tích dự báo. Không còn dữ liệu rời rạc. Không còn quy trình đứt gãy.</p>
    </section>

    <section class="featured-modules" id="products">
        <div class="section-head reveal"><div><span>SCHEMA PRODUCT SUITE</span><h2>Core intelligence.<br>Human impact.</h2></div><a href="{{ route('products.index') }}">Xem toàn bộ 23 phân hệ →</a></div>
        <div class="module-showcase">
            @foreach($modules as $index => $module)
                <a class="module-feature reveal" href="{{ route('products.show', $module->slug) }}">
                    <span>{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }} / {{ strtoupper($module->pillar) }}</span>
                    <h3>{{ $module->name }}</h3><p>{{ $module->summary }}</p><b>Khám phá phân hệ ↗</b><i>◆</i>
                </a>
            @endforeach
        </div>
    </section>

    <section class="architecture reveal">
        <div><span>02 / PLATFORM ARCHITECTURE</span><h2>Ba tầng.<br>Một trải nghiệm.</h2></div>
        <ol><li><b>01</b><h3>Core HR</h3><p>Cơ cấu, hồ sơ, hợp đồng, công, phép, lương, thuế và bảo hiểm.</p></li><li><b>02</b><h3>Talent Management</h3><p>Tuyển dụng, onboarding, hiệu suất, đào tạo, năng lực và kế nhiệm.</p></li><li><b>03</b><h3>Analytics & Platform</h3><p>Workflow, báo cáo, tích hợp, bảo mật, ESS/MSS và tự động hóa.</p></li></ol>
    </section>

    <section class="stories" id="insights">
        <div class="section-head reveal"><div><span>SCHEMA INSIGHTS</span><h2>Góc nhìn quản trị</h2></div><p>Phân tích chuyên sâu dành cho lãnh đạo nhân sự và doanh nghiệp.</p></div>
        <div class="story-grid">@foreach($articles->take(3) as $article)<a class="story reveal" href="{{ route('articles.show', $article->slug) }}"><img src="{{ $article->hero_image }}" alt="{{ $article->title }}" loading="lazy"><span>{{ $article->category }} / {{ $article->published_at->format('d.m.Y') }}</span><h3>{{ $article->title }}</h3><p>{{ $article->excerpt }}</p><b>Đọc phân tích →</b></a>@endforeach</div>
    </section>

    <section class="enterprise-cta reveal"><span>READY TO REDEFINE HR?</span><h2>Xây dựng một tổ chức<br><em>sẵn sàng cho tương lai.</em></h2><p>Khám phá cách SCHEMA hợp nhất vận hành nhân sự của doanh nghiệp bạn.</p><a class="cta" href="mailto:hello@schema.vn">Đặt lịch tư vấn</a></section>
</main>
@endsection
