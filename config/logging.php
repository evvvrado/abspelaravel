<?php

use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogUdpHandler;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Log Channel
    |--------------------------------------------------------------------------
    |
    | This option defines the default log channel that gets used when writing
    | messages to the logs. The name specified in this option should match
    | one of the channels defined in the "channels" configuration array.
    |
    */

    'default' => env('LOG_CHANNEL', 'stack'),

    /*
    |--------------------------------------------------------------------------
    | Log Channels
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log channels for your application. Out of
    | the box, Laravel uses the Monolog PHP logging library. This gives
    | you a variety of powerful log handlers / formatters to utilize.
    |
    | Available Drivers: "single", "daily", "slack", "syslog",
    |                    "errorlog", "monolog",
    |                    "custom", "stack"
    |
    */

    'channels' => [
        'stack' => [
            'driver' => 'stack',
            'channels' => ['single'],
            'ignore_exceptions' => false,
        ],

        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        'acessos' => [
            'driver' => 'single',
            'path' => storage_path('logs/acessos.log'),
            'level' => env('LOG_LEVEL', 'info'),
        ],

        'noticias' => [
            'driver' => 'single',
            'path' => storage_path('logs/noticias.log'),
            'level' => env('LOG_LEVEL', 'info'),
        ],

        'categorias' => [
            'driver' => 'single',
            'path' => storage_path('logs/categorias.log'),
            'level' => env('LOG_LEVEL', 'info'),
        ],

        'tags' => [
            'driver' => 'single',
            'path' => storage_path('logs/tags.log'),
            'level' => env('LOG_LEVEL', 'info'),
        ],

        'hashtags' => [
            'driver' => 'single',
            'path' => storage_path('logs/hashtags.log'),
            'level' => env('LOG_LEVEL', 'info'),
        ],

        'estaduais' => [
            'driver' => 'single',
            'path' => storage_path('logs/estaduais.log'),
            'level' => env('LOG_LEVEL', 'info'),
        ],

        'usuarios' => [
            'driver' => 'single',
            'path' => storage_path('logs/usuarios.log'),
            'level' => env('LOG_LEVEL', 'info'),
        ],

        'configuracoes' => [
            'driver' => 'single',
            'path' => storage_path('logs/configuracoes.log'),
            'level' => env('LOG_LEVEL', 'info'),
        ],

        'notificacoes' => [
            'driver' => 'single',
            'path' => storage_path('logs/notificacoes.log'),
            'level' => env('LOG_LEVEL', 'info'),
        ],

        'boletos' => [
            'driver' => 'single',
            'path' => storage_path('logs/boletos.log'),
            'level' => env('LOG_LEVEL', 'info'),
        ],

        'cartoes' => [
            'driver' => 'single',
            'path' => storage_path('logs/cartoes.log'),
            'level' => env('LOG_LEVEL', 'info'),
        ],

        'pagamentos' => [
            'driver' => 'single',
            'path' => storage_path('logs/pagamentos.log'),
            'level' => env('LOG_LEVEL', 'info'),
        ],

        'matriculas' => [
            'driver' => 'single',
            'path' => storage_path('logs/matriculas.log'),
            'level' => env('LOG_LEVEL', 'info'),
        ],

        'app' => [
            'driver' => 'single',
            'path' => storage_path('logs/app.log'),
            'level' => env('LOG_LEVEL', 'info'),
        ],

        'daily' => [
            'driver' => 'daily',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
            'days' => 14,
        ],

        'slack' => [
            'driver' => 'slack',
            'url' => env('LOG_SLACK_WEBHOOK_URL'),
            'username' => 'Laravel Log',
            'emoji' => ':boom:',
            'level' => env('LOG_LEVEL', 'critical'),
        ],

        'papertrail' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => SyslogUdpHandler::class,
            'handler_with' => [
                'host' => env('PAPERTRAIL_URL'),
                'port' => env('PAPERTRAIL_PORT'),
            ],
        ],

        'stderr' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => StreamHandler::class,
            'formatter' => env('LOG_STDERR_FORMATTER'),
            'with' => [
                'stream' => 'php://stderr',
            ],
        ],

        'syslog' => [
            'driver' => 'syslog',
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        'errorlog' => [
            'driver' => 'errorlog',
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        'null' => [
            'driver' => 'monolog',
            'handler' => NullHandler::class,
        ],

        'emergency' => [
            'path' => storage_path('logs/laravel.log'),
        ],
    ],

];
