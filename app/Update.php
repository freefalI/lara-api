<?php

namespace App;

use MadWeb\Initializer\Contracts\Runner;

class Update
{
    /*
    public function production(Runner $run)
    {
        return $run
            ->external('composer', 'install', '--no-dev', '--prefer-dist', '--optimize-autoloader')
            ->external('npm', 'install', '--production')
            ->external('npm', 'run', 'production')
            ->artisan('route:cache')
            ->artisan('config:cache')
            ->artisan('migrate', ['--force' => true])
            ->artisan('cache:clear')
            ->artisan('queue:restart'); // ->artisan('horizon:terminate');
    }

    public function local(Runner $run)
    {
        return $run
            ->external('composer', 'install')
            ->external('npm', 'install')
            ->external('npm', 'run', 'development')
            ->artisan('migrate')
            ->artisan('cache:clear')
            ->artisan('queue:restart'); // ->artisan('horizon:terminate');
    }
    */
}
