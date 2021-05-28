<?php
declare(strict_types=1);


namespace Ssch\CustomRectors\Rector;


use PhpParser\Node;
use PhpParser\Node\Expr\StaticCall;
use PHPStan\Type\ObjectType;
use Rector\Core\Rector\AbstractRector;
use Rector\Core\ValueObject\PhpVersion;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;
use TYPO3\CMS\Core\Utility\StringUtility;

final class ExampleRector extends AbstractRector
{

    public function getNodeTypes(): array
    {
        return [StaticCall::class];
    }

    /**
     * @param StaticCall $node
     */
    public function refactor(Node $node): ?Node
    {
        if(!$this->isAtLeastPhpVersion(PhpVersion::PHP_80)) {
            return null;
        }

        if ( ! $this->nodeTypeResolver->isMethodStaticCallOrClassMethodObjectType($node, new ObjectType(StringUtility::class))) {
            return null;
        }

        if ( ! $this->isName($node->name, 'beginsWith')) {
            return null;
        }

        return $this->nodeFactory->createFuncCall('str_starts_with', $node->args);
    }

    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition('StringUtility::beginsWith to str_starts_with', [
            new CodeSample(<<<'CODE_SAMPLE'
StringUtility::beginsWith('nevercodealone', 'never');
CODE_SAMPLE
                , <<<'CODE_SAMPLE'
str_starts_with('nevercodealone', 'never');
CODE_SAMPLE
            ),
        ]);
    }
}