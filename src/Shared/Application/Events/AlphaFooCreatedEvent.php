<?php

declare(strict_types=1);

namespace App\Shared\Application\Events;

use App\Shared\Application\EventStore\Event;

class AlphaFooCreatedEvent implements Event
{
    public function __construct(
        public readonly int $amount,
    ) {
    }
}
