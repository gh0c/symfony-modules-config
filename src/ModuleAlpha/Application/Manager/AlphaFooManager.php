<?php

declare(strict_types=1);

namespace App\ModuleAlpha\Application\Manager;

use App\Shared\Application\Events\AlphaFooCreatedEvent;
use App\Shared\Application\EventStore\EventStore;

class AlphaFooManager
{
    public function __construct(
        private readonly EventStore $eventStore,
        private readonly int $defaultParamAlpha,
    ) {
    }

    public function create(): void
    {
        // Foo created
        $this->eventStore->store(new AlphaFooCreatedEvent($this->defaultParamAlpha));
    }
}
