<?php

class drinkCup {
    // Property declaration
    public $color;
    public $bevarage;

    // Constructor declaration
    public function __construct($color, $bevarage) {
        $this->color = $color;
        $this->bevarage = $bevarage;
    }

    // Method declaration
    public function displayVar() {
        echo "The color of the cup is: {$this->color}. <br> The bevarage in the cup is: {$this->bevarage}.";
    }
}

class coffeeGreen extends drinkCup {
    public function message() {
        echo "What color and beverage? <br>";
    }
}

$coffeeCup = new coffeeGreen("Green", "Coffee");
$coffeeCup->message();
$coffeeCup->displayVar();

?>