#!/bin/sh

cp /var/run/secrets/config.php /var/www/moodle/config.php

apachectl -D FOREGROUND