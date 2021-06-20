#!/bin/sh

cp /var/run/secrets/config.php /var/www/moodle/config.php
chown www-data:www-data config.php
chmod 400 config.php

apachectl -D FOREGROUND