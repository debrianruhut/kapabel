@extends('layouts.app')

@section('title', 'About Us - Kapabel Indonesia')
@section('meta_description', 'Learn about Kapabel Indonesia, our history, and our founding board of directors dedicated to operational excellence since 2022.')
@section('og_title', 'Who We Are | Kapabel Indonesia')
@section('og_description', 'Driving financial clarity and operational excellence. Meet the founders of Kapabel.')
@push('styles')
<style>
    :root { --primary-color: #0F172A; --accent-color: #3B82F6; --text-color: #334155; }
    body { font-family: 'Roboto', sans-serif; color: var(--text-color); }
    h1, h2, h3, h4, h5, h6 { font-family: 'Raleway', sans-serif; font-weight: 700; }
    /* 1. Gunakan Poppins hanya untuk menu & tombol */
    .nav-link, .btn, .badge { 
        font-family: 'Poppins', sans-serif;
    }

    /* 2. Gunakan Raleway khusus untuk Logo */
    .navbar-brand { 
        font-family: 'Raleway', sans-serif; 
        font-weight: 600; /* Extra Bold agar tegas seperti logo */
        letter-spacing: -0.5px; /* Sedikit dirapatkan agar elegan */
    }
    .navbar { background-color: white; box-shadow: 0 1px 15px rgba(0,0,0,0.04); padding: 15px 0; }
    .nav-link { font-weight: 500;color: var(--primary-color) !important; margin: 0 10px; transition: color 0.3s; }
    .nav-link:hover, .nav-link.active { color: var(--accent-color) !important; }
    .page-header { background-color: var(--primary-color); padding: 140px 0 60px; color: white; }
    .team-img { height: 320px; object-fit: cover; height: 100%; transition: transform 0.3s; }
    .card:hover .team-img { transform: scale(1.03); }
    .card { overflow: hidden; }

    footer { background-color: #0F172A; color: #94A3B8; padding-top: 80px; padding-bottom: 30px; font-family: 'Roboto', sans-serif; }
    footer h5 { color: white; font-family: 'Poppins', sans-serif; margin-bottom: 20px; }
    footer a { color: #94A3B8; text-decoration: none; transition: 0.3s; }
    footer a:hover { color: var(--accent-color); }
</style>
@endpush
@section('content')
<section class="page-header">
    <div class="container text-center">
        <h1 class="display-5 fw-bold">Who We Are</h1>
        <p class="lead text-white-50">Driving financial clarity and operational excellence since 2022.</p>
    </div>
</section>

<section class="py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Office Culture" class="img-fluid rounded-4 shadow-sm">
            </div>
            <div class="col-lg-6 ps-lg-5">
                <h6 class="text-primary fw-bold text-uppercase">Our Story</h6>
                <h2 class="fw-bold mb-4">More Than Just Accountants.</h2>
                <p class="text-muted mb-4">Kapabel Indonesia began with a simple mission: to bridge the gap between complex regulatory requirements and practical business strategy.</p>
                <p class="text-muted mb-4">Established in 2022 by finance professionals with global experience (Indonesia–USA), we bring over a decade of local market expertise, integrity, and accountability to every project. We are committed to unlocking your potential and solving your critical business challenges. Your growth is our goal.</p>
                <p class="text-muted">We believe that financial data shouldn't just be reported—it should be leveraged.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h6 class="text-primary fw-bold text-uppercase">Our Team</h6>
            <h2 class="fw-bold">Meet the Founder</h2>
        </div>
        <div class="row g-4">
            @foreach($experts as $expert)
            <div class="col-md-3">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ Storage::disk('public')->url($expert->photo) }}" class="team-img" alt="{{ $expert->name }}" onerror="this.onerror=null; this.src='{{ asset('assets/images/user-placeholder.png') }}';">
                    <div class="card-body text-center p-4">
                        <h5 class="fw-bold mb-1">{{ $expert->name }}</h5>
                        <p class="text-muted small mb-3">{{ $expert->position }}</p>
                        <a href="{{ route('expert', $expert->slug) }}" class="btn btn-outline-primary btn-sm rounded-pill px-4">{{ __('View Profile') }}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection