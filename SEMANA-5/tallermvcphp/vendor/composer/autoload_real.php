<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc5e4dce38859cfa3fcdfe1c976dcf5f4
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

        spl_autoload_register(array('ComposerAutoloaderInitc5e4dce38859cfa3fcdfe1c976dcf5f4', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc5e4dce38859cfa3fcdfe1c976dcf5f4', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc5e4dce38859cfa3fcdfe1c976dcf5f4::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}