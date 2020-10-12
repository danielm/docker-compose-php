
# Docker Compose + PHP 7.4

Clone me and build cool stuff. This sets up some minimal containers with Nginx, PHP and MariaDB and installs your composer dependencies *(src/composer.json)*; potentially  run migrations but that's up to you and what framework you use (see build/php-fpm/Dockerfile)

## Now you got:

- MariaDB, PHP-FPM and Nginx official images (ALPINE)
- Composer also from it's official image.
-  **.env** File to setup Host port mapping, app environment vars, db settings
- Git for dependencies install
- Composer official image
- Persistent nginx logs and database data for development
- Optional Initial seeding SQL dump

## Directories & Files

- src/ *Where Your PHP application files reside*
- src/public/ *Application public entrypoint*
- build/ *Docker & image config files and options*
- build/php-fpm/php.ini *Extra PHP directives*
- build/mariadb/data/ *MySQL data folder*
- build/mariadb/seed/*.sql *Sql scripts to run when container are created*
- logs/nginx/*.log *error and acccess logs*
- logs/mysql/ *MariaDB logfiles*
- .env *Varios setting for our container (See -env.sample)*

## About
By [Daniel Morales](https://daniel.uy)
License: Released under the  [MIT license](https://github.com/danielm/uploader/blob/master/LICENSE.txt)
