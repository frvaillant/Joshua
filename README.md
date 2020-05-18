# Joshua

## Description

Joshua is a "capture the flag" web application developed as part of a team project by students from Wild Code School in Bordeaux.

## Author

 - Caroline Fourcade
 - Marien Regnault
 - François Vaillant
 - Guillaume Erpeldinger

## Install

1. Clone the repo from Github.
2. Run `composer install`.
3. Create *config/db.php* from *config/db.php.dist* file and add your DB parameters. Don't delete the *.dist* file, it must be kept.
```php
define('APP_DB_HOST', 'your_db_host');
define('APP_DB_NAME', 'your_db_name');
define('APP_DB_USER', 'your_db_user_wich_is_not_root');
define('APP_DB_PWD', 'your_db_password');
```
4. Import `joshua_*.sql` in your SQL server,
5. Run the internal PHP webserver with `php -S localhost:8000 -t public/`. The option `-t` with `public` as parameter means your localhost will target the `/public` folder.
6. Go to `localhost:8000` with your favorite browser.


##### Windows Users

If you develop on Windows, you should edit you git configuration to change your end of line rules with this command :

`git config --global core.autocrlf true`

## Link

Wild Code School : https://www.wildcodeschool.com
Framework used : https://github.com/WildCodeSchool/simple-mvc
