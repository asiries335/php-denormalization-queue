<?php

namespace Asiries335\DenormalizationQueue\Tasks;

use Asiries335\DenormalizationQueue\Abstracts\Task;
use Asiries335\DenormalizationQueue\DTO\RunWorkerDTO;

class RunWorkerTask extends Task
{
    protected $context;

    /**
     * RunWorkerTask constructor.
     * @param RunWorkerDTO $runWorkerData
     */
    public function __construct(RunWorkerDTO $runWorkerData)
    {
        $this->context = $runWorkerData;
    }


    /**
     * Task handle
     *
     * @return mixed|void
     * @throws \Dto\Exceptions\InvalidDataTypeException
     */
    public function handle()
    {
        while (true) {
            echo 1;
        }
    }
}