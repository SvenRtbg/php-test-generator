<?php declare(strict_types = 1);

use PHPUnit\Framework\TestCase;

/**
 * @covers A
 */
class ATest extends TestCase
{
    /** @var A */
    private $a;

    /** @var ClassA | PHPUnit_Framework_MockObject_MockObject */
    private $classA;

    protected function setUp()
    {
        $this->classA = $this->createMock(ClassA::class);
        $this->a = new A(
            $this->classA
        );
    }

    public function testMissing()
    {
        $this->fail('Test not yet implemented');
    }
}
