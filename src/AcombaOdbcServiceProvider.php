<?php

namespace IdeesDeFous\Acomba;

use Illuminate\Support\ServiceProvider;
use IdeesDeFous\Acomba\Connectors\AcombaConnector;
use Illuminate\Database\DatabaseManager;

class AcombaOdbcServiceProvider extends ServiceProvider
{
    public function boot()
    {
        /** @var DatabaseManager $manager */
        $manager = $this->app['db'];

        $manager->extend('acomba', function ($config) {
            if (!isset($config['prefix'])) {
                $config['prefix'] = '';
            }

            $connector = new AcombaConnector();
            $pdo = $connector->connect($config);
            $db = new AcombaConnection($pdo, $config['database'], $config['prefix']);

            return $db;
        });
    }

    public function register()
    {
        // register
    }
}
