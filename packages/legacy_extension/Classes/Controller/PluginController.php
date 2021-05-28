<?php

declare(strict_types=1);

namespace Ssch\LegacyExtension\Controller;

use Ssch\LegacyExtension\Domain\Model\LegacyModelEntity;
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
    public function someAction(): void
    {
        $logManager = GeneralUtility::makeInstance('TYPO3\CMS\Core\Log\LogManager');
        $this->view->assign('isLoggedIn', $this->getTypoScriptFrontendController()->loginUser);
        $this->view->assign('inDevelopmentMode', GeneralUtility::getApplicationContext()->isDevelopment());
        $this->view->assign('language', $GLOBALS['TSFE']->sys_language_uid);

        $this->getTypoScriptFrontendController()->sys_page->getDomainStartPage('dd');
        $this->getTypoScriptFrontendController()->tmpl->getFileName('file.foo');

        $pageRenderer = GeneralUtility::makeInstance(PageRenderer::class);
        $pageRenderer->addMetaTag(
            '<meta name="keywords" content="seo, search engine optimisation, search engine optimization, search engine ranking">'
        );
    }

    public function fooAction(LegacyModelEntity $entity = null)
    {
        if (is_null($entity)) {
            $GLOBALS['TSFE']->pageNotFoundAndExit('LegacyModelEntity not found.');
        }
    }

    private function getTypoScriptFrontendController(): TypoScriptFrontendController
    {
        return $GLOBALS['TSFE'];
    }
}
