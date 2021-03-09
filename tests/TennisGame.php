<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use PHPUnit\Framework\TestCase;

final class TennisGame extends TestCase
{
    protected string $player1Name;
    protected string $player2Name;
    private array $tennisScores = ['Love', 'Fifteen', 'Thirty', 'Forty', 'Advantage', 'Win'];
    private int $player1Score = 0;
    private int $player2Score = 0;

    public function __construct($player1Name, $player2Name)
    {
        $this->player1Name = $player1Name;
        $this->player2Name = $player2Name;
    }

    public function wonPoint($wonPointPlayer) {
        if($this->player1Name == $wonPointPlayer) {
            if ($this->player1Score == 3) {
                if ($this->player2Score != 3) {
                    $this->player1Score++;
                    $this->player1Score++;
                } else if ($this->player2Score == 3) {
                    $this->player1Score++;
                } else if ($this->player2Score == 4) {
                    $this->player2Score--;
                }
            }
            else {
                $this->player1Score++;
            }
        }
        else if($this->player2Name == $wonPointPlayer) {
            if ($this->player2Score == 3) {
                if ($this->player1Score != 3) {
                    $this->player2Score++;
                    $this->player2Score++;
                } else if ($this->player1Score == 3) {
                    $this->player2Score++;
                } else if ($this->player1Score == 4) {
                    $this->player1Score--;
                }
            }
            else {
                $this->player2Score++;
            }
        }
    }

    public function getScore() {
        if($this->player1Score == 5) {
            return "Win " . $this->player1Name;
        }
        else if($this->player2Score == 5) {
            return "Win " . $this->player2Name;
        }
        else if($this->player1Score == 4) {
            return $this->tennisScores[$this->player1Score] . " " . $this->player1Name;
        }
        else if($this->player2Score == 4) {
            return $this->tennisScores[$this->player2Score] . " " . $this->player2Name;
        }
        else {
            $returningScore = $this->tennisScores[$this->player1Score];
            if($this->player1Score == $this->player2Score) {
                $returningScore .= " all";
            }
            else {
                $returningScore .= " - " . $this->tennisScores[$this->player2Score];
            }
            return $returningScore;
        }
    }
}