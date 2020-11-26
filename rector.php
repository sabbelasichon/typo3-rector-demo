<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Ssch\TYPO3Rector\Set\Typo3SetList;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    // get parameters
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::AUTO_IMPORT_NAMES, false);
    $parameters->set(Option::SETS, [
        Typo3SetList::TCA_MIGRATION
    ]);

    $parameters->set(Option::PATHS, [__DIR__ . '/packages']);
};
