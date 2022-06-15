<?php

// Head class
class drinkCup {
    // Property declaration
    protected $color;
    protected $bevarage;

    // Constructor declaration
    public function __construct($color, $bevarage) {
        $this->color = $color;
        $this->bevarage = $bevarage;
    }

    // Method declaration
    public function displayResults() {
        echo "The color of the cup is: {$this->color}. <br> The bevarage in the cup is: {$this->bevarage}. <br> <br>";
    }
}

// Class extends
class beverageCup extends drinkCup {
    public function message() {
        echo "What color and beverage? <br>";
    }
}

// Coffee in green cup
$coffeeGreen = new beverageCup("Green", "Coffee");
$coffeeGreen->message();
$coffeeGreen->displayResults();

// Icetea in red cup
$iceteaRed = new beverageCup("Red", "Icetea");
$iceteaRed->message();
$iceteaRed->displayResults();

// Cola in blue cup
$colaBlue = new beverageCup("Blue", "Cola");
$colaBlue->message();
$colaBlue->displayResults();

?>