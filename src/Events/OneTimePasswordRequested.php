<?php

namespace PragmaRX\Google2FALaravel\Events;

use Illuminate\Queue\SerializesModels;

class OneTimePasswordRequested
{
    use  SerializesModels;

    public $user;

    /**
     * Create a new event instance.
     *
     * @param $user
     */
    public function __construct($user)
    {
        $this->user = $user;
    }
}
