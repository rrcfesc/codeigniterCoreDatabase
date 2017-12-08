<?php
/**
 * Rioxygen
 * @copyright Copyright (c) 2018 Rioxygen. (http://www.Rioxygen.com/)
 * @license  BSD 3-clause "New" or "Revised" License 
 */
namespace Rioxygen\CiCoreDatabase;

use Rioxygen\CiCoreDatabase\Mysql\CI_DB_mysqli_driver;

/**
 * 
 */
class CI_DB_driverTest extends \PHPUnit_Framework_TestCase
{
    /**
     * 
     */
    public function testMysqlDriver()
    {
        $cofig = \Bootstrap::getConfig();
        $baseDatos = new CI_DB_mysqli_driver($cofig);
        $this->assertTrue(true);
    }
}