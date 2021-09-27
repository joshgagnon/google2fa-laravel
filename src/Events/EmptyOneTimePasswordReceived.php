<?php

namespace PragmaRX\Google2FALaravel\Events;

use Illuminate\Queue\SerializesModels;

class EmptyOneTimePasswordReceived
{
    use  SerializesModels;
}
