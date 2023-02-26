<?php

namespace App\Observers;

use App\Events\CategoryEvent;
use App\Models\CategorysModel;

class CategoryObserver
{
    /**
     * Handle the CategorysModel "created" event.
     *
     * @param  \App\Models\CategorysModel  $categorysModel
     * @return void
     */
    public function created(CategorysModel $categorysModel)
    {
        event(new CategoryEvent($categorysModel));
    }

    /**
     * Handle the CategorysModel "updated" event.
     *
     * @param  \App\Models\CategorysModel  $categorysModel
     * @return void
     */
    public function updated(CategorysModel $categorysModel)
    {
        event(new CategoryEvent($categorysModel));
    }

    /**
     * Handle the CategorysModel "deleted" event.
     *
     * @param  \App\Models\CategorysModel  $categorysModel
     * @return void
     */
    public function deleted(CategorysModel $categorysModel)
    {
        event(new CategoryEvent($categorysModel));
    }

    /**
     * Handle the CategorysModel "restored" event.
     *
     * @param  \App\Models\CategorysModel  $categorysModel
     * @return void
     */
    public function restored(CategorysModel $categorysModel)
    {
        //
    }

    /**
     * Handle the CategorysModel "force deleted" event.
     *
     * @param  \App\Models\CategorysModel  $categorysModel
     * @return void
     */
    public function forceDeleted(CategorysModel $categorysModel)
    {
        //
    }
}
