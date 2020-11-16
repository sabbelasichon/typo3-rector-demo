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

final class LegacyViewHelper extends AbstractViewHelper
{
    /**
     * @param mixed $value The value to output
     * @return string
     */
    public function render($value = null)
    {
        if ($value === null) {
            $value =  $this->renderChildren();
        }

        // remove new line - does not matter in html anyway
        $value = str_replace(chr(10), '', $value);
        // remove multiple whitespaces
        $value = preg_replace('#\s+#', ' ', $value);
        return trim($value);
    }
}