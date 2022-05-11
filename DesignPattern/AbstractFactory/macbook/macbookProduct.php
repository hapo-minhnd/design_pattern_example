<?php
namespace DesignPattern\AbstractFactory\macbook;
use DesignPattern\AbstractFactory\Product;

class macbookProduct implements Product {

    public function items()
    {
        return array('item_1', 'item_2', 'item_3', 'item_4'); //list item of product
    }
}
