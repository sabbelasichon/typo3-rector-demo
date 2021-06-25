<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Rector\Renaming\Rector\Name\RenameClassRector;
use Ssch\TYPO3Rector\Rector\Migrations\RenameClassMapAliasRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;


return static function (ContainerConfigurator $containerConfigurator): void {

    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::PATHS, [__DIR__.'/packages/legacy_extension/Classes/ViewHelpers']);


    $services = $containerConfigurator->services();
    $services->set(RenameClassMapAliasRector::class)
        ->call('configure', [[
            RenameClassMapAliasRector::CLASS_ALIAS_MAPS => [
                __DIR__ . '/some_array.php'
            ]]
        ]);

//    $services = $containerConfigurator->services();

//    $containerConfigurator->import(\Ssch\TYPO3Rector\Set\Typo3SetList::TYPO3_95);
//
//    $services->set('rename_class_alias_maps_version_95')
//        ->class(\Ssch\TYPO3Rector\Rector\Migrations\RenameClassMapAliasRector::class)
//        ->call('configure', [[
//            \Ssch\TYPO3Rector\Rector\Migrations\RenameClassMapAliasRector::CLASS_ALIAS_MAPS => [
//                __DIR__.'/vendor/rector/rector/vendor/ssch/typo3-rector/Migrations/TYPO3/9.5/typo3/sysext/fluid/Migrations/Code/ClassAliasMap.php',
//            ],
//        ],
//    ]);
};
