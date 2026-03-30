@extends('layouts.app')

@push('styles')
<style>
    :root { 
        --primary-navy: #0A192F; 
        --accent-blue: #2563EB;  
        --bg-light: #F8FAFC;
        --text-main: #334155;
        --text-muted: #64748B;
    }
    
    body { font-family: 'Roboto', sans-serif; color: var(--text-main); background-color: var(--bg-light); overflow-x: hidden; }
    h1, h2, h3, h4, h5 { font-family: 'Raleway', sans-serif; font-weight: 700; }
    .nav-link, .btn, .badge { font-family: 'Poppins', sans-serif; }

    /* Navbar Customization */
    .navbar { background-color: rgba(255, 255, 255, 0.98); backdrop-filter: blur(10px); border-bottom: 1px solid #F1F5F9; padding: 15px 0; transition: all 0.3s ease; }
    .navbar-brand { font-family: 'Raleway', sans-serif; font-weight: 800; letter-spacing: -0.5px; color: var(--primary-navy) !important; }
    .nav-link { font-weight: 500; color: var(--text-main) !important; margin: 0 12px; font-size: 0.95rem; transition: color 0.3s; }
    .nav-link:hover, .nav-link.active { color: var(--accent-blue) !important; }

    /* Buttons */
    .btn-primary { background-color: var(--accent-blue); border: none; padding: 12px 28px; border-radius: 8px; font-weight: 600; transition: all 0.3s; }
    .btn-primary:hover { background-color: #1D4ED8; transform: translateY(-2px); box-shadow: 0 8px 15px rgba(37, 99, 235, 0.2); }

    /* Page Header - Refined with Pattern */
    .page-header { 
        background-color: var(--primary-navy);
        background-image: radial-gradient(rgba(255, 255, 255, 0.05) 2px, transparent 2px);
        background-size: 30px 30px;
        padding: 160px 0 100px; 
        color: white; 
        text-align: center;
    }

    /* ---------------------------------------------------
        Interactive Sidebar Navigation (ELEGANT UI)
        --------------------------------------------------- */
    .list-group { gap: 10px; background: transparent; }
    .list-group-item {
        border: 1px solid transparent;
        padding: 18px 24px;
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        color: var(--text-muted);
        background-color: white;
        border-radius: 12px !important;
        transition: all 0.3s ease;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 2px 4px rgba(0,0,0,0.02);
    }
    .list-group-item i:first-child { font-size: 1.2rem; color: var(--accent-blue); transition: all 0.3s ease; }
    .list-group-item:hover {
        border-color: #E2E8F0;
        color: var(--primary-navy);
        transform: translateX(5px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }
    .list-group-item.active {
        background-color: var(--primary-navy);
        color: white;
        border-color: var(--primary-navy);
        box-shadow: 0 10px 20px rgba(10, 25, 47, 0.15);
        transform: translateX(5px);
    }
    .list-group-item.active i:first-child { color: white; }
    .list-group-item.active .bi-chevron-right { opacity: 1 !important; transform: translateX(3px); }

    /* Mini CTA Box */
    .cta-box {
        background: linear-gradient(135deg, var(--accent-blue) 0%, #1D4ED8 100%);
        border-radius: 16px;
        padding: 2rem;
        color: white;
        text-align: center;
        box-shadow: 0 10px 25px rgba(37, 99, 235, 0.2);
        margin-top: 2rem;
    }

    /* ---------------------------------------------------
        Content Area (CLEAN & READABLE UX)
        --------------------------------------------------- */
    .tab-content-box {
        background: white;
        padding: 3rem 3.5rem;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.04);
        min-height: 600px;
        border: 1px solid #F1F5F9;
    }
    
    /* Smooth Fade In Animation for Tabs */
    .tab-pane { opacity: 0; transform: translateY(15px); transition: all 0.4s ease-out; }
    .tab-pane.show { opacity: 1; transform: translateY(0); }
    
    .service-img {
        width: 100%;
        height: 320px;
        object-fit: cover;
        border-radius: 16px;
        margin-bottom: 2.5rem;
        box-shadow: 0 8px 24px rgba(0,0,0,0.06);
    }

    /* Deliverables Grid Cards instead of simple bullets */
    .deliverable-card {
        background: #F8FAFC;
        padding: 1rem 1.25rem;
        border-radius: 10px;
        display: flex;
        align-items: center;
        font-size: 0.95rem;
        color: var(--text-main);
        border: 1px solid transparent;
        transition: all 0.2s ease;
        height: 100%;
    }
    .deliverable-card:hover {
        border-color: #E2E8F0;
        background: white;
        box-shadow: 0 4px 12px rgba(0,0,0,0.04);
        transform: translateY(-2px);
    }
    .deliverable-card i {
        color: var(--accent-blue);
        font-size: 1.25rem;
        margin-right: 15px;
        flex-shrink: 0;
    }

    /* Strategic Value Box */
    .value-box {
        background-color: rgba(37, 99, 235, 0.04);
        border-left: 4px solid var(--accent-blue);
        padding: 1.5rem 2rem;
        border-radius: 0 12px 12px 0;
        margin-top: 2rem;
    }
    .value-box h6 { color: var(--primary-navy); font-size: 1.1rem; margin-bottom: 0.75rem; display: flex; align-items: center; }
    .value-box h6 i { color: #F99D20; margin-right: 10px; font-size: 1.2rem; }

    /* Footer */
    footer { background-color: var(--primary-navy); color: #94A3B8; padding-top: 80px; padding-bottom: 30px; font-family: 'Roboto', sans-serif; border-top: 1px solid rgba(255,255,255,0.05); }
    footer h5 { color: white; font-family: 'Poppins', sans-serif; margin-bottom: 20px; font-size: 1.1rem; }
    footer a { color: #94A3B8; text-decoration: none; transition: 0.3s; }
    footer a:hover { color: white; }

    @media (max-width: 991px) {
        .tab-content-box { padding: 2rem 1.5rem; }
        .page-header { padding: 120px 0 60px; }
        .service-img { height: 220px; }
    }
</style>
@endpush
@section('content')
<section class="page-header">
    <div class="container text-center">
        <h1 class="display-5 fw-bold">Our Expertise</h1>
        <p class="lead text-white-50 mx-auto col-lg-8">Comprehensive consulting solutions designed to navigate complexity and drive sustainable growth for your enterprise.</p>
    </div>
</section>

<!-- Main Content Section -->
<section class="py-5 mt-3 mb-5">
    <div class="container py-4">
        <div class="row g-5">
            
            <!-- Sidebar Menu -->
            <div class="col-lg-4">
                <div class="d-flex flex-column sticky-lg-top" style="top: 110px; z-index: 10;">
                    <h6 class="text-uppercase text-muted fw-bold mb-4 px-1 small letter-spacing-1" style="font-family: 'Poppins', sans-serif;">Select Service</h6>
                    
                    <div class="list-group" id="list-tab" role="tablist">
                        <!-- Link 1 -->
                        <a class="list-group-item list-group-item-action active" id="list-tax-compliance-list" data-bs-toggle="list" href="#list-tax-compliance" role="tab">
                            <div><i class="bi bi-file-earmark-text me-2"></i> Tax Compliance & Planning</div>
                            <i class="bi bi-chevron-right small opacity-25"></i>
                        </a>
                        <!-- Link 2 -->
                        <a class="list-group-item list-group-item-action" id="list-tax-education-list" data-bs-toggle="list" href="#list-tax-education" role="tab">
                            <div><i class="bi bi-book me-2"></i> Tax Education</div>
                            <i class="bi bi-chevron-right small opacity-25"></i>
                        </a>
                        <!-- Link 3 -->
                        <a class="list-group-item list-group-item-action" id="list-finance-list" data-bs-toggle="list" href="#list-finance" role="tab">
                            <div><i class="bi bi-graph-up-arrow me-2"></i> Financial Advisory</div>
                            <i class="bi bi-chevron-right small opacity-25"></i>
                        </a>
                        
                        <!-- Commented sections kept intact for future use, just reformatted for elegance -->
                        <!--
                        <a class="list-group-item list-group-item-action" id="list-tech-list" data-bs-toggle="list" href="#list-tech" role="tab">
                            <div><i class="bi bi-cpu me-2"></i> Technology Consulting</div>
                            <i class="bi bi-chevron-right small opacity-25"></i>
                        </a>
                        <a class="list-group-item list-group-item-action" id="list-marketing-list" data-bs-toggle="list" href="#list-marketing" role="tab">
                            <div><i class="bi bi-megaphone me-2"></i> Marketing Strategy</div>
                            <i class="bi bi-chevron-right small opacity-25"></i>
                        </a>
                        <a class="list-group-item list-group-item-action" id="list-hr-list" data-bs-toggle="list" href="#list-hr" role="tab">
                            <div><i class="bi bi-people me-2"></i> Human Resources</div>
                            <i class="bi bi-chevron-right small opacity-25"></i>
                        </a>
                        -->
                    </div>

                    <!-- CTA Box -->
                    <div class="cta-box">
                        <h5 class="fw-bold mb-3 text-white">Not sure what you need?</h5>
                        <p class="small text-white-50 mb-4 lh-lg">Book a free 30-minute discovery call with our senior consultants to discuss your goals.</p>
                        <a href="{{ url('/contact') }}" class="btn btn-light text-primary w-100 fw-bold py-2">Schedule Consultation</a>
                    </div>
                </div>
            </div>

            <!-- Content Area -->
            <div class="col-lg-8">
                <div class="tab-content tab-content-box" id="nav-tabContent">
                    
                    <!-- TAB 1: Tax Compliance -->
                    <div class="tab-pane fade show active" id="list-tax-compliance" role="tabpanel">
                        <!-- <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" class="service-img" alt="Tax Compliance"> -->
                        
                        <h2 class="mb-3">Tax Compliance & Planning</h2>
                        <p class="lead text-muted mb-5 fs-6 lh-lg">
                            We align your business with the latest tax laws while proactively structuring your finances to minimize liabilities and maximize cash flow.
                        </p>
                        
                        <h5 class="fw-bold mb-4 fs-5">Key Deliverables</h5>
                        <!-- Grid UI for Deliverables -->
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <div class="deliverable-card">
                                    <i class="bi bi-file-earmark-check"></i>
                                    <span>Corporate & Individual Tax Filing</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="deliverable-card">
                                    <i class="bi bi-diagram-3"></i>
                                    <span>Strategic Tax Planning</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="deliverable-card">
                                    <i class="bi bi-shield-check"></i>
                                    <span>Tax Audit Support</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="deliverable-card">
                                    <i class="bi bi-briefcase"></i>
                                    <span>Tax Dispute Resolution Advisory</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="deliverable-card">
                                    <i class="bi bi-arrow-left-right"></i>
                                    <span>Transfer Pricing Documentation</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="deliverable-card">
                                    <i class="bi bi-laptop"></i>
                                    <span>Coretax System Assistance</span>
                                </div>
                            </div>
                        </div>

                        <!-- Value Box -->
                        <div class="value-box">
                            <h6><i class="bi bi-lightbulb-fill"></i> Strategic Value</h6>
                            <p class="mb-0 small text-muted lh-lg">
                                Most businesses don't actually lose money to high tax rates; they lose it to avoidable administrative penalties caused by missing small regulatory changes. Compliance isn't about paying more—it’s about paying exactly what is required and not a cent in fines.
                            </p>
                        </div>
                    </div>

                    <!-- TAB 2: Tax Education -->
                    <div class="tab-pane fade" id="list-tax-education" role="tabpanel">
                        <!-- <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" class="service-img" alt="Tax Education"> -->
                        
                        <h2 class="mb-3">Tax Education</h2>
                        <p class="lead text-muted mb-5 fs-6 lh-lg">
                            We bridge the knowledge gap by turning complex tax regulations into actionable internal processes and training for your team.
                        </p>
                        
                        <h5 class="fw-bold mb-4 fs-5">Core Services</h5>
                        <!-- Grid UI -->
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <div class="deliverable-card">
                                    <i class="bi bi-person-workspace"></i>
                                    <span>Customized In-House Training</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="deliverable-card">
                                    <i class="bi bi-journal-text"></i>
                                    <span>Regulatory Update Briefings</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="deliverable-card">
                                    <i class="bi bi-award"></i>
                                    <span>Executive Tax Literacy</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="deliverable-card">
                                    <i class="bi bi-ui-checks"></i>
                                    <span>Tax SOP Development</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="deliverable-card">
                                    <i class="bi bi-chat-dots"></i>
                                    <span>Technical Coaching</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="deliverable-card">
                                    <i class="bi bi-camera-video"></i>
                                    <span>Webinars & Seminars</span>
                                </div>
                            </div>
                        </div>

                        <div class="value-box">
                            <h6><i class="bi bi-lightbulb-fill"></i> Strategic Value</h6>
                            <p class="mb-0 small text-muted lh-lg">
                                A consultant is only as effective as the client’s internal bookkeeping. If your staff doesn’t understand the "why" behind the tax code, they will keep making the same data-entry errors, no matter how many times an external party fixes them. Empower your team.
                            </p>
                        </div>
                    </div>

                    <!-- TAB 3: Financial Advisory -->
                    <div class="tab-pane fade" id="list-finance" role="tabpanel">
                        <!-- <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" class="service-img" alt="Financial Advisory"> -->
                        
                        <h2 class="mb-3">Financial Advisory</h2>
                        <p class="lead text-muted mb-5 fs-6 lh-lg">
                            Expert guidance on capital structure, risk mitigation, and financial health to ensure sustainable profitability and regulatory compliance.
                        </p>
                        
                        <h5 class="fw-bold mb-4 fs-5">Our Focus Areas</h5>
                        <!-- Grid UI -->
                        <div class="row g-3 mb-5">
                            <div class="col-md-6">
                                <div class="deliverable-card">
                                    <i class="bi bi-bar-chart"></i>
                                    <span>Financial Modeling & Projections</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="deliverable-card">
                                    <i class="bi bi-compass"></i>
                                    <span>Strategic Financial Advisory</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="deliverable-card">
                                    <i class="bi bi-search"></i>
                                    <span>Business Feasibility & Market Studies</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="deliverable-card">
                                    <i class="bi bi-clipboard-data"></i>
                                    <span>Financial Statement Review & Analysis</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="deliverable-card">
                                    <i class="bi bi-mortarboard"></i>
                                    <span>Technical Accounting Training</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="deliverable-card">
                                    <i class="bi bi-building"></i>
                                    <span>M&A Accounting & Due Diligence</span>
                                </div>
                            </div>
                        </div>

                        <div class="value-box mb-5">
                            <h6><i class="bi bi-lightbulb-fill"></i> Strategic Value</h6>
                            <p class="mb-0 small text-muted lh-lg">
                                Many business owners confuse Revenue with Profit, and Profit with Cash. Our job is to remind you that you can be "profitable" on paper but still go bankrupt if your cash flow isn't managed with precision and foresight.
                            </p>
                        </div>
                        
                        <a href="{{ url('/contact') }}" class="btn btn-primary">Consult a Financial Expert</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection