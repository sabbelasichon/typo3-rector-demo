<?php

declare(strict_types=1);

namespace Ssch\LegacyExtension\Domain\ValueObject;

/**
 * This file is part of the "https://github.com/sabbelasichon/typo3-rector-demo".
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */
final class MyValueObject
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    public function __construct(string $title, string $firstName, string $lastName)
    {
        $this->title = $title;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __toString()
    {
        return $this->title . ' ' . $this->firstName . ' ' . $this->lastName;
    }
}
