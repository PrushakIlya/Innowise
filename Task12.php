<?php

namespace src;

use InvalidArgumentException;

class Task12
{
    private int $input_1;
    private int $input_2;
    private string $result = '';
    private string $symbol = '';
    public function __construct(int $input_1, int $input_2)
    {
        $this->input_1 = $input_1;
        $this->input_2 = $input_2;
    }
    public function __call($name, $arguments)
    {
        throw new InvalidArgumentException('This function does not exist. Input was: '.$name);
    }
    public function main(): string
    {
        return $this->result;
    }
    public function add(): object
    {
        return $this->operator($this->input_1, $this->input_2, '+');
    }
    public function subtract(): object
    {
        return $this->operator($this->input_1, $this->input_2, '-');
    }
    public function multiply(): object
    {
        return $this->operator($this->input_1, $this->input_2, '*');
    }
    public function divide(int $divider = 1): object
    {
        $this->check($divider);
        $this->result = $this->result / $divider;
        $this->result = '(' . $this->input_1 . $this->symbol . $this->input_2 . ')' . '/' . $divider . ' = ' . $this->result;

        return $this;
    }
    public function operator(int $input_1, int $input_2, string $symbol): object
    {
        switch ($symbol) {
            case '+':
                $this->result = $input_1 + $input_2;

                break;
            case '-':
                $this->result = $input_1 - $input_2;

                break;
            case '*':
                $this->result = $input_1 * $input_2;

                break;
        }
        $this->symbol = $symbol;

        return $this;
    }
    private function check(int $divider)
    {
        if ($divider === 0) {
            throw new InvalidArgumentException('The divider can not be equal 0. Input was: '.$divider);
        }
    }
}
