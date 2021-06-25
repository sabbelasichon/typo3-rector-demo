<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Rector\Renaming\Rector\Name\RenameClassRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;


return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::PATHS, [__DIR__.'/packages/legacy_extension/Classes/ViewHelpers']);

    $services = $containerConfigurator->services();
    $services->set(RenameClassRector::class)
        ->call('configure', [[
            RenameClassRector::OLD_TO_NEW_CLASSES => [
                'TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper' => 'TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper'
            ],
        ],
    ]);
};
