<?php


namespace Asiries335\DenormalizationQueue\Tasks;


use Asiries335\DenormalizationQueue\Contracts\TaskInterface;

class Task implements TaskInterface
{
    /**
     * Task constructor.
     */
    public function __construct()
    {
        $this->handle();
    }


    /**
     * @return mixed|void
     */
    public function handle()
    {
        // TODO: Implement execute() method.
    }
}