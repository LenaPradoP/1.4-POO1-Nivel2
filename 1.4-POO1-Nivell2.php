<?php 
declare(strict_types = 1);
require_once("ClassPokerDice.php");

$TotalRolls = 0;

$DiceSet = [$Dice1 = new PokerDice, 
            $Dice2 = new PokerDice, 
            $Dice3 = new PokerDice, 
            $Dice4 = new PokerDice, 
            $Dice5 = new PokerDice];

echo fullRoll($DiceSet);
echo getTotalRolls($TotalRolls);

    function fullRoll(array $DiceSet) : void {
        global $TotalRolls;

        echo 'El resultado de una tirada completa es:' . PHP_EOL;

        foreach ($DiceSet as $Dice) {
            echo $Dice->shapeName($Dice->roll());
            $TotalRolls++;
        }
    }

    function getTotalRolls(int $TotalRolls): string {

        return "Las tiradas totales son: $TotalRolls";
    }

?>