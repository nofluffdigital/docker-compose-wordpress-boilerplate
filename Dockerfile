FROM wordpress:latest

RUN pecl install xdebug

ADD ./php.ini /usr/local/etc/php/