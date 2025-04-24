<?php
declare(strict_types=1);

class PokerDice {

    protected array $faces;
    protected static int $throws = 0;
    private int $lastThrow;


    public function __construct(){

        $this->faces = ["A","K","Q","J","8","7"];
        
    }

    
    public function throw(): int {
            self::$throws++;
            $this->lastThrow = rand(0, 5);
            return $this->lastThrow;
    }
        
    

    public function getFace(): array {
        return $this->faces;
    }

    static function getTotalThrows():string{
        return "Total dice throws : " . static::$throws;
       
    }
    

    public function shapeName():string{
        return $this->faces[$this->lastThrow] . " ";
    }



}
?>