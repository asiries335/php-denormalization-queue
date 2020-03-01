<?php
namespace Asiries335\DenormalizationQueue\Core;



use Dto\DtoInterface;
use Symfony\Component\Console\Exception\InvalidArgumentException;

final class Task
{

    /**
     * Run task
     *
     * @param string $className
     * @param DtoInterface $dtoInterface
     * @return mixed
     */
    static public function run(string $className, DtoInterface $dtoInterface)
    {
        $className = 'Asiries335\DenormalizationQueue\Tasks\\' . $className;

        if (class_exists($className) === false) {
            throw new InvalidArgumentException('Task not exists');
        }

        $classTaskInstance = new $className($dtoInterface);

        return $classTaskInstance->handle();

    }
}