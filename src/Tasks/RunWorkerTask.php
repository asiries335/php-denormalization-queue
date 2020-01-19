<?php

namespace Asiries335\DenormalizationQueue\Tasks;

use Asiries335\DenormalizationQueue\Abstracts\Task;
use Asiries335\DenormalizationQueue\DTO\RunWorkerTransfer;

class RunWorkerTask extends Task
{
    protected $data;

    /**
     * RunWorkerTask constructor.
     * @param RunWorkerTransfer $runWorkerData
     */
    public function __construct(RunWorkerTransfer $runWorkerData)
    {
        $this->data = $runWorkerData;
    }


    /**
     * Task handle
     *
     * @return mixed|void
     * @throws \Dto\Exceptions\InvalidDataTypeException
     */
    public function handle()
    {
        dd($this->data->toArray());
        while (true) {
            echo 1;
        }
    }
}