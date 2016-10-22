# Laravel Acomba ODBC Driverxxw
An ODBC Driver for Acomba within Laravel

## Installation

Install dependencies
```json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/ideesdefous/laravel-acomba-odbc-driver.git"
    }
],
"require": {
    ...
    "ideesdefous/laravel-acomba-odbc-driver": "dev-master"
}
```

Register the Service Provider in `config/app.php`
```php
'providers' => [
    ...
    'IdeesDeFous\Acomba\AcombaOdbcServiceProvider',
    ...
];
```

Copy the database configuration in `config/database.php`
```php
'acomba' => [
    'driver' => 'dblib',
    'dsn' => 'Driver={Acomba ODBC Driver};Server=your-server-name',
    'host' => "your-hostname",
    'grammar' => 'DB2',
    'username' => 'user',
    'password' => 'password',
    'database' => '',
],
```