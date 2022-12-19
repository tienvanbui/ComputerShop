<?php

namespace App\Listeners;

use App\Jobs\sendEmailRegistedMailSuccessJob;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
class sendRegisterSuccessMailListener
{
    protected $username = null;
    protected $email = null;
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        sendEmailRegistedMailSuccessJob::dispatch($event->email,$event->username);
    }
}
