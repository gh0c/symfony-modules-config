<?php

declare(strict_types=1);

namespace App\ModuleBeta\Application\EventListener;

use App\Shared\Application\Events\AlphaFooCreatedEvent;

class AlphaFooEventListener
{
    public function onAlphaFooCreated(AlphaFooCreatedEvent $event): void
    {
        // Do nothing
    }
}
