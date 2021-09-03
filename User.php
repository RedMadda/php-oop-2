<?php

require_once "NewPhone.php";

class User{
    protected $name;
    protected $surname;
    protected $clientCode;
    protected $address;
    public $paymentsForm;
    protected $card;
    public $fideltySale;

    // variabili sine qua non:
    function __construct($_clientCode, $_address, $_paymentsForm){
        $this->clientCode = $_clientCode;
        $this->address = $_address;
        $this->paymentsForm = $_paymentsForm;
    }

    public function setFideltySale($purchasesNum){
        if (!is_int($purchasesNum)) {
            throw new Exception("PurchaseNum è il num di acquisti fatti dall'user in passato: deve essere intero!");
        } elseif($purchasesNum == 5){
            $this->fideltySale = 5;
        } elseif ($purchasesNum == 10){
            $this->fideltySale = 7;
        } 
    }

    // try { 
    //     echo setFideltySale($purchasesNum);
    // } 
    // catch (Exception $e) {
    //     echo "Eccezione! " . $e->getMessage();
    // }

     

    public function getFideltySale(){
        return "Premio fedeltà: hai " . $this->fideltySale . "% di sconto sul tuo prossimo acquisto!";
    }


}

