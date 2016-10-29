# Laravel Acomba ODBC Driver
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
    'dsn' => 'acomba', // The name of your DSN ODBC connection. (System or User Data Source).
    'username' => 'user',
    'password' => 'password',
],
```
