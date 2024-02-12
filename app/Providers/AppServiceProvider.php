<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);
        Schema::defaultMacro('timestamp', function ($table) {
        $table->timestamps();
        $table->dateTime('created_at')->precision(2)->change();
        $table->dateTime('updated_at')->precision(2)->change();
    });
    }
}

