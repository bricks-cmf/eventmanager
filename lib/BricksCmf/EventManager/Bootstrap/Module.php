<?php

/** @copyright Sven Ullmann <kontakt@sumedia-webdesign.de> **/namespace BricksCmf\EventManager\Bootstrap;

use BricksFramework\Bootstrap\Module\AbstractModule;
use BricksCmf\EventManager\Bootstrap\Initializer\EventManagerInitializer;

class Module extends AbstractModule
{
    public function getInitializerClasses(): array
    {
        return [
            EventManagerInitializer::class
        ];
    }
}
