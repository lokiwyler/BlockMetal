<?php
/**
 * Tests for BlockMetal
 */

use PHPUnit\Framework\TestCase;
use Blockmetal\Blockmetal;

class BlockmetalTest extends TestCase {
    private Blockmetal $instance;

    protected function setUp(): void {
        $this->instance = new Blockmetal(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockmetal::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
