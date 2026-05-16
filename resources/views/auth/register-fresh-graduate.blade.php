<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Expert Muda / Fresh Graduate | Kapabel Indonesia</title>

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Raleway:wght@400;600;700;800&family=Roboto:wght@300;400;500;600&display=swap"
        rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
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
            }

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

        .brand-col h1,
        .brand-col h2,
        .brand-col h3,
        .brand-col h4,
        .brand-col h5,
        .brand-col h6 {
            color: #FFFFFF !important;
        }

        .brand-col p,
        .brand-col li,
        .brand-col .text-white-50 {
            color: rgba(255, 255, 255, 0.9) !important;
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
            box-shadow: 0 0 0 4px rgba(43, 130, 127, 0.1);
            border-color: var(--teal-bg);
        }

        .form-label {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--primary-navy);
            margin-bottom: 0.5rem;
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
            color: var(--teal-bg);
        }

        .badge-special {
            background-color: rgba(43, 130, 127, 0.1);
            color: var(--teal-bg);
            border: 1px solid rgba(43, 130, 127, 0.2);
            padding: 6px 12px;
            font-weight: 600;
            border-radius: 50rem;
            display: inline-block;
            margin-bottom: 1rem;
            font-size: 0.8rem;
        }

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
                    <a href="{{ route('index') }}" class="brand-logo">
                        <img src="{{ asset('assets/images/logo_white.png') }}" alt="Kapabel Indonesia Logo"
                            style="height: 46px; vertical-align: middle;" />
                    </a>
                </div>

                <div class="mb-5">
                    <span class="badge badge-special text-white"
                        style="background: rgba(255,255,255,0.15); border-color: rgba(255,255,255,0.2);">Jalur Khusus
                        Fresh Graduate</span>
                    <h2 class="display-5 text-white mb-4 lh-sm">Mulai Langkah Pertamamu Sebagai Expert Muda.</h2>
                    <p class="lead text-white-50 fs-6 lh-lg mb-4">
                        Bergabunglah dengan ekosistem elite Kapabel Indonesia. Dampingi klien korporasi memecahkan
                        tantangan bisnis riil dan bangun portofolio profesionalmu sejak awal kelulusan.
                    </p>

                    <ul class="list-unstyled text-white-50 mt-5">
                        <li class="mb-3 d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-info me-3 fs-5"
                                style="color: #60A5FA !important;"></i>
                            Akses langsung ke studi kasus bisnis nyata
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-info me-3 fs-5"
                                style="color: #60A5FA !important;"></i>
                            Pendampingan dari konsultan senior & pakar industri
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-info me-3 fs-5"
                                style="color: #60A5FA !important;"></i>
                            Jadwal fleksibel dengan insentif profesional transparan
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

                    <!-- Mobile Logo -->
                    <div class="d-lg-none mb-4 text-center">
                        <a href="{{ route('index') }}" class="brand-logo text-dark fs-2">
                            <img src="{{ asset('assets/images/logo_web.png') }}" alt="Kapabel Indonesia Logo"
                                style="height: 46px; vertical-align: middle;" />
                        </a>
                    </div>

                    <a href="{{ url('/fresh-graduate-program') }}" class="back-link mb-4">
                        <i class="bi bi-arrow-left me-2"></i> Kembali ke Info Program
                    </a>

                    <div class="mb-4">
                        <span class="badge-special">Jalur Expert Consultant</span>
                        <h2 class="mb-1">Pendaftaran Expert Muda</h2>
                        <p class="text-muted small">Lengkapi profil profesionalmu untuk bergabung ke dalam talent pool
                            konsultan kami.</p>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show rounded-3" role="alert">
                            <strong><i class="bi bi-exclamation-triangle-fill me-2"></i> Pendaftaran Gagal!</strong>
                            <p class="mb-1 mt-2 small">Mohon periksa kembali data Anda:</p>
                            <ul class="mb-0 small">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <!-- Menggunakan account_type = expert agar fungsi di RegisteredUserController sama persis -->
                        <input type="hidden" name="account_type" value="expert">

                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" placeholder="Sesuai KTP / Ijazah" value="{{ old('name') }}"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email Profesional</label>
                                <input type="email" name="email" class="form-control" placeholder="email@domain.com" value="{{ old('email') }}"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Nomor WhatsApp / Telepon</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+62 812 3456 7890" value="{{ old('phone') }}"
                                    required>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Fokus Utama Keahlian (Spesialisasi)</label>
                                <select name="expertise" class="form-select" required>
                                    <option value="" selected disabled>Pilih spesialisasi utama kamu</option>
                                    <option value="tax">Taxation & Transfer Pricing</option>
                                    <option value="strategic">Strategic Planning</option>
                                    <option value="financial">Financial Advisory</option>
                                    <option value="transformation">Business Transformation</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Tautan Profil LinkedIn (optional)</label>
                                <input type="url" name="linkedin" class="form-control"
                                    placeholder="https://linkedin.com/in/username" value="{{ old('linkedin') }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Kata Sandi</label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="Minimal 8 karakter" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Konfirmasi Kata Sandi</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                    placeholder="Ulangi kata sandi" required>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="termsFresh" required>
                                    <label class="form-check-label text-muted small" for="termsFresh">
                                        Saya menyetujui <a href="{{ route('terms.expert') }}" target="_blank" style="color: var(--teal-bg);">Syarat & Ketentuan
                                            Konsultan</a> serta <a href="{{ route('privacy') }}" target="_blank" style="color: var(--teal-bg);">Kebijakan
                                            Privasi</a> Kapabel Indonesia.
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-expert py-3 mt-2">Daftar Sebagai Expert
                                    Muda</button>
                            </div>
                        </div>
                    </form>

                    <div class="text-center mt-4 pt-3 border-top">
                        <p class="text-muted small">Sudah memiliki akun? <a href="{{ route('login') }}"
                                class="fw-bold text-decoration-none" style="color: var(--teal-bg);">Masuk di sini</a>
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