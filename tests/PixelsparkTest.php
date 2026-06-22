<?php
/**
 * Tests for PixelSpark
 */

use PHPUnit\Framework\TestCase;
use Pixelspark\Pixelspark;

class PixelsparkTest extends TestCase {
    private Pixelspark $instance;

    protected function setUp(): void {
        $this->instance = new Pixelspark(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Pixelspark::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
