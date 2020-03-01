<?php


namespace Asiries335\DenormalizationQueue\Core;


use Asiries335\DenormalizationQueue\Contracts\JobInterface;

final class Job implements JobInterface
{

    /**
     * @inheritDoc
     */
    public function getQueue(): string
    {
        // TODO: Implement getQueue() method.
    }

    /**
     * @inheritDoc
     */
    public function getBody(): array
    {
        // TODO: Implement getBody() method.
    }

    /**
     * @inheritDoc
     */
    public function getId(): string
    {
        // TODO: Implement getId() method.
    }
}