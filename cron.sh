#!/bin/sh

sh create-config.sh
chown www-data:www-data config.php
chmod 400 config.php

php admin/cli/cron.php