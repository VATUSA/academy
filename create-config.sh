#!/bin/sh

DOLLAR='$'

cat > config.php << EOF
<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '${DOLLAR}DB_HOST';
$CFG->dbname    = '${DOLLAR}DB_NAME';
$CFG->dbuser    = '${DOLLAR}DB_USERNAME';
$CFG->dbpass    = '${DOLLAR}DB_PASSWORD';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
    'dbpersist' => 0,
    'dbport' => '',
    'dbsocket' => '',
    'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot   = '${DOLLAR}URL';
$CFG->sslproxy = true;
$CFG->dataroot  = '/var/www/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
EOF