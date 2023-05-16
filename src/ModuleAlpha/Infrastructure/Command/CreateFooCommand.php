<?php

declare(strict_types=1);

namespace App\ModuleAlpha\Infrastructure\Command;

use App\ModuleAlpha\Application\Manager\AlphaFooManager;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:alpha:create-foo')]
class CreateFooCommand extends Command
{
    public function __construct(
        private readonly AlphaFooManager $alphaFooManager,
        string $name = null
    ) {
        parent::__construct($name);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->alphaFooManager->create();

        return Command::SUCCESS;
    }


}
