<?php
/**
 * Rioxygen
 * @copyright Copyright (c) 2018 Rioxygen. (http://www.Rioxygen.com/)
 * @license  BSD 3-clause "New" or "Revised" License 
 */

/**
 * Clase para el cargado de clases
 * @package \
 * @author Ricardo Ruiz <ricardojesus.ruizcruz@gmail.com>
 */
class Bootstrap
{
    /**
     * <p>Comando para levantar el autoloader</p>
     */
    static public function go()
    {
        // Make everything relative to the root
        chdir(dirname(__DIR__));
        // Setup autoloading
        require_once( __DIR__ . '/vendor/autoload.php' );
    }
    /**
     * Carga Archivo de Configuración
     * en la seccion de Pruebas.
     */
    static public function getConfig()
    {
        if(file_exists(__DIR__.'/config/local.php')){
            return include __DIR__.'/config/local.php';
        }
        return include __DIR__.'/config/production.php';
    }
}
Bootstrap::go();