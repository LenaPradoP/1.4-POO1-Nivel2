<?php 
declare(strict_types = 1);

class PokerDice {
    private const DICE_FACES = 6;
    private $CurrentFace;
    
    public function roll() : int {

        $this->CurrentFace = rand(1, self::DICE_FACES);

    return $this->CurrentFace;
    }

    public function shapeName() : string {
        $Shape = '';

    $Shape = match ($this->CurrentFace) {
        1 => 'Ace' . PHP_EOL,
        2 => 'K' . PHP_EOL,
        3 => 'Q' . PHP_EOL,
        4 => 'J' . PHP_EOL,
        5 => '7' . PHP_EOL,
        6 => '8' . PHP_EOL,
    };

    return $Shape;
    }

}

?>