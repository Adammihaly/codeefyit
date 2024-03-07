<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfb5d8245f27a654fdaeb2ad3c809fa22
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitfb5d8245f27a654fdaeb2ad3c809fa22', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfb5d8245f27a654fdaeb2ad3c809fa22', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfb5d8245f27a654fdaeb2ad3c809fa22::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
