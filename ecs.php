<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\CodingStandard\Fixer\LineLength\LineLengthFixer;
use Symplify\EasyCodingStandard\ValueObject\Option;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();

    $parameters->set(Option::SETS, [
        SetList::PSR_12,
        SetList::COMMON,
    ]);

    $parameters->set(Option::PATHS, [
        __DIR__ . '/packages',
    ]);

    $services = $containerConfigurator->services();

    $services->set(LineLengthFixer::class);
    $services->set(YodaStyleFixer::class);
};
