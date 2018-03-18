<?php declare(strict_types=1);

namespace PhpParser\V4\Node\Expr;

use PhpParser\V4\Node\Expr;

class Clone_ extends Expr
{
    /** @var Expr Expression */
    public $expr;

    /**
     * Constructs a clone node.
     *
     * @param Expr  $expr       Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(Expr $expr, array $attributes = []) {
        parent::__construct($attributes);
        $this->expr = $expr;
    }

    public function getSubNodeNames() : array {
        return ['expr'];
    }
    
    public function getType() : string {
        return 'Expr_Clone';
    }
}
