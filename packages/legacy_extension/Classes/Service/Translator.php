<?php
declare(strict_types=1);


namespace Ssch\LegacyExtension\Service;


final class Translator implements TranslatorInterface
{
    public function translate(string $label): string
    {
        return $label;
    }
}