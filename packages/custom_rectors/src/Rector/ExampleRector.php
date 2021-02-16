<?php
declare(strict_types=1);


namespace Ssch\CustomRectors\Rector;


use PhpParser\Node;
use Rector\Core\Rector\AbstractRector;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

final class ExampleRector extends AbstractRector
{
    public function getNodeTypes(): array
    {
    }

    public function refactor(Node $node): ?Node
    {
    }

    public function getRuleDefinition(): RuleDefinition
    {
    }
}