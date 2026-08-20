@extends('layouts.site')
@section('title', $module->name.' — SCHEMA')
@section('content')
<main class="product-detail">
    <section class="detail-hero reveal"><div class="detail-orbit"></div><span>{{ $module->code }} / {{ strtoupper($module->pillar) }}</span><h1>{{ $module->name }}</h1><p>{{ $module->summary }}</p><a class="cta" href="mailto:hello@schema.vn?subject=Demo {{ rawurlencode($module->name) }}">Yêu cầu demo</a></section>
    <section class="detail-intro reveal"><span>WHY SCHEMA</span><h2>Được thiết kế cho<br>vận hành thực tế.</h2><p>{{ $module->description }}</p></section>
    <section class="capabilities"><div class="section-head reveal"><div><span>CORE CAPABILITIES</span><h2>Mọi thứ bạn cần.<br>Không có phần thừa.</h2></div></div><div class="capability-grid">@foreach($module->capabilities as $index => $capability)<article class="reveal"><b>0{{ $index + 1 }}</b><h3>{{ $capability }}</h3><p>Quy trình cấu hình linh hoạt, phân quyền theo phạm vi và lưu vết đầy đủ trong mọi thao tác.</p></article>@endforeach</div></section>
    <section class="outcomes reveal"><span>BUSINESS OUTCOMES</span><div>@foreach($module->outcomes as $outcome)<p>✓ {{ $outcome }}</p>@endforeach</div></section>
    @if($related->isNotEmpty())<section class="related"><span>EXPLORE THE SUITE</span><div class="module-catalog">@foreach($related as $item)<a class="module-card" href="{{ route('products.show', $item->slug) }}"><small>{{ $item->code }}</small><h3>{{ $item->name }}</h3><p>{{ $item->summary }}</p></a>@endforeach</div></section>@endif
</main>
@endsection
