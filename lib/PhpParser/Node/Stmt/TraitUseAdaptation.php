<?php declare(strict_types=1);

namespace PhpParser\V4\Node\Stmt;

use PhpParser\V4\Node;

abstract class TraitUseAdaptation extends Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
