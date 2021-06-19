FROM moodlehq/moodle-php-apache:7.3

COPY docker/. /etc/apache2/sites-available

WORKDIR /var/www/moodle
COPY . .

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php --install-dir=/usr/local/bin && \
    rm composer-setup.php && \
    composer.phar install --no-dev --no-scripts

RUN chown -R www-data:www-data /var/www && \
    service apache2 stop && \
    a2ensite academy.* && \
    echo "ServerName localhost" >> /etc/apache2/apache2.conf && \
    a2dissite 000-default && \
    a2enmod rewrite

EXPOSE 80

ENTRYPOINT ["/bin/sh", "build.sh"]