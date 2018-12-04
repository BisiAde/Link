<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit685ee89bdf0639f5c556b923c0b5405e
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Google\\Authenticator\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Google\\Authenticator\\' => 
        array (
            0 => __DIR__ . '/..' . '/sonata-project/google-authenticator/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit685ee89bdf0639f5c556b923c0b5405e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit685ee89bdf0639f5c556b923c0b5405e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
