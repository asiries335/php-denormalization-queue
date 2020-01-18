<?php

namespace Asiries335\DenormalizationQueue\DTO;

use Dto\Dto;

class RunWorkerData extends Dto  {

    protected $schema = [
        'type' => 'object',
        'properties' => [
            'time' => ['type' => 'string'],
        ],
    ];

}