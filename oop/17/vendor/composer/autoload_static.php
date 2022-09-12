<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb45b0b508067619036e7d35bcb37250
{
    public static $prefixLengthsPsr4 = array (
        'v' => 
        array (
            'vproger\\' => 8,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'vproger\\' => 
        array (
            0 => __DIR__ . '/..' . '/vproger',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbb45b0b508067619036e7d35bcb37250::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbb45b0b508067619036e7d35bcb37250::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbb45b0b508067619036e7d35bcb37250::$classMap;

        }, null, ClassLoader::class);
    }
}