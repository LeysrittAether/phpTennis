<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use PHPUnit\Framework\TestCase;

final class RomanNumeralsTest extends TestCase
{
    /**
     * @test
     */
    public function si_es_1_devuelve_I()
    {
        // Preparación
        $romanNumerals = new RomanNumerals();

        // Ejecución

        // Comprobación
        $this->assertEquals("I", $romanNumerals->say(1));
    }
}