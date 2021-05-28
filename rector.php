<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Rector\Laravel\Set\LaravelSetList;
use Rector\Php74\Rector\Property\TypedPropertyRector;
use Ssch\CustomRectors\FileProcessor\Rector\RemoveDefaultFieldsFromExtTablesSqlRector;
use Ssch\CustomRectors\FileProcessor\SqlProcessor;
use Ssch\CustomRectors\Fluid\RenderFlashMessagesFluidRector;
use Ssch\TYPO3Rector\Configuration\Typo3Option;
use Rector\Core\ValueObject\PhpVersion;
use Rector\PostRector\Rector\NameImportingPostRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Ssch\TYPO3Rector\Set\Typo3SetList;
use Ssch\TYPO3Rector\Rector\v9\v0\InjectAnnotationRector;
use Rector\Php55\Rector\String_\StringClassNameToClassConstantRector;

return static function (ContainerConfigurator $containerConfigurator): void {
    // get parameters
    $parameters = $containerConfigurator->parameters();

    $containerConfigurator->import(Typo3SetList::TYPOSCRIPT_CONDITIONS_95);
    $containerConfigurator->import(Typo3SetList::TYPOSCRIPT_CONDITIONS_104);
//    $containerConfigurator->import(Typo3SetList::COMPOSER_PACKAGES_104_EXTENSIONS);
//    $containerConfigurator->import(LaravelSetList::LARAVEL_51);
//    $containerConfigurator->import(LaravelSetList::LARAVEL_52);
//    $containerConfigurator->import(LaravelSetList::LARAVEL_53);
//    $containerConfigurator->import(LaravelSetList::LARAVEL_54);
//    $containerConfigurator->import(Typo3SetList::TYPO3_95);
//    $containerConfigurator->import(Typo3SetList::TYPO3_104);
//    $containerConfigurator->import(Typo3SetList::TYPO3_11);

    // In order to have a better analysis from phpstan we teach it here some more things
    $parameters->set(Option::PHPSTAN_FOR_RECTOR_PATH, Typo3Option::PHPSTAN_FOR_RECTOR_PATH);

    // FQN classes are not imported by default. If you don't do it manually after every Rector run, enable it by:
    $parameters->set(Option::AUTO_IMPORT_NAMES, true);

    // this will not import root namespace classes, like \DateTime or \Exception
    $parameters->set(Option::IMPORT_SHORT_CLASSES, false);

    // this will not import classes used in PHP DocBlocks, like in /** @var \Some\Class */
    $parameters->set(Option::IMPORT_DOC_BLOCKS, false);

    // Define your target version which you want to support
    $parameters->set(Option::PHP_VERSION_FEATURES, PhpVersion::PHP_74);

    // If you have an editorconfig and changed files should keep their format enable it here
    // $parameters->set(Option::ENABLE_EDITORCONFIG, true);

    // If you only want to process one/some TYPO3 extension(s), you can specify its path(s) here.
    // If you use the option --config change __DIR__ to getcwd()
     $parameters->set(Option::PATHS, [
        __DIR__ . '/packages/legacy_extension/',
     ]);

    // If you set option Option::AUTO_IMPORT_NAMES to true, you should consider excluding some TYPO3 files.
    // If you use the option --config change __DIR__ to getcwd()
    $parameters->set(Option::SKIP,
        [
            __DIR__ .'/packages/legacy_extension/Resources/Php/',
            NameImportingPostRector::class => [
                'ClassAliasMap.php',
                'ext_localconf.php',
                'ext_emconf.php',
                'ext_tables.php',
                __DIR__.'/**/Configuration/TCA/*',
                __DIR__.'/**/Configuration/RequestMiddlewares.php',
                __DIR__.'/**/Configuration/Commands.php',
                __DIR__.'/**/Configuration/AjaxRoutes.php',
                __DIR__.'/**/Configuration/Extbase/Persistence/Classes.php',
            ],
        ]);

    // If you have trouble that rector cannot run because some TYPO3 constants are not defined add an additional constants file
    // Have a look at https://github.com/sabbelasichon/typo3-rector/blob/master/typo3.constants.php
    // $parameters->set(Option::AUTOLOAD_PATHS, [
    //    __DIR__ . '/typo3.constants.php'
    // ]);

    // get services (needed for register a single rule)
     $services = $containerConfigurator->services();
     $services->set(SqlProcessor::class);
     $services->set(RemoveDefaultFieldsFromExtTablesSqlRector::class);

     $services->set(StringClassNameToClassConstantRector::class);

    // register a single rule
//    $services->set(InjectAnnotationRector::class);

    /**
     * Useful rule from RectorPHP itself to transform i.e. GeneralUtility::makeInstance('TYPO3\CMS\Core\Log\LogManager') to GeneralUtility::makeInstance(\TYPO3\CMS\Core\Log\LogManager::class) calls.
     * But be warned, sometimes it produces false positives (edge cases), so watch out
     */
//     $services->set(RenderFlashMessagesFluidRector::class)->call('configure', [[
//         RenderFlashMessagesFluidRector::MY_NEW_TYPE => 'class'
//     ]]);


    // Optional non-php file functionalities:
    // More info here: https://github.com/sabbelasichon/typo3-rector/blob/main/docs/beyond_php_file_processors.md

    // Adapt your composer.json dependencies to the latest available version for the defined SetList
    // $containerConfigurator->import(Typo3SetList::COMPOSER_PACKAGES_104_CORE);
    // $containerConfigurator->import(Typo3SetList::COMPOSER_PACKAGES_104_EXTENSIONS);

    // Rewrite your extbase persistence class mapping from typoscript into php according to official docs.
    // This processor will create a summarized file with all of the typoscript rewrites combined into a single file.
    // The filename can be passed as argument, "Configuration_Extbase_Persistence_Classes.php" is default.
    // $services = $containerConfigurator->services();
    // $services->set(ExtbasePersistenceVisitor::class);
};
