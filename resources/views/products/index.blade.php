@extends('layouts.site')
@section('title', 'Nền tảng HRM — SCHEMA')
@section('content')
<main class="products-page">
    <section class="products-hero reveal"><span>SCHEMA PRODUCT SUITE / 23 MODULES</span><h1>Everything your people<br>operation <em>needs.</em></h1><p>Một kiến trúc module linh hoạt, đủ sâu cho doanh nghiệp lớn và đủ mở để phát triển theo từng giai đoạn.</p></section>
    @foreach($modules as $pillar => $items)
        <section class="pillar" id="{{ Str::slug($pillar) }}"><div class="pillar-title reveal"><span>0{{ $loop->iteration }}</span><div><h2>{{ $pillar }}</h2><p>{{ $pillar === 'Core HR' ? 'Nền móng dữ liệu và vận hành nhân sự.' : ($pillar === 'Talent Management' ? 'Thu hút, phát triển và giữ chân nhân tài.' : 'Dữ liệu, quy trình và năng lực nền tảng.') }}</p></div></div><div class="module-catalog">@foreach($items as $module)<a class="module-card reveal" href="{{ route('products.show', $module->slug) }}"><small>{{ $module->code }}</small><h3>{{ $module->name }}</h3><p>{{ $module->summary }}</p><span>Khám phá →</span></a>@endforeach</div></section>
    @endforeach
</main>
@endsection
