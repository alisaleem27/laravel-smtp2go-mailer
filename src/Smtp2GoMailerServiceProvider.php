<?php

declare(strict_types=1);

namespace AliSaleem\Smtp2GoMailer;

use Illuminate\Support\ServiceProvider;

class Smtp2GoMailerServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/smtp2go.php', 'mail.mailers.smptp2go');
    }
}
