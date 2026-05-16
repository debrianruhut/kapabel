@extends('layouts.app')

@section('title', 'Privacy Policy | Kapabel Indonesia')

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
            background: var(--primary-navy);
            border-color: var(--primary-navy);
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
            <h1 class="display-5 fw-bold">Privacy Policy</h1>
            <p class="lead text-white-50 mx-auto col-lg-8">Kebijakan Privasi</p>
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
                        <p>At Kapabel Indonesia, we are committed to protecting the privacy and security of your personal
                            and corporate information. This Privacy Policy explains how we collect, use, disclose, and
                            safeguard your information when you visit our website or use our consulting aggregator platform.
                        </p>

                        <h2>2. Information We Collect</h2>
                        <p>We collect information that you voluntarily provide to us when registering on the platform,
                            expressing an interest in obtaining information about us or our services, or otherwise
                            contacting us. This includes:</p>
                        <ul>
                            <li><strong>Personal Data:</strong> Name, email address, phone number, and LinkedIn profiles.
                            </li>
                            <li><strong>Corporate Data:</strong> Company name, industry, business needs, and financial
                                parameters (if provided during project scoping).</li>
                            <li><strong>Expert Data:</strong> Resumes, credentials, expertise categories, and past project
                                portfolios.</li>
                        </ul>

                        <h2>3. How We Use Your Information</h2>
                        <p>We use the information we collect primarily to facilitate the core functions of our platform:</p>
                        <ul>
                            <li>To match Corporate Clients with the most suitable Experts based on algorithmic and manual
                                curation.</li>
                            <li>To facilitate communication, project management, and payment processing between all parties.
                            </li>
                            <li>To send administrative information, such as updates to our terms, conditions, and policies.
                            </li>
                            <li>To enforce our terms, conditions, and policies for business purposes, legal reasons, and
                                contractual obligations.</li>
                        </ul>

                        <h2>4. Information Sharing and Disclosure</h2>
                        <p>Kapabel Indonesia does not sell your personal or corporate data. We only share information under
                            the following circumstances:</p>
                        <ul>
                            <li><strong>Platform Operations:</strong> Sharing Expert profiles with prospective Clients, and
                                sharing Client project details with matched Experts.</li>
                            <li><strong>Service Providers:</strong> We may share data with third-party vendors (e.g.,
                                payment gateways, cloud hosting) who perform services for us and require access to such
                                information to do that work.</li>
                            <li><strong>Legal Obligations:</strong> We may disclose your information where we are legally
                                required to do so in order to comply with applicable law, governmental requests, or a
                                judicial proceeding.</li>
                        </ul>

                        <h2>5. Data Security</h2>
                        <p>We implement robust, industry-standard technical and organizational security measures to protect
                            the security of any personal information we process. However, despite our safeguards and efforts
                            to secure your information, no electronic transmission over the Internet can be guaranteed to be
                            100% secure.</p>

                        <h2>6. Your Privacy Rights</h2>
                        <p>Depending on your jurisdiction, you may have the right to request access to the personal
                            information we collect from you, change that information, or delete it in some circumstances. To
                            request to review, update, or delete your personal information, please submit a request to our
                            data protection officer via our Contact page.</p>

                        <h2>7. Changes to this Privacy Policy</h2>
                        <p>We may update this privacy policy from time to time. The updated version will be indicated by an
                            updated "Last Updated" date and the updated version will be effective as soon as it is
                            accessible. We encourage you to review this privacy policy frequently to be informed of how we
                            are protecting your information.</p>
                    </div>

                    <!-- INDONESIAN CONTENT -->
                    <div id="content-id" class="lang-content">
                        <p class="text-muted small mb-4">Pembaruan Terakhir: Mei 2026</p>

                        <h2>1. Pendahuluan</h2>
                        <p>Di Kapabel Indonesia, kami berkomitmen untuk melindungi privasi dan keamanan informasi pribadi
                            dan perusahaan Anda. Kebijakan Privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan,
                            mengungkapkan, dan menjaga informasi Anda ketika Anda mengunjungi situs web kami atau
                            menggunakan platform agregator konsultan kami.</p>

                        <h2>2. Informasi yang Kami Kumpulkan</h2>
                        <p>Kami mengumpulkan informasi yang Anda berikan secara sukarela kepada kami saat mendaftar di
                            platform, menyatakan minat untuk memperoleh informasi tentang kami atau layanan kami, atau saat
                            menghubungi kami. Hal ini mencakup:</p>
                        <ul>
                            <li><strong>Data Pribadi:</strong> Nama, alamat email, nomor telepon, dan profil LinkedIn.</li>
                            <li><strong>Data Perusahaan:</strong> Nama perusahaan, industri, kebutuhan bisnis, dan parameter
                                keuangan (jika diberikan selama penentuan ruang lingkup proyek).</li>
                            <li><strong>Data Pakar (Expert):</strong> Daftar riwayat hidup (CV), kredensial, kategori
                                keahlian, dan portofolio proyek masa lalu.</li>
                        </ul>

                        <h2>3. Bagaimana Kami Menggunakan Informasi Anda</h2>
                        <p>Kami menggunakan informasi yang kami kumpulkan terutama untuk memfasilitasi fungsi inti platform
                            kami:</p>
                        <ul>
                            <li>Untuk mencocokkan Klien Korporasi dengan Expert yang paling sesuai berdasarkan kurasi
                                algoritmik dan manual.</li>
                            <li>Untuk memfasilitasi komunikasi, manajemen proyek, dan pemrosesan pembayaran di antara semua
                                pihak.</li>
                            <li>Untuk mengirimkan informasi administratif, seperti pembaruan syarat, ketentuan, dan
                                kebijakan kami.</li>
                            <li>Untuk menegakkan syarat, ketentuan, dan kebijakan kami demi tujuan bisnis, alasan hukum, dan
                                kewajiban kontrak.</li>
                        </ul>

                        <h2>4. Berbagi dan Pengungkapan Informasi</h2>
                        <p>Kapabel Indonesia tidak menjual data pribadi atau perusahaan Anda. Kami hanya membagikan
                            informasi dalam keadaan berikut:</p>
                        <ul>
                            <li><strong>Operasional Platform:</strong> Membagikan profil Expert dengan calon Klien, dan
                                membagikan detail proyek Klien dengan Expert yang cocok.</li>
                            <li><strong>Penyedia Layanan:</strong> Kami dapat membagikan data dengan vendor pihak ketiga
                                (misalnya, gateway pembayaran, cloud hosting) yang melakukan layanan untuk kami dan
                                memerlukan akses ke informasi tersebut untuk melakukan pekerjaan tersebut.</li>
                            <li><strong>Kewajiban Hukum:</strong> Kami dapat mengungkapkan informasi Anda di mana kami
                                secara hukum diharuskan untuk melakukannya untuk mematuhi hukum yang berlaku, permintaan
                                pemerintah, atau proses peradilan.</li>
                        </ul>

                        <h2>5. Keamanan Data</h2>
                        <p>Kami menerapkan langkah-langkah keamanan teknis dan organisasi berstandar industri yang kuat
                            untuk melindungi keamanan setiap informasi pribadi yang kami proses. Namun, terlepas dari
                            pengamanan dan upaya kami untuk mengamankan informasi Anda, tidak ada transmisi elektronik
                            melalui Internet yang dapat dijamin 100% aman.</p>

                        <h2>6. Hak Privasi Anda</h2>
                        <p>Bergantung pada yurisdiksi Anda, Anda mungkin memiliki hak untuk meminta akses ke informasi
                            pribadi yang kami kumpulkan dari Anda, mengubah informasi tersebut, atau menghapusnya dalam
                            beberapa keadaan. Untuk meminta peninjauan, pembaruan, atau penghapusan informasi pribadi Anda,
                            silakan ajukan permintaan ke petugas perlindungan data kami melalui halaman Kontak kami.</p>

                        <h2>7. Perubahan pada Kebijakan Privasi ini</h2>
                        <p>Kami dapat memperbarui kebijakan privasi ini dari waktu ke waktu. Versi yang diperbarui akan
                            ditunjukkan dengan tanggal "Pembaruan Terakhir" dan versi yang diperbarui akan efektif segera
                            setelah dapat diakses. Kami mendorong Anda untuk sering meninjau kebijakan privasi ini agar
                            mengetahui bagaimana kami melindungi informasi Anda.</p>
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