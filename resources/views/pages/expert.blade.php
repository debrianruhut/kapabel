@extends('layouts.app')

@section('title', 'Our Experts - Kapabel Indonesia')
@section('meta_description', 'Meet Kapabel Indonesia\'s team of professional financial consultants, tax advisors, and business strategists.')
@section('meta_keywords', 'Kapabel Experts, Financial Consultants Jakarta, Tax Advisors Indonesia, Business Strategy Consultants')
@section('og_title', 'Our Experts | Kapabel Indonesia')
@section('og_description', 'Discover our team of experienced consultants and advisors ready to scale your business.')
@push('styles')
<style>
    :root { --primary-color: #0F172A; --accent-color: #3B82F6; --text-color: #334155; }
    body { font-family: 'Roboto', sans-serif; color: var(--text-color); }
    h1, h2, h3, h4, h5 { font-family: 'Raleway', sans-serif; font-weight: 700; }
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
    .nav-link { font-weight: 500;color: var(--primary-color) !important; margin: 0 10px; }
    .nav-link:hover, .nav-link.active { color: var(--accent-color) !important; }
    .page-header { background: #0F172A; padding: 140px 0 80px; color: white; }
    
    .blog-card-img { height: 260px; object-fit: cover; object-position: top; width: 100%; border-bottom: 3px solid #E2E8F0; }
    .category-link { display: block; padding: 10px 0; color: #64748B; text-decoration: none; border-bottom: 1px solid #E2E8F0; transition: 0.2s; }
    .category-link:hover { color: var(--accent-color); padding-left: 5px; }
    
    footer { background-color: #0F172A; color: #94A3B8; padding-top: 80px; padding-bottom: 30px; }
    footer h5 { color: white; font-family: 'Poppins', sans-serif; margin-bottom: 20px; }
    footer a { color: #94A3B8; text-decoration: none; }
</style>
@endpush
@section('content')
<section class="page-header">
    <div class="container text-center">
        <h1 class="display-5 fw-bold">Our Experts</h1>
        <p class="lead text-white-50">Discover our team of experienced consultants.</p>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row g-4">
                    @forelse($experts as $expert)
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden text-center">
                            <img src="{{ Storage::disk('public')->url($expert->photo) }}" class="blog-card-img" alt="{{ $expert->name }}" onerror="this.onerror=null; this.src='{{ asset('assets/images/user-placeholder.png') }}';">
                            <div class="card-body p-4">
                                <h5 class="fw-bold mb-1"><a href="{{ route('expert', $expert->slug) }}" class="text-decoration-none text-dark">{{ $expert->name }}</a></h5>
                                <p class="text-primary small mb-3 fw-bold">{{ $expert->position }}</p>
                                <p class="text-muted small">{{ Str::limit(strip_tags($expert->bio), 80) }}</p>
                                <a href="{{ route('expert', $expert->slug) }}" class="btn btn-outline-primary btn-sm rounded-pill mt-2 px-4">View Profile &rarr;</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center py-5">
                        <p class="text-muted">No experts found matching your criteria.</p>
                    </div>
                    @endforelse
                </div>

                @if(method_exists($experts, 'links'))
                <nav class="mt-5">
                    {{ $experts->links('pagination::bootstrap-5') }}
                </nav>
                @endif
            </div>

            <div class="col-lg-4 mt-5 mt-lg-0 ps-lg-5">
                <form action="{{ route('experts.index') }}" method="GET" class="bg-white p-4 rounded-4 shadow-sm mb-4">
                    <h5 class="fw-bold mb-3">Search</h5>
                    <div class="input-group">
                        <input type="hidden" name="position" value="{{ request('position') }}">
                        <input type="text" name="search" class="form-control" placeholder="Search name..." value="{{ request('search') }}">
                        <button type="submit" class="btn btn-primary text-white"><i class="bi bi-search"></i></button>
                    </div>
                </form>

                <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
                    <h5 class="fw-bold mb-3">Positions</h5>
                    <a href="{{ route('experts.index', ['search' => request('search')]) }}" class="category-link {{ !request('position') ? 'text-primary fw-bold' : '' }}">All Positions</a>
                    @foreach($positions as $pos)
                    <a href="{{ route('experts.index', ['position' => $pos, 'search' => request('search')]) }}" class="category-link {{ request('position') == $pos ? 'text-primary fw-bold' : '' }}">
                        {{ $pos }}
                    </a>
                    @endforeach
                </div>

                <div class="bg-primary p-4 rounded-4 shadow-sm text-white text-center">
                    <h5 class="fw-bold mb-2">Join Our Team</h5>
                    <p class="small text-white-50 mb-4">Looking to build your own independent consulting business?</p>
                    <a href="{{ url('/contact') }}" class="btn btn-light text-primary fw-bold w-100 mb-2">Apply as an Expert</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection