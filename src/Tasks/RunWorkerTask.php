<?php

namespace Asiries335\DenormalizationQueue\Tasks;

use Asiries335\DenormalizationQueue\DTO\RunWorkerData;

class RunWorkerTask extends Task
{

    /**
     * Execute task
     *
     * @param RunWorkerData $runWorkerData
     * @return mixed|void
     */
    public function handle(RunWorkerData $runWorkerData)
    {
        while (true) {
            echo 1;
        }
    }
}