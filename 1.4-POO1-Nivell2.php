<?php 
declare(strict_types = 1);
require_once("ClassPokerDice.php");

$diceSet = createDiceSet(5);

echo fullRoll($diceSet);
echo getTotalRolls($diceSet);
echo fullRoll($diceSet);
echo getTotalRolls($diceSet);


function createDiceSet(int $numDices): array {
    $diceSet = [];

    for ($i = 0; $i < $numDices; $i++) {
        $diceSet[] = new PokerDice();
    }
    return $diceSet;
}

function fullRoll(array $diceSet) : void {

    echo 'El resultado de la tirada es:' . PHP_EOL;

    foreach ($diceSet as $dice) {
        echo $dice->shapeName($dice->diceRoll()). PHP_EOL;
    }
}

function getTotalRolls(array $diceSet): string {
    $totalRolls = 0;

    foreach ($diceSet as $dice) {
        $totalRolls += $dice->getRolls();
    }

    return "Los dados tirados en total son: $totalRolls" . PHP_EOL . PHP_EOL;
}

?>