<?php


namespace Asiries335\DenormalizationQueue\Contracts;


interface JobInterface
{
    /**
     * Method for return name a Queue
     *
     * @return string
     */
    public function getQueue() : string;

    /**
     * Method for return body a job
     *
     * @return string
     */
    public function getBody() : array ;

    /**
     * Method for return id is job
     *
     * @return string
     */
    public function getId() : string;
}