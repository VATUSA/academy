#!/bin/sh

sh create-config.sh
chown www-data:www-data config.php
chmod 400 config.php

apachectl -D FOREGROUND