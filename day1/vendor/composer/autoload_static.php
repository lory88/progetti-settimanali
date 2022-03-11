<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit05cb68aacbb4f535b468552702c54fff
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'L' => 
        array (
            'Loredana\\Day1\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Loredana\\Day1\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit05cb68aacbb4f535b468552702c54fff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit05cb68aacbb4f535b468552702c54fff::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit05cb68aacbb4f535b468552702c54fff::$classMap;

        }, null, ClassLoader::class);
    }
}
