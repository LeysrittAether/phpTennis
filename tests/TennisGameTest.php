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

    /**
     * @test
     */
    public function si_van_0_15_devuelve_love_fifteen()
    {
        $tennisGame = new TennisGame("player1", "player2");

        $tennisGame->wonPoint("player2");

        $this->assertEquals("Love - Fifteen", $tennisGame->getScore());
    }

    /**
     * @test
     */
    public function si_van_0_30_devuelve_love_thirty()
    {
        $tennisGame = new TennisGame("player1", "player2");

        $tennisGame->wonPoint("player2");
        $tennisGame->wonPoint("player2");

        $this->assertEquals("Love - Thirty", $tennisGame->getScore());
    }

    /**
     * @test
     */
    public function si_van_0_40_devuelve_love_forty()
    {
        $tennisGame = new TennisGame("player1", "player2");

        $tennisGame->wonPoint("player2");
        $tennisGame->wonPoint("player2");
        $tennisGame->wonPoint("player2");

        $this->assertEquals("Love - Forty", $tennisGame->getScore());
    }

    /**
     * @test
     */
    public function si_gana_jugador2_devuelve_win_player2()
    {
        $tennisGame = new TennisGame("player1", "player2");

        $tennisGame->wonPoint("player2");
        $tennisGame->wonPoint("player2");
        $tennisGame->wonPoint("player2");
        $tennisGame->wonPoint("player2");

        $this->assertEquals("Win player2", $tennisGame->getScore());
    }

    /**
     * @test
     */
    public function si_van_15_0_devuelve_fifteen_love()
    {
        $tennisGame = new TennisGame("player1", "player2");

        $tennisGame->wonPoint("player1");

        $this->assertEquals("Fifteen - Love", $tennisGame->getScore());
    }

    /**
     * @test
     */
    public function si_van_15_15_devuelve_fifteen_all()
    {
        $tennisGame = new TennisGame("player1", "player2");

        $tennisGame->wonPoint("player1");
        $tennisGame->wonPoint("player2");

        $this->assertEquals("Fifteen all", $tennisGame->getScore());
    }

    /**
     * @test
     */
    public function si_van_40_40_devuelve_forty_all()
    {
        $tennisGame = new TennisGame("player1", "player2");

        $tennisGame->wonPoint("player1");
        $tennisGame->wonPoint("player2");
        $tennisGame->wonPoint("player1");
        $tennisGame->wonPoint("player2");
        $tennisGame->wonPoint("player1");
        $tennisGame->wonPoint("player2");

        $this->assertEquals("Forty all", $tennisGame->getScore());
    }

    /**
     * @test
     */
    public function si_tiene_ventaja_jugador1_devuelve_advantage_player1()
    {
        $tennisGame = new TennisGame("player1", "player2");

        $tennisGame->wonPoint("player1");
        $tennisGame->wonPoint("player2");
        $tennisGame->wonPoint("player1");
        $tennisGame->wonPoint("player2");
        $tennisGame->wonPoint("player1");
        $tennisGame->wonPoint("player2");
        $tennisGame->wonPoint("player1");

        $this->assertEquals("Advantage player1", $tennisGame->getScore());
    }

    /**
     * @test
     */
    public function si_tiene_ventaja_jugador2_devuelve_advantage_player2()
    {
        $tennisGame = new TennisGame("player1", "player2");

        $tennisGame->wonPoint("player1");
        $tennisGame->wonPoint("player2");
        $tennisGame->wonPoint("player1");
        $tennisGame->wonPoint("player2");
        $tennisGame->wonPoint("player1");
        $tennisGame->wonPoint("player2");
        $tennisGame->wonPoint("player2");

        $this->assertEquals("Advantage player2", $tennisGame->getScore());
    }
}