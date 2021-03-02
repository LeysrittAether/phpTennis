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
            $salida .= $this->say($numero - 5);
        }
        return $salida;
    }

    private function add_X($numero) {
        $salida = "";
        while($numero > 9) {
            $salida .= "X";
            $numero -= 10;
        }
        $salida .= $this->say($numero);
        return $salida;
    }

    private function add_L($numero) {
        $salida = "";
        while($numero > 39) {
            $salida .= "L";
            $numero -= 50;
        }
        $salida .= $this->say($numero);
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
            return $resultado;
        }
        if($numero < 9) {
            return $this->add_V($numero);
        }
        if($numero == 9) {
            $resultado = $this->add_I(1);
            $resultado .= $this->add_X(10);
            return $resultado;
        }
        if($numero < 40) {
            return $this->add_X($numero);
        }
        if($numero < 49) {
            $resultado = $this->add_X(10);
            $resultado .= $this->add_L(50);
            $resultado .= $this->add_X($numero - 40);
            return $resultado;
        }
        if($numero < 90) {
            return $this->add_L($numero);
        }
    }
}