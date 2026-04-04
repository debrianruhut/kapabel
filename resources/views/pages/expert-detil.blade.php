@extends('layouts.app')

@section('title', $expert->name . ' - ' . $expert->position . ' | Kapabel Indonesia')
@section('meta_description', Str::limit(strip_tags($expert->bio), 150))
@section('meta_keywords', 'Kapabel Expert, ' . $expert->position . ', ' . $expert->name . ', Financial Consultant, Tax Advisor')
@section('meta_author', $expert->name)
@section('og_type', 'profile')
@section('og_title', $expert->name . ' - ' . $expert->position)
@section('og_description', Str::limit(strip_tags($expert->bio), 150))
@section('og_image', $expert->photo ? Storage::disk('public')->url($expert->photo) : asset('assets/images/logo_web.png'))
@push('styles')
<style>
    :root { --primary-color: #0F172A; --accent-color: #3B82F6; --text-color: #334155; }
    body { font-family: 'Roboto', sans-serif; color: var(--text-color); }
    h1, h2, h3, h4, h5, h6 { font-family: 'Raleway', sans-serif; font-weight: 700; }
    /* 1. Gunakan Poppins hanya untuk menu & tombol */
    .nav-link, .btn, .badge { 
        font-family: 'Poppins', sans-serif;
    }
    .nav-link { font-weight: 500; color: var(--primary-color) !important; margin: 0 10px; transition: color 0.3s; }
    .nav-link:hover, .nav-link.active { color: var(--accent-color) !important; }
    /* 2. Gunakan Raleway khusus untuk Logo */
    .navbar-brand { 
        font-family: 'Raleway', sans-serif; 
        font-weight: 600; /* Extra Bold agar tegas seperti logo */
        letter-spacing: -0.5px; /* Sedikit dirapatkan agar elegan */
    }
    .bg-gradient-primary { background: linear-gradient(135deg, #0F172A 0%, #1E293B 100%); }
    .profile-img-container { margin-top: -80px; }
    .credential-badge { background-color: #E0F2FE; color: #0369A1; font-size: 0.85rem; font-weight: 600; padding: 5px 12px; border-radius: 6px; display: inline-block; margin-right: 5px; margin-bottom: 5px; }
    .timeline-item { border-left: 2px solid #E2E8F0; padding-left: 20px; padding-bottom: 20px; position: relative; }
    .timeline-item::before { content: ''; position: absolute; left: -6px; top: 0; width: 10px; height: 10px; border-radius: 50%; background: var(--accent-color); }


    footer { background-color: #0F172A; color: #94A3B8; padding-top: 80px; padding-bottom: 30px; font-family: 'Roboto', sans-serif; }
    footer h5 { color: white; font-family: 'Poppins', sans-serif; margin-bottom: 20px; }
    footer a { color: #94A3B8; text-decoration: none; transition: 0.3s; }
    footer a:hover { color: var(--accent-color); }
</style>
@endpush
@section('content')
<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand fs-4" href="{{ url('/') }}">
            <i class="text-primary me-2"></i><img src="{{ asset('assets/images/logo_web.png') }}" alt="Kapabel Indonesia Logo" style="height: 43px; vertical-align: middle;"/>
        </a>
        <div class="ms-auto d-flex align-items-center">
            <a href="{{ route('experts.index') }}" class="btn btn-outline-primary btn-sm rounded-pill px-4 me-0 me-md-3 mb-2 mb-md-0"><i class="bi bi-arrow-left me-2"></i> {{ __('Back to Team') }}</a>
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

<section class="bg-gradient-primary py-5 text-white" style="height: 250px;">
    <div class="container">
        <h1 class="display-6 fw-bold">Consultant Profile</h1>
    </div>
</section>

<section class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow rounded-4 profile-img-container">
                    <img src="{{ Storage::disk('public')->url($expert->photo) }}" class="card-img-top rounded-top-4" alt="{{ $expert->name }}" onerror="this.onerror=null; this.src='{{ asset('assets/images/user-placeholder.png') }}';">
                    <div class="card-body p-4">
                        <h3 class="fw-bold mb-1">{{ $expert->name }}</h3>
                        <p class="text-primary fw-medium">{{ $expert->position }}</p>
                        <hr class="my-4 opacity-10">
                        <h6 class="fw-bold mb-3 small text-uppercase text-muted">{{ __('Direct Contact') }}</h6>
                        <ul class="list-unstyled mb-4">
                            @if($expert->email)
                            <li class="mb-2"><i class="bi bi-envelope me-2 text-primary"></i> <a href="mailto:{{ $expert->email }}" class="text-decoration-none text-muted">{{ $expert->email }}</a></li>
                            @endif
                            @if($expert->linkedin)
                            <li class="mb-2"><i class="bi bi-linkedin me-2 text-primary"></i> <a href="{{ $expert->linkedin }}" target="_blank" class="text-decoration-none text-muted">LinkedIn Profile</a></li>
                            @endif
                        </ul>
                        <a href="{{ url('/contact') }}" class="btn btn-primary w-100">{{ __('Schedule Meeting') }}</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 mt-lg-4 pt-3">
                <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm border">
                    <h4 class="fw-bold mb-4">{{ __('About Me') }}</h4>
                    <div class="text-muted lh-lg mb-4">
                        {!! $expert->bio !!}
                    </div>
                    
                    @if($expert->certifications && is_array($expert->certifications) && count($expert->certifications) > 0)
                    <h5 class="fw-bold mb-3 mt-5">{{ __('Certifications') }}</h5>
                    <div class="mb-5">
                        @foreach($expert->certifications as $cert)
                            @if(isset($cert['is_active']) ? $cert['is_active'] : true)
                                <span class="credential-badge">{{ $cert['nama_sertifikat'] ?? '' }}</span>
                            @endif
                        @endforeach
                    </div>
                    @endif

                    @if($expert->experiences && is_array($expert->experiences) && count($expert->experiences) > 0)
                    <h5 class="fw-bold mb-4">{{ __('Professional Experience') }}</h5>
                    <div class="timeline">
                        @foreach($expert->experiences as $exp)
                            @if(isset($exp['is_active']) ? $exp['is_active'] : true)
                                <div class="timeline-item">
                                    <h6 class="fw-bold">
                                        {{ $exp['peran'] ?? '' }} 
                                        @if(!empty($exp['peran']) && !empty($exp['perusahaan'])) – @endif
                                        {{ $exp['perusahaan'] ?? '' }}
                                    </h6>
                                    @if(!empty($exp['periode']) && $exp['periode'] != "-")
                                        <p class="text-primary small mb-1 fw-bold">{{ $exp['periode'] }}</p>
                                    @endif
                                    <p class="text-muted small mt-1 mb-0">{{ $exp['deskripsi'] ?? '' }}</p>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection