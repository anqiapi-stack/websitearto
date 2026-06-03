<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    $heroImages = [];
    $heroDir = public_path('images/hero');
    if (File::isDirectory($heroDir)) {
        $allowed = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
        foreach (File::files($heroDir) as $file) {
            if (in_array(strtolower($file->getExtension()), $allowed)) {
                $heroImages[] = asset('images/hero/' . $file->getFilename());
            }
        }
        usort($heroImages, fn ($a, $b) => strcmp($a, $b));
    }
    if (empty($heroImages)) {
        $fallback = config('site_content.hero.image', 'images/hero-image.jpg');
        $heroImages = [asset($fallback)];
    }
    return view('welcome', ['heroImages' => $heroImages]);
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/solutions', function () {
    return view('solutions');
})->name('solutions');

Route::get('/locale/{locale}', function (string $locale) {
    if (! in_array($locale, ['en', 'id'])) {
        $locale = 'en';
    }
    Session::put('locale', $locale);
    return redirect()->back();
})->name('locale.switch');
