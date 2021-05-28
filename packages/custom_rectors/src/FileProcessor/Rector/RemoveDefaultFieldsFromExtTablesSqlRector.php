<?php
declare(strict_types=1);

namespace Ssch\CustomRectors\FileProcessor\Rector;

use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;
use Rector\Core\ValueObject\Application\File;

final class RemoveDefaultFieldsFromExtTablesSqlRector implements SqlRectorInterface
{
    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition('Remove all default fields in ext_tables.sql', [
            new CodeSample(<<<'CODE_SAMPLE'
uid int(11) unsigned,
CODE_SAMPLE
                , <<<'CODE_SAMPLE'
CODE_SAMPLE
            ),
        ]);
    }

    public function transform(File $file): void
    {
        if(false === strpos($file->getFileContent(), 'uid int(11) unsigned')) {
            return;
        }

        $content = $file->getFileContent();
        $newContent = str_replace('uid int(11) unsigned,', '', $content);
        $file->changeFileContent($newContent);
    }
}