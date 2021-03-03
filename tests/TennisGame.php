<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use PHPUnit\Framework\TestCase;

final class TennisGame extends TestCase
{
    protected string $player1Name;
    protected string $player2Name;
    private int $player1Score = 0;
    private int $player2Score = 0;

    public function __construct($player1Name, $player2Name)
    {
        $this->player1Name = $player1Name;
        $this->player2Name = $player2Name;
    }

    public function wonPoint($wonPointPlayer) {
        if($this->player2Name == $wonPointPlayer) {
            if($this->player2Score == 0) {
                $this->player2Score = 15;
            }
            else if($this->player2Score == 15) {
                $this->player2Score = 30;
            }
            else if($this->player2Score == 30) {
                $this->player2Score = 40;
            }
        }
    }

    public function getScore() {
        $returningScore = "";
        if($this->player1Score == 0) {
            $returningScore .= "Love ";
            if($this->player2Score == 0) {
                $returningScore .= "all";
                return $returningScore;
            }
            if($this->player2Score == 15) {
                $returningScore .= "- Fifteen";
                return $returningScore;
            }
            if($this->player2Score == 30) {
                $returningScore .= "- Thirty";
                return $returningScore;
            }
            if($this->player2Score == 40) {
                $returningScore .= "- Forty";
                return $returningScore;
            }
        }
    }
}