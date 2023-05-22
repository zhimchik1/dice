<?php

namespace Game;

use Interface\RandomSourceInterface;

class Dice implements RandomSourceInterface
{
    public function getRandomElement(): string
    {
        $outcomes = ['1', '2', '3', '4', '5', '6'];
        $randomIndex = array_rand($outcomes);
        return $outcomes[$randomIndex];
    }
}