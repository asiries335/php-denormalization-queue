<?php

namespace Asiries335\DenormalizationQueue\Tasks;

use Dto\DtoInterface;

abstract class Task
{
    /**
     * Task constructor.
     *
     * @param DtoInterface $dto DtoInterface
     */
    public function __construct(DtoInterface $dto)
    {
        $this->handle($dto);
    }

}