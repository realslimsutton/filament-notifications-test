<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Notifications\Notification;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Some check on the boot method that results in an error that the user should be notified about
        $someCondition = false;
        if (!$someCondition) {
            //Filament::serving(static function () {
                Notification::make()
                    ->danger()
                    ->title('Error title')
                    ->body('Error message')
                    ->send();
            //});
        }
    }
}
