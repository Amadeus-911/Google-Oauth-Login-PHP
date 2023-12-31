<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit59c6179a85c7919cd453e20a4b06a1cf
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RedDot\\GoogleOauthLoginPhp\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RedDot\\GoogleOauthLoginPhp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit59c6179a85c7919cd453e20a4b06a1cf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit59c6179a85c7919cd453e20a4b06a1cf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit59c6179a85c7919cd453e20a4b06a1cf::$classMap;

        }, null, ClassLoader::class);
    }
}
