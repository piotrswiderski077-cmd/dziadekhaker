<?php

use PHPunit\Framework\TestCase;

require_once 'heg.php';

final class DsfTest extends TestCase
{
    public function testHello(): void
    {
        $input = 'cwelkubapiotrussiemango';
        $result = hello($input);
        $this->assertEquals("Hello, cwelkubapiotrussiemango!", $result);
    }
}