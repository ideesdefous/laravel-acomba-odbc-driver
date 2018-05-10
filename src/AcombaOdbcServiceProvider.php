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

        foreach ($manager->getConnections() as $connKey => $connConfig) {
            if (array_get($connConfig, 'driver', null) == 'acomba') {
                $manager->extend($connKey, function ($config) {
                    if (!isset($config['prefix'])) {
                        $config['prefix'] = '';
                    }

                    $connector = new AcombaConnector();
                    $pdo = $connector->connect($config);
                    $db = new AcombaConnection($pdo, array_get($config, 'database', ''), $config['prefix']);

                    return $db;
                });
            }
        }
    }

    public function register()
    {
        // register
    }
}
