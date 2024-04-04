<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitce00d7f8ee42bd7c2ba1ec1bcedf1941
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

        spl_autoload_register(array('ComposerAutoloaderInitce00d7f8ee42bd7c2ba1ec1bcedf1941', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitce00d7f8ee42bd7c2ba1ec1bcedf1941', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitce00d7f8ee42bd7c2ba1ec1bcedf1941::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
