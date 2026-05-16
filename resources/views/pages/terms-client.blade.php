@extends('layouts.app')

@section('title', 'Client Terms & Conditions | Kapabel Indonesia')

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
            background: var(--accent-blue);
            border-color: var(--accent-blue);
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
            <h1 class="display-5 fw-bold">Corporate Client Terms & Conditions</h1>
            <p class="lead text-white-50 mx-auto col-lg-8">Syarat & Ketentuan Klien Korporasi</p>
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

                        <h2>1. Platform Overview</h2>
                        <p>Kapabel Indonesia ("Platform") serves as an aggregator to connect corporate clients ("Clients")
                            with curated, elite independent consultants and experts ("Experts"). By utilizing our Platform
                            to source, hire, or interact with Experts, you agree to these Terms & Conditions.</p>

                        <h2>2. Engagement of Experts</h2>
                        <p>Clients may browse, interview, and engage Experts for specific projects, advisory roles, or
                            interim management. The specific scope of work, deliverables, timeline, and fees will be
                            documented in a separate Statement of Work (SOW) executed between the Client, the Expert, and
                            Kapabel Indonesia.</p>

                        <h2>3. Quality Assurance & Vetting</h2>
                        <p>While Kapabel Indonesia rigorously vets its Experts through a multi-step screening process to
                            ensure high professional standards, Kapabel does not guarantee specific business outcomes. The
                            Experts operate as independent contractors, and Kapabel is not liable for their direct
                            operational decisions or actions.</p>

                        <h2>4. Non-Circumvention</h2>
                        <p>You agree to process all engagements, contracts, and payments with any Expert introduced through
                            Kapabel Indonesia exclusively through our Platform. You agree not to directly hire, engage, or
                            pay the Expert outside the Platform for a period of 24 months from the date of introduction.
                            Breach of this clause will incur a placement fee of 30% of the Expert's annualized compensation.
                        </p>

                        <h2>5. Invoicing and Payments</h2>
                        <ul>
                            <li>All payments for Expert services must be made directly to Kapabel Indonesia as the managing
                                entity.</li>
                            <li>Invoices will be issued based on the milestones or timesheets agreed upon in the SOW.</li>
                            <li>Payment terms are strictly 14 days from the invoice issuance date unless otherwise
                                negotiated in writing.</li>
                            <li>Late payments may incur a penalty of 1.5% per month on the outstanding balance.</li>
                        </ul>

                        <h2>6. Confidentiality</h2>
                        <p>We understand the critical nature of corporate data. Kapabel Indonesia mandates all its Experts
                            to sign rigorous Non-Disclosure Agreements (NDAs). Clients may also require Experts to sign
                            Client-specific NDAs before granting access to proprietary systems or sensitive information.</p>

                        <h2>7. Dispute Resolution</h2>
                        <p>In the event of a dispute regarding the quality of deliverables or project scope, Kapabel
                            Indonesia will act as a neutral mediator to reach an amicable resolution. If mediation fails,
                            disputes will be settled through arbitration under the rules of the Indonesian National Board of
                            Arbitration (BANI).</p>
                    </div>

                    <!-- INDONESIAN CONTENT -->
                    <div id="content-id" class="lang-content">
                        <p class="text-muted small mb-4">Pembaruan Terakhir: Mei 2026</p>

                        <h2>1. Tinjauan Platform</h2>
                        <p>Kapabel Indonesia ("Platform") berfungsi sebagai agregator untuk menghubungkan klien korporasi
                            ("Klien") dengan konsultan dan pakar independen ("Expert") yang telah dikurasi secara elit.
                            Dengan menggunakan Platform kami untuk mencari, menyewa, atau berinteraksi dengan Expert, Anda
                            menyetujui Syarat & Ketentuan ini.</p>

                        <h2>2. Pelibatan Konsultan (Expert)</h2>
                        <p>Klien dapat menelusuri, mewawancarai, dan mempekerjakan Expert untuk proyek tertentu, peran
                            penasihat, atau manajemen sementara. Ruang lingkup kerja, hasil kerja (deliverables), jadwal,
                            dan biaya spesifik akan didokumentasikan dalam Pernyataan Kerja (Statement of Work/SOW) terpisah
                            yang ditandatangani antara Klien, Expert, dan Kapabel Indonesia.</p>

                        <h2>3. Jaminan Mutu & Penyaringan</h2>
                        <p>Meskipun Kapabel Indonesia secara ketat menyaring Expert melalui proses seleksi multi-tahap untuk
                            memastikan standar profesional yang tinggi, Kapabel tidak menjamin hasil bisnis yang spesifik.
                            Expert beroperasi sebagai kontraktor independen, dan Kapabel tidak bertanggung jawab atas
                            keputusan atau tindakan operasional langsung mereka.</p>

                        <h2>4. Non-Sirkumvensi (Larangan Melangkahi Platform)</h2>
                        <p>Anda setuju untuk memproses semua keterlibatan, kontrak, dan pembayaran dengan Expert mana pun
                            yang diperkenalkan melalui Kapabel Indonesia secara eksklusif melalui Platform kami. Anda setuju
                            untuk tidak secara langsung mempekerjakan, melibatkan, atau membayar Expert di luar Platform
                            untuk periode 24 bulan sejak tanggal perkenalan. Pelanggaran terhadap klausul ini akan dikenakan
                            biaya penempatan sebesar 30% dari taksiran kompensasi tahunan Expert.</p>

                        <h2>5. Penagihan dan Pembayaran</h2>
                        <ul>
                            <li>Semua pembayaran untuk layanan Expert harus dilakukan langsung ke Kapabel Indonesia sebagai
                                entitas pengelola.</li>
                            <li>Faktur akan diterbitkan berdasarkan pencapaian (milestone) atau lembar waktu yang disepakati
                                dalam SOW.</li>
                            <li>Jangka waktu pembayaran adalah mutlak 14 hari sejak tanggal penerbitan faktur kecuali
                                dinegosiasikan lain secara tertulis.</li>
                            <li>Keterlambatan pembayaran dapat dikenakan denda sebesar 1,5% per bulan dari saldo yang belum
                                dibayar.</li>
                        </ul>

                        <h2>6. Kerahasiaan</h2>
                        <p>Kami memahami sifat kritis data korporasi. Kapabel Indonesia mewajibkan semua Expert-nya untuk
                            menandatangani Perjanjian Kerahasiaan (NDA) yang ketat. Klien juga dapat mewajibkan Expert untuk
                            menandatangani NDA spesifik Klien sebelum memberikan akses ke sistem kepemilikan atau informasi
                            sensitif.</p>

                        <h2>7. Penyelesaian Sengketa</h2>
                        <p>Jika terjadi perselisihan mengenai kualitas hasil kerja atau ruang lingkup proyek, Kapabel
                            Indonesia akan bertindak sebagai mediator netral untuk mencapai resolusi yang damai. Jika
                            mediasi gagal, perselisihan akan diselesaikan melalui arbitrase di bawah aturan Badan Arbitrase
                            Nasional Indonesia (BANI).</p>
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