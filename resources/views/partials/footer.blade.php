<footer>
    <div class="container">
        <div class="row g-4 mb-5">
            <div class="col-lg-4 col-md-6">
                <h5 class="fw-bold text-white mb-4 fs-4"><img src="{{ asset('assets/images/logo_white.png') }}"
                        alt="Kapabel Indonesia Logo" style="height: 46px; vertical-align: middle;" /></h5>
                <p class="small lh-lg">Your strategic partner for modern financial, tax, and business management
                    solutions. We turn complexity into clarity.</p>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5>Company</h5>
                <ul class="list-unstyled small d-flex flex-column gap-2">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About Us</a></li>
                    <li><a href="{{ url('/about') }}">Our Team</a></li>
                    <li><a href="{{ url('/contact') }}">Careers</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5>Services</h5>
                <ul class="list-unstyled small d-flex flex-column gap-2">
                    <li><a href="{{ url('/services') }}">Tax Compliance and Planning</a></li>
                    <li><a href="{{ url('/services') }}">Tax Education</a></li>
                    <li><a href="{{ url('/services') }}">Financial Advisory</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5>Contact Us</h5>
                <ul class="list-unstyled small d-flex flex-column gap-3">
                    <li class="d-flex"><i class="bi bi-geo-alt text-primary me-3"></i> {{ $contactInfo['contact_address'] ?? 'SCBD District 8, Treasury Tower Jakarta, Indonesia 12190' }}</li>
                    <li class="d-flex"><i class="bi bi-envelope text-primary me-3"></i> <a href="mailto:{{ $contactInfo['contact_email'] ?? 'kapabel.indonesia@gmail.com' }}" class="text-secondary text-decoration-none">{{ $contactInfo['contact_email'] ?? 'kapabel.indonesia@gmail.com' }}</a></li>
                    <li class="d-flex"><i class="bi bi-telephone text-primary me-3"></i> <a href="tel:{{ $contactInfo['contact_phone'] ?? '+62 82 11499 4207' }}" class="text-secondary text-decoration-none">{{ $contactInfo['contact_phone'] ?? '+62 82 11499 4207' }}</a></li>
                </ul>
            </div>
        </div>
        <div class="border-top border-secondary pt-4 text-center">
            <p class="small mb-0 text-white-50">&copy; 2026 Kapabel Indonesia Consulting. All rights reserved.</p>
        </div>
    </div>
</footer>