<?php

namespace App;

class FooBar
{
      private array  $values = [
            'Foo' => 3,
            'Bar' => 5,
            'Qix' => 7
        ];

    public function checkNumber(int $number): string
    {
$output="";
        foreach($this->values as $key=>$value){
            if($number%$value==0){
                if($output==""){
                $output.=$key;
                }else{
                    $output.=", ".$key;
                }
            }
        }
if(empty($output)){
    return $number;
}
return $output;

    }
}