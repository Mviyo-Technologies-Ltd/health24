FROM php:latest

RUN curl -sS https://getcomposer.org/installer | php -- \
     --install-dir=/usr/local/bin --filename=composer


RUN apt-get update && apt-get install -y \
    libzip-dev

RUN docker-php-ext-install pdo pdo_mysql sockets zip



RUN mkdir /app

ADD . /app

WORKDIR /app

RUN composer install

CMD php artisan key:generate

CMD chmod -R 777 ./storage

CMD chmod -R 777 ./bootstrap/

CMD cat .env

CMD php artisan serve --host=0.0.0.0 --port=15000

CMD echo $USER

EXPOSE 15000
