@extends('layouts.app')

@section('title', 'Expert Terms & Conditions | Kapabel Indonesia')

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

        .page-header {
            background-color: var(--primary-navy);
            background-image: radial-gradient(rgba(255, 255, 255, 0.05) 2px, transparent 2px);
            background-size: 30px 30px;
            padding: 160px 0 100px;
            color: white;
            text-align: center;
        }

        .legal-content {
            background: white;
            padding: 3rem 4rem;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.04);
            border: 1px solid #F1F5F9;
            margin-top: -60px;
            position: relative;
            z-index: 10;
            margin-bottom: 5rem;
        }

        .legal-content h2 {
            color: var(--primary-navy);
            margin-top: 2rem;
            margin-bottom: 1rem;
            font-family: 'Raleway', sans-serif;
            font-weight: 700;
            font-size: 1.5rem;
        }

        .legal-content p,
        .legal-content li {
            color: var(--text-muted);
            line-height: 1.8;
            font-size: 0.95rem;
        }

        .lang-switcher {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 2rem;
        }

        .lang-btn {
            background: transparent;
            border: 1px solid #E2E8F0;
            color: var(--text-muted);
            padding: 8px 20px;
            border-radius: 50rem;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .lang-btn.active {
            background: var(--teal-bg);
            border-color: var(--teal-bg);
            color: white;
        }

        .lang-content {
            display: none;
        }

        .lang-content.active {
            display: block;
            animation: fadeIn 0.4s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .legal-content {
                padding: 2rem 1.5rem;
            }
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
    <section class="page-header">
        <div class="container text-center">
            <h1 class="display-5 fw-bold">Expert Terms & Conditions</h1>
            <p class="lead text-white-50 mx-auto col-lg-8">Syarat & Ketentuan Konsultan</p>
        </div>
    </section>

    <section class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="legal-content">

                    <div class="lang-switcher">
                        <button class="lang-btn active" onclick="switchLang('en')">English</button>
                        <button class="lang-btn" onclick="switchLang('id')">Bahasa Indonesia</button>
                    </div>

                    <!-- ENGLISH CONTENT -->
                    <div id="content-en" class="lang-content active">
                        <p class="text-muted small mb-4">Last Updated: May 2026</p>

                        <h2>1. Introduction</h2>
                        <p>Welcome to Kapabel Indonesia. These Expert Terms & Conditions govern your participation as a
                            Consultant/Expert on the Kapabel platform. By registering as an Expert, you agree to be bound by
                            these terms. Kapabel Indonesia acts as an aggregator and facilitator connecting independent
                            consultants with corporate clients.</p>

                        <h2>2. Expert Status & Relationship</h2>
                        <p>You acknowledge that you are engaged as an independent contractor, not an employee, partner, or
                            joint venturer of Kapabel Indonesia. You have the full right to accept or decline any project
                            offered through the platform. Kapabel does not guarantee a minimum number of projects or income.
                        </p>

                        <h2>3. Registration and Profile Accuracy</h2>
                        <ul>
                            <li>You must provide accurate, current, and complete information regarding your professional
                                background, credentials, and expertise.</li>
                            <li>Falsifying qualifications or professional experience is grounds for immediate termination
                                and permanent ban from the platform.</li>
                            <li>You agree to keep your profile updated, including your availability status.</li>
                        </ul>

                        <h2>4. Confidentiality and Non-Disclosure</h2>
                        <p>As an Expert on Kapabel Indonesia, you will be exposed to highly sensitive corporate information.
                            You agree to:</p>
                        <ul>
                            <li>Maintain strict confidentiality of all client data, strategies, financials, and internal
                                communications.</li>
                            <li>Not disclose, share, or utilize client information for personal gain or for any third party.
                            </li>
                            <li>Sign and adhere to specific Non-Disclosure Agreements (NDAs) required by individual clients
                                before commencing a project.</li>
                        </ul>

                        <h2>5. Non-Circumvention</h2>
                        <p>You agree not to bypass Kapabel Indonesia to work directly with clients introduced to you through
                            the platform for a period of 24 months following your last engagement with that client through
                            Kapabel. Any direct contracting without Kapabel's written consent during this period will result
                            in a penalty fee equivalent to 30% of your expected annual compensation.</p>

                        <h2>6. Payments and Fees</h2>
                        <p>Kapabel Indonesia will process payments for your services. You will be compensated based on the
                            agreed rate for each specific project or hourly engagement. Kapabel will deduct its standard
                            platform service fee before disbursing payments to your designated bank account. Payments will
                            be made within 14 days after the client approves the final deliverables or timesheet.</p>

                        <h2>7. Professional Standard of Care</h2>
                        <p>You agree to perform all services with the highest degree of professional skill, care, and
                            diligence expected in your industry. You are solely responsible for the quality and accuracy of
                            the advice, reports, and deliverables you provide to clients.</p>
                    </div>

                    <!-- INDONESIAN CONTENT -->
                    <div id="content-id" class="lang-content">
                        <p class="text-muted small mb-4">Pembaruan Terakhir: Mei 2026</p>

                        <h2>1. Pendahuluan</h2>
                        <p>Selamat datang di Kapabel Indonesia. Syarat & Ketentuan Expert ini mengatur partisipasi Anda
                            sebagai Konsultan/Pakar di platform Kapabel. Dengan mendaftar sebagai Expert, Anda setuju untuk
                            terikat oleh ketentuan ini. Kapabel Indonesia bertindak sebagai agregator dan fasilitator yang
                            menghubungkan konsultan independen dengan klien korporasi.</p>

                        <h2>2. Status & Hubungan Kerja</h2>
                        <p>Anda mengakui bahwa Anda berstatus sebagai kontraktor independen, bukan karyawan, mitra, atau
                            bagian dari ventura bersama Kapabel Indonesia. Anda memiliki hak penuh untuk menerima atau
                            menolak proyek apa pun yang ditawarkan melalui platform. Kapabel tidak menjamin jumlah minimum
                            proyek atau pendapatan.</p>

                        <h2>3. Pendaftaran dan Akurasi Profil</h2>
                        <ul>
                            <li>Anda harus memberikan informasi yang akurat, terkini, dan lengkap mengenai latar belakang
                                profesional, kredensial, dan keahlian Anda.</li>
                            <li>Pemalsuan kualifikasi atau pengalaman profesional merupakan dasar untuk pemutusan hubungan
                                seketika dan pemblokiran permanen dari platform.</li>
                            <li>Anda setuju untuk terus memperbarui profil Anda, termasuk status ketersediaan Anda.</li>
                        </ul>

                        <h2>4. Kerahasiaan dan Non-Disklosur (NDA)</h2>
                        <p>Sebagai Expert di Kapabel Indonesia, Anda akan terekspos pada informasi korporasi yang sangat
                            sensitif. Anda setuju untuk:</p>
                        <ul>
                            <li>Menjaga kerahasiaan ketat atas semua data klien, strategi, keuangan, dan komunikasi
                                internal.</li>
                            <li>Tidak mengungkapkan, membagikan, atau menggunakan informasi klien untuk keuntungan pribadi
                                atau pihak ketiga mana pun.</li>
                            <li>Menandatangani dan mematuhi Perjanjian Kerahasiaan (NDA) spesifik yang diwajibkan oleh klien
                                individu sebelum memulai proyek.</li>
                        </ul>

                        <h2>5. Non-Sirkumvensi (Larangan Melangkahi Platform)</h2>
                        <p>Anda setuju untuk tidak melangkahi (bypass) Kapabel Indonesia untuk bekerja sama langsung dengan
                            klien yang diperkenalkan kepada Anda melalui platform selama periode 24 bulan setelah
                            keterlibatan terakhir Anda dengan klien tersebut melalui Kapabel. Transaksi langsung tanpa
                            persetujuan tertulis Kapabel selama periode ini akan dikenakan denda sebesar 30% dari taksiran
                            kompensasi tahunan Anda.</p>

                        <h2>6. Pembayaran dan Biaya</h2>
                        <p>Kapabel Indonesia akan memproses pembayaran untuk layanan Anda. Anda akan dikompensasi
                            berdasarkan tarif yang disepakati untuk setiap proyek spesifik atau keterlibatan per jam.
                            Kapabel akan memotong biaya layanan platform standar sebelum mencairkan pembayaran ke rekening
                            bank yang Anda tunjuk. Pembayaran akan dilakukan dalam waktu 14 hari setelah klien menyetujui
                            hasil akhir (deliverables) atau lembar waktu (timesheet).</p>

                        <h2>7. Standar Perawatan Profesional</h2>
                        <p>Anda setuju untuk melaksanakan semua layanan dengan tingkat keterampilan, kehati-hatian, dan
                            ketekunan profesional tertinggi yang diharapkan di industri Anda. Anda sepenuhnya bertanggung
                            jawab atas kualitas dan keakuratan saran, laporan, dan hasil kerja yang Anda berikan kepada
                            klien.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            function switchLang(lang) {
                // Update buttons
                document.querySelectorAll('.lang-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                event.target.classList.add('active');

                // Update content
                document.querySelectorAll('.lang-content').forEach(content => {
                    content.classList.remove('active');
                });
                document.getElementById('content-' + lang).classList.add('active');
            }
        </script>
    @endpush
@endsection