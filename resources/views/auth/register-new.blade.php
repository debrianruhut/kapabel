<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar | Kapabel Indonesia</title>

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Raleway:wght@400;600;700;800&family=Roboto:wght@300;400;500;600&display=swap"
        rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <style>
        :root {
            --primary-navy: #0A192F;
            --accent-blue: #2563EB;
            --teal-bg: #2B827F;
            --bg-light: #F8FAFC;
            --text-main: #334155;
            --text-muted: #64748B;
        }

        body {
            font-family: 'Roboto', sans-serif;
            color: var(--text-main);
            background-color: #FFFFFF;
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
            color: var(--primary-navy);
        }

        .btn,
        .form-label,
        .nav-link {
            font-family: 'Poppins', sans-serif;
        }

        /* * DESKTOP FIXED LAYOUT 
         * Mengunci tinggi layar 100vh untuk desktop agar tidak ada scroll halaman.
         */
        @media (min-width: 992px) {
            body {
                height: 100vh;
                overflow: hidden;
            }

            .register-container {
                height: 100vh;
            }

            .brand-col,
            .form-col {
                height: 100vh;
                overflow-y: auto;
                /* Mengizinkan scroll internal hanya jika layar terlalu pendek */
            }

            /* Styling Scrollbar Internal untuk Desktop */
            .form-col::-webkit-scrollbar {
                width: 6px;
            }

            .form-col::-webkit-scrollbar-track {
                background: transparent;
            }

            .form-col::-webkit-scrollbar-thumb {
                background: #CBD5E1;
                border-radius: 10px;
            }

            .form-col::-webkit-scrollbar-thumb:hover {
                background: #94A3B8;
            }
        }

        /* Left Column - Branding */
        .brand-col {
            background-color: var(--primary-navy);
            background-image: radial-gradient(rgba(255, 255, 255, 0.05) 2px, transparent 2px);
            background-size: 30px 30px;
            color: white;
            padding: 4rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
        }

        .brand-logo {
            font-family: 'Raleway', sans-serif;
            font-weight: 800;
            font-size: 2rem;
            color: white;
            text-decoration: none;
            letter-spacing: -0.5px;
        }

        /* Right Column - Form */
        .form-col {
            padding: 4rem;
            background-color: #FFFFFF;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* Custom Tabs */
        .register-tabs {
            border-bottom: 2px solid #E2E8F0;
            margin-bottom: 2.5rem;
            gap: 1rem;
        }

        .register-tabs .nav-link {
            border: none;
            color: var(--text-muted);
            font-weight: 600;
            padding: 1rem 1.5rem;
            background: transparent;
            font-size: 1.05rem;
            position: relative;
        }

        .register-tabs .nav-link:hover {
            color: var(--primary-navy);
        }

        .register-tabs .nav-link.active {
            color: var(--accent-blue);
            background: transparent;
        }

        .register-tabs .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: var(--accent-blue);
            border-radius: 3px 3px 0 0;
        }

        /* Consultant Tab Active Color Override */
        .register-tabs .nav-link#consultant-tab.active {
            color: var(--teal-bg);
        }

        .register-tabs .nav-link#consultant-tab.active::after {
            background-color: var(--teal-bg);
        }

        /* Form Controls */
        .form-control,
        .form-select {
            padding: 0.6rem 1.2rem;
            border: 1px solid #E2E8F0;
            border-radius: 8px;
            font-family: 'Roboto', sans-serif;
            font-size: 0.95rem;
            transition: all 0.2s ease;
        }

        .form-control:focus,
        .form-select:focus {
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
            border-color: var(--accent-blue);
        }

        .form-label {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--primary-navy);
            margin-bottom: 0.5rem;
        }

        /* Button */
        .btn-primary {
            background-color: var(--accent-blue);
            border: none;
            padding: 12px 24px;
            border-radius: 6px;
            font-weight: 600;
            width: 100%;
            margin-top: 1rem;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            background-color: #1D4ED8;
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(37, 99, 235, 0.2);
        }

        .btn-expert {
            background-color: var(--teal-bg);
            border: none;
            padding: 12px 24px;
            border-radius: 6px;
            font-weight: 600;
            width: 100%;
            margin-top: 1rem;
            transition: all 0.3s;
            color: white;
        }

        .btn-expert:hover {
            background-color: #1F6360;
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(43, 130, 127, 0.2);
            color: white;
        }

        .back-link {
            color: var(--text-muted);
            text-decoration: none;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            transition: color 0.2s;
        }

        .back-link:hover {
            color: var(--accent-blue);
        }

        /* Responsive padding */
        @media (max-width: 991px) {
            .brand-col {
                padding: 3rem 2rem;
                min-height: 300px;
            }

            .form-col {
                padding: 3rem 2rem;
            }
        }
    </style>
</head>

