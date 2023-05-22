<?php

namespace Game;

use Interface\RandomSourceInterface;

class Coin implements RandomSourceInterface
{
    public function getRandomElement(): string
    {
        $outcomes = ['Heads', 'Tails'];
        $randomIndex = array_rand($outcomes);
        return $outcomes[$randomIndex];
    }
}
