<?php

namespace App\Providers;

use App\Events\BrandEvent;
use App\Events\CategoryEvent;
use App\Events\ProductEvent;
use App\Listeners\CategoryListener;
use App\Listeners\ProductListener;
use Illuminate\Auth\Events\Registered;
use App\Listeners\SendBrandNotification;
use App\Models\BrandsModel;
use App\Models\CategorysModel;
use App\Models\ProductModel;
use App\Observers\Brandobserver;
use App\Observers\CategoryObserver;
use App\Observers\ProductObserver;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        BrandEvent::class => [
            SendBrandNotification::class,
        ],
        CategoryEvent::class => [
            CategoryListener::class,
        ],
        ProductEvent::class => [
            ProductListener::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        BrandsModel::observe(Brandobserver::class);
        CategorysModel::observe(CategoryObserver::class);
        ProductModel::observe(ProductObserver::class);
    }
}
