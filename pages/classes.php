<?php

class House{
    public $color;
    public $year;

    public $totalSpent; // hur mycket har vi spenderat på renovering
    
    // OOP funktioner ligga inuti klass = metod


    // MENINGEN MED EN CONSTUCTOR ÄR
    // - initiera saker
    // - se till att VALID STATE gäller 
    //             ( mandatory variabeler som måste finnas)
    //                     REQUIRED
    public function __construct($color, $year) {   
        $this->color = $color;
        $this->year = $year;
        $this->totalSpent = 0;
    }

    function paint($color){
        $this->color = $color;
        $this->totalSpent = $this->totalSpent + 5000;
    }

}


class Garage{ // 
    public $color;

    public $totalSpent; // hur mycket har vi spenderat på renovering
    
    // OOP funktioner ligga inuti klass = metod


    // MENINGEN MED EN CONSTUCTOR ÄR
    // - initiera saker
    // - se till att VALID STATE gäller 
    //             ( mandatory variabeler som måste finnas)
    //                     REQUIRED
    public function __construct($color) {   
        $this->color = $color;
        $this->totalSpent = 0;
    }

    function paint($color){
        $this->color = $color;
        $this->totalSpent = $this->totalSpent + 3000;
    }

}


// Alla metoder är funktioner, men alla funktioner är inte metoder? 
// Lite som att alla kvadrater är rektanglar, men alla rektanglar är inte kvadrater?


// PHP är -> istäälet för .
$stefansHus = new House("Brunt",1978); // Jag har egna variabler
$stefansHus->year = 1978;
$stefansHus->paint("red");
$stefansGarage = new Garage("Vitt");
$stefansGarage->paint("green");




$annasHus = new House("Vitt", 1980); // Anna har egna variablera
//$annasHus->year = 1980;

// paintGarage($stefansGarage,"red");

// // FUNKTIONSORIENTERAD KOD
// paint($stefansHus, "blue");
// function paint($house, $color){
//     $house->color = $color;
//     $house->totalSpent = $house->totalSpent + 5000;
// }

// function paintGarage($house, $color){
//     $house->color = $color;
//     $house->totalSpent = $house->totalSpent + 3000;
// }



?>