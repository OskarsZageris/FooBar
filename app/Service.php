<?php

namespace App;

class Service
{
      private array  $values = [
            'Foo' => 3,
            'Bar' => 5,
            'Qix' => 7
        ];

    public function checkNumberModifier(int $number): string
    {
$output="";
        foreach($this->values as $key=>$value){
            if($number%$value==0){
                    $output.=$key;
            }
        }
if(empty($output)){
    return $number;
}
return $output;
    }


public function checkEveryNumber(int $number):string{
        $numbers=str_split($number,1);
    $output="";
        foreach($numbers as $number){
            foreach($this->values as $key=>$value) {
                if($value==$number){
                    $output.=$key;
                }
            }
            }
        return $output;
        }
public function checkModifierAndEveryNumber($number):string{
        return "";
}


}