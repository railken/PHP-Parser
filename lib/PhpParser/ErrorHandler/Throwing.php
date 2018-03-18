<?php declare(strict_types=1);

namespace PhpParser\V4\ErrorHandler;

use PhpParser\V4\Error;
use PhpParser\V4\ErrorHandler;

/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements ErrorHandler
{
    public function handleError(Error $error) {
        throw $error;
    }
}
