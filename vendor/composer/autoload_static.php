<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfad0dde6cfd0d116212e70199fe980ec
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rleekg\\PayeerTradePhpSdk\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rleekg\\PayeerTradePhpSdk\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfad0dde6cfd0d116212e70199fe980ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfad0dde6cfd0d116212e70199fe980ec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfad0dde6cfd0d116212e70199fe980ec::$classMap;

        }, null, ClassLoader::class);
    }
}
