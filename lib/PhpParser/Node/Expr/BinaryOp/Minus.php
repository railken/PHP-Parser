<?php declare(strict_types=1);

namespace PhpParser\V4\Node\Expr\BinaryOp;

use PhpParser\V4\Node\Expr\BinaryOp;

class Minus extends BinaryOp
{
    public function getOperatorSigil() : string {
        return '-';
    }
    
    public function getType() : string {
        return 'Expr_BinaryOp_Minus';
    }
}
