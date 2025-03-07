<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitada3b4f015de08ada2f7869e16686f4d
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

        spl_autoload_register(array('ComposerAutoloaderInitada3b4f015de08ada2f7869e16686f4d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitada3b4f015de08ada2f7869e16686f4d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitada3b4f015de08ada2f7869e16686f4d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
