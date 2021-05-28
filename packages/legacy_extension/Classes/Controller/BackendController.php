<?php

declare(strict_types=1);

namespace Ssch\LegacyExtension\Controller;

use Ssch\LegacyExtension\Service\TranslatorInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;

/**
 * This file is part of the "https://github.com/sabbelasichon/typo3-rector-demo".
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */


final class BackendController extends ActionController
{
    /**
     * Hier steht
     * @var \Ssch\LegacyExtension\Service\MyService
     * @var string
     * @inject
     */
    protected $inject;

    /**
     * @var TranslatorInterface
     */
    private $translator;

    public function injectTranslator(TranslatorInterface $translator): void
    {
        $this->translator = $translator;
    }

    public function singleAction(): void
    {
        /** @noRector  */
        $logManager = GeneralUtility::makeInstance('TYPO3\CMS\Core\Log\LogManager');

        $pathToFile = PATH_site . 'foo/bar/baz.txt';
        $this->translator->translate('LLL:EXT:legacy_extension/Resources/Private/Language/locallang.xlf:search-text');
    }
}
