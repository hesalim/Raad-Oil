<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (! app()->runningInConsole()) {
            $request = request();

            // In production, or when the request is already secure, force https for generated URLs
            if (app()->environment('production') || $request->isSecure() || $request->header('x-forwarded-proto') === 'https') {
                URL::forceScheme('https');
            }

            // Always generate URLs against the current host
            URL::forceRootUrl($request->getSchemeAndHttpHost());
        }
    }
}
