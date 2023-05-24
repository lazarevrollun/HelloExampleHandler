<?php

declare(strict_types=1);

use HelloExample\HelloExampleHandlerAbstractFactory;
use HelloExample\People\Ivan;

return [
    'dependencies' => [
        'aliases' => [
        ],
        'invokables' => [
            Ivan::class => Ivan::class,
        ],
        'factories' => [
        ],
        'abstract_factories' => [
            HelloExampleHandlerAbstractFactory::class,
        ],
    ],
    HelloExampleHandlerAbstractFactory::KEY => [
        'ivan' => [
            HelloExampleHandlerAbstractFactory::KEY_NAME => Ivan::class,
        ],
    ],
];
