<?php

namespace App\Observers;

use App\Events\ProductEvent;
use App\Models\ProductModel;

class ProductObserver
{
    /**
     * Handle the ProductModel "created" event.
     *
     * @param  \App\Models\ProductModel  $productModel
     * @return void
     */
    public function created(ProductModel $productModel)
    {
        event(new ProductEvent($productModel));
    }

    /**
     * Handle the ProductModel "updated" event.
     *
     * @param  \App\Models\ProductModel  $productModel
     * @return void
     */
    public function updated(ProductModel $productModel)
    {
        event(new ProductEvent($productModel));
    }

    /**
     * Handle the ProductModel "deleted" event.
     *
     * @param  \App\Models\ProductModel  $productModel
     * @return void
     */
    public function deleted(ProductModel $productModel)
    {
        event(new ProductEvent($productModel));
    }

    /**
     * Handle the ProductModel "restored" event.
     *
     * @param  \App\Models\ProductModel  $productModel
     * @return void
     */
    public function restored(ProductModel $productModel)
    {
        //
    }

    /**
     * Handle the ProductModel "force deleted" event.
     *
     * @param  \App\Models\ProductModel  $productModel
     * @return void
     */
    public function forceDeleted(ProductModel $productModel)
    {
        //
    }
}
