<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand fs-4" href="{{ url('/') }}">
            <i class="text-primary me-2"></i><img src="{{ asset('assets/images/logo_web.png') }}" alt="Kapabel Indonesia Logo"
                style="height: 43px; vertical-align: middle;" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">{{ __('Home') }}</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('services') ? 'active' : '' }}" href="{{ url('/services') }}">{{ __('Services') }}</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('blog') ? 'active' : '' }}" href="{{ url('/blog') }}">{{ __('Insights') }}</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">{{ __('About') }}</a></li>
                <li class="nav-item"><a class="btn btn-outline-primary ms-lg-3" href="{{ url('/contact') }}">{{ __('Get in Touch') }}</a></li>
                
                <li class="nav-item dropdown ms-lg-3 mt-3 mt-lg-0">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-globe me-1"></i> {{ strtoupper(app()->getLocale()) }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0" aria-labelledby="languageDropdown">
                        <li><a class="dropdown-item py-2 {{ app()->getLocale() == 'en' ? 'active bg-primary text-white' : '' }}" href="{{ route('locale.switch', 'en') }}">🇬🇧 English</a></li>
                        <li><a class="dropdown-item py-2 {{ app()->getLocale() == 'id' ? 'active bg-primary text-white' : '' }}" href="{{ route('locale.switch', 'id') }}">🇮🇩 Indonesia</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>