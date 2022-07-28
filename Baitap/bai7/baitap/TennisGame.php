<?php

class TennisGame
{
    public string $score = '';
    public string $playerOne ="";
    public string $playerTwo ="";
    public function getPlayerOne(){
        return $this->playerOne;
    }
    public function getPlayerTwo(){
        return  $this->playerTwo;
    }
    public function getScore($playerOne, $playerTwo, $scoreOne, $scoreTwo)
    {
        $this->playerOne = $playerOne;
        $this->playerTwo =$playerTwo;
        $tempScore = 0;
       
        if ($scoreOne == $scoreTwo) {
            switch ($scoreOne) {
                case 0:
                    $this->score = "Love-All";
                    break;
                case 1:
                    $this->score = "Fifteen-All";
                    break;
                case 2:
                    $this->score = "Thirty-All";
                    break;
                case 3:
                    $this->score = "Forty-All";
                    break;
                default:
                    $this->score = "Deuce";
                    break;

            }
        } else if ($scoreOne >= 4 || $scoreTwo >= 4) {
            $minusResult = $scoreOne - $scoreTwo;
            if ($minusResult == 1) $this->score = "Advantage player1";
            else if ($minusResult == -1) $this->score = "Advantage player2";
            else if ($minusResult >= 2) $this->score = "Win for ".$playerOne;
            else $this->score = "Win for ". $playerTwo;
        } else {
            for ($i = 1; $i < 3; $i++) {
                if ($i == 1) $tempScore = $scoreOne;
                else {
                    $this->score .= "-";
                    $tempScore = $scoreTwo;
                }
                switch ($tempScore) {
                    case 0:
                        $this->score .= "Love";
                        break;
                    case 1:
                        $this->score .= "Fifteen";
                        break;
                    case 2:
                        $this->score .= "Thirty";
                        break;
                    case 3:
                        $this->score .= "Forty";
                        break;
                }
            }
        }
    }
   
    public function __toString(): string
    {
        return $this->getPlayerOne().' '.$this->score.' '.$this->getPlayerTwo() ;
    }
}