<?php

namespace App\Providers;

use App\Aggregates\CartAggregate;
use App\Models\Cart;
use App\Contracts\CurrentCart;
use App\Enums\CartStatus;
use App\Macros\QueryBuilderMacros;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use function tap;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            CurrentCart::class,
            static fn () => Cart::query()->firstOrCreate(
                [
                    'status' => CartStatus::OPEN,
                    'session_id' => Session::getId()
                ]
            )
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        App::setLocale('da');

        QueryBuilder::mixin(new QueryBuilderMacros);
    }
}
