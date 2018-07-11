<?php

namespace App\Providers;

use App\Services\{
    CurrencyService,
    CurrencyServiceInterface,
    MoneyService,
    MoneyServiceInterface,
    UserService,
    UserServiceInterface,
    WalletService,
    WalletServiceInterface
};
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
        $this->app->bind(CurrencyServiceInterface::class, CurrencyService::class);
        $this->app->bind(UserServiceInterface::class, UserService::class);
        $this->app->bind(WalletServiceInterface::class, WalletService::class);
        $this->app->bind(MoneyServiceInterface::class, MoneyService::class);
    }
}
