<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use PHPUnit\Framework\TestCase;

final class RomanNumerals extends TestCase
{
    public function __construct()
    {

    }

    public function say($numero)
    {
        if($numero == 1) {
            return "I";
        }
        if($numero == 2) {
            return "II";
        }
        if($numero == 3) {
            return "III";
        }
        if($numero == 4) {
            return "IV";
        }
        return "V";
    }
}