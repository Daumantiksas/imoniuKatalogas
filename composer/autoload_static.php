<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf11c2bf1b7afc76a20ba5c67b84cfe9
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'ToDo\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ToDo\\' => 
        array (
            0 => __DIR__ . '/../www' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf11c2bf1b7afc76a20ba5c67b84cfe9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf11c2bf1b7afc76a20ba5c67b84cfe9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}