<?php
declare(strict_types=1);


namespace Ssch\LegacyExtension\Service;


use TYPO3\CMS\Core\Utility\StringUtility;

final class MyService
{
    /**
     * @var string
     */
    private const FOO = 'foo';

    public function removeFooFromTheBeginningOfTheStringCaseInsensitive(string $string): string
    {
        if(StringUtility::beginsWith(strtolower($string), self::FOO)) {
            return substr($string, strlen(self::FOO));
        }

        return $string;
    }
}