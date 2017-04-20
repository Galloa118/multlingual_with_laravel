<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        config([
			'laravellocalization.supportedLocales' => [
                'en' => ['name' => 'English', 'script' => 'Latn', 'native' => 'English', 'regional' => 'en_GB'],
                'hr' => ['name' => 'Croatian', 'script' => 'Latn', 'native' => 'Hrvatski', 'regional' => 'hr_HR'],
			],
			'laravellocalization.hideDefaultLocaleInURL' => true,
		]);
    }
}
