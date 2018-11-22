FROM php:7.2.1-apache

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN a2enmod rewrite
RUN a2enmod http2
COPY resources/docker/apache2.conf /etc/apache2/apache2.conf
COPY resources/docker/000-default.conf /etc/apache2/sites-available/000-default.conf

#RUN apt-get update -yq
#RUN apt-get install -yq vim