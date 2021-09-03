<?php

// settare e prendere il prezzo a seconda di brand e modello.
// per semplificazione, model numerici che rappresentano l'avanzamento tecnico/ ricerca
trait PriceSetGet {
    public function setPrice($productionPrice, $model){
        if($this->brand == "Fairphone"){
        
            if($model < 3){
                $this->price = $productionPrice + $productionPrice * 0.10 + 25 * $model; 
            } else {
                $this->price = $productionPrice + $productionPrice * 0.10 + $model * 50;
            }

        } elseif ($this->brand == "Apple"){

            if($model < 7){
                $this->price = $productionPrice * 2.5 + $model * 50;
                $this->price = number_format($this->price, 2, ',', '');
            } else {
                $this->price = $productionPrice * 2.8 + $model * 100;
                $this->price = number_format($this->price, 2, ",", "");
            }
        
        } else {
            if($model < 10){
                $this->price = $productionPrice + $productionPrice * 0.30 + 10 * $model; 
            } else {
                $this->price = $productionPrice + $productionPrice * 0.30 + $model * 70;
            }
        }

        $this->getPrice();
        
    }


    public function getPrice(){
        return $this->price . "€";
    }
}
// /trait PriceSetGet