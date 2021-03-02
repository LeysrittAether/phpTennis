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

    /**
     * @test
     */
    public function si_es_4_devuelve_IV()
    {
        // Preparación
        $romanNumerals = new RomanNumerals();

        // Ejecución

        // Comprobación
        $this->assertEquals("IV", $romanNumerals->say(4));
    }

    /**
     * @test
     */
    public function si_es_5_devuelve_V()
    {
        // Preparación
        $romanNumerals = new RomanNumerals();

        // Ejecución

        // Comprobación
        $this->assertEquals("V", $romanNumerals->say(5));
    }


    /**
     * @test
     */
    public function si_es_6_devuelve_VI()
    {
        // Preparación
        $romanNumerals = new RomanNumerals();

        // Ejecución

        // Comprobación
        $this->assertEquals("VI", $romanNumerals->say(6));
    }

    /**
     * @test
     */
    public function si_es_7_devuelve_VII()
    {
        // Preparación
        $romanNumerals = new RomanNumerals();

        // Ejecución

        // Comprobación
        $this->assertEquals("VII", $romanNumerals->say(7));
    }

    /**
     * @test
     */
    public function si_es_9_devuelve_IX()
    {
        // Preparación
        $romanNumerals = new RomanNumerals();

        // Ejecución

        // Comprobación
        $this->assertEquals("IX", $romanNumerals->say(9));
    }

    /**
     * @test
     */
    public function si_es_17_devuelve_XVII()
    {
        // Preparación
        $romanNumerals = new RomanNumerals();

        // Ejecución

        // Comprobación
        $this->assertEquals("XVII", $romanNumerals->say(17));
    }

    /**
     * @test
     */
    public function si_es_38_devuelve_XXXVIII()
    {
        // Preparación
        $romanNumerals = new RomanNumerals();

        // Ejecución

        // Comprobación
        $this->assertEquals("XXXVIII", $romanNumerals->say(38));
    }
}