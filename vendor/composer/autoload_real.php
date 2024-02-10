<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit09a5fe72e5c5e56b7afd6fd5d52b748a
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

        spl_autoload_register(array('ComposerAutoloaderInit09a5fe72e5c5e56b7afd6fd5d52b748a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit09a5fe72e5c5e56b7afd6fd5d52b748a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit09a5fe72e5c5e56b7afd6fd5d52b748a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}