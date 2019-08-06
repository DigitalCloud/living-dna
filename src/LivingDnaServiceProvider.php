<?php

namespace DigitalCloud\LivingDna;

use Illuminate\Support\ServiceProvider;

class LivingDnaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/living-dna.php' => config_path('living-dna.php'),
        ], 'digitalcloud-aramex');
    }

    public function register()
    {
    }
}
