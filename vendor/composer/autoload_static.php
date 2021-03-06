<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6ce55d62c79394f1994b06047e0e95f2
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Radionovel\\ArchiveStream\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Radionovel\\ArchiveStream\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6ce55d62c79394f1994b06047e0e95f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6ce55d62c79394f1994b06047e0e95f2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
