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

    /**
     * @test
     */
    public function si_es_2_devuelve_II()
    {
        // Preparación
        $romanNumerals = new RomanNumerals();

        // Ejecución

        // Comprobación
        $this->assertEquals("II", $romanNumerals->say(2));
    }

    /**
     * @test
     */
    public function si_es_3_devuelve_III()
    {
        // Preparación
        $romanNumerals = new RomanNumerals();

        // Ejecución

        // Comprobación
        $this->assertEquals("III", $romanNumerals->say(3));
    }
}