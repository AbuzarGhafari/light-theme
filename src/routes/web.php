<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware('web')->get('/theme-test', function () {
    return view('light::theme-test'); // not just "theme-test"
    return view('theme-test');
    dd("light-theme");
    return Inertia::render('ThemeTest', ['theme' => 'light']);
});
