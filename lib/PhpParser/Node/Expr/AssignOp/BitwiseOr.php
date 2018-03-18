<?php declare(strict_types=1);

namespace PhpParser\V4\Node\Expr\AssignOp;

use PhpParser\V4\Node\Expr\AssignOp;

class BitwiseOr extends AssignOp
{
    public function getType() : string {
        return 'Expr_AssignOp_BitwiseOr';
    }
}
