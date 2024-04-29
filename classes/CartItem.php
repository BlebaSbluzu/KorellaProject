<?php
class CartItem {
    // Properties
    public $item_id;
    public $quantity;

    // Methods
    function set_item($id) {
        $this->item_id = $id;
    }
    function get_item() {
        return $this->item_id;
    }

    function set_quantity($num) {
        $this->quantity = $num;
    }
    function get_quantity() {
        return $this->quantity;
    }
}
?>