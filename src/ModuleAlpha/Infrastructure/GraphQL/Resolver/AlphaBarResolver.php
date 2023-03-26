<?php

declare(strict_types=1);

namespace App\ModuleAlpha\Infrastructure\GraphQL\Resolver;

use GraphQL\Executor\Promise\Promise;
use Overblog\DataLoader\DataLoaderInterface;

class AlphaBarResolver
{
    public function __construct(
        private readonly DataLoaderInterface $dataLoader,
    ) {
    }

    public function resolveOne(string $id): Promise
    {
        return $this->dataLoader->load($id);
    }

    public static function getAliases(): array
    {
        return [
            'resolveOne' => 'AlphaBar',
        ];
    }
}
