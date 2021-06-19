FROM moodlehq/moodle-php-apache:7.3

COPY docker/. /etc/apache2/sites-available

WORKDIR /var/www/moodle
COPY . .

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php --install-dir=/usr/local/bin && \
    rm composer-setup.php && \
    composer.phar install --no-dev --no-scripts

RUN cp /var/run/secrets/config.php /var/www/moodle/

RUN chown -R www-data:www-data /var/www && \
    a2ensite academy.* && \
    a2dissite 000-default && \
    a2enmod rewrite && \
    service apache2 restart

EXPOSE 80
CMD ["apachectl", "-D", "FOREGROUND"]