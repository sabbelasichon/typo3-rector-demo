<?php
declare(strict_types=1);

namespace Ssch\CustomRectors\FileProcessor\Rector;

use Rector\Core\Contract\Rector\RectorInterface;
use Rector\Core\ValueObject\Application\File;

interface SqlRectorInterface extends RectorInterface
{
    public function transform(File $file): void;
}