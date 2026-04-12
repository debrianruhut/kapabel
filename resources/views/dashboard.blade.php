@extends('layouts.app')

@section('title', 'Dashboard | Kapabel Indonesia')
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

        .nav-link:hover,
        .nav-link.active {
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

        /* Expert CTA Section */
        .expert-section {
            padding: 60px 0;
        }

        .expert-card {
            background-color: var(--teal-bg);
            border-radius: 20px;
            position: relative;
            padding: 50px 40px;
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
@endpush
@section('content')
    <div class="container" style="padding-top: 120px; padding-bottom: 80px; min-height: 60vh;">
        <div class="row">
            <!-- Profile Card -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0 rounded-4 text-center h-100">
                    <div class="card-body py-5">
                        <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center mx-auto mb-3 shadow-sm"
                            style="width: 90px; height: 90px; font-size: 2.5rem; font-family: 'Poppins', sans-serif;">
                            {{ strtoupper(substr($user->name, 0, 1)) }}
                        </div>
                        <h5 class="fw-bold mb-1">{{ $user->name }}</h5>
                        <p class="text-muted mb-3">{{ $user->email }}</p>
                        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-medium">
                            {{ $user->roles->first()->name ?? 'Standard User' }}
                        </span>
                        <hr class="my-4 text-muted">
                        <a href="{{ route('profile.edit') }}"
                            class="btn btn-outline-primary w-100 rounded-pill py-2 fw-medium">
                            <i class="bi bi-pencil-square me-2"></i>Edit Profile
                        </a>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-8 mb-4">
                <div class="card shadow-sm border-0 rounded-4 h-100">
                    <div class="card-body p-4 p-lg-5">
                        <h4 class="fw-bold mb-4" style="font-family: 'Raleway', sans-serif;"><i
                                class="bi bi-speedometer2 text-primary me-2"></i>Dashboard Overview</h4>

                        <div class="alert alert-success d-flex align-items-center rounded-3 bg-success bg-opacity-10 text-success border-0 mb-4"
                            role="alert">
                            <i class="bi bi-check-circle-fill me-3 fs-4"></i>
                            <div>
                                <strong>Hello, {{ explode(' ', trim($user->name))[0] }}!</strong> You are successfully
                                logged in.
                            </div>
                        </div>

                        <h5 class="fw-bold mt-5 mb-4" style="font-family: 'Raleway', sans-serif;">Account Details</h5>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="p-3 border border-light-subtle rounded-3 bg-light h-100">
                                    <small class="text-muted d-block mb-1 text-uppercase"
                                        style="font-size: 0.75rem; letter-spacing: 0.5px;">Full Name</small>
                                    <span class="fw-medium text-dark">{{ $user->name }}</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="p-3 border border-light-subtle rounded-3 bg-light h-100">
                                    <small class="text-muted d-block mb-1 text-uppercase"
                                        style="font-size: 0.75rem; letter-spacing: 0.5px;">Email Address</small>
                                    <span class="fw-medium text-dark">{{ $user->email }}</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="p-3 border border-light-subtle rounded-3 bg-light h-100">
                                    <small class="text-muted d-block mb-1 text-uppercase"
                                        style="font-size: 0.75rem; letter-spacing: 0.5px;">Role Type</small>
                                    <span
                                        class="fw-medium text-dark">{{ $user->roles->first()->name ?? 'Standard User' }}</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="p-3 border border-light-subtle rounded-3 bg-light h-100">
                                    <small class="text-muted d-block mb-1 text-uppercase"
                                        style="font-size: 0.75rem; letter-spacing: 0.5px;">Member Since</small>
                                    <span
                                        class="fw-medium text-dark">{{ $user->created_at ? $user->created_at->format('d F Y') : '-' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection