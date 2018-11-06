<?php

namespace App\Listeners;

use \Aacotroneo\Saml2\Events\Saml2LogoutEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SamlLogoutListener
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
     * @param  Saml2LogoutEvent  $event
     * @return void
     */
    public function handle(Saml2LogoutEvent $event)
    {
        session()->flush();
    }
}
