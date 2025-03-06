<?php

return [
    'commands' => [
        'tracker' => [
            'download',
            'parse',
            'push-data',
            'fetch:metar',
        ],
        'laravel' => [
            'storage:link',
        ],
        'optimize' => [
            'optimize',
            'optimize:clear',
        ],
        'cache' => [
            'cache:clear',
            'cache:forget',
            'config:clear',
            'config:cache',
        ],
        'events' => [
            'event:cache',
            'event:clear',
            'event:generate',
            'event:list',
        ],
        'migrate' => [
            'migrate:status',
        ],
        'generate' => [
            'key:generate',
        ],
    ]
];