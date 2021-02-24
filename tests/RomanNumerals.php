<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use PHPUnit\Framework\TestCase;

final class RomanNumerals extends TestCase
{
    public function __construct()
    {

    }

    private function I($numero) {
        $salida = "";
        while($numero > 0) {
            $salida .= "I";
            $numero -= 1;
        }
        return $salida;
    }

    public function say($numero)
    {
        if($numero < 4) {
            return $this->I($numero);
        }
        if($numero == 4) {
            return "IV";
        }
        return "V";
    }
}