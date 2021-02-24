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
        return "II";
    }
}