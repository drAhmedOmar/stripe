<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite6b8a5bd06ba52eb1ceb9476a93acad1
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite6b8a5bd06ba52eb1ceb9476a93acad1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite6b8a5bd06ba52eb1ceb9476a93acad1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
