# Basic App Minimal

## Installation

`composer create-project basic-app/appstarter --stability=dev --prefer-dist`
 
## Setup

Set common application settings in your `.env` file.

Run commands: 

```
php spark migrate -all
php spark ba:update
php spark ba:seed (Optional)
```

You need to run the `ba:update` command after each installation of a new module.

```
php spark ba:update
```

If you want to populate the database with demodata, run the `ba:seed` command after each installation of a new module.

```
php spark ba:seed
```

## Server Requirements

PHP version 7.2 or higher is required, with the following extensions installed: 

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
