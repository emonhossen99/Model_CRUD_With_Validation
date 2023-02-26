<?php

namespace App\Listeners;

use App\Mail\CategoryMail;
use App\Events\CategoryEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CategoryListener
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
    public function handle(CategoryEvent $event)
    {
        $data = $event;
        Mail::to('mdxhamedemon@gmail.com')->send(new CategoryMail($data));
    }
}
