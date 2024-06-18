<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit631c909dcc2c9366808d25bfd1554764
{
    public static $files = array (
        'b6a14ba6920d983f3d2e9c47e165bc6e' => __DIR__ . '/../..' . '/app/helper.php',
    );

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
            $loader->prefixLengthsPsr4 = ComposerStaticInit631c909dcc2c9366808d25bfd1554764::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit631c909dcc2c9366808d25bfd1554764::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit631c909dcc2c9366808d25bfd1554764::$classMap;

        }, null, ClassLoader::class);
    }
}
