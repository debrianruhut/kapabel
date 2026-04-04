<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Kapabel Indonesia Consulting | Expert Financial Advisory & Digital Business Strategy')</title>
    <meta name="description" content="@yield('meta_description', 'Kapabel Indonesia Consulting provides forward thinking financial advisory, tax compliance, and digital business strategies to transform complex regulatory challenges into sustainable growth.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Kapabel Indonesia, Financial Consulting, Tax Advisory Indonesia, Business Strategy, Risk Management, Corporate Finance, Digital Transformation Consultant, Management Consulting Jakarta')">
    <meta name="author" content="@yield('meta_author', 'Kapabel Indonesia Consulting')">
    <meta name="robots" content="index, follow">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}">

    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:title" content="@yield('og_title', 'Kapabel Indonesia Consulting | Strategic Financial Intelligence')">
    <meta property="og:description" content="@yield('og_description', 'Empowering businesses with expert financial advisory and digital forward growth strategies. Transform your regulatory challenges into clear paths for success.')">
    <meta property="og:image" content="@yield('og_image', asset('assets/images/logo_web.png'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Kapabel Indonesia">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', 'Kapabel Indonesia Consulting | Strategic Financial Intelligence')">
    <meta name="twitter:description" content="@yield('og_description', 'Providing forward thinking financial advisory and digital business transformation for sustainable growth.')">
    <meta name="twitter:image" content="@yield('og_image', asset('assets/images/logo_web.png'))">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Raleway:wght@400;600;700;800&family=Roboto:wght@300;400;500&display=swap"
        rel="stylesheet">   
    @stack('styles')
</head>

<body>
    @if(!request()->routeIs('expert') && !request()->routeIs('blog.article'))
        @include('partials.navbar')
    @endif

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>