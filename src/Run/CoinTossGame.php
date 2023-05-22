<?php
namespace Run;

use Interface\RandomSourceInterface;

class CoinTossGame
{
    private RandomSourceInterface $randomSource;

    public function __construct(RandomSourceInterface $randomSource)
    {
        $this->randomSource = $randomSource;
    }

    public function play(): string
    {
        $result = $this->randomSource->getRandomElement();
        return "Result: $result";
    }
}