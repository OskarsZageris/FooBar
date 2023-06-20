<?php

namespace App;

class Service
{
    private array $values = [];
    private string $separator = "";
    private string $symbol = "";


    public function checkNumberModifier(int $number): string
    {
        $output = [];
        foreach ($this->values as $key => $value) {
            if ($number % $value == 0) {
                $output[] = $key;
            }
        }

        return implode($this->separator, $output);
    }


    public function checkNumberOccurrences(int $number): string
    {
        $digits = str_split($number);
        $output = [];

        foreach ($digits as $digit) {
            foreach ($this->values as $key => $value) {
                if ($value == $digit) {
                    $output[] = $key;
                }
            }
        }
        return implode($this->separator, $output);
    }

    public function checkModifierAndNumberOccurrences($number): string
    {
        $modifier = $this->checkNumberModifier($number);
        $occurrences = $this->checkNumberOccurrences($number);

        if (empty($modifier)) {
            return $modifier . $occurrences;
        } else {
            return $modifier . $this->separator . $occurrences;
        }
    }

    public function sumNumbersAndCheckModifier($number): string
    {
        $digits = str_split($number);
        $sum = array_sum($digits);

        if (!array_key_exists($this->symbol, $this->values)) {
            // Handle the error, if symbol is invalid:
            throw new \InvalidArgumentException('Symbol is not a key in values array.');
        }

        $divider = $this->values[$this->symbol];

        $result = $this->checkModifierAndNumberOccurrences($number);

        if ($sum % $divider == 0) {
            $result .= $this->symbol;
        }

        return $result;
    }

    public function setValues(array $values): void
    {
        $this->values = $values;
    }

    public function setSeparator(string $separator): void
    {
        $this->separator = $separator;
    }

    public function setSymbol(string $symbol): void
    {
        $this->symbol = $symbol;
    }

}