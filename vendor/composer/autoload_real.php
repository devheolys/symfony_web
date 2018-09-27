<?php

// autoload_real.php @generated by Composer

<<<<<<< HEAD
class ComposerAutoloaderInit5198634f4e475a015bdda5dda366574a
=======
class ComposerAutoloaderInitfe08434be137a1e64a4fc9153699b98f
>>>>>>> f54da581bde2c986560b121ad2f1dc3f2a61cabb
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

<<<<<<< HEAD
        spl_autoload_register(array('ComposerAutoloaderInit5198634f4e475a015bdda5dda366574a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit5198634f4e475a015bdda5dda366574a', 'loadClassLoader'));
=======
        spl_autoload_register(array('ComposerAutoloaderInitfe08434be137a1e64a4fc9153699b98f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInitfe08434be137a1e64a4fc9153699b98f', 'loadClassLoader'));
>>>>>>> f54da581bde2c986560b121ad2f1dc3f2a61cabb

        $useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
        if ($useStaticLoader) {
            require_once __DIR__ . '/autoload_static.php';

<<<<<<< HEAD
            call_user_func(\Composer\Autoload\ComposerStaticInit5198634f4e475a015bdda5dda366574a::getInitializer($loader));
=======
            call_user_func(\Composer\Autoload\ComposerStaticInitfe08434be137a1e64a4fc9153699b98f::getInitializer($loader));
>>>>>>> f54da581bde2c986560b121ad2f1dc3f2a61cabb
        } else {
            $map = require __DIR__ . '/autoload_namespaces.php';
            foreach ($map as $namespace => $path) {
                $loader->set($namespace, $path);
            }

            $map = require __DIR__ . '/autoload_psr4.php';
            foreach ($map as $namespace => $path) {
                $loader->setPsr4($namespace, $path);
            }

            $classMap = require __DIR__ . '/autoload_classmap.php';
            if ($classMap) {
                $loader->addClassMap($classMap);
            }
        }

        $loader->register(true);

        if ($useStaticLoader) {
<<<<<<< HEAD
            $includeFiles = Composer\Autoload\ComposerStaticInit5198634f4e475a015bdda5dda366574a::$files;
=======
            $includeFiles = Composer\Autoload\ComposerStaticInitfe08434be137a1e64a4fc9153699b98f::$files;
>>>>>>> f54da581bde2c986560b121ad2f1dc3f2a61cabb
        } else {
            $includeFiles = require __DIR__ . '/autoload_files.php';
        }
        foreach ($includeFiles as $fileIdentifier => $file) {
<<<<<<< HEAD
            composerRequire5198634f4e475a015bdda5dda366574a($fileIdentifier, $file);
=======
            composerRequirefe08434be137a1e64a4fc9153699b98f($fileIdentifier, $file);
>>>>>>> f54da581bde2c986560b121ad2f1dc3f2a61cabb
        }

        return $loader;
    }
}

<<<<<<< HEAD
function composerRequire5198634f4e475a015bdda5dda366574a($fileIdentifier, $file)
=======
function composerRequirefe08434be137a1e64a4fc9153699b98f($fileIdentifier, $file)
>>>>>>> f54da581bde2c986560b121ad2f1dc3f2a61cabb
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        require $file;

        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
    }
}
