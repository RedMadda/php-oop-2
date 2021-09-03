<?php

require_once "NewPhone.php";

class AsNewPhone extends NewPhone{
  protected $box;
  protected $charger;
  protected $earBuds;
  public $sale = 0;

  function __construct($_deliveryHome, $_weight, $_box, $_charger, $_earBuds){
    parent::__construct($_deliveryHome, $_weight);    
    $this->box = $_box;
    $this->charger = $_charger;
    $this->earBuds = $_earBuds;
  }

  use PriceSetGet;

  public function setSale(){
    if($this->box == "original" && $this->charger && $this->earBuds ){
      $this->sale = 0;
      var_dump("sconto scatola original");
    } elseif($this->box == "not original" && !$this->charger && !$this->earBuds ){
      $this->sale = 45;
    } elseif($this->box == "not original" && !$this->charger && $this->earBuds || $this->box == "not original" && $this->charger && !$this->earBuds){
      $this->sale = 35;
    } else{
      $this->sale = 15;
    }
  }

  public function getSale(){
    $this->price -= $this->price * $this->sale / 100;
    return "Hai uno sconto del: " . $this->sale . "%. Importo da versare: " . $this->price;
  }

}
