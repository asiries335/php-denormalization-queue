<?php

namespace Asiries335\DenormalizationQueue\DTO;

use Asiries335\DenormalizationQueue\Abstracts\Transfer;

class RunWorkerDTO extends Transfer  {

    protected $schema = [
        'type' => 'object',
        'properties' => [
            'time' => ['type' => 'string'],
        ],
    ];

}