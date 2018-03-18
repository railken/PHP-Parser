<?php declare(strict_types=1);

namespace PhpParser\V4\Parser;

use PhpParser\V4\Lexer;
use PhpParser\V4\ParserTest;

require_once __DIR__ . '/../ParserTest.php';

class Php7Test extends ParserTest
{
    protected function getParser(Lexer $lexer) {
        return new Php7($lexer);
    }
}
