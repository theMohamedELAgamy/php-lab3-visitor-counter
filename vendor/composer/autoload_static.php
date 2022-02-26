<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf3816076ab783b461a8deef337c54961
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'counter' => __DIR__ . '/../..' . '/model/counter.php',
        'visitor' => __DIR__ . '/../..' . '/model/visitor.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitf3816076ab783b461a8deef337c54961::$classMap;

        }, null, ClassLoader::class);
    }
}
