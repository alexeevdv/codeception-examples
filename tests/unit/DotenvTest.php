<?php

use Codeception\Test\Unit;

final class DotenvTest extends Unit
{
    public function testVariableIsAccessibleWithEnv(): void
    {
        self::assertSame('MY_VALUE', $_ENV['MY_VARIABLE']);
    }

    public function testVariableIsAccessibleWithGetenv(): void
    {
        self::assertSame('MY_VALUE', getenv('MY_VARIABLE'));
    }
}
