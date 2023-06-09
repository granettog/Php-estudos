<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit393a28cefda41b0f9fa9fae117f9b1b8
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Granettog\\ComposerAlura\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Granettog\\ComposerAlura\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit393a28cefda41b0f9fa9fae117f9b1b8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit393a28cefda41b0f9fa9fae117f9b1b8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit393a28cefda41b0f9fa9fae117f9b1b8::$classMap;

        }, null, ClassLoader::class);
    }
}
