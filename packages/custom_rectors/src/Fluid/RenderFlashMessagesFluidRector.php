<?php
declare(strict_types=1);

namespace Ssch\CustomRectors\Fluid;

use Rector\Core\Contract\Rector\ConfigurableRectorInterface;
use Rector\Core\ValueObject\Application\File;
use RectorPrefix20210527\Nette\Utils\Strings;
use Ssch\TYPO3Rector\Contract\FileProcessor\Fluid\Rector\FluidRectorInterface;
use Symplify\RuleDocGenerator\ValueObject\AbstractCodeSample;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

final class RenderFlashMessagesFluidRector implements FluidRectorInterface, ConfigurableRectorInterface
{

    /**
     * @var string
     */
    private $myNewFlashMessageType = '';

    /**
     * @var string
     */
    public const MY_NEW_TYPE = 'my-new-type';

    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition('Remove renderMode="div" from flashMessage Viewhelper', [
            new CodeSample(<<<'CODE_SAMPLE'

CODE_SAMPLE
                , <<<'CODE_SAMPLE'
CODE_SAMPLE
            ),
        ]);
    }

    public function transform(File $file): void
    {
        $content = $file->getFileContent();

        if(!Strings::contains($content, 'flashMessages renderMode="div"')) {
            return;
        }

        $newContent = str_replace('renderMode="div"', $this->myNewFlashMessageType, $content);

        $file->changeFileContent($newContent);
    }

    public function configure(array $configuration): void
    {
        $this->myNewFlashMessageType = $configuration[self::MY_NEW_TYPE] ?? '';
    }
}