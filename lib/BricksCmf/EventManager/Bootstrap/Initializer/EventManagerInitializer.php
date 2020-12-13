<?php

/** @copyright Sven Ullmann <kontakt@sumedia-webdesign.de> **/namespace BricksCmf\EventManager\Bootstrap\Initializer;

use BricksCmf\EventManager\EventManager;
use BricksFramework\Bootstrap\BootstrapInterface;
use BricksFramework\Bootstrap\Initializer\AbstractInitializer;

class EventManagerInitializer extends AbstractInitializer
{
    public function initialize(BootstrapInterface $bootstrap): void
    {
        if (in_array(EventManager::SERVICE_NAME, $bootstrap->getServices())) {
            return;
        }

        $eventManager = $bootstrap->getInstance('BricksCmf\EventManager\EventManager');

        $bootstrap->setService(EventManager::SERVICE_NAME, $eventManager);
    }

    public function getPriority(): int
    {
        return -9600;
    }
}
