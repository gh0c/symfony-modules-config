<?php

declare(strict_types=1);

namespace App\ModuleAlpha\Infrastructure\GraphQL\Resolver;

use GraphQL\Executor\Promise\Promise;
use Overblog\DataLoader\DataLoaderInterface;
use Overblog\GraphQLBundle\Definition\Resolver\AliasedInterface;

class AlphaFooResolver implements AliasedInterface
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
            'resolveOne' => 'AlphaFoo',
        ];
    }
}
