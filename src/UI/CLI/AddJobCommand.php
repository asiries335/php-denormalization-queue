<?php


namespace Asiries335\DenormalizationQueue\UI\CLI;

use Asiries335\DenormalizationQueue\Core\Task;
use Asiries335\DenormalizationQueue\DTO\RunWorkerDTO;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AddJobCommand extends Command
{
    /**
     * Default name command
     *
     * @var string
     */
    protected static $defaultName = 'queue-denormalized:add-job';

    /**
     * Configure command
     *
     * @return void
     */
    protected function configure() : void
    {
        $this->setDescription('Add job');
        $this->setHelp('This command add your a job');
    }

    /**
     * Execute
     *
     * @param InputInterface  $input  InputInterface
     * @param OutputInterface $output OutputInterface
     *
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {


        return 1;
    }
}