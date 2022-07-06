<?php

namespace Prushak\Innowise;

class Task1
{
    private int $inputNumber;

    public function __construct(int $inputNumber)
    {
        $this->inputNumber = $inputNumber;
    }

    public function main(): string
    {
        return $this->inputNumber > 30 ? 'More than 30' : ($this->inputNumber > 20 ? 'More than 20' : ($this->inputNumber > 10 ? 'More than 10' : 'Equal or less than 10'));
    }
}
