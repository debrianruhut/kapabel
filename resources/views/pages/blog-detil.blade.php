@extends('layouts.app')

@section('title', $article->title . ' - Kapabel Insights')
@section('meta_description', Str::limit(strip_tags($article->excerpt ?? $article->content), 150))
@section('meta_keywords', 'Kapabel, ' . ($article->category->name ?? 'Insights') . ', ' . implode(', ', $article->tags->pluck('name')->toArray()))
@section('meta_author', $article->user->name ?? 'Kapabel Indonesia')
@section('og_type', 'article')
@section('og_title', $article->title)
@section('og_description', Str::limit(strip_tags($article->excerpt ?? $article->content), 150))
@section('og_image', $article->image ? asset('storage/' . $article->image) : asset('assets/images/logo_web.png'))
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
    
    .article-img { width: 100%; height: 400px; object-fit: cover; border-radius: 12px; margin-bottom: 2rem; }
    .article-content p { line-height: 1.8; margin-bottom: 1.5rem; font-size: 1.05rem; }
    .author-box { background: #F8FAFC; padding: 20px; border-radius: 12px; display: flex; align-items: center; }
    
    footer { background-color: #0F172A; color: #94A3B8; padding-top: 80px; padding-bottom: 30px; }
    footer h5 { color: white; font-family: 'Poppins', sans-serif; margin-bottom: 20px; }
    footer a { color: #94A3B8; text-decoration: none; }
</style>
@endpush
@section('content')
<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand fs-4" href="{{ url('/') }}">
            <i class="text-primary me-2"></i><img src="{{ asset('assets/images/logo_web.png') }}" alt="Kapabel Indonesia Logo" style="height: 43px; vertical-align: middle;"/>
        </a>
        <div class="ms-auto d-flex align-items-center">
            <a href="{{ route('blog') }}" class="btn btn-outline-primary btn-sm rounded-pill px-4 me-0 me-md-3 mb-2 mb-md-0"><i class="bi bi-arrow-left me-2"></i> {{ __('Back to Insights') }}</a>
            <div class="nav-item dropdown d-none d-md-block">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-globe me-1"></i> {{ strtoupper(app()->getLocale()) }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0" aria-labelledby="languageDropdown">
                    <li><a class="dropdown-item py-2 {{ app()->getLocale() == 'en' ? 'active bg-primary text-white' : '' }}" href="{{ route('locale.switch', 'en') }}">🇬🇧 English</a></li>
                    <li><a class="dropdown-item py-2 {{ app()->getLocale() == 'id' ? 'active bg-primary text-white' : '' }}" href="{{ route('locale.switch', 'id') }}">🇮🇩 Indonesia</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<section class="py-5 mt-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="mb-4">
                    <span class="badge bg-primary bg-opacity-10 text-primary mb-3">{{ $article->category->name ?? 'Financial Strategy' }}</span>
                    <h1 class="display-5 fw-bold mb-3">{{ $article->title }}</h1>
                    <div class="d-flex align-items-center text-muted small">
                        <span class="me-3"><i class="bi bi-person-circle me-1"></i> {{ $article->user->name ?? 'Guntur Hidayat, S.S.T., M.Sc., CFS' }}</span>
                        <span class="me-3"><i class="bi bi-calendar3 me-1"></i> {{ $article->created_at->format('F d, Y') }}</span>
                        <span><i class="bi bi-clock me-1"></i> 5 min read</span>
                    </div>
                </div>

                @if($article->image)
                    <img src="{{ asset('storage/' . $article->image) }}" class="article-img shadow-sm" alt="{{ $article->title }}">
                @else
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40" class="article-img shadow-sm" alt="{{ $article->title }}">
                @endif

                <div class="article-content">
                    {!! $article->content !!}
                </div>

                    <hr class="my-5">

                    <div class="author-box">
                        @if($article->user && $article->user->photo)
                        <img src="{{ Storage::disk('public')->url($article->user->photo) }}" class="rounded-circle me-3" width="80" height="80" alt="Author" style="object-fit:cover;">
                        @endif
                        <div>
                            <h6 class="fw-bold mb-1">{{ $article->user->name ?? 'Guntur Hidayat, S.S.T., M.Sc., CFS' }}</h6>
                            <p class="text-muted small mb-2">{{ $article->user->title ?? 'Strategic Tax Partner at Kapabel Indonesia' }}</p>
                            <p class="small mb-0 text-muted">{{ $article->user->bio ?? 'Guntur specializes in strategic tax planning and financial advisory with over 14 years of experience in capital markets and regulatory compliance.' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection