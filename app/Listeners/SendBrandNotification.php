<?php

namespace App\Listeners;

use App\Mail\Welcomemail;
use App\Events\BrandEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendBrandNotification
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
    public function handle(BrandEvent $event)
    {
        $data = $event;
        Mail::to('mdxhamedemon@gmail.com')->send(new Welcomemail($data));
    }
}
