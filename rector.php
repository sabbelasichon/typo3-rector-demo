<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Ssch\TYPO3Rector\Rector\Migrations\RenameClassMapAliasRector;
use Ssch\TYPO3Rector\Rector\v10\v0\UseControllerClassesInExtbasePluginsAndModulesRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    // get parameters
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::AUTO_IMPORT_NAMES, false);

    // Define what rule sets will be applied
//    $parameters->set(Option::SETS, [
//        Typo3SetList::TYPO3_87,
//        Typo3SetList::TYPO3_95,
//    ]);
    $services = $containerConfigurator->services();
    $services->set(UseControllerClassesInExtbasePluginsAndModulesRector::class);

    // get services (needed for register a single rule)


    // register a single rule
    // $services->set(TypedPropertyRector::class);

//    $parameters->set(Option::SKIP, [
//        NameImportingPostRector::class => [
//            // single file
//            __DIR__ . '/packages/*/ext_emconf.php',
//        ],
//    ]);
};
