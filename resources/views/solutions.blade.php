@extends('layouts.app')

@section('title', app()->getLocale() === 'id' ? 'Solusi' : 'Solutions')

@section('content')
@php
    $locale = app()->getLocale();
    $solutions = config('site_content.solutions', []);
    $items = $solutions['items'] ?? [];
    $contact = site_content('contact');
    $pageContent = $solutions['page_' . $locale] ?? $solutions['page_en'] ?? [];
    $pageTitle = $pageContent['title'] ?? (app()->getLocale() === 'id' ? 'Solusi' : 'Solutions');
    $pageIntro = $pageContent['intro'] ?? '';
    $solutionsParallaxPath = config('site_content.parallax_banners.solutions_page', '') ?: config('site_content.parallax_banners.between_about_mission', '');
    $solutionsParallaxExists = $solutionsParallaxPath && file_exists(public_path($solutionsParallaxPath));
@endphp

{{-- Parallax banner: sama dengan About/Home, antara header dan konten --}}
<style>
    .solutions-card-layout {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
    }
    .solutions-card-thumb {
        width: 172px;
        height: 118px;
        flex-shrink: 0;
    }
    @media (max-width: 767px) {
        .solutions-card-layout {
            display: block;
        }
        .solutions-card-thumb {
            width: 100%;
            height: 170px;
            margin-bottom: 0.75rem;
        }
    }
</style>

@if($solutionsParallaxExists)
<section class="parallax-banner relative h-20 md:h-20 lg:h-20 overflow-hidden" aria-hidden="true">
    <div class="parallax-banner__bg absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset($solutionsParallaxPath) }}'); background-attachment: fixed;"></div>
</section>
@endif

<section class="py-16 md:py-24 bg-[#f8f8f8] border-b border-neutral-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-[#363434]/80 hover:text-[#FFC600] text-sm font-medium mb-8 transition-colors">
            <span aria-hidden="true">&larr;</span>
            {{ $locale === 'id' ? 'Kembali ke Beranda' : 'Back to Home' }}
        </a>
        <div class="max-w-4xl">
            <h1 class="section-title text-[#363434] text-3xl md:text-5xl mb-4">{{ $pageTitle }}</h1>
        @if($pageIntro)
        @php
            $introParagraphs = preg_split("/\R{2,}/", trim($pageIntro)) ?: [];
            $introParagraphs = array_values(array_filter(array_map('trim', $introParagraphs), fn($p) => $p !== ''));
        @endphp
        <div class="mt-6 mb-6 md:mt-8 md:mb-16 space-y-5">
            @foreach($introParagraphs as $para)
            <p class="text-[#363434]/90 text-sm md:text-lg leading-relaxed md:leading-7">{{ $para }}</p>
            @endforeach
        </div>
        @endif
        </div>

        {{-- pt-* on mobile avoids margin-collapse so intro + first card stay visually separated --}}
        <div class="pt-12 mb-12 md:mb-6 md:pt-0 mt-0 md:mt-12 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
            @foreach($items as $idx => $item)
            @php
                $itemLoc = $item[$locale] ?? $item['en'] ?? [];
                $title = $itemLoc['title'] ?? '';
                $description = $itemLoc['description'] ?? '';
                $imgPath = $item['image'] ?? '';
                $imgExists = $imgPath && file_exists(public_path($imgPath));
                $descParagraphs = $description ? (preg_split("/\R{2,}/", trim($description)) ?: []) : [];
                $descParagraphs = array_values(array_filter(array_map('trim', $descParagraphs), fn($p) => $p !== ''));
            @endphp
            <article id="solution-{{ $idx }}" class="card scroll-mt-24">
                <div class="solutions-card-layout">
                    <div class="solutions-card-thumb rounded-lg overflow-hidden bg-neutral-100">
                            @if($imgExists)
                            <img src="{{ asset($imgPath) }}" alt="{{ $title }}" class="w-full h-full object-cover object-center">
                            @else
                            <div class="w-full h-full flex items-center justify-center text-neutral-400 text-xs leading-tight px-2 text-center">
                                {{ $locale === 'id' ? 'Gambar belum diatur' : 'Image not set' }}
                            </div>
                            @endif
                    </div>
                    <div class="min-w-0 solutions-card-copy pt-1">
                        <h2 class="text-[#363434] font-bold text-xl leading-tight">
                            {{ $title }}
                        </h2>
                        @if($description)
                        <div class="mt-4 space-y-4">
                            @foreach($descParagraphs as $pIdx => $para)
                                @if($pIdx < 2)
                                <p class="text-[#363434]/90 text-sm leading-relaxed">
                                    {{ $para }}
                                </p>
                                @endif
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
            </article>
            @endforeach
        </div>
        <div class="mt-16 md:mt-20 pt-12 md:pt-10 border-t border-neutral-200 max-w-3xl mx-auto text-center flex flex-col items-center">
            <p class="max-w-2xl mb-3 mx-auto text-[#363434]/85 text-sm md:text-base leading-relaxed">
                {{ $contact['subtitle'] ?? '' }}
            </p>
            <div class="w-full mt-3 md:mt-6 max-w-2xl mx-auto flex justify-center items-center">
                <button type="button" class="contact-modal-open btn btn-primary">{{ $locale === 'id' ? 'Hubungi Kami' : 'Contact Us' }}</button>
            </div>
        </div>
    </div>
</section>
@endsection
