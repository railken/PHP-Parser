<?php declare(strict_types=1);

namespace PhpParser\V4\Node\Stmt;

use PhpParser\V4\Node;

class Break_ extends Node\Stmt
{
    /** @var null|Node\Expr Number of loops to break */
    public $num;

    /**
     * Constructs a break node.
     *
     * @param null|Node\Expr $num        Number of loops to break
     * @param array          $attributes Additional attributes
     */
    public function __construct(Node\Expr $num = null, array $attributes = []) {
        parent::__construct($attributes);
        $this->num = $num;
    }

    public function getSubNodeNames() : array {
        return ['num'];
    }
    
    public function getType() : string {
        return 'Stmt_Break';
    }
}
