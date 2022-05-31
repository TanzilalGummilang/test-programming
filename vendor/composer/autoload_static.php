<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4f81f0d50e103f32a73ba38d571567eb
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TanzilalGummilang\\PHP\\LoginManagement\\' => 38,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TanzilalGummilang\\PHP\\LoginManagement\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4f81f0d50e103f32a73ba38d571567eb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4f81f0d50e103f32a73ba38d571567eb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4f81f0d50e103f32a73ba38d571567eb::$classMap;

        }, null, ClassLoader::class);
    }
}
