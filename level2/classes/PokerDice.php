<?php
declare(strict_types=1);

class PokerDice {

    private const FACES = ['A', 'K', 'Q', 'J', '7', '8'];
    protected static int $throws = 0;
    private int $lastThrow;

    
    public function throw(): int {
            self::$throws++;
            $this->lastThrow = rand(0, 5);
            return $this->lastThrow;
    }
        

    static function getTotalThrows():string{
        return "Total dice throws : " . static::$throws;
       
    }
    

    public function shapeName():string{
        return self::FACES[$this->lastThrow] . " ";
    }



}
?>