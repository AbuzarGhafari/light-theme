<?php

namespace AbuzarGhafari\LightTheme;

use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

class ThemeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'light');
        Inertia::share('activeTheme', 'light-theme');
    }
}
