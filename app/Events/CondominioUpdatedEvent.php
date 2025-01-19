<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;

class CondominioUpdatedEvent
{
    use SerializesModels;

    public $condominio;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($condominio)
    {
        $this->condominio = $condominio;
    }
}
