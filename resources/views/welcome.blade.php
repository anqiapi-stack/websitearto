@extends('layouts.app')

@section('title', site_content('nav', 'home'))

@section('content')
@php
$heroImages = $heroImages ?? [asset(config('site_content.hero.image', 'images/hero-image.jpg'))];
$hero = site_content('hero');
$about = site_content('about');
$mission = site_content('mission');
$solutions = config('site_content.solutions', []);
$solutionsLoc = site_content('solutions');
$unified = site_content('unified');
$values = site_content('values');
$contact = site_content('contact');
$locale = app()->getLocale();
$allianceLogos = alliance_logos_from_folder();
$allianceTitle = site_content('alliance', 'title');
$missionPoints = $mission['mission_points'] ?? [];
@endphp

<section class="hero-landing min-h-[calc(100vh-5rem)] flex flex-col justify-center border-b border-neutral-200 bg-[#f8f8f8]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16 lg:py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
            <div>
                <h1 class="section-title hero-logo mb-6">
                    <img src="{{ asset('images/logo.png') }}" alt="ARTO PRIMA">
                    <span class="sr-only">ARTO PRIMA</span>
                </h1>
                <p class="text-primary text-base md:text-lg lg:text-xl leading-relaxed mb-8 max-w-xl">{{ $hero['subtitle'] ?? '' }}</p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ url('/#solutions') }}" class="btn btn-primary">{{ $hero['view_solutions'] ?? '' }}</a>
                    <a href="{{ url('/#mission') }}" class="btn btn-secondary">{{ $hero['our_mission'] ?? '' }}</a>
                </div>
            </div>
            <div class="hidden lg:block" role="region" aria-roledescription="carousel" aria-label="Hero images">
                <div class="relative aspect-video rounded-lg overflow-hidden hero-slider">
                    <div aria-live="polite" aria-atomic="true" class="sr-only hero-slider__live"></div>
                    @foreach($heroImages ?? [] as $idx => $url)
                    <img
                        src="{{ $url }}"
                        alt="{{ $hero['image_alt'] ?? '' }} — slide {{ $idx + 1 }} of {{ count($heroImages) }}"
                        class="hero-slider__img absolute inset-0 w-full h-full object-cover rounded-lg"
                        style="opacity:{{ $idx === 0 ? '1' : '0' }};z-index:{{ $idx === 0 ? '10' : '0' }};transition:opacity 0.7s ease-in-out;"
                        loading="{{ $idx === 0 ? 'eager' : 'lazy' }}"
                        data-hero-index="{{ $idx }}"
                        aria-hidden="{{ $idx === 0 ? 'false' : 'true' }}"
                    >
                    @endforeach
                    @if(count($heroImages ?? []) > 1)
                    <button type="button" class="hero-slider__prev absolute left-2 top-1/2 -translate-y-1/2 z-20 w-9 h-9 rounded-full bg-[#363434]/60 text-white flex items-center justify-center hover:bg-[#363434]/80 transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FFC600]" aria-label="Previous slide">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                    </button>
                    <button type="button" class="hero-slider__next absolute right-2 top-1/2 -translate-y-1/2 z-20 w-9 h-9 rounded-full bg-[#363434]/60 text-white flex items-center justify-center hover:bg-[#363434]/80 transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FFC600]" aria-label="Next slide">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                    </button>
                    @endif
                </div>
                @if(count($heroImages ?? []) > 1)
                <div class="hero-slider-dots" style="display:flex;justify-content:center;gap:8px;margin-top:12px;" role="tablist" aria-label="Slide controls">
                    @foreach($heroImages ?? [] as $idx => $url)
                    <button
                        type="button"
                        role="tab"
                        class="hero-dot"
                        style="width:10px;height:10px;border-radius:50%;border:none;cursor:pointer;padding:0;background:{{ $idx === 0 ? '#FFC600' : '#9ca3af' }};transform:{{ $idx === 0 ? 'scale(1.15)' : 'scale(1)' }};transition:all 0.3s;"
                        data-dot-index="{{ $idx }}"
                        aria-label="Slide {{ $idx + 1 }}"
                        aria-selected="{{ $idx === 0 ? 'true' : 'false' }}"
                    ></button>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

