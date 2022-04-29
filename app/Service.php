<?php

namespace App;

class Service
{
    private array $values = [];

    public function checkNumberModifier(int $number): string
    {
        $output = "";
        foreach ($this->values as $key => $value) {
            if ($number % $value == 0) {
                $output .= $key;
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
                    $output .= $key;
                }
            }
        }
        return $output;
    }

    public function checkModifierAndNumberOccurrences($number): string
    {
        return $this->checkNumberModifier($number) . $this->checkNumberOccurrences($number);
    }


    public function setValues(array $values): void
    {
        $this->values = $values;
    }

}