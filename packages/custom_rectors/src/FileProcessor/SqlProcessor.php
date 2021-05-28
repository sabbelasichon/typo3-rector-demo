<?php
declare(strict_types=1);

namespace Ssch\CustomRectors\FileProcessor;

use Rector\Core\Contract\Processor\FileProcessorInterface;
use Rector\Core\ValueObject\Application\File;
use Ssch\CustomRectors\FileProcessor\Rector\SqlRectorInterface;

final class SqlProcessor implements FileProcessorInterface
{

    /**
     * @var SqlRectorInterface[]
     */
    private $sqlRules;

    /**
     * @param SqlRectorInterface[] $sqlRules
     */
    public function __construct(array $sqlRules = [])
    {
        $this->sqlRules = $sqlRules;
    }

    public function supports(File $file): bool
    {
        return 'sql' === $file->getSmartFileInfo()->getExtension();
    }

    /**
     * @param File[] $files
     */
    public function process(array $files): void
    {
        foreach ($files as $file) {
            $this->processFile($file);
        }
    }

    public function getSupportedFileExtensions(): array
    {
        return ['sql'];
    }

    private function processFile(File $file): void
    {
        foreach ($this->sqlRules as $sqlRule) {
            $sqlRule->transform($file);
        }
    }
}