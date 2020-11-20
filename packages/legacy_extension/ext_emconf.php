<?php

$isUserLoggedIn = $GLOBALS['TSFE']->sys_language_uid;

$EM_CONF['legacy_extension'] = [
    'title' => 'A demo extension to upgrade with typo3-rector',
    'description' => '',
    'category' => 'plugin',
    'author' => 'Sebastian Schreiber',
    'author_email' => 'sebastian.schreiber@ppw.de',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
