<?php

namespace IdeesDeFous\Acomba;

use Illuminate\Support\ServiceProvider;
use IdeesDeFous\Acomba\Connectors\DBLIBConnector;
use Illuminate\Database\DatabaseManager as Factory;

class AcombaOdbcServiceProvider extends ServiceProvider
{
    public function boot()
    {
        /** @var Factory $factory */
        $factory = $this->app['db'];

        $factory->extend('dblib', function ($config) {
            if (!isset($config['prefix'])) {
                $config['prefix'] = '';
            }
            $connector = new DBLIBConnector();
            $pdo = $connector->connect($config);
            $db = new DBLIBConnection($pdo, $config['database'], $config['prefix']);

            return $db;
        });
    }

    public function register()
    {
        // register
    }
}
