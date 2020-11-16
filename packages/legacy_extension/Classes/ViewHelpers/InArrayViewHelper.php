<?php
declare(strict_types=1);


namespace Ssch\LegacyExtension\ViewHelpers;

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * This file is part of the "https://github.com/sabbelasichon/typo3-rector-demo".
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */
final class InArrayViewHelper extends AbstractViewHelper
{
    /**
     * @param mixed $valueToCheckAgainst
     * @param array $arrayToCheckAgainst
     *
     * @return bool
     */
    public function render($valueToCheckAgainst, array $arrayToCheckAgainst)
    {
        foreach ($arrayToCheckAgainst as $item) {
            if ($item === $valueToCheckAgainst) {
                return true;
            }
        }

        return false;
    }
}