<?php
declare(strict_types=1);

require_once 'classes/PokerDice.php';


$dice1= new PokerDice();
$dice2= new PokerDice();
$dice3= new PokerDice();
$dice4= new PokerDice();
$dice5= new PokerDice();

$dice1->throw();
echo $dice1->shapeName();
$dice2->throw();
echo $dice2->shapeName();
$dice3->throw();
echo $dice3->shapeName();
$dice4->throw();
echo $dice4->shapeName();
$dice5->throw();
echo $dice5->shapeName();


echo PHP_EOL . PokerDice:: getTotalThrows();

?>
