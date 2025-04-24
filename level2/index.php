<?php
declare(strict_types=1);

require_once 'classes/PokerDice.php';


$dice1= new PokerDice();
$dice2= new PokerDice();
$dice3= new PokerDice();
$dice4= new PokerDice();
$dice5= new PokerDice();

$dices=[$dice1,$dice2,$dice3,$dice4,$dice5];

foreach ($dices as $dice){
    $dice->throw();
    echo $dice->shapeName();
}

echo PHP_EOL . PokerDice:: getTotalThrows();

?>
