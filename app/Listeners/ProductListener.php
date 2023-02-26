<?php

namespace App\Listeners;

use App\Mail\ProductMail;
use App\Events\ProductEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProductListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(ProductEvent $event)
    {
        $data = $event;
        Mail::to('mdxhamedemon@gmail.com')->send(new ProductMail($data));
    }
}
