<?php
/**
 * Rioxygen
 * @copyright Copyright (c) 2018 Rioxygen. (http://www.Rioxygen.com/)
 * @license  BSD 3-clause "New" or "Revised" License 
 */
namespace Rioxygen\CiCoreDatabase;

use Rioxygen\CiCoreDatabase\Mysql\CI_DB_mysqli_driver;
use PHPUnit\Framework\TestCase;

/**
 * 
 */
class CI_DB_driverTest extends TestCase
{
    /**
     * 
     */
    public function testMysqlDriver()
    {
        $cofig = \Bootstrap::getConfig();
        var_dump($cofig);
        $baseDatos = new CI_DB_mysqli_driver($cofig);
        $baseDatos->reconnect();
        $baseDatos->version();
        $this->assertTrue(true);
    }
}