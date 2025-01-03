<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8cdbdedc58f26f1b07da881027f54562
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Spatie\\LaravelPackageTools\\' => 27,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Container\\' => 14,
        ),
        'L' => 
        array (
            'Laranex\\LaravelBiometricAuth\\Database\\Factories\\' => 48,
            'Laranex\\LaravelBiometricAuth\\' => 29,
        ),
        'I' => 
        array (
            'Illuminate\\Contracts\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Spatie\\LaravelPackageTools\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/laravel-package-tools/src',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Laranex\\LaravelBiometricAuth\\Database\\Factories\\' => 
        array (
            0 => __DIR__ . '/..' . '/laranex/laravel-biometric-auth/database/factories',
        ),
        'Laranex\\LaravelBiometricAuth\\' => 
        array (
            0 => __DIR__ . '/..' . '/laranex/laravel-biometric-auth/src',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8cdbdedc58f26f1b07da881027f54562::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8cdbdedc58f26f1b07da881027f54562::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8cdbdedc58f26f1b07da881027f54562::$classMap;

        }, null, ClassLoader::class);
    }
}
