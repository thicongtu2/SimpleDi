<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf73a8cfff06b8c7cae9cd8eb974052f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SimpleDi\\' => 9,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Lexer\\' => 22,
            'Doctrine\\Common\\Annotations\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SimpleDi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/SimpleDi',
        ),
        'Doctrine\\Common\\Lexer\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/lexer/lib/Doctrine/Common/Lexer',
        ),
        'Doctrine\\Common\\Annotations\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf73a8cfff06b8c7cae9cd8eb974052f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf73a8cfff06b8c7cae9cd8eb974052f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}