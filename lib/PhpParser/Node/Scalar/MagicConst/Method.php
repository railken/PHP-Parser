<?php declare(strict_types=1);

namespace PhpParser\V4\Node\Scalar\MagicConst;

use PhpParser\V4\Node\Scalar\MagicConst;

class Method extends MagicConst
{
    public function getName() : string {
        return '__METHOD__';
    }
    
    public function getType() : string {
        return 'Scalar_MagicConst_Method';
    }
}
