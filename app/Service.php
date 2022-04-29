<?php

namespace App;

class Service
{
    private array $values = [];
    private string $separator = "";

    public function checkNumberModifier(int $number): string
    {
        $output = "";
        foreach ($this->values as $key => $value) {
            if ($number % $value == 0) {
                if ($output == "") {
                    $output .= $key;
                } else {
                    $output .= $this->separator . $key;
                }
            }
        }
        return $output;
    }


    public function checkNumberOccurrences(int $number): string
    {
        $numbers = str_split($number, 1);
        $output = "";
        foreach ($numbers as $number) {
            foreach ($this->values as $key => $value) {
                if ($value == $number) {
                    if ($output == "") {
                        $output .= $key;
                    } else {
                        $output .= $this->separator . $key;
                    }
                }
            }
        }
        return $output;
    }

    public function checkModifierAndNumberOccurrences($number): string
    {
        if (empty($this->checkNumberModifier($number))) {
            return $this->checkNumberModifier($number) . $this->checkNumberOccurrences($number);
        } else {
            return $this->checkNumberModifier($number) . $this->separator . $this->checkNumberOccurrences($number);
        }
    }

    public function sumNumbersAndCheckModifier($number):string{
        return "";
    }

    public function setValues(array $values): void
    {
        $this->values = $values;
    }

    public function setSeparator(string $separator): void
    {
        $this->separator = $separator;
    }
}