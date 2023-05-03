<?php

declare(strict_types=1);

return [
    'transport'    => 'smtp',
    'host'         => env('MAIL_HOST', 'mail.smtp2go.com'),
    'port'         => env('MAIL_PORT', 2525),
    'encryption'   => env('MAIL_ENCRYPTION', 'tls'),
    'username'     => env('MAIL_USERNAME'),
    'password'     => env('MAIL_PASSWORD'),
    'timeout'      => null,
    'local_domain' => env('MAIL_EHLO_DOMAIN'),
];
