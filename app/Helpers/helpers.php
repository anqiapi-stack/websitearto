<?php

if (!function_exists('site_content')) {
    /**
     * Get site content from config/site_content.php for the current locale.
     *
     * @param  string  $section  Section key (e.g. 'hero', 'footer')
     * @param  string|null  $key  Optional key within the section
     * @return mixed
     */
    function site_content(string $section, ?string $key = null): mixed
    {
        $data = config("site_content.{$section}", []);
        $locale = app()->getLocale();
        if (!in_array($locale, ['en', 'id'])) {
            $locale = 'en';
        }
        $locData = $data[$locale] ?? $data['en'] ?? [];
        if ($key === null) {
            return $locData;
        }
        return $locData[$key] ?? $data['en'][$key] ?? '';
    }
}

if (!function_exists('alliance_logos_from_folder')) {
    /**
     * Scan images/alliance/ folder for logos. Dinamis: tambah file baru otomatis masuk carousel.
     *
     * @return array<array{path: string, alt: string}>
     */
    function alliance_logos_from_folder(): array
    {
        $dir = public_path('images/alliance');
        if (!is_dir($dir)) {
            return [];
        }
        $files = array_merge(
            glob($dir . '/*.png') ?: [],
            glob($dir . '/*.jpg') ?: [],
            glob($dir . '/*.jpeg') ?: [],
            glob($dir . '/*.gif') ?: [],
            glob($dir . '/*.webp') ?: []
        );
        $files = array_unique($files);
        natsort($files);
        $logos = [];
        foreach ($files as $f) {
            $basename = basename($f);
            $logos[] = [
                'path' => 'images/alliance/' . $basename,
                'alt' => 'Partner ' . pathinfo($f, PATHINFO_FILENAME),
            ];
        }
        return array_values($logos);
    }
}

if (!function_exists('portfolio_cases_from_folder')) {
    /**
     * Scan images/portfolio/ folder for portfolio/case images. Dinamis: tambah file baru otomatis tampil.
     *
     * @return array<array{path: string, alt: string}>
     */
    function portfolio_cases_from_folder(): array
    {
        $dir = public_path('images/portfolio');
        if (!is_dir($dir)) {
            return [];
        }
        $files = array_merge(
            glob($dir . '/*.png') ?: [],
            glob($dir . '/*.jpg') ?: [],
            glob($dir . '/*.jpeg') ?: [],
            glob($dir . '/*.gif') ?: [],
            glob($dir . '/*.webp') ?: []
        );
        $files = array_unique($files);
        natsort($files);
        $items = [];
        foreach ($files as $f) {
            $basename = basename($f);
            $name = pathinfo($f, PATHINFO_FILENAME);
            $items[] = [
                'path' => 'images/portfolio/' . $basename,
                'alt' => $name,
            ];
        }
        return array_values($items);
    }
}
