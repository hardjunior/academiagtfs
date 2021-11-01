<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'sgotpt_moodle';
$CFG->dbuser    = 'sgotpt_moodle';
$CFG->dbpass    = 'QS+$mfTC%{Ti';
// $CFG->dbpass    = '9SpB5.T(3O';
$CFG->prefix    = 'mdlim_';
$CFG->dboptions = array(
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot   = 'https://academiagtfs.sgot.pt';
$CFG->dataroot  = '/home/sgotpt/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
