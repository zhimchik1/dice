<?php

namespace Game;

use Interface\RandomSourceInterface;

class Card implements RandomSourceInterface
{
    public function getRandomElement(): string
    {
        $suits = ['Spades', 'Hearts', 'Diamonds', 'Clubs'];
        $ranks = ['Ace', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack', 'Queen', 'King'];

        $randomSuit = array_rand($suits);
        $randomRank = array_rand($ranks);

        return $ranks[$randomRank] . ' of ' . $suits[$randomSuit];
    }
}