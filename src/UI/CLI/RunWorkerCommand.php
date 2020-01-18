<?php

namespace Asiries335\DenormalizationQueue\UI\CLI;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RunWorkerCommand extends Command
{
    protected static $defaultName = 'queue-denormalized:run-worker';

    /**
     * Configure command
     *
     * @return void
     */
    protected function configure() : void
    {
        $this->setDescription('Run worker');
        $this->setHelp('This command run the worker for make your jobs');
    }

    /**
     * Execute
     *
     * @param InputInterface  $input  InputInterface
     * @param OutputInterface $output OutputInterface
     *
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output) : void
    {
        // ...
        return 0;
    }
}