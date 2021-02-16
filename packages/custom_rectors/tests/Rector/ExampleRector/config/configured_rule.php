<?php

declare(strict_types=1);

use Ssch\CustomRectors\Rector\ExampleRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(__DIR__ . '/../../../../../../vendor/ssch/typo3-rector/config/services.php');

    $services = $containerConfigurator->services();
    $services->set(ExampleRector::class);
};
