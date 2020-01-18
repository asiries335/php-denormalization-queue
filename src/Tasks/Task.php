<?php


namespace Asiries335\DenormalizationQueue\Tasks;


use Dto\Dto;
use Dto\DtoInterface;

class Task
{
    /**
     * Task constructor.
     */
    public function __construct(DtoInterface $dto)
    {
        $this->handle($dto);
    }


    /**
     * @param Dto $dto
     * @return mixed|void
     */
    public function handle(DtoInterface $dto)
    {
        // TODO: Implement execute() method.
    }
}