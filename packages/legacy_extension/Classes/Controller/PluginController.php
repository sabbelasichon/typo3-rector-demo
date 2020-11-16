<?php
declare(strict_types=1);


namespace Ssch\LegacyExtension\Controller;

use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController;

/**
 * This file is part of the "https://github.com/sabbelasichon/typo3-rector-demo".
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */


final class PluginController extends ActionController
{
    public function singleAction(): void
    {
        $this->view->assign('isLoggedIn', $this->getTypoScriptFrontendController()->loginUser);

        if(GeneralUtility::getApplicationContext()->isDevelopment()) {
            $this->view->assign('inDevelopmentMode', true);
        }

        $this->view->assign('language', $this->getTypoScriptFrontendController()->sys_language_uid);

        $pageRenderer = GeneralUtility::makeInstance(PageRenderer::class);
        $pageRenderer->addMetaTag('<meta name="keywords" content="seo, search engine optimisation, search engine optimization, search engine ranking">');
    }

    private function getTypoScriptFrontendController(): TypoScriptFrontendController
    {
        return $GLOBALS['TSFE'];
    }
}