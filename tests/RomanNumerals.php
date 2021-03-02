<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use PHPUnit\Framework\TestCase;

final class RomanNumerals extends TestCase
{
    public function __construct()
    {

    }

    private function add_I($numero) {
        $salida = "";
        while($numero > 0) {
            $salida .= "I";
            $numero -= 1;
        }
        return $salida;
    }

    private function add_V($numero) {
        $salida = "";
        if($numero > 4) {
            $salida .= "V";
            $salida .= $this->add_I($numero - 5);
        }
        return $salida;
    }

    private function add_X($numero) {
        $salida = "";
        if($numero > 9) {
            $salida .= "X";
            $salida .= $this->add_V($numero - 10);
        }
        return $salida;
    }

    public function say($numero)
    {
        if($numero < 4) {
            return $this->add_I($numero);
        }
        if($numero == 4) {
            $resultado = $this->add_I(1);
            $resultado .= $this->add_V(5);
            return "$resultado";
        }
        if($numero < 9) {
            return $this->add_V($numero);
        }
        if($numero == 9) {
            $resultado = $this->add_I(1);
            $resultado .= $this->add_X(10);
            return "$resultado";
        }
        if($numero < 49) {
            return $this->add_X($numero);
        }
    }
}