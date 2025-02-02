FROM php:8.3

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

CMD php artisan serve --host 0.0.0.0 --port=8000 --verbose

EXPOSE 8000
