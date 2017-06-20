```
   _____ _            _           __             _                               _ 
  / ____| |          | |         / _|           | |                             | |
 | (___ | | __ _  ___| | __     | |_ ___  _ __  | |     __ _ _ __ __ ___   _____| |
  \___ \| |/ _` |/ __| |/ /     |  _/ _ \| '__| | |    / _` | '__/ _` \ \ / / _ \ |
  ____) | | (_| | (__|   <      | || (_) | |    | |___| (_| | | | (_| |\ V /  __/ |
 |_____/|_|\__,_|\___|_|\_\ API |_| \___/|_|    |______\__,_|_|  \__,_| \_/ \___|_|
                                                                               
```
Provides [Slack](https://github.com/cleentfaar/slack) for Laravel.

[![Latest Stable Version](https://poser.pugx.org/bluora/laravel-slack-api/v/stable.svg)](https://packagist.org/packages/bluora/laravel-slack-api) [![Total Downloads](https://poser.pugx.org/bluora/laravel-slack-api/downloads.svg)](https://packagist.org/packages/bluora/laravel-slack-api) [![Latest Unstable Version](https://poser.pugx.org/bluora/laravel-slack-api/v/unstable.svg)](https://packagist.org/packages/bluora/laravel-slack-api) [![Built for Laravel](https://img.shields.io/badge/Built_for-Laravel-green.svg)](https://laravel.com/) [![License](https://poser.pugx.org/bluora/laravel-slack-api/license.svg)](https://packagist.org/packages/bluora/laravel-slack-api)

[![StyleCI](https://styleci.io/repos/94854520/shield?branch=master)](https://styleci.io/repos/94854520) [![Issue Count](https://codeclimate.com/github/bluora/laravel-slack-api/badges/issue_count.svg)](https://codeclimate.com/github/bluora/laravel-slack-api) [![Code Climate](https://codeclimate.com/github/bluora/laravel-slack-api/badges/gpa.svg)](https://codeclimate.com/github/bluora/laravel-slack-api) 

This package has been developed by H&H|Digital, an Australian botique developer. Visit us at [hnh.digital](http://hnh.digital).


## Install

Via composer:

`$ composer require bluora/laravel-slack dev-master`

Enable the service provider by editing config/app.php:

```php
    'providers' => [
        ...
        Bluora\LaravelSlackApi\ServiceProvider::class,
        ...
    ];
```

Enable the facade by editing config/app.php:

```php
    'aliases' => [
        ...
        'SlackApi' => Bluora\LaravelSlackApi\Facade::class,
        ...
    ];
```

## Contributing

Please see [CONTRIBUTING](https://github.com/bluora/laravel-slack-api/blob/master/CONTRIBUTING.md) for details.

## Credits

* [Rocco Howard](https://github.com/therocis)
* [All Contributors](https://github.com/bluora/laravel-slack-api/contributors)

## License

The MIT License (MIT). Please see [License File](https://github.com/bluora/laravel-slack-api/blob/master/LICENSE) for more information.