<section id="about" class="max-w-7xl mx-auto py-16 md:py-24 bg-white border-b border-neutral-200" aria-labelledby="about-heading">
    <div class="w-full max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-10 xl:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
            <div class="order-2 lg:order-2">
                <div class="h-1 w-12 bg-[#FFC600] mb-6" aria-hidden="true"></div>
                <h2 id="about-heading" class="section-title text-[#363434] text-2xl md:text-4xl mb-6">{{ $about['heading'] ?? '' }}</h2>
                <p class="text-[#363434]/85 text-sm md:text-base leading-relaxed max-w-2xl mb-8">{{ $about['body'] ?? '' }}</p>
                @php $aboutLink = !empty(config('site_content.about.link')) ? config('site_content.about.link') : url('/about'); @endphp
                <a href="{{ $aboutLink }}" target="{{ str_starts_with($aboutLink, 'http') ? '_blank' : '_self' }}" rel="{{ str_starts_with($aboutLink, 'http') ? 'noopener noreferrer' : '' }}" class="btn btn-primary inline-flex items-center gap-2 w-fit">
                    {{ $about['cta'] ?? 'Learn More' }}
                    <span aria-hidden="true">&rarr;</span>
                </a>
            </div>
            <div class="relative order-1 lg:order-1 aspect-video flex items-center justify-center overflow-hidden rounded-lg bg-neutral-100">
                @if(config('site_content.about.image') && file_exists(public_path(config('site_content.about.image'))))
                <img src="{{ asset(config('site_content.about.image')) }}" alt="{{ $about['image_alt'] ?? '' }}" class="w-full h-auto object-cover rounded-lg border-0 outline-none">
                @else
                <p class="text-neutral-500 text-sm px-6 text-center">{{ $about['image_alt'] ?? 'About' }}</p>
                @endif
            </div>
        </div>
    </div>
</section>

@php
$parallaxAboutMission = config('site_content.parallax_banners.between_about_mission', '');
$parallaxAboutMissionExists = $parallaxAboutMission && file_exists(public_path($parallaxAboutMission));
@endphp
@if($parallaxAboutMissionExists)
<section class="parallax-banner relative h-20 md:h-20 lg:h-20 overflow-hidden" aria-hidden="true">
    <div class="parallax-banner__bg absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset($parallaxAboutMission) }}'); background-attachment: fixed;"></div>
</section>
@endif

