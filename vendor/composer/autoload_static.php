<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite0f3088d75634ebc35803c60cd009bf7
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite0f3088d75634ebc35803c60cd009bf7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite0f3088d75634ebc35803c60cd009bf7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
