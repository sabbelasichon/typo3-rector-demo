<?php

declare(strict_types=1);

namespace Ssch\LegacyExtension\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * This file is part of the "https://github.com/sabbelasichon/typo3-rector-demo".
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

final class LegacyModelEntity extends AbstractEntity
{
    /**
     * @var string
     * @validate NotEmpty
     * @validate StringLength(minimum=0, maximum=255)
     */
    protected $title;

    /**
     * LegacyModelEntity constructor.
     *
     * @param string $title
     */
    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}
