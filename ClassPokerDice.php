<?php 
declare(strict_types = 1);

class PokerDice {
    private const DICE_FACES = ['Ace', 'K', 'Q', 'J', '7', '8'];
    private $currentFace = -1;
    private $rolls = 0; 

    public function diceRoll(): void {
        $this->currentFace = rand(0, count(self::DICE_FACES) - 1);
        $this->rolls++;
    }

    public function shapeName() : string {
        return self::DICE_FACES[$this->currentFace];
    }

    public function getRolls() : int {
        return $this->rolls;
    }
}

?>
