<?php declare(strict_types=1);

namespace PhpParser\V4\ErrorHandler;

use PhpParser\V4\Error;
use PHPUnit\Framework\TestCase;

class ThrowingTest extends TestCase
{
    /**
     * @expectedException \PhpParser\V4\Error
     * @expectedExceptionMessage Test
     */
    public function testHandleError() {
        $errorHandler = new Throwing();
        $errorHandler->handleError(new Error('Test'));
    }
}
