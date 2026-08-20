<!doctype html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="SCHEMA HRM — Nền tảng quản trị nguồn nhân lực hợp nhất cho doanh nghiệp hiện đại.">
    <title>@yield('title', 'SCHEMA — Human enterprise, intelligently connected')</title>
    @vite(['resources/css/app.css', 'resources/css/schema.css', 'resources/js/app.js'])
</head>
<body>
<header class="nav" data-nav>
    <a href="{{ route('home') }}" class="logo">SCHEMA<span>HRM</span></a>
    <nav class="desktop-nav" aria-label="Điều hướng chính">
        <a href="{{ route('products.index') }}">Sản phẩm</a>
        <a href="{{ route('products.index') }}#core-hr">Core HR</a>
        <a href="{{ route('products.index') }}#talent-management">Talent</a>
        <a href="{{ route('products.index') }}#hr-analytics-platform">Analytics</a>
        <a href="{{ route('home') }}#insights">Góc nhìn</a>
    </nav>
    <a class="nav-cta" href="mailto:hello@schema.vn">Đặt lịch demo</a>
    <button class="menu" type="button" aria-label="Mở menu" aria-expanded="false">☰</button>
</header>
<div class="mobile-panel" aria-hidden="true">
    <a href="{{ route('products.index') }}">Tất cả sản phẩm</a><a href="{{ route('products.index') }}#core-hr">Core HR</a><a href="{{ route('products.index') }}#talent-management">Talent Management</a><a href="{{ route('products.index') }}#hr-analytics-platform">Analytics & Platform</a><a href="mailto:hello@schema.vn">Đặt lịch demo</a>
</div>
@yield('content')
<footer>
    <div><a class="logo" href="{{ route('home') }}">SCHEMA<span>HRM</span></a><p>Human enterprise, intelligently connected.<br>Nền tảng HRM dành cho tổ chức đang tăng trưởng.</p></div>
    <div class="footer-links"><a href="{{ route('products.index') }}">Sản phẩm</a><a href="{{ route('home') }}#insights">Góc nhìn</a><a href="mailto:hello@schema.vn">Liên hệ</a></div>
    <small>© {{ date('Y') }} SCHEMA Technologies. All rights reserved.</small>
</footer>
</body>
</html>
