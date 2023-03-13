<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit84d30158939b3eda39c9191f1ef26bc3
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit84d30158939b3eda39c9191f1ef26bc3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit84d30158939b3eda39c9191f1ef26bc3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit84d30158939b3eda39c9191f1ef26bc3::$classMap;

        }, null, ClassLoader::class);
    }
}
