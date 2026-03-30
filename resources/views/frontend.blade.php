<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kapabel Indonesia Consulting | Expert Financial Advisory & Digital Business Strategy</title>
    <meta name="description"
        content="Kapabel Indonesia Consulting provides forward thinking financial advisory, tax compliance, and digital business strategies to transform complex regulatory challenges into sustainable growth.">
    <meta name="keywords"
        content="Kapabel Indonesia, Financial Consulting, Tax Advisory Indonesia, Business Strategy, Risk Management, Corporate Finance, Digital Transformation Consultant, Management Consulting Jakarta">
    <meta name="author" content="Kapabel Indonesia Consulting">
    <meta name="robots" content="index, follow">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://kapabelindonesia.com">
    <meta property="og:title" content="Kapabel Indonesia Consulting | Strategic Financial Intelligence">
    <meta property="og:description"
        content="Empowering businesses with expert financial advisory and digital forward growth strategies. Transform your regulatory challenges into clear paths for success.">
    <meta property="og:image" content="https://kapabelindonesia.com/assets/images/logo_web.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Kapabel Indonesia">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Kapabel Indonesia Consulting | Strategic Financial Intelligence">
    <meta name="twitter:description"
        content="Providing forward thinking financial advisory and digital business transformation for sustainable growth.">
    <meta name="twitter:image" content="https://kapabelindonesia.com/assets/images/logo_web.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Raleway:wght@400;600;700;800&family=Roboto:wght@300;400;500&display=swap"
        rel="stylesheet">
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

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Raleway', sans-serif;
            font-weight: 700;
        }

        /* 1. Gunakan Poppins hanya untuk menu & tombol */
        .nav-link,
        .btn,
        .badge {
            font-family: 'Poppins', sans-serif;
        }

        /* 2. Gunakan Raleway khusus untuk Logo */
        .navbar-brand {
            font-family: 'Raleway', sans-serif;
            font-weight: 600;
            /* Extra Bold agar tegas seperti logo */
            letter-spacing: -0.5px;
            /* Sedikit dirapatkan agar elegan */
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

        .nav-link:hover,
        .nav-link.active {
            color: var(--accent-color) !important;
        }

        .hero-section {
            /* background: linear-gradient(135deg, #0F172A 0%, #1E293B 100%);  */
            color: white;
            padding: 160px 0 100px;
            background-color: var(--bg-dark);
            background-image: url('assets/images/bg-pattern-large.png');
            /* background-size: cover;
            background-position: center center; */
            position: relative;
            overflow: hidden;
        }

        /* Components */
        /* .btn-primary { background-color: var(--accent-color); border: none; padding: 12px 30px; border-radius: 6px; font-weight: 600; letter-spacing: 0.5px; } */
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


        /* ==========================================================
           NEW: Solutions Bridge Section (Paro.ai Style)
        ========================================================== */
        .solutions-bridge {
            padding: 80px 0;
        }

        .custom-tabs {
            border-bottom: 1px solid #E2E8F0;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .custom-tabs .nav-link {
            border: none;
            color: var(--text-muted);
            font-weight: 600;
            padding: 1rem 0;
            font-family: 'Poppins', sans-serif;
            background: transparent;
            position: relative;
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .custom-tabs .nav-link:hover {
            color: var(--primary-navy);
        }

        .custom-tabs .nav-link.active {
            color: var(--primary-navy);
        }

        .custom-tabs .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: var(--teal-bg);
        }

        .bridge-card-small {
            background-color: #F8FAFC;
            border-radius: 12px;
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: 180px;
            transition: all 0.3s ease;
            border: 1px solid transparent;
            text-decoration: none;
            color: inherit;
        }

        .bridge-card-small:hover {
            border-color: #E2E8F0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transform: translateY(-3px);
            color: inherit;
        }

        .bridge-card-small h5 {
            color: var(--teal-bg);
            font-size: 1.15rem;
            margin-bottom: 0.75rem;
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            font-family: 'Raleway', sans-serif;
        }

        .bridge-card-small h5 i {
            font-size: 1.1rem;
            transition: transform 0.3s ease;
            margin-top: 2px;
        }

        .bridge-card-small:hover h5 i {
            transform: translateX(5px);
        }

        .bridge-card-small p {
            font-size: 0.9rem;
            color: var(--text-main);
            margin-bottom: 0;
            line-height: 1.6;
        }

        .bridge-card-large {
            background-color: var(--teal-bg);
            border-radius: 12px;
            padding: 2.5rem 2.5rem 0;
            height: 100%;
            min-height: 400px;
            color: white;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            position: relative;
            text-decoration: none;
            transition: transform 0.3s ease;
        }

        .bridge-card-large:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(43, 130, 127, 0.2);
            color: white;
        }

        .bridge-card-large h3 {
            color: white;
            margin-bottom: 1rem;
            font-size: 1.8rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .bridge-card-large h3 i {
            font-size: 1.5rem;
            transition: transform 0.3s ease;
        }

        .bridge-card-large:hover h3 i {
            transform: translateX(8px);
        }

        .bridge-card-large p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.05rem;
            margin-bottom: 2rem;
            position: relative;
            z-index: 2;
        }

        .solution-bridge .bridge-card-large .cent-illustration {
            margin-top: auto;
            position: relative;
            width: 100%;
            bottom: -24px;
        }

        /* Inline SVG Styling */
        .bridge-svg {
            width: 100%;
            max-width: 320px;
            margin: auto auto -10px;
            display: block;
            position: relative;
            z-index: 1;
            transition: transform 0.5s ease;
            filter: drop-shadow(0 15px 20px rgba(0, 0, 0, 0.15));
        }

        .bridge-card-large:hover .bridge-svg {
            transform: scale(1.03) translateY(-5px);
        }

        /* Team Images */
        .team-img {
            height: 350px;
            object-fit: cover;
            object-position: top;
            width: 100%;
        }

        /* Expert CTA Section (Paro Style) */
        .expert-section {
            padding: 60px 0;
        }

        .expert-card {
            background-color: var(--teal-bg);
            border-radius: 20px;
            position: relative;
            padding: 50px 40px;
            /* Abstract dots background pattern */
            background-image: radial-gradient(rgba(255, 255, 255, 0.1) 2px, transparent 2px);
            background-size: 30px 30px;
        }

        .btn-expert {
            background-color: var(--orange-btn);
            color: #111827;
            border-radius: 6px;
            font-weight: 700;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }

        .btn-expert:hover {
            background-color: #E08A19;
            color: #111827;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(249, 157, 32, 0.3);
        }

        .expert-illustration {
            position: absolute;
            bottom: 0;
            right: 5%;
            height: 125%;
            /* Membuat gambar "keluar" dari kotak di bagian atas */
            max-width: 300px;
            z-index: 10;
            pointer-events: none;
        }

        /* Accordion Custom */
        .accordion-button {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            color: var(--primary-navy);
            padding: 1.5rem 1.25rem;
        }

        .accordion-button:not(.collapsed) {
            background-color: var(--bg-light);
            color: var(--accent-blue);
            box-shadow: none;
        }

        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(0, 0, 0, .125);
        }

        .accordion-item {
            border-left: none;
            border-right: none;
            border-top: none;
        }

        /* Footer */
        footer {
            background-color: #0F172A;
            color: #94A3B8;
            padding-top: 80px;
            padding-bottom: 30px;
            font-family: 'Roboto', sans-serif;
        }

        footer h5 {
            color: white;
            font-family: 'Poppins', sans-serif;
            margin-bottom: 20px;
        }

        footer a {
            color: #94A3B8;
            text-decoration: none;
            transition: 0.3s;
        }

        footer a:hover {
            color: var(--accent-color);
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand fs-4" href="index.html">
                <i class="text-primary me-2"></i><img src="assets/images/logo_web.png" alt="Kapabel Indonesia Logo"
                    style="height: 43px; vertical-align: middle;" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link active" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.html">Insights</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                    <li class="nav-item"><a class="btn btn-outline-primary ms-lg-3" href="contact.html">Get in Touch</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <span class="badge bg-primary bg-opacity-25 text-info mb-3 px-3 py-2 rounded-pill">Premier Financial
                        Advisory</span>
                    <h1 class="display-4 mb-4 lh-tight"> Indonesia's Hub for<br><span class="text-info"> Financial, Tax,
                            and Business Consultants.</span></h1>
                    <p class="lead mb-4 text-white fw-light">Find the Right Consultant. Grow Your Business.</p>
                    <div class="d-flex gap-3">
                        <a href="contact.html" class="btn btn-primary btn-lg text-white">Schedule Consultation</a>
                        <a href="services.html" class="btn btn-outline-light btn-lg">Explore Expertise</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="assets/images/banner_kapabelindonesia.jpg" alt="Financial Growth"
                        class="img-fluid rounded-4 shadow-lg border border-secondary border-opacity-25">
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h6 class="text-primary fw-bold text-uppercase ls-wide" style="font-family: 'Poppins', sans-serif;">Our
                    Expertise</h6>
                <h2 class="display-6 fw-bold">Strategic Tax Integrity, Empowered Financial Growth</h2>
                <p class="text-muted col-md-8 mx-auto">From rigorous tax planning to insightful financial advisory, we
                    provide the expert-led solutions your business needs to navigate complexity and expand with
                    confidence.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card h-100 bg-white p-4 rounded-4 shadow-sm border-0 transition-hover">
                        <div class="icon-box mb-4"><i class="bi bi-compass fs-2"></i></div>
                        <h4 class="mb-3">Tax Compliance & Planning</h4>
                        <p class="text-muted small mb-4">We align your business with the latest tax laws while
                            proactively structuring your finances to minimize liabilities and maximize cash flow.</p>
                        <ul class="list-unstyled text-muted small">
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Corporate & Individual Tax
                                Filing</li>
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Strategic Tax Planning</li>
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Tax Audit Support</li>
                        </ul>
                        <a href="services.html" class="text-decoration-none">Learn More <i
                                class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card h-100 bg-white p-4 rounded-4 shadow-sm border-0 transition-hover">
                        <div class="icon-box mb-4"><i class="bi bi-arrow-repeat fs-2"></i></div>
                        <h4 class="mb-3">Tax Education</h4>
                        <p class="text-muted small mb-4">We bridge the knowledge gap by turning complex tax regulations
                            into actionable internal processes for your team.</p>
                        <ul class="list-unstyled text-muted small">
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Customized In-House Training
                            </li>
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Regulatory Update Briefings
                            </li>
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Executive Tax Literacy</li>
                        </ul>
                        <a href="services.html" class="text-decoration-none">Learn More <i
                                class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card h-100 bg-white p-4 rounded-4 shadow-sm border-0 transition-hover">
                        <div class="icon-box mb-4"><i class="bi bi-graph-up-arrow fs-2"></i></div>
                        <h4 class="mb-3">Financial Advisory</h4>
                        <p class="text-muted small mb-4">Expert guidance on capital structure, risk mitigation, and
                            financial health to ensure sustainable profitability and compliance.</p>
                        <ul class="list-unstyled text-muted small">
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Financial Modeling &
                                Projections</li>
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Strategic Financial Advisory
                            </li>
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Business Feasibility & Market
                                Studies</li>
                        </ul>
                        <a href="services.html" class="text-decoration-none">Learn More <i
                                class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>

                <!-- <div class="col-lg-4 col-md-6">
                    <div class="service-card h-100 bg-white p-4 rounded-4 shadow-sm border-0 transition-hover">
                        <div class="icon-box mb-4"><i class="bi bi-cpu fs-2"></i></div>
                        <h4 class="mb-3">Technology Consulting</h4>
                        <p class="text-muted small mb-4">Leveraging cutting-edge tech to modernize infrastructure and secure data assets.</p>
                        <ul class="list-unstyled text-muted small">
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Digital Transformation Roadmap</li>
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Cybersecurity & Data Governance</li>
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>ERP System Integration</li>
                        </ul>
                        <a href="services.html" class="text-decoration-none">Learn More <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card h-100 bg-white p-4 rounded-4 shadow-sm border-0 transition-hover">
                        <div class="icon-box mb-4"><i class="bi bi-megaphone fs-2"></i></div>
                        <h4 class="mb-3">Marketing Strategy</h4>
                        <p class="text-muted small mb-4">Building powerful brands and customer acquisition channels in a digital-first world.</p>
                        <ul class="list-unstyled text-muted small">
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Brand Positioning & Identity</li>
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Go-to-Market Strategy</li>
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Customer Experience (CX) Design</li>
                        </ul>
                        <a href="services.html" class="text-decoration-none">Learn More <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card h-100 bg-white p-4 rounded-4 shadow-sm border-0 transition-hover">
                        <div class="icon-box mb-4"><i class="bi bi-people fs-2"></i></div>
                        <h4 class="mb-3">Human Resources</h4>
                        <p class="text-muted small mb-4">Optimizing talent management to build a high-performance organizational culture.</p>
                        <ul class="list-unstyled text-muted small">
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Talent Acquisition Strategy</li>
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Performance Management Systems</li>
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Organizational Design</li>
                        </ul>
                        <a href="services.html" class="text-decoration-none">Learn More <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!-- NEW: Solutions Bridge Section (English Translation & INLINE SVGs) -->
    <section class="solutions-bridge bg-white">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="display-5 fw-bold text-dark">Solutions that Bridge Your Gaps</h2>
            </div>

            <!-- Custom Tabs -->
            <ul class="nav nav-tabs custom-tabs" id="bridgeTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="manfaat-tab" data-bs-toggle="tab" data-bs-target="#manfaat"
                        type="button" role="tab" aria-controls="manfaat" aria-selected="true">Platform Benefits</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="carakerja-tab" data-bs-toggle="tab" data-bs-target="#carakerja"
                        type="button" role="tab" aria-controls="carakerja" aria-selected="false">How It Works</button>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content" id="bridgeTabsContent">

                <!-- Tab 1: Platform Benefits -->
                <div class="tab-pane fade show active" id="manfaat" role="tabpanel" aria-labelledby="manfaat-tab">
                    <div class="row g-4 align-items-stretch">
                        <!-- Left Side Small Cards -->
                        <div class="col-lg-3 d-flex flex-column gap-4">
                            <a href="services.html" class="bridge-card-small">
                                <h5>Build a Strategic Roadmap <i class="bi bi-arrow-right"></i></h5>
                                <p>Gain financial insights & strategic leadership to confidently scale your business.
                                </p>
                            </a>
                            <a href="services.html" class="bridge-card-small">
                                <h5>Strengthen Decision Making <i class="bi bi-arrow-right"></i></h5>
                                <p>Boost forecasting and analytics to mitigate risks and act on new opportunities.</p>
                            </a>
                        </div>

                        <!-- Center Large Card (With Custom Inline SVG) -->
                        <div class="col-lg-6">
                            <a href="services.html" class="bridge-card-large">
                                <h3>Get Accurate, Organized Books <i class="bi bi-arrow-right"></i></h3>
                                <p>Reduce stress on your lean team with day-to-day accounting and financial support from
                                    top experts.</p>
                                <div class="cent-illustration">
                                    <img decoding="async"
                                        src="https://paro.ai/wp-content/uploads/2024/08/For-Businesses-illustration.png"
                                        alt="For Accounting Firms illustration" title="Home 8">
                                </div>

                            </a>
                        </div>

                        <!-- Right Side Small Cards -->
                        <div class="col-lg-3 d-flex flex-column gap-4">
                            <a href="services.html" class="bridge-card-small">
                                <h5>Manage Taxes & Stay Compliant <i class="bi bi-arrow-right"></i></h5>
                                <p>Ensure regulatory compliance with a strong tax strategy and audit-ready reports.</p>
                            </a>
                            <a href="services.html" class="bridge-card-small">
                                <h5>Drive Discipline and Efficiency <i class="bi bi-arrow-right"></i></h5>
                                <p>Streamline financial processes and optimize systems to keep pace with your growth.
                                </p>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Tab 2: How It Works -->
                <div class="tab-pane fade" id="carakerja" role="tabpanel" aria-labelledby="carakerja-tab">
                    <div class="row g-4 align-items-stretch">
                        <!-- Left Side Small Cards -->
                        <div class="col-lg-3 d-flex flex-column gap-4">
                            <div class="bridge-card-small">
                                <h5>Step 1: Identify Needs <i class="bi bi-arrow-right"></i></h5>
                                <p>Conduct an initial consultation session to deeply understand your challenges and
                                    specific targets.</p>
                            </div>
                            <div class="bridge-card-small">
                                <h5>Step 2: Consultant Matching <i class="bi bi-arrow-right"></i></h5>
                                <p>We carefully select and pair you with an expert who possesses the most relevant
                                    industry experience.</p>
                            </div>
                        </div>

                        <!-- Center Large Card (With Custom Inline SVG) -->
                        <div class="col-lg-6">
                            <a href="contact.html" class="bridge-card-large">
                                <h3>Start Projects Faster & On Target <i class="bi bi-arrow-right"></i></h3>
                                <p>Avoid long recruitment cycles. Access executive-level consulting talent instantly and
                                    build your elite team on demand.</p>
                                <div class="cent-illustration">
                                    <img decoding="async"
                                        src="https://paro.ai/wp-content/uploads/2024/08/For-Accounting-Firms-illustration.png"
                                        alt="For Accounting Firms illustration" title="Home 8">
                                </div>
                            </a>
                        </div>

                        <!-- Right Side Small Cards -->
                        <div class="col-lg-3 d-flex flex-column gap-4">
                            <div class="bridge-card-small">
                                <h5>Step 3: Integrated Execution <i class="bi bi-arrow-right"></i></h5>
                                <p>Our experts work seamlessly alongside your internal team to execute and implement the
                                    agreed strategies.</p>
                            </div>
                            <div class="bridge-card-small">
                                <h5>Step 4: Evaluate & Scale <i class="bi bi-arrow-right"></i></h5>
                                <p>Regularly review performance metrics and adjust the level of support as your business
                                    continues to grow.</p>
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
                    <h6 class="text-primary fw-bold text-uppercase">The Minds Behind Kapabel Indonesia</h6>
                    <h2 class="display-6 mb-0">Meet Our Experts</h2>
                </div>
                <div class="col-md-4 text-md-end">
                    <a href="about.html" class="btn btn-outline-primary">View All Team &rarr;</a>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="assets/images/guntur2.jpg" class="card-img-top team-img" alt="Guntur Hidayat">
                        <div class="card-body p-4">
                            <h5 class="mb-1">Guntur Hidayat, S.S.T., M.Sc. (Acc.), CFS</h5>
                            <p class="text-primary small mb-3">Strategic Tax Partner</p>
                            <p class="text-muted small">Experienced accounting, taxation, and finance professional with
                                14+ years of expertise. Passionate about resolving business challenges and delivering
                                effective solutions.</p>
                            <a href="guntur.html" class="text-decoration-none small mt-2 d-inline-block">View Profile
                                &rarr;</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="assets/images/debrian2.jpg" class="card-img-top team-img" alt="Debrian Ruhut Saragih">
                        <div class="card-body p-4">
                            <h5 class="mb-1">Debrian Ruhut Saragih, S.Tr.Ak., M.M.</h5>
                            <p class="text-primary small mb-3">Senior Consultant</p>
                            <p class="text-muted small">Specializing in internal audit, fraud detection, and risk
                                management. A former auditor at BPKP with proven management, problem-solving, and
                                strategic thinking skills.</p>
                            <a href="debrian.html" class="text-decoration-none small mt-2 d-inline-block">View Profile
                                &rarr;</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="assets/images/wandestarido2.jpg" class="card-img-top team-img" alt="Wandestarido">
                        <div class="card-body p-4">
                            <h5 class="mb-1">Wandestarido, S.E., M.Si., Ak., CA., BKP., CPA., CFI.</h5>
                            <p class="text-primary small mb-3">Principal Tax Consultant</p>
                            <p class="text-muted small">A licensed Public Accountant and Tax Consultant with over two
                                decades of expertise in auditing, taxation, and corporate finance.</p>
                            <a href="wandestarido.html" class="text-decoration-none small mt-2 d-inline-block">View
                                Profile &rarr;</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="assets/images/andreas2.jpg" class="card-img-top team-img" alt="Andreas Budiman">
                        <div class="card-body p-4">
                            <h5 class="mb-1">Adv. Andreas Budiman, S.E., S.H., M.Si., M.H., BKP</h5>
                            <p class="text-primary small mb-3">Tax Defense Advocate</p>
                            <p class="text-muted small">Since 2009, Adv. Andreas Budiman has established a reputation
                                for transforming complex financial data into legal certainty.</p>
                            <a href="andreas-budiman.html" class="text-decoration-none small mt-2 d-inline-block">View
                                Profile &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="d-flex justify-content-between align-items-end mb-5">
                <div>
                    <h6 class="text-primary fw-bold text-uppercase">Our Blog</h6>
                    <h2 class="fw-bold display-6">Latest Insights</h2>
                </div>
                <a href="blog.html" class="btn btn-outline-primary d-none d-md-block">View All Insights &rarr;</a>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            class="card-img-top" alt="Strategy" style="height: 200px; object-fit: cover;">
                        <div class="card-body p-4">
                            <span class="badge bg-primary bg-opacity-10 text-primary mb-2">Strategy</span>
                            <h5 class="fw-bold mb-3"><a href="blog-detail.html"
                                    class="text-decoration-none text-dark">Navigating Market Volatility in 2024</a></h5>
                            <p class="text-muted small mb-4">Key strategies for maintaining liquidity and operational
                                resilience during uncertain economic times.</p>
                            <a href="blog-detail.html" class="text-primary small text-decoration-none">Read Article
                                &rarr;</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            class="card-img-top" alt="Technology" style="height: 200px; object-fit: cover;">
                        <div class="card-body p-4">
                            <span class="badge bg-primary bg-opacity-10 text-primary mb-2">Technology</span>
                            <h5 class="fw-bold mb-3"><a href="blog-detail.html"
                                    class="text-decoration-none text-dark">The Role of AI in Financial Auditing</a></h5>
                            <p class="text-muted small mb-4">How artificial intelligence is automating compliance checks
                                and reducing human error.</p>
                            <a href="blog-detail.html" class="text-primary small text-decoration-none">Read Article
                                &rarr;</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            class="card-img-top" alt="Management" style="height: 200px; object-fit: cover;">
                        <div class="card-body p-4">
                            <span class="badge bg-primary bg-opacity-10 text-primary mb-2">Management</span>
                            <h5 class="fw-bold mb-3"><a href="blog-detail.html"
                                    class="text-decoration-none text-dark">Building a Remote-First Culture</a></h5>
                            <p class="text-muted small mb-4">Best practices for HR leaders to maintain productivity and
                                morale in distributed teams.</p>
                            <a href="blog-detail.html" class="text-primary small text-decoration-none">Read Article
                                &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4 d-md-none">
                <a href="blog.html" class="btn btn-outline-primary">View All Articles</a>
            </div>
        </div>
    </section>

    <!-- NEW: BECOME AN EXPERT CTA SECTION (PARO.AI STYLE) -->
    <section class="expert-section bg-white mt-4">
        <div class="container">
            <div class="expert-card shadow-lg">
                <div class="row align-items-center position-relative" style="z-index: 2;">
                    <!-- Text Area -->
                    <div class="col-lg-6 mb-4 mb-lg-0 pe-lg-5">
                        <h2 class="text-white fw-bold mb-3 display-6 font-raleway">Become a Kapabel Expert</h2>
                        <p class="text-white opacity-75 fs-6 lh-lg mb-0 font-roboto">
                            Join an elite network of professionals and get the tools to build your own independent
                            business. We are looking for top-tier financial and strategic talents.
                        </p>
                    </div>

                    <!-- Button Area -->
                    <div class="col-lg-3 text-lg-center">
                        <a href="register.html" class="btn btn-expert px-4 py-3 text-uppercase">APPLY AS AN EXPERT</a>
                    </div>
                </div>

                <!-- Illustration (Absolute Position) -->
                <!-- Anda bisa mengganti URL di src dengan gambar ilustrasi 3D transparan (.png) milik Anda sendiri -->
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
                        <h6 class="text-primary fw-bold text-uppercase">FAQ</h6>
                        <h2 class="fw-bold">Frequently Asked Questions</h2>
                    </div>

                    <div class="accordion accordion-flush" id="faqAccordion">
                        <div class="accordion-item border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold py-4 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq1">
                                    How does your pricing structure work?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    We offer flexible pricing models tailored to project scope. This includes hourly
                                    rates for advisory sessions, fixed-project fees for defined deliverables (like
                                    audits), and retainer models for ongoing support.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold py-4 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Which industries do you specialize in?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Our core expertise covers Manufacturing, Fintech, Retail, and Healthcare sectors.
                                    However, our strategic frameworks are adaptable to most B2B and B2C industries.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold py-4 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq3">
                                    How do I start a consultation?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Simply click the "Get in Touch" button. We offer a complimentary 30-minute initial
                                    discovery call to understand your challenges and determine if we are the right fit.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row g-4 mb-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="fw-bold text-white mb-4 fs-4"><img src="assets/images/logo_white.png"
                            alt="Kapabel Indonesia Logo" style="height: 46px; vertical-align: middle;" /></h5>
                    <p class="small lh-lg">Your strategic partner for modern financial, tax, and business management
                        solutions. We turn complexity into clarity.</p>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5>Company</h5>
                    <ul class="list-unstyled small d-flex flex-column gap-2">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="about.html">Our Team</a></li>
                        <li><a href="contact.html">Careers</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5>Services</h5>
                    <ul class="list-unstyled small d-flex flex-column gap-2">
                        <li><a href="services.html">Tax Compliance and Planning</a></li>
                        <li><a href="services.html">Tax Education</a></li>
                        <li><a href="services.html">Financial Advisory</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5>Contact Us</h5>
                    <ul class="list-unstyled small d-flex flex-column gap-3">
                        <li class="d-flex"><i class="bi bi-geo-alt text-primary me-3"></i> SCBD District 8, Treasury
                            Tower<br>Jakarta, Indonesia 12190</li>
                        <li class="d-flex"><i class="bi bi-envelope text-primary me-3"></i> kapabel.indonesia@gmail.com
                        </li>
                        <li class="d-flex"><i class="bi bi-telephone text-primary me-3"></i> +62 82 11499 4207</li>
                    </ul>
                </div>
            </div>
            <div class="border-top border-secondary pt-4 text-center">
                <p class="small mb-0 text-white-50">&copy; 2026 Kapabel Indonesia Consulting. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>