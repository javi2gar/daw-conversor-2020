<?php

namespace Src;

require_once './src/Conversor.php';

use PHPUnit\Framework\TestCase;

class ConversorTest extends TestCase
{
    public function testEurosADolares()
    {
        $conversor = new Conversor();
        $this->assertEquals($conversor->eurosADolares(1, 1.0835), 1.0835);
    }
}
