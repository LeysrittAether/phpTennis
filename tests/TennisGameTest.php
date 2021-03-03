<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use PHPUnit\Framework\TestCase;

final class TennisGameTest extends TestCase
{
    /**
     * @test
     */
    public function si_van_0_0_devuelve_love_all()
    {
        $tennisGame = new TennisGame("player1", "player2");

        $this->assertEquals("Love all", $tennisGame->getScore());
    }

}