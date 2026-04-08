<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In | Kapabel Indonesia</title>

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

            .login-container {
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
            padding: 3rem 4rem;
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
            padding: 2rem 4rem;
            background-color: #FFFFFF;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* Custom Tabs */
        .login-tabs {
            border-bottom: 2px solid #E2E8F0;
            margin-bottom: 2rem;
            gap: 1rem;
        }

        .login-tabs .nav-link {
            border: none;
            color: var(--text-muted);
            font-weight: 600;
            padding: 0.8rem 1.5rem;
            background: transparent;
            font-size: 1rem;
            position: relative;
        }

        .login-tabs .nav-link:hover {
            color: var(--primary-navy);
        }

        .login-tabs .nav-link.active {
            color: var(--accent-blue);
            background: transparent;
        }

        .login-tabs .nav-link.active::after {
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
        .login-tabs .nav-link#consultant-tab.active {
            color: var(--teal-bg);
        }

        .login-tabs .nav-link#consultant-tab.active::after {
            background-color: var(--teal-bg);
        }

        /* Form Controls */
        .form-control {
            padding: 0.8rem 1rem;
            border: 1px solid #E2E8F0;
            border-radius: 6px;
            font-family: 'Roboto', sans-serif;
            font-size: 0.95rem;
            transition: all 0.2s ease;
        }

        .form-control:focus {
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
            border-color: var(--accent-blue);
        }

        /* Specific focus color for consultant form */
        #consultant-form .form-control:focus {
            box-shadow: 0 0 0 4px rgba(43, 130, 127, 0.1);
            border-color: var(--teal-bg);
        }

        .form-label {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--primary-navy);
            margin-bottom: 0.4rem;
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

        .forgot-password {
            font-size: 0.85rem;
            color: var(--accent-blue);
            text-decoration: none;
            font-weight: 500;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        /* Responsive padding untuk Mobile */
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
        <div class="row g-0 login-container">

            <!-- Left Column: Branding & Value Prop -->
            <div class="col-lg-5 brand-col d-none d-lg-flex">
                <div>
                    <a href="index.html" class="brand-logo"><img src="assets/images/logo_white.png"
                            alt="Kapabel Indonesia Logo" style="height: 46px; vertical-align: middle;" /></a>
                </div>

                <div class="mb-4">
                    <h2 class="display-5 text-white mb-3">Welcome Back.</h2>
                    <p class="lead text-white-50 fs-6 lh-lg mb-3">
                        Log in to continue accessing elite financial expertise, strategic insights, and operational
                        support tailored to your business needs.
                    </p>

                    <div class="mt-5 p-4 rounded-3"
                        style="background-color: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
                        <p class="text-white fst-italic mb-2">"Kapabel has completely transformed how we approach
                            strategic planning and risk management."</p>
                        <p class="text-white-50 small mb-0 fw-bold">— Tech Startup CEO, Jakarta</p>
                    </div>
                </div>

                <div>
                    <p class="small text-white-50 mb-0">&copy; 2026 KapabelIndonesia.com</p>
                </div>
            </div>

            <!-- Right Column: Login Form -->
            <div class="col-lg-7 form-col">
                <div class="w-100" style="max-width: 450px; margin: 0 auto;">

                    <!-- Mobile Logo (Visible only on small screens) -->
                    <div class="d-lg-none mb-3 text-center">
                        <a href="index.html" class="brand-logo text-dark fs-2"><img
                                src="assets/images/logo_web.png alt=" Kapabel Indonesia Logo"
                                style="height: 46px; vertical-align: middle;" /></a>
                    </div>

                    <a href="index.html" class="back-link mb-4"><i class="bi bi-arrow-left me-2"></i> Back to Home</a>

                    <h3 class="mb-1 fw-bold">Log in to your account</h3>
                    <p class="text-muted small mb-4">Select your account type to continue.</p>

                    <!-- Nav Tabs -->
                    <ul class="nav nav-tabs login-tabs" id="loginTab" role="tablist">
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
                    <div class="tab-content" id="loginTabContent">

                        <!-- TAB 1: CLIENT LOGIN -->
                        <div class="tab-pane fade" id="client-form" role="tabpanel">
                            <form action="#" method="POST">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label class="form-label">Corporate Email</label>
                                        <input type="email" class="form-control" placeholder="name@company.com"
                                            required>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                            <label class="form-label mb-0">Password</label>
                                            <a href="#" class="forgot-password">Forgot Password?</a>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Enter your password"
                                            required>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="rememberClient">
                                            <label class="form-check-label text-muted small" for="rememberClient">
                                                Remember me for 30 days
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-primary">Log In as Client</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- TAB 2: CONSULTANT LOGIN -->
                        <div class="tab-pane fade show active" id="consultant-form" role="tabpanel">
                            <form action="#" method="POST">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label class="form-label">Professional Email</label>
                                        <input type="email" class="form-control" placeholder="email@domain.com"
                                            required>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                            <label class="form-label mb-0">Password</label>
                                            <a href="#" class="forgot-password" style="color: var(--teal-bg);">Forgot
                                                Password?</a>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Enter your password"
                                            required>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="rememberConsultant">
                                            <label class="form-check-label text-muted small" for="rememberConsultant">
                                                Remember me for 30 days
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-expert">Log In as Expert</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div> <!-- End Tab Content -->

                    <div class="text-center mt-5 pt-3 border-top">
                        <p class="text-muted small">Don't have an account yet? <a href="register.html"
                                class="fw-bold text-decoration-none" style="color: var(--primary-navy);">Sign up
                                here</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>