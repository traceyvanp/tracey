<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita1e73b8b2dd1e7cbe8142d8e0d191082
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita1e73b8b2dd1e7cbe8142d8e0d191082::$classMap;

        }, null, ClassLoader::class);
    }
}
