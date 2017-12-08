<?php

/**
 * 
 */
class Bootstrap
{
    /**
     * 
     */
    static function go()
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