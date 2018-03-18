<?php declare(strict_types=1);

namespace PhpParser\V4\Node\Scalar\MagicConst;

use PhpParser\V4\Node\Scalar\MagicConst;

class Trait_ extends MagicConst
{
    public function getName() : string {
        return '__TRAIT__';
    }
    
    public function getType() : string {
        return 'Scalar_MagicConst_Trait';
    }
}
