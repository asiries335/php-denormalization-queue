<?php


namespace Asiries335\DenormalizationQueue\Contracts;


interface QueueInterface
{
    public function push($job) : void;
}