<section id="mission" class="py-16 md:py-24 bg-[#363434]" aria-labelledby="mission-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
            <div class="relative order-2 lg:order-1">
                @if(config('site_content.mission.image') && file_exists(public_path(config('site_content.mission.image'))))
                <img src="{{ asset(config('site_content.mission.image')) }}" alt="{{ $mission['image_alt'] ?? '' }}" class="w-full h-auto object-contain rounded-lg">
                @else
                <div class="aspect-[4/3] rounded-lg bg-[#4F4D4D] overflow-hidden flex items-center justify-center text-[#d0d0d0] text-sm">{{ $mission['image_alt'] ?? '' }}</div>
                @endif
            </div>
            <div class="order-1 lg:order-2">
                <div class="accent-line"></div>
                <h2 id="mission-heading" class="section-title text-[#FFC600] text-2xl md:text-4xl mb-6">{{ $mission['heading'] ?? '' }}</h2>
                <div class="max-w-xl space-y-8">
                    <div>
                        <h3 class="text-[#FFC600] font-bold text-base md:text-lg mb-2">{{ $mission['vision_label'] ?? 'Vision' }}</h3>
                        <p class="text-[#d0d0d0] text-sm md:text-base leading-relaxed mb-10">{{ $mission['vision'] ?? '' }}</p>
                    </div>
                    <div>
                        <h3 class="text-[#FFC600] font-bold text-base md:text-lg mb-4">{{ $mission['mission_label'] ?? 'Mission' }}</h3>
                        <ul class="space-y-4 text-[#d0d0d0] text-sm md:text-base leading-relaxed">
                            @foreach($missionPoints as $point)
                            <li class="relative pl-6">
                                <span aria-hidden="true" class="absolute left-0 top-0 text-[#d0d0d0]/90">•</span>
                                {{ $point }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <a href="{{ url('/#contact') }}" class="btn btn-outline-light mt-8">{{ $mission['learn_more'] ?? '' }}</a>
            </div>
        </div>
    </div>
</section>

<section id="solutions" class="py-16 md:py-24 bg-[#f8f8f8] border-y border-neutral-200" aria-labelledby="solutions-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 id="solutions-heading" class="section-title text-[#363434] text-2xl md:text-4xl mb-4">{{ $solutionsLoc['heading'] ?? '' }}</h2>
        <p class="text-primary max-w-2xl mb-8 md:mb-12 text-sm md:text-base">{{ $solutionsLoc['subtitle'] ?? '' }}</p>
        <div class="flex flex-col gap-12 md:gap-16 lg:gap-20">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                @foreach($solutions['items'] ?? [] as $idx => $item)
                @php
                $itemLoc = $item[$locale] ?? $item['en'] ?? [];
                $points = $itemLoc['points'] ?? [];
                $imgPath = $item['image'] ?? '';
                $imgExists = $imgPath && file_exists(public_path($imgPath));
                @endphp
                <div class="card overflow-hidden flex flex-col p-0 bg-white border border-neutral-200/80 rounded-lg">
                    <div class="aspect-video w-full bg-neutral-200 flex-shrink-0 overflow-hidden">
                        @if($imgExists)
                        <img src="{{ asset($imgPath) }}" alt="{{ $itemLoc['title'] ?? '' }}" class="w-full h-full min-h-full object-cover object-center">
                        @else
                        <div class="w-full h-full flex items-center justify-center text-neutral-400 text-xs font-medium px-2 text-center">{{ $itemLoc['title'] ?? 'Image slot' }}</div>
                        @endif
                    </div>
                    <div class="p-5 md:p-6 flex flex-col flex-1">
                        <h3 class="font-sans font-bold text-[#363434] text-base md:text-lg mb-3">{{ $itemLoc['title'] ?? '' }}</h3>
                        @if(count($points) > 0)
                        <ul class="space-y-1.5 flex-1 text-[#363434]/85 text-sm leading-relaxed list-disc list-inside">
                            @foreach($points as $point)
                            <li>{{ $point }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center shrink-0">
                <a href="{{ url('/#contact') }}" class="btn btn-primary">{{ $solutionsLoc['explore'] ?? '' }}</a>
            </div>
        </div>
    </div>
</section>

<section class="py-16 md:py-24 bg-[#363434]" aria-labelledby="unified-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
            <div>
                <h2 id="unified-heading" class="section-title text-[#FFC600] text-2xl md:text-4xl mb-6">{{ $unified['heading'] ?? '' }}</h2>
                <p class="text-[#d0d0d0] text-sm md:text-base leading-relaxed max-w-xl mb-6 text-justify">{{ $unified['body'] ?? '' }}</p>
                <div class="accent-line"></div>
                <a href="{{ url('/#contact') }}" class="btn btn-outline-light mt-4">{{ $unified['cta'] ?? '' }}</a>
            </div>
            <div>
                @if(config('site_content.unified.image') && file_exists(public_path(config('site_content.unified.image'))))
                <img src="{{ asset(config('site_content.unified.image')) }}" alt="{{ $unified['image_alt'] ?? '' }}" class="w-full h-auto aspect-video object-cover rounded-lg">
                @endif
            </div>
        </div>
    </div>
</section>

@php
$parallaxUnifiedValues = config('site_content.parallax_banners.between_unified_values', '');
$parallaxUnifiedValuesExists = $parallaxUnifiedValues && file_exists(public_path($parallaxUnifiedValues));
@endphp
@if($parallaxUnifiedValuesExists)
<section class="parallax-banner relative h-20 md:h-20 lg:h-20 overflow-hidden" aria-hidden="true">
    <div class="parallax-banner__bg absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset($parallaxUnifiedValues) }}'); background-attachment: fixed;"></div>
</section>
@endif

@if(count($allianceLogos) > 0)
<section class="py-14 md:py-20 bg-white border-b border-neutral-200" aria-labelledby="alliance-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 id="alliance-heading" class="section-title text-[#363434] text-xl md:text-3xl text-center mb-10 md:mb-12">{{ $allianceTitle }}</h2>
        <div class="flex flex-wrap justify-center md:justify-between items-center gap-8 md:gap-10">
            @foreach($allianceLogos as $logo)
            <div class="alliance-item w-28 sm:w-32 md:w-36 flex items-center justify-center">
                <img src="{{ asset($logo['path']) }}" alt="{{ $logo['alt'] ?? '' }}" loading="lazy" class="w-full h-auto object-contain max-h-16 md:max-h-20">
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<section id="values" class="py-16 md:py-24 bg-neutral-50 border-t border-neutral-200" aria-labelledby="values-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 id="values-heading" class="section-title text-[#363434] text-2xl md:text-4xl text-center mb-8 md:mb-12">{{ $values['heading'] ?? '' }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
            @foreach($values['items'] ?? [] as $v)
            @php
            $valueIcons = ['shield-check', 'crosshair', 'light-bulb', 'globe-alt'];
            $iconKey = $valueIcons[$loop->index] ?? 'sparkles';
            @endphp
            <div class="bg-white rounded-xl border border-neutral-200 shadow-sm hover:shadow-md transition-shadow p-6 text-center">
                <div class="w-[4.5rem] h-[4.5rem] md:w-20 md:h-20 mx-auto mb-4 rounded-xl bg-neutral-100 text-[#363434] flex items-center justify-center">
                    @if($iconKey === 'shield-check')
                    <svg class="w-10 h-10 md:w-11 md:h-11 shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    @elseif($iconKey === 'crosshair')
                    <svg class="w-10 h-10 md:w-11 md:h-11 shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" aria-hidden="true">
                        <circle cx="12" cy="12" r="9" /><circle cx="12" cy="12" r="5" /><circle cx="12" cy="12" r="1.5" />
                        <path d="M12 2v3M12 19v3M2 12h3M19 12h3" />
                    </svg>
                    @elseif($iconKey === 'light-bulb')
                    <svg class="w-10 h-10 md:w-11 md:h-11 shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                    @else
                    <svg class="w-10 h-10 md:w-11 md:h-11 shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                    </svg>
                    @endif
                </div>
                <h3 class="font-sans font-bold text-[#363434] text-base md:text-lg mb-2">{{ $v['title'] ?? '' }}</h3>
                <p class="text-neutral-600 text-sm leading-relaxed mb-4">{{ $v['desc'] ?? '' }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

@php
$ctaBanner = site_content('cta_banner');
$ctaBgPath = config('site_content.cta_banner.background_image', '');
$ctaBgExists = $ctaBgPath && file_exists(public_path($ctaBgPath));
@endphp
<section id="contact" class="cta-banner-parallax relative py-16 md:py-24 overflow-hidden" aria-labelledby="contact-heading">
    @if($ctaBgExists)
    <div class="cta-banner-parallax__bg absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset($ctaBgPath) }}'); background-attachment: fixed;"></div>
    @else
    <div class="absolute inset-0 bg-[#363434]"></div>
    @endif
    <div class="absolute inset-0 bg-[#363434]/85"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center flex flex-col items-center">
        <h2 id="contact-heading" class="text-white font-sans font-bold text-xl md:text-2xl lg:text-3xl uppercase tracking-wide mb-4 max-w-3xl mx-auto">
            {{ $ctaBanner['headline'] ?? '' }}
        </h2>
        <p class="text-white/90 max-w-2xl mx-auto mb-10 md:mb-8 text-sm md:text-base">{{ $contact['subtitle'] ?? '' }}</p>
        <div class="mt-2 md:mt-0 w-full max-w-2xl mx-auto flex justify-center items-center">
            <button type="button" class="contact-modal-open inline-flex items-center justify-center gap-2 px-6 py-3 rounded-lg bg-[#FFC600] text-[#363434] font-semibold text-sm md:text-base hover:bg-[#FFC600]/90 transition-colors">
                <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                {{ $contact['contact_us'] ?? 'Contact Us' }}
                </button>
        </div>
    </div>
</section>
@push('scripts')
<script>
(function() {
    var carousel = document.querySelector('[aria-roledescription="carousel"]');
    var container = document.querySelector('.hero-slider');
    if (!container) return;
    var imgs = Array.from(container.querySelectorAll('.hero-slider__img'));
    if (imgs.length < 2) return;
    var dots = Array.from(document.querySelectorAll('.hero-dot'));
    var liveRegion = container.querySelector('.hero-slider__live');
    var prevBtn = container.querySelector('.hero-slider__prev');
    var nextBtn = container.querySelector('.hero-slider__next');

    var current = 0;
    var timer = null;
    var paused = false;

    function goTo(next) {
        imgs[current].style.opacity = '0';
        imgs[current].style.zIndex = '0';
        imgs[current].setAttribute('aria-hidden', 'true');
        if (dots[current]) {
            dots[current].style.background = '#9ca3af';
            dots[current].style.transform = 'scale(1)';
            dots[current].setAttribute('aria-selected', 'false');
        }

        current = next;

        imgs[current].style.opacity = '1';
        imgs[current].style.zIndex = '10';
        imgs[current].setAttribute('aria-hidden', 'false');
        if (dots[current]) {
            dots[current].style.background = '#FFC600';
            dots[current].style.transform = 'scale(1.15)';
            dots[current].setAttribute('aria-selected', 'true');
        }

        // Announce to screen readers
        if (liveRegion) {
            liveRegion.textContent = 'Slide ' + (current + 1) + ' of ' + imgs.length;
        }
    }

    function goPrev() {
        goTo((current - 1 + imgs.length) % imgs.length);
    }
    function goNext() {
        goTo((current + 1) % imgs.length);
    }

    function startTimer() {
        stopTimer();
        timer = setInterval(function() {
            if (!paused) goNext();
        }, 5000);
    }
    function stopTimer() {
        if (timer) { clearInterval(timer); timer = null; }
    }

    // Prev/next buttons
    if (prevBtn) prevBtn.addEventListener('click', function() { stopTimer(); goPrev(); startTimer(); });
    if (nextBtn) nextBtn.addEventListener('click', function() { stopTimer(); goNext(); startTimer(); });

    // Dot navigation
    dots.forEach(function(dot, i) {
        dot.addEventListener('click', function() {
            if (i === current) return;
            stopTimer();
            goTo(i);
            startTimer();
        });
    });

    // Pause on hover and focus
    if (carousel) {
        carousel.addEventListener('mouseenter', function() { paused = true; });
        carousel.addEventListener('mouseleave', function() { paused = false; });
        carousel.addEventListener('focusin', function() { paused = true; });
        carousel.addEventListener('focusout', function() { paused = false; });
    }

    // Keyboard navigation (arrow keys when carousel or its children are focused)
    if (carousel) {
        carousel.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowLeft') { e.preventDefault(); stopTimer(); goPrev(); startTimer(); }
            if (e.key === 'ArrowRight') { e.preventDefault(); stopTimer(); goNext(); startTimer(); }
        });
    }

    // Respect reduced motion preference
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return; // Don't autoplay
    }

    startTimer();
})();
</script>
@endpush
@endsection
