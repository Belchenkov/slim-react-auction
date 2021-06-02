<?php

declare(strict_types=1);

use Doctrine\ORM\Tools\Console\Command\SchemaTool;
use Doctrine\Migrations;

return [
    'config' => [
        'console' => [
            'commands' => [
                SchemaTool\DropCommand::class,

                Migrations\Tools\Console\Command\DiffCommand::class,
                Migrations\Tools\Console\Command\GenerateCommand::class,
            ],
        ],
    ],
];
