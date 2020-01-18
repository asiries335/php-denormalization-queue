<?php
namespace Asiries335\DenormalizationQueue\Tasks;

class RunWorkerTask extends Task
{

    /**
     * Execute task
     *
     * @return mixed|void
     */
    public function handle()
    {
        while (true) {
            echo 1;
        }
    }
}