<?php
declare(strict_types=1);


namespace Ssch\LegacyExtension\Controller;

use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * This file is part of the "https://github.com/sabbelasichon/typo3-rector-demo".
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */


final class BackendController extends ActionController
{
    public function singleAction(): void
    {
        $pathToFile = PATH_site . '/foo/bar/baz.txt';
    }
}