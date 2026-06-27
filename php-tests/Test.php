<?php
use PHPUnit\Framework\TestCase;

class Test extends TestCase {
    public function testArrayCount() {
        $data = [1, 2, 3];
        $this->assertCount(3, $data);
    }
}
