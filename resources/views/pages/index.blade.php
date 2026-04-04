@extends('layouts.app')

@push('styles')
<style>
    :root {
        --primary-navy: #0F172A;
        --accent-color: #3B82F6;
        --text-color: #334155;
        --accent-blue: #2563EB;
        --bg-light: #F8FAFC;
        --bg-dark: #0F172A;
        --bg-black: #000000;
        --text-main: #334155;
        --text-muted: #64748B;
        /* Colors for Expert CTA Section */
        --teal-bg: #2b5b82;
        --orange-btn: #F99D20;
    }

    /* Typography System */
    body {
        font-family: 'Roboto', sans-serif;
        color: var(--text-color);
        overflow-x: hidden;
    }

    h1, h2, h3, h4, h5, h6 {
        font-family: 'Raleway', sans-serif;
        font-weight: 700;
    }

    /* 1. Gunakan Poppins hanya untuk menu & tombol */
    .nav-link, .btn, .badge {
        font-family: 'Poppins', sans-serif;
    }

    /* 2. Gunakan Raleway khusus untuk Logo */
    .navbar-brand {
        font-family: 'Raleway', sans-serif;
        font-weight: 600;
        letter-spacing: -0.5px;
    }

    /* Navbar & Hero */
    .navbar {
        backdrop-filter: blur(10px);
        background-color: rgba(255, 255, 255, 0.98);
        box-shadow: 0 1px 15px rgba(0, 0, 0, 0.04);
        padding: 15px 0;
    }

    .nav-link {
        font-weight: 500;
        color: var(--primary-color) !important;
        margin: 0 10px;
        transition: color 0.3s;
    }

    .nav-link:hover, .nav-link.active {
        color: var(--accent-color) !important;
    }

    .hero-section {
        color: white;
        padding: 160px 0 100px;
        background-color: var(--bg-dark);
        background-image: url('{{ asset("assets/images/bg-pattern-large.png") }}');
        position: relative;
        overflow: hidden;
    }

    /* Components */
    .btn-primary:hover {
        background-color: #2563EB;
        transform: translateY(-2px);
        transition: all 0.3s;
    }

    .service-card {
        border: none;
        padding: 2.5rem;
        border-radius: 12px;
        transition: all 0.3s;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        height: 100%;
        background: white;
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 25px rgba(0, 0, 0, 0.1);
    }

    .icon-box {
        width: 60px;
        height: 60px;
        background: rgba(59, 130, 246, 0.1);
        color: var(--accent-color);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin-bottom: 1.5rem;
    }

    /* NEW: Solutions Bridge Section */
    .solutions-bridge { padding: 80px 0; }
    .custom-tabs { border-bottom: 1px solid #E2E8F0; justify-content: center; gap: 2rem; margin-bottom: 3rem; }
    .custom-tabs .nav-link { border: none; color: var(--text-muted); font-weight: 600; padding: 1rem 0; font-family: 'Poppins', sans-serif; background: transparent; position: relative; font-size: 0.95rem; text-transform: uppercase; letter-spacing: 0.5px; }
    .custom-tabs .nav-link:hover { color: var(--primary-navy); }
    .custom-tabs .nav-link.active { color: var(--primary-navy); }
    .custom-tabs .nav-link.active::after { content: ''; position: absolute; bottom: -1px; left: 0; width: 100%; height: 3px; background-color: var(--teal-bg); }
    .bridge-card-small { background-color: #F8FAFC; border-radius: 12px; padding: 1.5rem; display: flex; flex-direction: column; justify-content: center; min-height: 180px; transition: all 0.3s ease; border: 1px solid transparent; text-decoration: none; color: inherit; }
    .bridge-card-small:hover { border-color: #E2E8F0; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05); transform: translateY(-3px); color: inherit; }
    .bridge-card-small h5 { color: var(--teal-bg); font-size: 1.15rem; margin-bottom: 0.75rem; display: flex; align-items: flex-start; justify-content: space-between; font-family: 'Raleway', sans-serif; }
    .bridge-card-small h5 i { font-size: 1.1rem; transition: transform 0.3s ease; margin-top: 2px; }
    .bridge-card-small:hover h5 i { transform: translateX(5px); }
    .bridge-card-small p { font-size: 0.9rem; color: var(--text-main); margin-bottom: 0; line-height: 1.6; }
    .bridge-card-large { background-color: var(--teal-bg); border-radius: 12px; padding: 2.5rem 2.5rem 0; height: 100%; min-height: 400px; color: white; display: flex; flex-direction: column; overflow: hidden; position: relative; text-decoration: none; transition: transform 0.3s ease; }
    .bridge-card-large:hover { transform: translateY(-3px); box-shadow: 0 10px 30px rgba(43, 130, 127, 0.2); color: white; }
    .bridge-card-large h3 { color: white; margin-bottom: 1rem; font-size: 1.8rem; display: flex; align-items: center; justify-content: space-between; }
    .bridge-card-large h3 i { font-size: 1.5rem; transition: transform 0.3s ease; }
    .bridge-card-large:hover h3 i { transform: translateX(8px); }
    .bridge-card-large p { color: rgba(255, 255, 255, 0.9); font-size: 1.05rem; margin-bottom: 2rem; position: relative; z-index: 2; }
    .solution-bridge .bridge-card-large .cent-illustration { margin-top: auto; position: relative; width: 100%; bottom: -24px; }
    .bridge-svg { width: 100%; max-width: 320px; margin: auto auto -10px; display: block; position: relative; z-index: 1; transition: transform 0.5s ease; filter: drop-shadow(0 15px 20px rgba(0, 0, 0, 0.15)); }
    .bridge-card-large:hover .bridge-svg { transform: scale(1.03) translateY(-5px); }

    /* Team Images */
    .team-img { height: 350px; object-fit: cover; object-position: top; width: 100%; }

    /* Expert CTA Section */
    .expert-section { padding: 60px 0; }
    .expert-card { background-color: var(--teal-bg); border-radius: 20px; position: relative; padding: 50px 40px; background-image: radial-gradient(rgba(255, 255, 255, 0.1) 2px, transparent 2px); background-size: 30px 30px; }
    .btn-expert { background-color: var(--orange-btn); color: #111827; border-radius: 6px; font-weight: 700; letter-spacing: 0.5px; transition: all 0.3s ease; }
    .btn-expert:hover { background-color: #E08A19; color: #111827; transform: translateY(-2px); box-shadow: 0 10px 20px rgba(249, 157, 32, 0.3); }
    .expert-illustration { position: absolute; bottom: 0; right: 5%; height: 125%; max-width: 300px; z-index: 10; pointer-events: none; }

    /* Accordion Custom */
    .accordion-button { font-family: 'Poppins', sans-serif; font-weight: 600; color: var(--primary-navy); padding: 1.5rem 1.25rem; }
    .accordion-button:not(.collapsed) { background-color: var(--bg-light); color: var(--accent-blue); box-shadow: none; }
    .accordion-button:focus { box-shadow: none; border-color: rgba(0, 0, 0, .125); }
    .accordion-item { border-left: none; border-right: none; border-top: none; }

    /* Footer */
    footer { background-color: #0F172A; color: #94A3B8; padding-top: 80px; padding-bottom: 30px; font-family: 'Roboto', sans-serif; }
    footer h5 { color: white; font-family: 'Poppins', sans-serif; margin-bottom: 20px; }
    footer a { color: #94A3B8; text-decoration: none; transition: 0.3s; }
    footer a:hover { color: var(--accent-color); }
</style>
@endpush

@section('content')

<section class="hero-section d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <span class="badge bg-primary bg-opacity-25 text-info mb-3 px-3 py-2 rounded-pill">{{ __('Premier Financial Advisory') }}</span>
                <h1 class="display-4 mb-4 lh-tight"> {{ __('Indonesia\'s Hub for') }}<br><span class="text-info"> Financial, Tax, and Business Consultants.</span></h1>
                <p class="lead mb-4 text-white fw-light">{{ __('Find the Right Consultant. Grow Your Business.') }}</p>
                <div class="d-flex gap-3">
                    <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg text-white">{{ __('Schedule Consultation') }}</a>
                    <a href="{{ url('/services') }}" class="btn btn-outline-light btn-lg">{{ __('Explore Expertise') }}</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('assets/images/banner_kapabelindonesia.jpg') }}" alt="Financial Growth"
                    class="img-fluid rounded-4 shadow-lg border border-secondary border-opacity-25">
            </div>
        </div>
    </div>
</section>

<section id="services" class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h6 class="text-primary fw-bold text-uppercase ls-wide" style="font-family: 'Poppins', sans-serif;">Our Expertise</h6>
            <h2 class="display-6 fw-bold">{{ __('Strategic Tax Integrity, Empowered Financial Growth') }}</h2>
            <p class="text-muted col-md-8 mx-auto">From rigorous tax planning to insightful financial advisory, we provide the expert-led solutions your business needs to navigate complexity and expand with confidence.</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="service-card h-100 bg-white p-4 rounded-4 shadow-sm border-0 transition-hover">
                    <div class="icon-box mb-4"><i class="bi bi-compass fs-2"></i></div>
                    <h4 class="mb-3">{{ __('Tax Compliance & Planning') }}</h4>
                    <p class="text-muted small mb-4">We align your business with the latest tax laws while proactively structuring your finances to minimize liabilities and maximize cash flow.</p>
                    <ul class="list-unstyled text-muted small">
                        <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>{{ __('Corporate & Individual Tax Filing') }}</li>
                        <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>{{ __('Strategic Tax Planning') }}</li>
                        <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>{{ __('Tax Audit Support') }}</li>
                    </ul>
                    <a href="{{ url('/services') }}" class="text-decoration-none">{{ __('Learn More') }} <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card h-100 bg-white p-4 rounded-4 shadow-sm border-0 transition-hover">
                    <div class="icon-box mb-4"><i class="bi bi-arrow-repeat fs-2"></i></div>
                    <h4 class="mb-3">{{ __('Tax Education') }}</h4>
                    <p class="text-muted small mb-4">We bridge the knowledge gap by turning complex tax regulations into actionable internal processes for your team.</p>
                    <ul class="list-unstyled text-muted small">
                        <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>{{ __('Customized In-House Training') }}</li>
                        <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>{{ __('Regulatory Update Briefings') }}</li>
                        <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>{{ __('Executive Tax Literacy') }}</li>
                    </ul>
                    <a href="{{ url('/services') }}" class="text-decoration-none">{{ __('Learn More') }} <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card h-100 bg-white p-4 rounded-4 shadow-sm border-0 transition-hover">
                    <div class="icon-box mb-4"><i class="bi bi-graph-up-arrow fs-2"></i></div>
                    <h4 class="mb-3">{{ __('Financial Advisory') }}</h4>
                    <p class="text-muted small mb-4">Expert guidance on capital structure, risk mitigation, and financial health to ensure sustainable profitability and compliance.</p>
                    <ul class="list-unstyled text-muted small">
                        <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>{{ __('Financial Modeling & Projections') }}</li>
                        <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>{{ __('Strategic Financial Advisory') }}</li>
                        <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>{{ __('Business Feasibility & Market Studies') }}</li>
                    </ul>
                    <a href="{{ url('/services') }}" class="text-decoration-none">{{ __('Learn More') }} <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="solutions-bridge bg-white">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="display-5 fw-bold text-dark">{{ __('Solutions that Bridge Your Gaps') }}</h2>
        </div>

        <ul class="nav nav-tabs custom-tabs" id="bridgeTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="manfaat-tab" data-bs-toggle="tab" data-bs-target="#manfaat"
                    type="button" role="tab" aria-controls="manfaat" aria-selected="true">{{ __('Platform Benefits') }}</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="carakerja-tab" data-bs-toggle="tab" data-bs-target="#carakerja"
                    type="button" role="tab" aria-controls="carakerja" aria-selected="false">{{ __('How It Works') }}</button>
            </li>
        </ul>

        <div class="tab-content" id="bridgeTabsContent">

            <div class="tab-pane fade show active" id="manfaat" role="tabpanel" aria-labelledby="manfaat-tab">
                <div class="row g-4 align-items-stretch">
                    <div class="col-lg-3 d-flex flex-column gap-4">
                        <a href="{{ url('/services') }}" class="bridge-card-small">
                            <h5>{{ __('Build a Strategic Roadmap') }} <i class="bi bi-arrow-right"></i></h5>
                            <p>{{ __('Gain financial insights & strategic leadership to confidently scale your business.') }}</p>
                        </a>
                        <a href="{{ url('/services') }}" class="bridge-card-small">
                            <h5>{{ __('Strengthen Decision Making') }} <i class="bi bi-arrow-right"></i></h5>
                            <p>{{ __('Boost forecasting and analytics to mitigate risks and act on new opportunities.') }}</p>
                        </a>
                    </div>

                    <div class="col-lg-6">
                        <a href="{{ url('/services') }}" class="bridge-card-large">
                            <h3>{{ __('Get Accurate, Organized Books') }} <i class="bi bi-arrow-right"></i></h3>
                            <p>Reduce stress on your lean team with day-to-day accounting and financial support from top experts.</p>
                            <div class="cent-illustration">
                                <img decoding="async"
                                    src="https://paro.ai/wp-content/uploads/2024/08/For-Businesses-illustration.png"
                                    alt="For Accounting Firms illustration" title="Home 8">
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 d-flex flex-column gap-4">
                        <a href="{{ url('/services') }}" class="bridge-card-small">
                            <h5>{{ __('Manage Taxes & Stay Compliant') }} <i class="bi bi-arrow-right"></i></h5>
                            <p>{{ __('Ensure regulatory compliance with a strong tax strategy and audit-ready reports.') }}</p>
                        </a>
                        <a href="{{ url('/services') }}" class="bridge-card-small">
                            <h5>{{ __('Drive Discipline and Efficiency') }} <i class="bi bi-arrow-right"></i></h5>
                            <p>{{ __('Streamline financial processes and optimize systems to keep pace with your growth.') }}</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="carakerja" role="tabpanel" aria-labelledby="carakerja-tab">
                <div class="row g-4 align-items-stretch">
                    <div class="col-lg-3 d-flex flex-column gap-4">
                        <div class="bridge-card-small">
                            <h5>{{ __('Step 1: Identify Needs') }} <i class="bi bi-arrow-right"></i></h5>
                            <p>Conduct an initial consultation session to deeply understand your challenges and specific targets.</p>
                        </div>
                        <div class="bridge-card-small">
                            <h5>{{ __('Step 2: Consultant Matching') }} <i class="bi bi-arrow-right"></i></h5>
                            <p>We carefully select and pair you with an expert who possesses the most relevant industry experience.</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <a href="{{ url('/contact') }}" class="bridge-card-large">
                            <h3>{{ __('Start Projects Faster & On Target') }} <i class="bi bi-arrow-right"></i></h3>
                            <p>Avoid long recruitment cycles. Access executive-level consulting talent instantly and build your elite team on demand.</p>
                            <div class="cent-illustration">
                                <img decoding="async"
                                    src="https://paro.ai/wp-content/uploads/2024/08/For-Accounting-Firms-illustration.png"
                                    alt="For Accounting Firms illustration" title="Home 8">
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 d-flex flex-column gap-4">
                        <div class="bridge-card-small">
                            <h5>{{ __('Step 3: Integrated Execution') }} <i class="bi bi-arrow-right"></i></h5>
                            <p>Our experts work seamlessly alongside your internal team to execute and implement the agreed strategies.</p>
                        </div>
                        <div class="bridge-card-small">
                            <h5>{{ __('Step 4: Evaluate & Scale') }} <i class="bi bi-arrow-right"></i></h5>
                            <p>Regularly review performance metrics and adjust the level of support as your business continues to grow.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="row align-items-end mb-5">
            <div class="col-md-8">
                <h6 class="text-primary fw-bold text-uppercase">{{ __('The Minds Behind Kapabel Indonesia') }}</h6>
                <h2 class="display-6 mb-0">{{ __('Meet Our Experts') }}</h2>
            </div>
            <div class="col-md-4 text-md-end">
                <a href="{{ route('experts.index') }}" class="btn btn-outline-primary">{{ __('View All Experts') }} &rarr;</a>
            </div>
        </div>

        <div class="row g-4">
            @foreach($experts as $expert)
            <div class="col-md-3">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ Storage::disk('public')->url($expert->photo) }}" class="card-img-top team-img" alt="{{ $expert->name }}" onerror="this.onerror=null; this.src='{{ asset('assets/images/user-placeholder.png') }}';">
                    <div class="card-body p-4">
                        <h5 class="mb-1">{{ $expert->name }}</h5>
                        <p class="text-primary small mb-3">{{ $expert->position }}</p>
                        <p class="text-muted small">{{ Str::limit(strip_tags($expert->bio), 120) }}</p>
                        <a href="{{ url('/expert/' . $expert->slug) }}" class="text-decoration-none small mt-2 d-inline-block">{{ __('View Profile') }} &rarr;</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-end mb-5">
            <div>
                <h6 class="text-primary fw-bold text-uppercase">{{ __('Our Blog') }}</h6>
                <h2 class="fw-bold display-6">{{ __('Latest Insights') }}</h2>
            </div>
            <a href="{{ url('/blog') }}" class="btn btn-outline-primary d-none d-md-block">{{ __('View All Insights') }} &rarr;</a>
        </div>

        <div class="row g-4">
            @forelse($articles as $article)
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    @if($article->image)
                        <img src="{{ asset('storage/' . $article->image) }}" class="card-img-top" alt="{{ $article->title }}" style="height: 200px; object-fit: cover;">
                    @else
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            class="card-img-top" alt="{{ $article->title }}" style="height: 200px; object-fit: cover;">
                    @endif
                    <div class="card-body p-4">
                        <span class="badge bg-primary bg-opacity-10 text-primary mb-2">{{ $article->category->name ?? 'Insight' }}</span>
                        <h5 class="fw-bold mb-3"><a href="{{ route('blog.article', $article->slug) }}"
                                class="text-decoration-none text-dark">{{ $article->title }}</a></h5>
                        <p class="text-muted small mb-4">{{ Str::limit(strip_tags($article->excerpt ?? $article->content), 80) }}</p>
                        <a href="{{ route('blog.article', $article->slug) }}" class="text-primary small text-decoration-none">{{ __('Read Article') }}
                            &rarr;</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-4">
                <p class="text-muted">Stay tuned! Exciting insights are on the way.</p>
            </div>
            @endforelse
        </div>
        <div class="text-center mt-4 d-md-none">
            <a href="{{ url('/blog') }}" class="btn btn-outline-primary">{{ __('View All Articles') }}</a>
        </div>
    </div>
</section>

<section class="expert-section bg-white mt-4">
    <div class="container">
        <div class="expert-card shadow-lg">
            <div class="row align-items-center position-relative" style="z-index: 2;">
                <div class="col-lg-6 mb-4 mb-lg-0 pe-lg-5">
                    <h2 class="text-white fw-bold mb-3 display-6 font-raleway">{{ __('Become a Kapabel Expert') }}</h2>
                    <p class="text-white opacity-75 fs-6 lh-lg mb-0 font-roboto">
                        Join an elite network of professionals and get the tools to build your own independent business. We are looking for top-tier financial and strategic talents.
                    </p>
                </div>

                <div class="col-lg-3 text-lg-center">
                    <a href="{{ url('/register') }}" class="btn btn-expert px-4 py-3 text-uppercase">{{ __('APPLY AS AN EXPERT') }}</a>
                </div>
            </div>

            <img src="https://cdn3d.iconscout.com/3d/premium/thumb/businessman-sitting-on-coin-stack-and-using-laptop-4035655-3342614.png"
                alt="" class="expert-illustration d-none d-lg-block" onerror="this.style.display='none'">
        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h6 class="text-primary fw-bold text-uppercase">{{ __('FAQ') }}</h6>
                    <h2 class="fw-bold">{{ __('Frequently Asked Questions') }}</h2>
                </div>

                <div class="accordion accordion-flush" id="faqAccordion">
                    <div class="accordion-item border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-bold py-4 collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq1">
                                {{ __('How does your pricing structure work?') }}
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                We offer flexible pricing models tailored to project scope. This includes hourly rates for advisory sessions, fixed-project fees for defined deliverables (like audits), and retainer models for ongoing support.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-bold py-4 collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq2">
                                {{ __('Which industries do you specialize in?') }}
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Our core expertise covers Manufacturing, Fintech, Retail, and Healthcare sectors. However, our strategic frameworks are adaptable to most B2B and B2C industries.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-bold py-4 collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq3">
                                {{ __('How do I start a consultation?') }}
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Simply click the "Get in Touch" button. We offer a complimentary 30-minute initial discovery call to understand your challenges and determine if we are the right fit.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection