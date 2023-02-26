<?php

namespace App\Observers;

use App\Events\BrandEvent;
use App\Models\BrandsModel;

class Brandobserver
{
    /**
     * Handle the BrandsModel "created" event.
     *
     * @param  \App\Models\BrandsModel  $brandsModel
     * @return void
     */
    public function created(BrandsModel $brandsModel)
    {
        event(new BrandEvent( $brandsModel));
    }

    /**
     * Handle the BrandsModel "updated" event.
     *
     * @param  \App\Models\BrandsModel  $brandsModel
     * @return void
     */
    public function updated(BrandsModel $brandsModel)
    {
        event(new BrandEvent( $brandsModel));
    }

    /**
     * Handle the BrandsModel "deleted" event.
     *
     * @param  \App\Models\BrandsModel  $brandsModel
     * @return void
     */
    public function deleted(BrandsModel $brandsModel)
    {
        event(new BrandEvent( $brandsModel));
    }

    /**
     * Handle the BrandsModel "restored" event.
     *
     * @param  \App\Models\BrandsModel  $brandsModel
     * @return void
     */
    public function restored(BrandsModel $brandsModel)
    {
        //
    }

    /**
     * Handle the BrandsModel "force deleted" event.
     *
     * @param  \App\Models\BrandsModel  $brandsModel
     * @return void
     */
    public function forceDeleted(BrandsModel $brandsModel)
    {
        //
    }
}
