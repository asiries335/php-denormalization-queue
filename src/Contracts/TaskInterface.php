<?php
namespace Asiries335\DenormalizationQueue\Contracts;

interface TaskInterface
{
    /**
     * Task handle
     *
     * @return mixed
     */
    public function handle();
}