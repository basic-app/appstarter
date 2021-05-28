# Basic App

#### CodeIgniter 4 Application Starter

## Installation & updates

`composer create-project basic-app/appstarter --stability=dev --prefer-dist --keep-vcs`

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL and any database settings.

You should configure your web server to "point" to your project's *public* folder, and not to the project root.

**Please** read the [CodeIgniter 4 user guide](https://codeigniter.com/user_guide/index.html) for a better explanation of how it works!

## Server Requirements

PHP version 7.3 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
