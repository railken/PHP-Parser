<?php declare(strict_types=1);

namespace PhpParser\V4\Node\Scalar\MagicConst;

use PhpParser\V4\Node\Scalar\MagicConst;

class Class_ extends MagicConst
{
    public function getName() : string {
        return '__CLASS__';
    }
    
    public function getType() : string {
        return 'Scalar_MagicConst_Class';
    }
}
