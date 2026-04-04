@extends('layouts.app')

@section('title', 'Latest Insights & News - Kapabel Indonesia')
@section('meta_description', 'Read our latest perspectives and insights on financial strategy, tax compliance, and business technologies.')
@section('meta_keywords', 'Kapabel Blog, Financial News, Tax Updates Indonesia, Business Strategy Articles, Accounting Insights')
@section('og_title', 'Insights & News | Kapabel Indonesia')
@section('og_description', 'Discover our expert perspectives on finance, strategy, and technology.')
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
    
    .blog-card-img { height: 240px; object-fit: cover; width: 100%; }
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
        <h1 class="display-5 fw-bold">Insights & News</h1>
        <p class="lead text-white-50">Expert perspectives on finance, strategy, and technology.</p>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row g-4">
                    @forelse($articles as $article)
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                            @if($article->image)
                                <img src="{{ asset('storage/' . $article->image) }}" class="blog-card-img" alt="{{ $article->title }}">
                            @else
                                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40" class="blog-card-img" alt="{{ $article->title }}">
                            @endif
                            <div class="card-body p-4">
                                <div class="mb-2 text-muted small"><i class="bi bi-calendar3 me-2"></i> {{ $article->created_at->format('M d, Y') }}</div>
                                <h5 class="fw-bold"><a href="{{ route('blog.article', $article->slug) }}" class="text-decoration-none text-dark">{{ $article->title }}</a></h5>
                                <p class="text-muted small">{{ Str::limit(strip_tags($article->excerpt ?? $article->content), 80) }}</p>
                                <a href="{{ route('blog.article', $article->slug) }}" class="text-primary small text-decoration-none">Read More &rarr;</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center py-5">
                        <p class="text-muted">Stay tuned! Exciting insights are on the way.</p>
                    </div>
                    @endforelse
                </div>

                @if(method_exists($articles, 'links'))
                <nav class="mt-5">
                    {{ $articles->links('pagination::bootstrap-5') }}
                </nav>
                @endif
            </div>

            <div class="col-lg-4 mt-5 mt-lg-0 ps-lg-5">
                <form action="{{ route('blog') }}" method="GET" class="bg-white p-4 rounded-4 shadow-sm mb-4">
                    <h5 class="fw-bold mb-3">Search</h5>
                    <div class="input-group">
                        <input type="hidden" name="category" value="{{ request('category') }}">
                        <input type="hidden" name="tag" value="{{ request('tag') }}">
                        <input type="text" name="search" class="form-control" placeholder="Keywords..." value="{{ request('search') }}">
                        <button type="submit" class="btn btn-primary text-white"><i class="bi bi-search"></i></button>
                    </div>
                </form>

                <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
                    <h5 class="fw-bold mb-3">Categories</h5>
                    <a href="{{ route('blog', ['search' => request('search'), 'tag' => request('tag')]) }}" class="category-link {{ !request('category') ? 'text-primary fw-bold' : '' }}">All Categories</a>
                    @foreach($categories as $cat)
                    <a href="{{ route('blog', ['category' => $cat->slug, 'search' => request('search'), 'tag' => request('tag')]) }}" class="category-link {{ request('category') == $cat->slug ? 'text-primary fw-bold' : '' }}">
                        {{ $cat->name }} <span class="float-end text-muted small">({{ $cat->articles_count }})</span>
                    </a>
                    @endforeach
                </div>

                <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
                    <h5 class="fw-bold mb-3">Tags</h5>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="{{ route('blog', ['search' => request('search'), 'category' => request('category')]) }}" class="badge bg-{{ !request('tag') ? 'primary' : 'light text-dark' }} text-decoration-none">All Tags</a>
                        @foreach($tags as $tagObj)
                        <a href="{{ route('blog', ['tag' => $tagObj->slug, 'search' => request('search'), 'category' => request('category')]) }}" class="badge bg-{{ request('tag') == $tagObj->slug ? 'primary' : 'light text-dark' }} text-decoration-none border">
                            {{ $tagObj->name }}
                        </a>
                        @endforeach
                    </div>
                </div>

                <div class="bg-primary p-4 rounded-4 shadow-sm text-white text-center">
                    <h5 class="fw-bold mb-2">Subscribe</h5>
                    <p class="small text-white-50 mb-3">Get the latest insights delivered to your inbox.</p>
                    <input type="email" class="form-control mb-2" placeholder="Your Email">
                    <button class="btn btn-light text-primary fw-bold w-100">Join Newsletter</button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection