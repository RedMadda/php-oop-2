<?php

require_once "PriceSetGet.php";
require_once "DelTimePriceGetSet.php";
require_once "User.php";

class NewPhone{
    protected $price;
    public $brand = "fairphone";
    protected $deliveryHome;
    public $deliveryHomeTime = "3 giorni";
    public $deliveryHomePrice = 15;
    public $weight;

    // variabili sine qua non:
    function __construct($_deliveryHome, $_weight){
        $this->deliveryHome = $_deliveryHome;
        $this->weight = $_weight;
    }

    // stabilisco il prezzo, a seconda del modello e del brand.
    // Per semplificazione, modelli sono numerici;

    use PriceSetGet;


    // imposto e prendo tempi e prezzi di consegna, a seconda del peso

    use DelTimePriceGetSet;
}