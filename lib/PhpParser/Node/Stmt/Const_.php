<?php declare(strict_types=1);

namespace PhpParser\V4\Node\Stmt;

use PhpParser\V4\Node;

class Const_ extends Node\Stmt
{
    /** @var Node\Const_[] Constant declarations */
    public $consts;

    /**
     * Constructs a const list node.
     *
     * @param Node\Const_[] $consts     Constant declarations
     * @param array         $attributes Additional attributes
     */
    public function __construct(array $consts, array $attributes = []) {
        parent::__construct($attributes);
        $this->consts = $consts;
    }

    public function getSubNodeNames() : array {
        return ['consts'];
    }
    
    public function getType() : string {
        return 'Stmt_Const';
    }
}
