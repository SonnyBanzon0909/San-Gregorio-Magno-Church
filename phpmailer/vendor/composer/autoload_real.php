<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit8d0305a52f752d3a51c60f027bb5fd91
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

        spl_autoload_register(array('ComposerAutoloaderInit8d0305a52f752d3a51c60f027bb5fd91', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit8d0305a52f752d3a51c60f027bb5fd91', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit8d0305a52f752d3a51c60f027bb5fd91::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
