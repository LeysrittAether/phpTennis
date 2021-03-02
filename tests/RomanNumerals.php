<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use PHPUnit\Framework\TestCase;

final class RomanNumerals extends TestCase
{
    public function __construct()
    {

    }

    private function add_I($numero_entrada) {
        $numero_romano_salida = "";
        while($numero_entrada > 0) {
            $numero_romano_salida .= "I";
            $numero_entrada -= 1;
        }
        return $numero_romano_salida;
    }

    private function add_V($numero_entrada) {
        $numero_romano_salida = "";
        if($numero_entrada > 4) {
            $numero_romano_salida .= "V";
            $numero_romano_salida .= $this->say($numero_entrada - 5);
        }
        return $numero_romano_salida;
    }

    private function add_X($numero_entrada) {
        $numero_romano_salida = "";
        while($numero_entrada > 9) {
            $numero_romano_salida .= "X";
            $numero_entrada -= 10;
        }
        $numero_romano_salida .= $this->say($numero_entrada);
        return $numero_romano_salida;
    }

    private function add_L($numero_entrada) {
        $numero_romano_salida = "";
        if($numero_entrada > 49) {
            $numero_romano_salida .= "L";
            $numero_romano_salida .= $this->say($numero_entrada - 50);
        }
        return $numero_romano_salida;
    }

    private function add_C($numero_entrada) {
        $numero_romano_salida = "";
        while($numero_entrada > 99) {
            $numero_romano_salida .= "C";
            $numero_entrada -= 100;
        }
        $numero_romano_salida .= $this->say($numero_entrada);
        return $numero_romano_salida;
    }

    public function say($numero_entrada)
    {
        if($numero_entrada < 4) {
            return $this->add_I($numero_entrada);
        }
        if($numero_entrada == 4) {
            $numero_romano_salida = $this->add_I(1);
            $numero_romano_salida .= $this->add_V(5);
            return $numero_romano_salida;
        }
        if($numero_entrada < 9) {
            return $this->add_V($numero_entrada);
        }
        if($numero_entrada == 9) {
            $numero_romano_salida = $this->add_I(1);
            $numero_romano_salida .= $this->add_X(10);
            return $numero_romano_salida;
        }
        if($numero_entrada < 40) {
            return $this->add_X($numero_entrada);
        }
        if($numero_entrada < 49) {
            $numero_romano_salida = $this->add_X(10);
            $numero_romano_salida .= $this->add_L(50);
            $numero_romano_salida .= $this->add_X($numero_entrada - 40);
            return $numero_romano_salida;
        }
        if($numero_entrada == 49) {
            $numero_romano_salida = $this->add_I(1);
            $numero_romano_salida .= $this->add_L(50);
            return $numero_romano_salida;
        }
        if($numero_entrada < 90) {
            return $this->add_L($numero_entrada);
        }
        if($numero_entrada < 99) {
            $numero_romano_salida = $this->add_X(10);
            $numero_romano_salida .= $this->add_C(100);
            $numero_romano_salida .= $this->add_V($numero_entrada - 90);
            return $numero_romano_salida;
        }
        if($numero_entrada < 151) {
            return $this->add_C($numero_entrada);
        }
    }
}