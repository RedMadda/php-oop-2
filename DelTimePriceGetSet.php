<?php 

// imposto tempi e prezzi di consegna, a seconda del peso

trait DelTimePriceGetSet{
    public function setTimePriceDelivery(){
        if($this->deliveryHome){

            if($this->weight <= 100){
                $this->deliveryHomeTime = "1 giorno";
                $this->deliveryHomePrice = 5;

            } elseif ($this->weight > 100 && $this->weight <= 200) {
                $this->deliveryHomeTime = "2 giorni";
                $this->deliveryHomePrice = 10;
            } 


        } else {
            $this->deliveryHomeTime = "Non prevista";
            $this->deliveryHomePrice = null;
        }   
    }

    // get tempi e prezzi consegna 
    public function getTimeDelivery(){
        return $this->deliveryHomeTime;
    }

    public function getPriceDelivery(){
        return $this-> deliveryHomePrice;
    }
}