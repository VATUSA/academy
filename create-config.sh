#!/bin/sh

DOLLAR='$'

cat > config.php << EOF
<?php  // Moodle configuration file

unset(${DOLLAR}CFG);
global ${DOLLAR}CFG;
${DOLLAR}CFG = new stdClass();

${DOLLAR}CFG->dbtype    = 'mysql';
${DOLLAR}CFG->dblibrary = 'native';
${DOLLAR}CFG->dbhost    = '$DB_HOST';
${DOLLAR}CFG->dbname    = '$DB_NAME';
${DOLLAR}CFG->dbuser    = '$DB_USERNAME';
${DOLLAR}CFG->dbpass    = '$DB_PASSWORD';
${DOLLAR}CFG->prefix    = 'mdl_';
${DOLLAR}CFG->dboptions = array (
    'dbpersist' => 0,
    'dbport' => '',
    'dbsocket' => '',
    'dbcollation' => 'utf8mb4_general_ci',
);

${DOLLAR}CFG->wwwroot   = '$URL';
${DOLLAR}CFG->sslproxy = true;
${DOLLAR}CFG->dataroot  = '/var/www/moodledata';
${DOLLAR}CFG->admin     = 'admin';

${DOLLAR}CFG->directorypermissions = 0777;
${DOLLAR}CFG->preventexecpath = true;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
EOF
