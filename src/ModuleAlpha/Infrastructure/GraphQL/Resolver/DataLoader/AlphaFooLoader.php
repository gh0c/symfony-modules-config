<?php

declare(strict_types=1);

namespace App\ModuleAlpha\Infrastructure\GraphQL\Resolver\DataLoader;

use GraphQL\Executor\Promise\Promise;
use GraphQL\Executor\Promise\PromiseAdapter;

class AlphaFooLoader
{
    public function __construct(
        private readonly PromiseAdapter $promiseAdapter,
    ) {
    }

    /**
     * @param string[] $ids
     */
    public function load(array $ids): Promise
    {
        $results = [];

        foreach ($ids as $id) {
            $results[$id] = ['id' => $id, 'name' => 'AlphaFoo' . rand()];
        }

        return $this->promiseAdapter->all($results);
    }
}
