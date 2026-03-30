@extends('layouts.app')
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
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40" class="blog-card-img" alt="Blog 1">
                            <div class="card-body p-4">
                                <div class="mb-2 text-muted small"><i class="bi bi-calendar3 me-2"></i> Oct 24, 2024</div>
                                <h5 class="fw-bold"><a href="blog-detail.html" class="text-decoration-none text-dark">Navigating Market Volatility</a></h5>
                                <p class="text-muted small">Strategies for maintaining liquidity during uncertain times.</p>
                                <a href="blog-detail.html" class="text-primary small text-decoration-none">Read More &rarr;</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692" class="blog-card-img" alt="Blog 2">
                            <div class="card-body p-4">
                                <div class="mb-2 text-muted small"><i class="bi bi-calendar3 me-2"></i> Oct 18, 2024</div>
                                <h5 class="fw-bold"><a href="blog-detail.html" class="text-decoration-none text-dark">AI in Financial Auditing</a></h5>
                                <p class="text-muted small">How AI is automating compliance and reducing error.</p>
                                <a href="blog-detail.html" class="text-primary small text-decoration-none">Read More &rarr;</a>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216" class="blog-card-img" alt="Blog 3">
                            <div class="card-body p-4">
                                <div class="mb-2 text-muted small"><i class="bi bi-calendar3 me-2"></i> Sep 30, 2024</div>
                                <h5 class="fw-bold"><a href="blog-detail.html" class="text-decoration-none text-dark">Remote Work Culture</a></h5>
                                <p class="text-muted small">Building high-performance teams across different timezones.</p>
                                <a href="blog-detail.html" class="text-primary small text-decoration-none">Read More &rarr;</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f" class="blog-card-img" alt="Blog 4">
                            <div class="card-body p-4">
                                <div class="mb-2 text-muted small"><i class="bi bi-calendar3 me-2"></i> Sep 15, 2024</div>
                                <h5 class="fw-bold"><a href="blog-detail.html" class="text-decoration-none text-dark">Tax Regulation Updates</a></h5>
                                <p class="text-muted small">What the new 2025 fiscal policies mean for your corporation.</p>
                                <a href="blog-detail.html" class="text-primary small text-decoration-none">Read More &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>

                <nav class="mt-5">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link bg-primary border-primary" href="#">1</a></li>
                        <li class="page-item"><a class="page-link text-primary" href="#">2</a></li>
                        <li class="page-item"><a class="page-link text-primary" href="#">3</a></li>
                        <li class="page-item"><a class="page-link text-primary" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>

            <div class="col-lg-4 mt-5 mt-lg-0 ps-lg-5">
                <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
                    <h5 class="fw-bold mb-3">Search</h5>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Keywords...">
                        <button class="btn btn-primary text-white"><i class="bi bi-search"></i></button>
                    </div>
                </div>

                <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
                    <h5 class="fw-bold mb-3">Categories</h5>
                    <a href="#" class="category-link">Financial Strategy <span class="float-end text-muted small">(12)</span></a>
                    <a href="#" class="category-link">Tax Advisory <span class="float-end text-muted small">(8)</span></a>
                    <a href="#" class="category-link">Business Tech <span class="float-end text-muted small">(5)</span></a>
                    <a href="#" class="category-link">Human Resources <span class="float-end text-muted small">(4)</span></a>
                    <a href="#" class="category-link">Case Studies <span class="float-end text-muted small">(7)</span></a>
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