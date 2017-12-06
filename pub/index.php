<?php
require_once "../vendor/autoload.php";

use Rioxygen\CiCoreDatabase\Mysql\CI_DB_mysqli_driver;
$db = array(
    'dsn'	=> '',
    'hostname' => 'cicore-db',
    'username' => 'root',
    'password' => 'mysql',
    'database' => 'magento2',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => TRUE,
    'db_debug' => 'production',
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

$test = new CI_DB_mysqli_driver($db);
$query =  $test->query("SELECT * FROM tester");
foreach ($query->result() as $row) {
    var_dump($row);
}