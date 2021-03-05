<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    public function testExample(): void
    {
        $this->assertEquals(true, false);
    }

    public function testExample2(): void
    {
        $this->assertEquals(1, 1);
    }
}
