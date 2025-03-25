<?php
declare(strict_types=1);

class Employee {
    private $name;
    private $salary;

    function __construct(string $name, int $salary){
        $this->name=$name;
        $this->salary=$salary;
    }

    function print():string{
        $answer="";
        if($this->salary<6000){
            $answer= "Name: " . $this->name . PHP_EOL . "Taxes: Doesn't have to pay taxes." . PHP_EOL ;
        }else {
            $answer= "Name: " . $this->name . PHP_EOL . "Taxes: Have to pay taxes." . PHP_EOL ;
        }
        return $answer;
    }
}


?>