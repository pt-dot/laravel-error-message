# Laravel Error Message Displayer

Sometimes in development mode, you want to display exception message to know what happened to your web application. But in production environment, you may want to display general message instead of direct exception message. Laravel error message displayer is a package for displaying exception message or trace string based on `APP_DEBUG` condition.

## Requirements
+ php 7.0+
+ Laravel 5.5+

## Installation

Install package through composer.

```bash
composer require ptdot/errormessage
```

Next, if using Laravel under 5.5, include the service provider and Facade within your `config/app.php` file.

```php
'providers' => [
    Ptdot\ErrorMessage\ErrorMessageServiceProvider::class,
],

'aliases' => [
    'ErrorMessage' => Ptdot\LdapAuth\ErrorMessage::class,
]
```

Since Laravel 5.5+ is using Package Discovery, there is no need manually insert service provider and facade inside your `app.php`.

## Configuration

Publish assets using command:

```bash
php artisan vendor:publish
```

## Usage

+ Using Facade

+ Using Dependency Injection

## Contributing

Feel free to report an issue or merge request if you want to help this package become better and useful.