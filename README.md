[![Dependency Status](https://www.versioneye.com/user/projects/5a2b16b70fb24f466ccb947e/badge.svg?style=flat-square)](https://www.versioneye.com/user/projects/5a2b16b70fb24f466ccb947e)

# Proyecto codeigniterCoreDatabase
Este proyecto busca pasar el driver de CodeIgniter v3.* a un estandar PSR-4 para ser usado
como una libreria más o como capa de acceso a datos

## Ejemplo de carga

```php
<?php
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
```

## Uso de Docker para ejemplo
Se agrega un docker-compose para poder usarlo de manera integral