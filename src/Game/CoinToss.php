<?php

namespace Game;

use Interface\RandomSourceInterface;

class CoinToss implements RandomSourceInterface
{
    public function getRandomElement(): string
    {
        $outcomes = ['Heads', 'Tails'];
        $randomIndex = array_rand($outcomes);
        return $outcomes[$randomIndex];
    }
}
