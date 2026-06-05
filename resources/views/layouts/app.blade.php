<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('metaDescription', 'ARTO PRIMA — Precision technology and advanced surveillance for national security')">

    <title>@yield('title', 'Home') — ARTO PRIMA</title>

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Source+Serif+4:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        nav.site-header-nav-desktop{display:none!important;flex-wrap:wrap;align-items:center}
        .site-header-nav-mobile-toggle{display:inline-flex!important;align-items:center;justify-content:center}
        @media (min-width:768px){
            nav.site-header-nav-desktop{display:flex!important}
            .site-header-nav-mobile-toggle{display:none!important}
            #mobile-menu{display:none!important}
        }
    </style>
</head>

<body class="min-h-screen flex flex-col bg-white text-[#363434] font-sans antialiased">
    <header class="sticky top-0 z-50 border-b border-neutral-200 bg-white/95 backdrop-blur-sm">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 md:h-20 items-center justify-between gap-4">
                <a href="{{ url('/') }}" class="inline-block shrink-0">
                    <img src="{{ asset(config('site_content.footer.logo', 'images/logo.png')) }}" alt="ARTO PRIMA" class="h-4 md:h-6 w-auto">
                </a>
                <nav class="site-header-nav-desktop items-center gap-4 lg:gap-6" aria-label="Main">
                    <a href="{{ url('/') }}" class="text-sm font-medium text-primary hover:opacity-80 transition-opacity">{{ site_content('nav', 'home') }}</a>
                    <a href="{{ route('about') }}" class="text-sm font-medium text-[#363434] hover:opacity-80 transition-opacity">{{ site_content('nav', 'about') }}</a>
                    <a href="{{ route('solutions') }}" class="text-sm font-medium text-[#363434] hover:opacity-80 transition-opacity">{{ site_content('nav', 'solutions') }}</a>
                    <div class="flex items-center gap-2 border-l border-neutral-200 pl-4 lg:pl-6">
                        <a href="{{ route('locale.switch', ['locale' => 'en']) }}" class="text-sm font-semibold {{ app()->getLocale() === 'en' ? 'text-[#FFC600]' : 'text-[#363434] hover:opacity-80' }} transition-opacity">{{ site_content('nav', 'en') }}</a>
                        <span class="text-neutral-400">|</span>
                        <a href="{{ route('locale.switch', ['locale' => 'id']) }}" class="text-sm font-semibold {{ app()->getLocale() === 'id' ? 'text-[#FFC600]' : 'text-[#363434] hover:opacity-80' }} transition-opacity">{{ site_content('nav', 'id') }}</a>
                    </div>
                    <button type="button" class="contact-modal-open btn btn-primary">{{ site_content('nav', 'contact_us') }}</button>
                </nav>
                <button type="button" class="site-header-nav-mobile-toggle p-2 rounded-lg text-[#363434] hover:bg-neutral-100 focus:outline-none focus:ring-2 focus:ring-[#FFC600] aria-expanded="false" aria-controls="mobile-menu" id="menu-toggle" aria-label="Open menu">
                    <svg class="w-6 h-6 menu-icon-open" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    <svg class="w-6 h-6 menu-icon-close hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <div id="mobile-menu" class="hidden md:hidden border-t border-neutral-200 bg-white py-4" aria-labelledby="menu-toggle">
                <div class="flex flex-col gap-1">
                    <a href="{{ url('/') }}" class="px-4 py-3 text-sm font-medium text-primary hover:bg-neutral-50">{{ site_content('nav', 'home') }}</a>
                    <a href="{{ route('about') }}" class="px-4 py-3 text-sm font-medium text-[#363434] hover:bg-neutral-50">{{ site_content('nav', 'about') }}</a>
                    <a href="{{ route('solutions') }}" class="px-4 py-3 text-sm font-medium text-[#363434] hover:bg-neutral-50">{{ site_content('nav', 'solutions') }}</a>
                    <div class="flex items-center gap-2 px-4 py-3 border-t border-neutral-100">
                        <a href="{{ route('locale.switch', ['locale' => 'en']) }}" class="text-sm font-semibold {{ app()->getLocale() === 'en' ? 'text-[#FFC600]' : 'text-[#363434]' }}">{{ site_content('nav', 'en') }}</a>
                        <span class="text-neutral-400">|</span>
                        <a href="{{ route('locale.switch', ['locale' => 'id']) }}" class="text-sm font-semibold {{ app()->getLocale() === 'id' ? 'text-[#FFC600]' : 'text-[#363434]' }}">{{ site_content('nav', 'id') }}</a>
                    </div>
                    <button type="button" class="contact-modal-open mx-4 mt-2 btn btn-primary text-center w-full">{{ site_content('nav', 'contact_us') }}</button>
                </div>
            </div>
        </div>
    </header>
    <script>
        (function() {
            var toggle = document.getElementById('menu-toggle');
            var menu = document.getElementById('mobile-menu');
            var openIcon = document.querySelector('.menu-icon-open');
            var closeIcon = document.querySelector('.menu-icon-close');
            if (!toggle || !menu) return;
            toggle.addEventListener('click', function() {
                var isOpen = !menu.classList.contains('hidden');
                menu.classList.toggle('hidden');
                if (openIcon) openIcon.classList.toggle('hidden', !isOpen);
                if (closeIcon) closeIcon.classList.toggle('hidden', isOpen);
                toggle.setAttribute('aria-expanded', isOpen ? 'false' : 'true');
                toggle.setAttribute('aria-label', isOpen ? 'Open menu' : 'Close menu');
            });
        })();
        // solutions nav is a direct link (no dropdown)
    </script>

    <main class="flex-1">
        @yield('content')
    </main>

    @php
    $footer = site_content('footer');
    $locale = app()->getLocale();
    @endphp
    <footer class="mt-auto bg-[#f0f0f0] text-[#363434] border-t border-neutral-200">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-12 md:py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-8">
                <div>
                    <a href="{{ url('/') }}" class="inline-block mb-4">
                        <img src="{{ asset(config('site_content.footer.logo', 'images/logo.png')) }}" alt="ARTO PRIMA" class="h-10 md:h-12 w-auto">
                    </a>
                    <p class="text-[#363434]/80 text-sm">{{ $footer['banner'] ?? '' }}</p>
                </div>
                <div>
                    <h3 class="text-[#363434] font-semibold text-sm uppercase tracking-wide mb-4">{{ $footer['navigation'] ?? '' }}</h3>
                    <ul class="space-y-0">
                        <li>
                            <a href="#" role="button" class="contact-modal-open block py-2 text-sm text-[#363434]/90 hover:text-[#FFC600] transition-colors border-b border-[#363434]/20 no-underline cursor-pointer">{{ $footer['contact_us'] ?? '' }}</a>
                        </li>
                        <li><a href="#" class="block py-2 text-sm text-[#363434]/90 hover:text-[#FFC600] transition-colors border-b border-[#363434]/20">{{ $footer['disclaimer'] ?? '' }}</a></li>
                        <li><a href="#" class="block py-2 text-sm text-[#363434]/90 hover:text-[#FFC600] transition-colors border-b border-[#363434]/20">{{ $footer['privacy_policy'] ?? '' }}</a></li>
                    </ul>
                </div>
                <div class="space-y-3">
                    <h3 class="text-[#363434] font-bold text-sm uppercase tracking-wide">{{ $footer['company_name'] ?? '' }}</h3>
                    <div>
                        <p class="text-[#363434]/90 text-xs font-semibold uppercase tracking-wide mb-1.5">{{ $footer['office'] ?? '' }}</p>
                        <p class="text-[#363434]/80 text-sm leading-relaxed whitespace-pre-line">{{ $footer['office_address'] ?? '' }}</p>
                    </div>
                </div>
            </div>
            <div class="mt-12 pt-8 border-t border-[#363434]/20">
                <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-8">
                    <div class="flex flex-wrap gap-6 items-center">
                        <span class="text-[#363434]/60 text-xs uppercase">Certifications</span>
                    </div>
                    <div class="lg:max-w-2xl space-y-3 text-sm text-[#363434]/80">
                        <p>{{ $footer['disclaimer_text1'] ?? '' }}</p>
                        <p>{{ $footer['disclaimer_text2'] ?? '' }}</p>
                    </div>
                </div>
                <p class="mt-8 text-xs text-[#363434]/60">&copy;{{ date('Y') }} {{ $footer['copyright'] ?? '' }}</p>
            </div>
        </div>
    </footer>
    <script>
    (function() {
        var mailto = "mailto:{{ config('site_content.footer.email', 'info@artoprima.co.id') }}";

        function goToEmail(e) {
            if (e && e.currentTarget && e.currentTarget.tagName === 'A') e.preventDefault();
            window.location.href = mailto;
        }

        document.querySelectorAll('.contact-modal-open').forEach(function(el) {
            el.addEventListener('click', goToEmail);
        });
    })();
    </script>
    @stack('scripts')
<!-- impeccable-live-start -->
<script src="http://localhost:8400/live.js"></script>
<!-- impeccable-live-end -->
</body>

</html>
