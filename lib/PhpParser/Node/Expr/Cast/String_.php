<?php declare(strict_types=1);

namespace PhpParser\V4\Node\Expr\Cast;

use PhpParser\V4\Node\Expr\Cast;

class String_ extends Cast
{
    public function getType() : string {
        return 'Expr_Cast_String';
    }
}
