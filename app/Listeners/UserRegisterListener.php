<?php

namespace App\Listeners;

use App\Mail\QueueMail;
use App\Jobs\UserRegister;
use App\Events\UserRegisterEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserRegisterListener
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
    public function handle(UserRegisterEvent $event)
    {
        UserRegister::dispatch(request()->all())->delay(now()->addSeconds(10));
    }
}
