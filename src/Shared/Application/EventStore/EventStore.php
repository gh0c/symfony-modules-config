<?php

declare(strict_types=1);

namespace App\Shared\Application\EventStore;

interface EventStore
{
    public function store(Event $event): void;
}
