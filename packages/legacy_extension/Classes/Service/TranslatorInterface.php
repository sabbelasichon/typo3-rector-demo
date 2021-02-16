<?php


namespace Ssch\LegacyExtension\Service;


interface TranslatorInterface
{
    public function translate(string $label): string;
}