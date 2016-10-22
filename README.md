# Laravel Acomba ODBC Driver

[![Total Downloads](https://poser.pugx.org/ideesdefous/laravel-acomba-odbc-driver/downloads.svg)](https://packagist.org/packages/ideesdefous/laravel-acomba-odbc-driver)
[![Latest Stable Version](https://poser.pugx.org/ideesdefous/laravel-acomba-odbc-driver/v/stable.svg)](https://packagist.org/packages/ideesdefous/laravel-acomba-odbc-driver)
[![Latest Unstable Version](https://poser.pugx.org/ideesdefous/laravel-acomba-odbc-driver/v/unstable.svg)](https://packagist.org/packages/ideesdefous/laravel-acomba-odbc-driver)
[![License](https://poser.pugx.org/ideesdefous/laravel-acomba-odbc-driver/license.svg)](https://packagist.org/packages/ideesdefous/laravel-acomba-odbc-driver)

An ODBC Driver for Acomba within Laravel

## Installation

Install using Composer
```ssh
composer require ideesdefous/laravel-acomba-odbc-driver
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