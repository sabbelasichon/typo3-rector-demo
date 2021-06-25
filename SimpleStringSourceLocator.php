<?php

declare(strict_types=1);

use PHPStan\BetterReflection\Identifier\Identifier;
use PHPStan\BetterReflection\Identifier\IdentifierType;
use PHPStan\BetterReflection\Reflector\Reflector;

/**
 * Inspired from \PHPStan\BetterReflection\SourceLocator\Type\StringSourceLocator
 */
final class SimpleStringSourceLocator implements \PHPStan\BetterReflection\SourceLocator\Type\SourceLocator
{
    public function locateIdentifier(Reflector $reflector, Identifier $identifier): ?\PHPStan\BetterReflection\Reflection\Reflection
    {
        if ($identifier->getName() !== 'TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper') {
            return null;
        }

        return \PHPStan\BetterReflection\Reflection\ReflectionClass::createFromName(self::class);
    }

    public function locateIdentifiersByType(Reflector $reflector, IdentifierType $identifierType): array
    {
        return [];
    }
}