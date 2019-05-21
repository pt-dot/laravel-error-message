<?php
namespace Ptdot\ErrorMessage;

use Illuminate\Support\ServiceProvider;

class ErrorMessageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/errormessage.php' => config_path('errormessage.php')
        ], 'config');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('ErrorMessageService', function () {
            return new ErrorMessageService();
        });
    }
}
