<?php

declare(strict_types=1);

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

if (! defined('TYPO3_MODE')) {
    die('Access denied.');
}

ExtensionUtility::configurePlugin(
    'Ssch.' . $_EXTKEY,
    'FooBarBaz',
    [
        'Plugin' => 'some',
    ],
    [
        'Plugin' => 'some',
    ]);

$GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] = unserialize(
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]
);
