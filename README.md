# CalibrePHP

It's a udapted version of [CalibrePHP](https://github.com/openam/calibrephp/) for Ubuntu 16.04 and PHP 7.0 (using CakePHP(tm) v 0.2.9 )  

This is a simple [HTML](http://en.wikipedia.org/wiki/HTML) and [OPDS](http://en.wikipedia.org/wiki/OPDS) web server to access a database created by the [Calibre](http://calibre-ebook.com) application. CalibrePHP was written using [CakePHP](http://cakephp.org).

## Manual Setup
### Requirements
CalibrePHP has the following Requirements:
* HTTP Server. e.g. Apache with mod_rewrite
* PHP 7.0 or greater
* PHP Sqlite 3 support ```apt-get install libsqlite3-0 libsqlite3-dev ```
* GD Image library ``` apt-get install libapache2-mod-php7.0 ```
* Calibre library and sub-directories need to be readable and executable by the webserver.

### Installation
* Clone the repository to your webserver.
* Copy `app/Config/email.php.default` to `app/Config/email.php`
  * Update the settings as needed, This is needed if you're going to use the send feature below.
* Copy `app/Config/settings.php.default` to `app/Config/settings.php`
  * Configure the email setting want to be sent, or set as an empty array() to disable.
* Copy `app/Config/database.php.default` to `app/Config/database.php`
  * Configure the full path of calibre database ($test & $default).
* Update `app/Config/core.php` to modify the following if desired.
  * Change `Security.salt` from the default.
  * Change `Security.cipherSeed` from the default.
  * Change `debug` to the desired level.

## History
* Added reading epub and pdf in browser
* Added user management
  * Enable authentication by changing the auth option in configuration section
  * Default account `username:password` setups:
    * `admin:password`
    * `user:password`
    * `children:password`
* Added support for multiple languages
* Added Russian language
* Added configuration section
* Added French language

## Reporting issues
If you have any issues with with the application please open an issue on [GitHub](https://github.com/diyfr/calibrephp/issues).

## Demo and Screenshots

Please see the [documentation](http://openam.github.io/calibrephp/) for additional information, or visit the [demo](http://calibre.fakewaffle.com/demo) to see it in action.
