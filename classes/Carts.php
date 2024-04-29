<?php

namespace classes;
class Carts
{
    public $CartItems = [];

    public function additem($newItem,$quantity)
    {
//        $this->CartItems->array_push($newItem, $quantity);

        array_push($this->CartItems, $newItem);

//        $this->CartItems[] = ($newItem + $quantity);

//        if($quantity == null||0){
//            $quantity = 1;
//        }
//
//        $found = false;
//        foreach ($this->CartItems as $item) {
//            if ($item['itemID'] === $newItem) {
//
//                $item['quantity'] += $quantity;
//                $found = true;
//                break;
//            }
//        }
//
//        if(!$found) {
//                $this->CartItems[] = ['itemID' => $newItem, 'quantity' => $quantity]; //push onto array not overwrite
//            }
    }

    function getShoppingCart()
    {
        if (isset($_SESSION['Cart'])) {
            $CartItems = $_SESSION['Cart'];
        }
        return this->$CartItems;
    }
}
