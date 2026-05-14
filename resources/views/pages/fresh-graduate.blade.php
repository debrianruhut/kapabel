@extends('layouts.app')

@section('title', 'Program Khusus Fresh Graduate - Kapabel Indonesia')
@section('meta_description', 'Peluang emas bagi mahasiswa fresh graduate untuk bergabung sebagai konsultan dan expert independen di ekosistem elite Kapabel Indonesia.')
@section('meta_keywords', 'Fresh Graduate Consultant, Loker Fresh Graduate, Expert Muda Kapabel, Konsultan Keuangan Muda, Business Strategy Fresh Graduate')
@section('og_title', 'Akselerasi Karir Konsultan untuk Fresh Graduate | Kapabel Indonesia')
@section('og_description', 'Jangan tunggu bertahun-tahun untuk memberikan dampak. Bergabunglah sebagai Expert / Konsultan di Kapabel Indonesia dan tangani proyek nyata dari klien korporasi.')

@push('styles')
<style>
    :root {
        --primary-color: #0F172A;
        --accent-color: #3B82F6;
        --teal-accent: #2B827F;
        --text-color: #334155;
        --bg-light: #F8FAFC;
    }

    body {
        font-family: 'Roboto', sans-serif;
        color: var(--text-color);
        overflow-x: hidden;
    }

    h1, h2, h3, h4, h5, h6 {
        font-family: 'Raleway', sans-serif;
        font-weight: 700;
        color: var(--primary-color);
    }

    .btn, .badge, .nav-link {
        font-family: 'Poppins', sans-serif;
    }

    /* Override Navbar Styles to ensure visibility over any background */
    .navbar {
        background-color: #FFFFFF !important;
        box-shadow: 0 1px 15px rgba(0, 0, 0, 0.06);
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

    /* Custom Hero Section */
    .hero-fresh {
        background: linear-gradient(135deg, #0F172A 0%, #1E293B 100%);
        padding: 160px 0 100px;
        color: white;
        position: relative;
    }

    .hero-fresh::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 40px;
        background: white;
        clip-path: polygon(0 100%, 100% 100%, 100% 0);
    }

    .badge-premium {
        background-color: rgba(59, 130, 246, 0.15);
        color: #60A5FA;
        border: 1px solid rgba(59, 130, 246, 0.3);
        padding: 8px 16px;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    .btn-custom-primary {
        background-color: var(--accent-color);
        color: white;
        font-weight: 600;
        padding: 14px 32px;
        border-radius: 50rem;
        transition: all 0.3s ease;
        border: none;
        box-shadow: 0 10px 20px rgba(59, 130, 246, 0.3);
    }

    .btn-custom-primary:hover {
        background-color: #2563EB;
        transform: translateY(-3px);
        box-shadow: 0 15px 25px rgba(59, 130, 246, 0.4);
        color: white;
    }

    .btn-custom-secondary {
        background-color: rgba(255, 255, 255, 0.1);
        color: white;
        font-weight: 600;
        padding: 14px 32px;
        border-radius: 50rem;
        transition: all 0.3s ease;
        border: 1px solid rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(5px);
    }

    .btn-custom-secondary:hover {
        background-color: white;
        color: var(--primary-color);
        transform: translateY(-3px);
    }

    /* Cards feature */
    .feature-card {
        background: white;
        border-radius: 1rem;
        padding: 2.5rem;
        transition: all 0.3s ease;
        border: 1px solid #E2E8F0;
        height: 100%;
    }

    .feature-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.05), 0 10px 10px -5px rgba(0, 0, 0, 0.02);
        border-color: var(--accent-color);
    }

    .feature-icon-wrapper {
        width: 64px;
        height: 64px;
        border-radius: 1rem;
        background: rgba(59, 130, 246, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        color: var(--accent-color);
        font-size: 1.75rem;
        transition: all 0.3s ease;
    }

    .feature-card:hover .feature-icon-wrapper {
        background: var(--accent-color);
        color: white;
        transform: rotate(5deg);
    }

    /* Timeline steps */
    .step-box {
        position: relative;
        padding-left: 3rem;
        margin-bottom: 2.5rem;
    }

    .step-box::before {
        content: '';
        position: absolute;
        left: 15px;
        top: 35px;
        bottom: -15px;
        width: 2px;
        background: #E2E8F0;
    }

    .step-box:last-child::before {
        display: none;
    }

    .step-number {
        position: absolute;
        left: 0;
        top: 0;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: var(--primary-color);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-family: 'Poppins', sans-serif;
        font-size: 0.9rem;
    }

    /* CTA Section */
    .cta-section {
        background: linear-gradient(135deg, #2B827F 0%, #1A5452 100%);
        border-radius: 1.5rem;
        padding: 4rem 2rem;
        color: white;
        position: relative;
        overflow: hidden;
    }

    .cta-section h2 {
        color: white;
    }

    .btn-cta-special {
        background-color: white;
        color: var(--teal-accent);
        font-weight: 700;
        padding: 16px 36px;
        border-radius: 50rem;
        transition: all 0.3s ease;
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 1rem;
    }

    .btn-cta-special:hover {
        background-color: var(--primary-color);
        color: white;
        transform: scale(1.03);
    }
</style>
@endpush

@section('content')
    <!-- HERO SECTION -->
    <section class="hero-fresh">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <span class="badge badge-premium rounded-pill mb-3">🎓 PELUANG KHUSUS FRESH GRADUATE</span>
                    <h1 class="display-4 fw-bold text-white mb-4 lh-sm">
                        Baru Lulus? <br>
                        <span class="text-primary" style="color: #60A5FA !important;">Akselerasi Karirmu</span> Sebagai Expert & Konsultan.
                    </h1>
                    <p class="lead text-white-50 mb-5 fs-5 fw-normal lh-base">
                        Jangan tunggu bertahun-tahun untuk mendapatkan panggung profesional. Dunia bisnis modern membutuhkan ide segar, penguasaan teknologi mutakhir, dan ketajaman riset dari talenta muda terbaik.
                    </p>
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center justify-content-lg-start">
                        <a href="{{ route('register.fresh-graduate') }}" class="btn btn-custom-primary">
                            Daftar Sebagai Expert Muda <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                        <a href="#why-join" class="btn btn-custom-secondary">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Fresh Graduate Consultants" 
                             class="img-fluid rounded-4 shadow-lg"
                             style="border: 1px solid rgba(255,255,255,0.1);">
                        <div class="position-absolute bottom-0 start-0 translate-middle-x bg-white p-3 rounded-4 shadow-lg d-flex align-items-center gap-3" style="z-index: 2;">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                                <i class="bi bi-stars fs-5"></i>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold text-dark">Portfolio Nyata</h6>
                                <small class="text-muted">Proyek Klien Korporasi</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NARRATIVE / VALUE PROPOSITION SECTION -->
    <section id="why-join" class="py-5 bg-white">
        <div class="container py-5">
            <div class="text-center max-w-3xl mx-auto mb-5" style="max-width: 700px; margin: 0 auto;">
                <h6 class="text-primary fw-bold text-uppercase mb-2" style="color: var(--accent-color) !important;">Mengapa Bergabung</h6>
                <h2 class="display-6 fw-bold mb-3">Panggung Nyata Bagi Potensi Besarmu</h2>
                <p class="text-muted fs-6">
                    Kami percaya gelar akademismu adalah fondasi berharga yang siap diubah menjadi solusi praktis bernilai tinggi. Di Kapabel Indonesia, kamu tidak hanya menjadi penonton, tapi penggerak solusi.
                </p>
            </div>

            <div class="row g-4 mt-2">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon-wrapper">
                            <i class="bi bi-briefcase"></i>
                        </div>
                        <h4 class="fs-5 fw-bold mb-3">Validasi Keahlian Langsung</h4>
                        <p class="text-muted small lh-base mb-0">
                            Buktikan ketajaman analisismu melalui studi kasus nyata dari berbagai sektor industri. Terapkan teori perpajakan, keuangan, dan strategi bisnis pada skenario korporasi sesungguhnya.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon-wrapper" style="color: var(--teal-accent); background: rgba(43, 130, 127, 0.1);">
                            <i class="bi bi-people"></i>
                        </div>
                        <h4 class="fs-5 fw-bold mb-3">Mentorship & Ekosistem Elite</h4>
                        <p class="text-muted small lh-base mb-0">
                            Terhubung dan dapatkan bimbingan langsung dari konsultan senior berpengalaman global. Perluas relasi profesionalmu dalam lingkungan kerja yang mengutamakan integritas dan kolaborasi.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon-wrapper" style="color: #F59E0B; background: rgba(245, 158, 11, 0.1);">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h4 class="fs-5 fw-bold mb-3">Penghasilan & Fleksibilitas</h4>
                        <p class="text-muted small lh-base mb-0">
                            Raih insentif dan kompensasi profesional secara independen seiring dengan kontribusi proyekmu. Rancang ritme kerjamu sendiri sambil membangun reputasi sebagai konsultan terpercaya.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HOW IT WORKS SECTION -->
    <section class="py-5" style="background-color: var(--bg-light);">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h6 class="text-primary fw-bold text-uppercase mb-2" style="color: var(--teal-accent) !important;">Proses Mudah</h6>
                    <h2 class="display-6 fw-bold mb-4">Langkah Menuju Karir Konsultanmu</h2>
                    <p class="text-muted mb-4">
                        Proses penerimaan khusus fresh graduate dirancang cepat, transparan, dan berfokus pada pemetaan keahlian spesifik yang kamu kuasai selama masa studi.
                    </p>
                    
                    <div class="mt-5">
                        <div class="step-box">
                            <div class="step-number">1</div>
                            <h5 class="fw-bold mb-1 fs-6">Registrasi Jalur Khusus</h5>
                            <p class="text-muted small mb-0">Isi formulir pendaftaran khusus fresh graduate, cantumkan portofolio akademis, fokus keahlian, dan tautan LinkedIn kamu.</p>
                        </div>
                        <div class="step-box">
                            <div class="step-number" style="background: var(--accent-color);">2</div>
                            <h5 class="fw-bold mb-1 fs-6">Verifikasi & Pemetaan Kompetensi</h5>
                            <p class="text-muted small mb-0">Tim asesor kami akan meninjau kualifikasi dan menentukan area penugasan yang paling relevan dengan passion dan keahlianmu.</p>
                        </div>
                        <div class="step-box">
                            <div class="step-number" style="background: var(--teal-accent);">3</div>
                            <h5 class="fw-bold mb-1 fs-6">Terjun ke Proyek Klien</h5>
                            <p class="text-muted small mb-0">Mulai berkolaborasi dalam tim konsultan untuk memberikan advisory mutakhir kepada perusahaan-perusahaan yang membutuhkan solusimu.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm border border-slate-100">
                        <h4 class="fw-bold mb-4 text-center">Area Keahlian yang Dicari</h4>
                        <div class="d-flex flex-column gap-3">
                            <div class="p-3 rounded-3 bg-light d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-3">
                                    <i class="bi bi-calculator fs-4 text-primary"></i>
                                    <span class="fw-semibold">Taxation & Transfer Pricing</span>
                                </div>
                                <span class="badge bg-primary rounded-pill">High Demand</span>
                            </div>
                            <div class="p-3 rounded-3 bg-light d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-3">
                                    <i class="bi bi-cash-stack fs-4 text-success"></i>
                                    <span class="fw-semibold">Financial Advisory & Valuation</span>
                                </div>
                                <span class="badge bg-success rounded-pill">High Demand</span>
                            </div>
                            <div class="p-3 rounded-3 bg-light d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-3">
                                    <i class="bi bi-lightbulb fs-4 text-warning"></i>
                                    <span class="fw-semibold">Digital Business Strategy</span>
                                </div>
                                <span class="badge bg-warning text-dark rounded-pill">Growing</span>
                            </div>
                            <div class="p-3 rounded-3 bg-light d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-3">
                                    <i class="bi bi-diagram-3 fs-4 text-info"></i>
                                    <span class="fw-semibold">Business Transformation</span>
                                </div>
                                <span class="badge bg-info text-dark rounded-pill">Growing</span>
                            </div>
                        </div>

                        <div class="mt-4 pt-3 border-top text-center">
                            <p class="small text-muted mb-0">Punya keahlian analisis kuantitatif atau riset pasar mendalam? Kami juga menyambut latar belakang studi terkait lainnya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION SECTION -->
    <section class="py-5 bg-white">
        <div class="container py-4">
            <div class="cta-section text-center shadow-lg mb-5">
                <span class="badge bg-white text-dark rounded-pill mb-3 px-3 py-2 fw-bold shadow-sm">🚀 MULAI LANGKAH PERTAMAMU</span>
                <h2 class="display-6 fw-bold mb-3 max-w-2xl mx-auto">Siap Memberikan Dampak Nyata di Dunia Bisnis?</h2>
                <p class="lead text-white-50 mb-5 max-w-xl mx-auto fs-6" style="max-width: 600px; margin: 0 auto;">
                    Bergabunglah dengan puluhan konsultan dan pakar strategi di platform kami. Ubah potensi akademismu menjadi portofolio dan keahlian praktis yang dicari oleh industri terkemuka.
                </p>
                <a href="{{ route('register.fresh-graduate') }}" class="btn btn-cta-special">
                    Daftar Khusus Fresh Graduate &rarr;
                </a>
                <p class="small text-white-50 mt-3 mb-0">Proses registrasi cepat, gratis, dan tanpa komitmen eksklusif.</p>
            </div>
        </div>
    </section>

    <!-- SIMPLE FOOTER & ADS TERMS AND CONDITIONS -->
    <footer class="py-4 bg-light border-top mt-auto">
        <div class="container text-center">
            <div class="mx-auto mb-3" style="max-width: 800px;">
                <p class="small text-muted mb-2" style="font-size: 0.8rem; line-height: 1.6;">
                    <strong>Syarat & Ketentuan (Terms & Conditions) Iklan:</strong> Program penjaringan kemitraan independen khusus Fresh Graduate ini diselenggarakan oleh Kapabel Indonesia. Materi iklan (ads) yang didistribusikan ditujukan murni sebagai undangan kemitraan/konsultan independen. Kapabel Indonesia tidak memungut biaya apa pun dalam seluruh tahapan seleksi maupun penugasan proyek. Penempatan dan pencocokan proyek sepenuhnya didasarkan pada kesesuaian portofolio pendaftar dengan kualifikasi yang dibutuhkan oleh klien korporasi.
                </p>
            </div>
            <p class="small text-muted mb-0" style="font-size: 0.8rem;">
                &copy; 2026 Kapabel Indonesia Consulting. All rights reserved.
            </p>
        </div>
    </footer>
@endsection