<body>

    <div class="container-fluid p-0">
        <div class="row g-0 register-container">

            <!-- Left Column: Branding & Value Prop -->
            <div class="col-lg-5 brand-col d-none d-lg-flex">
                <div>
                    <a href="{{ route('index') }}" class="brand-logo"><img src="assets/images/logo_white.png"
                            alt="Kapabel Indonesia Logo" style="height: 46px; vertical-align: middle;" /></a>
                </div>

                <div class="mb-5">
                    <h2 class="display-5 text-white mb-4">Accelerate Your Business Growth.</h2>
                    <p class="lead text-white-50 fs-6 lh-lg mb-4">
                        Join the Kapabel Indonesia elite ecosystem. We connect companies with top-tier financial and
                        strategy experts to solve the most complex business challenges.
                    </p>

                    <ul class="list-unstyled text-white-50 mt-5">
                        <li class="mb-3 d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-primary me-3 fs-5"></i>
                            Data-driven expert matching
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-primary me-3 fs-5"></i>
                            On-demand operational & strategic support
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-primary me-3 fs-5"></i>
                            High-level confidentiality and integrity
                        </li>
                    </ul>
                </div>

                <div>
                    <p class="small text-white-50 mb-0">&copy; 2026 KapabelIndonesia.com</p>
                </div>
            </div>

            <!-- Right Column: Registration Form -->
            <div class="col-lg-7 form-col">
                <div class="w-100" style="max-width: 600px; margin: 0 auto;">

                    <!-- Mobile Logo (Visible only on small screens) -->
                    <div class="d-lg-none mb-4 text-center">
                        <a href="{{ route('index') }}" class="brand-logo text-dark fs-2"><img src="assets/images/logo_web.png"
                                alt="Kapabel Indonesia Logo" style="height: 46px; vertical-align: middle;" /></a>
                    </div>

                    <a href="{{ route('index') }}" class="back-link mb-4"><i class="bi bi-arrow-left me-2"></i> Back to Home</a>

                    <h2 class="mb-1">Create Your Account</h2>
                    <p class="text-muted mb-4">Please select the account type that fits your needs.</p>

                    <!-- Nav Tabs -->
                    <ul class="nav nav-tabs register-tabs" id="registerTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="client-tab" data-bs-toggle="tab" data-bs-target="#client-form"
                                type="button" role="tab" aria-selected="true">Corporate Client</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="consultant-tab" data-bs-toggle="tab"
                                data-bs-target="#consultant-form" type="button" role="tab" aria-selected="false">Expert
                                Consultant</button>
                        </li>
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content" id="registerTabContent">

                        <!-- TAB 1: CLIENT FORM -->
                        <div class="tab-pane fade" id="client-form" role="tabpanel">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <input type="hidden" name="account_type" value="client">
                                <div class="row g-2">
                                    <div class="col-12">
                                        <label class="form-label">Company Name</label>
                                        <input type="text" name="company_name" class="form-control" placeholder="PT. Inovasi Bisnis Maju" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">PIC Full Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="John Doe" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Position / Job Title</label>
                                        <input type="text" name="position" class="form-control" placeholder="CFO / Director" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Corporate Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="name@company.com" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Phone Number</label>
                                        <input type="tel" name="phone" class="form-control" placeholder="+62 812 3456 7890" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Industry</label>
                                        <select name="company_industry" class="form-select" required>
                                            <option value="" selected disabled>Select Your Industry</option>
                                            <option value="fintech">Technology & FinTech</option>
                                            <option value="manufacturing">Manufacturing</option>
                                            <option value="retail">Retail & E-Commerce</option>
                                            <option value="healthcare">Healthcare</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Minimum 8 characters" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Repeat password" required>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="termsClient"
                                                required>
                                            <label class="form-check-label text-muted small" for="termsClient">
                                                I agree to Kapabel's <a href="#">Terms & Conditions</a> and <a
                                                    href="#">Privacy Policy</a>.
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Sign Up as Client</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- TAB 2: CONSULTANT FORM -->
                        <div class="tab-pane fade show active" id="consultant-form" role="tabpanel">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <input type="hidden" name="account_type" value="expert">
                                <div class="row g-2">
                                    <div class="col-12">
                                        <label class="form-label">Full Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="As per ID card" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Professional Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="email@domain.com" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Phone Number</label>
                                        <input type="tel" name="phone" class="form-control" placeholder="+62 812 3456 7890" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Primary Area of Expertise</label>
                                        <select name="expertise" class="form-select" required>
                                            <option value="" selected disabled>Select your main specialization</option>
                                            <option value="strategic">Strategic Planning</option>
                                            <option value="financial">Financial Advisory & Audit</option>
                                            <option value="transformation">Business Transformation</option>
                                            <option value="technology">Technology Consulting</option>
                                            <option value="marketing">Marketing Strategy</option>
                                            <option value="hr">Human Resources</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">LinkedIn Profile URL</label>
                                        <input type="url" name="linkedin" class="form-control" placeholder="https://linkedin.com/in/username" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Minimum 8 characters" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Repeat password" required>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="termsConsultant" required>
                                            <label class="form-check-label text-muted small" for="termsConsultant">
                                                I agree to Kapabel's <a href="#">Expert Terms & Conditions</a> and <a
                                                    href="#">Privacy Policy</a>.
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-expert">Sign Up as Expert</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div> <!-- End Tab Content -->

                    <div class="text-center mt-4">
                        <p class="text-muted small">Already have an account? <a href="{{ route('login') }}"
                                class="fw-bold text-decoration-none" style="color: var(--accent-blue);">Log in here</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>