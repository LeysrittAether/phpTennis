<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use PHPUnit\Framework\TestCase;

final class TennisGame extends TestCase
{
    protected string $player1Name;
    protected string $player2Name;
    private array $tennisScores = [0, 15, 30, 40, 1];
    private int $player1Score = 0;
    private int $player2Score = 0;

    public function __construct($player1Name, $player2Name)
    {
        $this->player1Name = $player1Name;
        $this->player2Name = $player2Name;
    }

    public function wonPoint($wonPointPlayer) {
        if($this->player2Name == $wonPointPlayer) {
            $this->player2Score++;
        }
    }

    public function getScore() {
        $returningScore = "";
        if($this->tennisScores[$this->player1Score] != 1 && $this->tennisScores[$this->player2Score] != 1) {
            if($this->player1Score == 0) {
                $returningScore .= "Love ";
                if ($this->player2Score == 0) {
                    $returningScore .= "all";
                    return $returningScore;
                }
                if ($this->player2Score == 1) {
                    $returningScore .= "- Fifteen";
                    return $returningScore;
                }
                if ($this->player2Score == 2) {
                    $returningScore .= "- Thirty";
                    return $returningScore;
                }
                if ($this->player2Score == 3) {
                    $returningScore .= "- Forty";
                    return $returningScore;
                }
            }
        }
        else if($this->player1Score == 4) {
            return "Win" . $this->player1Name;
        }
        else {
            return "Win " . $this->player2Name;
        }
    }
}