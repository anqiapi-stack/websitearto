@extends('layouts.app')

@section('title', app()->getLocale() === 'id' ? 'Tentang Kami' : 'About Us')

@section('content')
@php
    $locale = app()->getLocale();
    $about = site_content('about');
    $pageBody = $locale === 'id' ? (config('site_content.about.page_id') ?? $about['body'] ?? '') : (config('site_content.about.page_en') ?? $about['body'] ?? '');
    $aboutPageImage = config('site_content.about.image', '');
    $aboutPageImageExists = $aboutPageImage && file_exists(public_path($aboutPageImage));
    $aboutSections = config('site_content.about.sections', []);
    $aboutParallaxPath = config('site_content.parallax_banners.about_page', '') ?: config('site_content.parallax_banners.between_about_mission', '');
    $aboutParallaxExists = $aboutParallaxPath && file_exists(public_path($aboutParallaxPath));
@endphp

@if($aboutParallaxExists)
<section class="parallax-banner relative h-20 md:h-20 lg:h-20 overflow-hidden" aria-hidden="true">
    <div class="parallax-banner__bg absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset($aboutParallaxPath) }}'); background-attachment: fixed;"></div>
</section>
@endif

<section class="py-10 md:py-14 bg-white border-b border-neutral-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-[#363434]/60 text-xs md:text-sm mb-6">{{ $about['breadcrumb'] ?? '' }}</p>
        <div class="max-w-3xl space-y-5 md:space-y-6">
            <h1 class="text-[#363434] font-bold text-2xl md:text-4xl leading-tight">{{ $about['heading'] ?? (app()->getLocale() === 'id' ? 'Tentang Kami' : 'About Us') }}</h1>
            @if(!empty($about['subheading']))
            <div class="accent-line" aria-hidden="true"></div>
            <h2 class="text-[#363434] font-bold text-lg md:text-xl">{{ $about['subheading'] }}</h2>
            @endif
            @if(!empty($about['intro']))
            <p class="text-[#363434]/80 text-sm md:text-base leading-relaxed">{{ $about['intro'] }}</p>
            @endif
            <p class="text-[#363434]/90 text-sm md:text-base leading-relaxed">{{ $pageBody }}</p>
            <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-[#363434]/80 hover:text-[#FFC600] text-sm font-medium transition-colors">
                <span aria-hidden="true">&larr;</span>
                {{ $locale === 'id' ? 'Kembali ke Beranda' : 'Back to Home' }}
            </a>
            @if($aboutPageImageExists)
            <div class="rounded-lg overflow-hidden bg-neutral-100 border border-neutral-200/80 aspect-[4/3] w-full mt-8">
                <img src="{{ asset($aboutPageImage) }}" alt="{{ $about['image_alt'] ?? '' }}" class="w-full h-full object-cover">
            </div>
            @else
            <div class="rounded-lg bg-neutral-100 border border-neutral-200/80 aspect-[4/3] w-full flex items-center justify-center text-neutral-400 text-sm px-4 text-center mt-8">{{ $locale === 'id' ? 'Gambar (config: about.image)' : 'Image (config: about.image)' }}</div>
            @endif
        </div>
    </div>
</section>

@if(!empty($aboutSections))
<section class="py-10 md:py-14 bg-neutral-50 border-b border-neutral-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        @foreach($aboutSections as $key => $section)
        @php $id = str_replace('_', '-', $key); @endphp
        @if($section)
        <div id="{{ $id }}" class="scroll-mt-28">
            <h2 class="text-[#363434] font-bold text-xl md:text-2xl mb-3">{{ $section[$locale]['title'] ?? $section['en']['title'] ?? '' }}</h2>
            <p class="text-[#363434]/80 text-sm md:text-base max-w-3xl">{{ $section[$locale]['intro'] ?? $section['en']['intro'] ?? '' }}</p>
        </div>
        @endif
        @endforeach
    </div>
</section>
@endif

@endsection
