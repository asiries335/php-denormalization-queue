<?php
namespace Asiries335\DenormalizationQueue\Contracts;

interface TaskInterface
{

    /**
     * handle
     *
     * @return mixed
     */
    public function handle();
}