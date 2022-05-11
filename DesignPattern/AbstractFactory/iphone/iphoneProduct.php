<?php
namespace DesignPattern\AbstractFactory\iphone;
use DesignPattern\AbstractFactory\Product;

class iphoneProduct implements Product{

    public function items()
    {
        return array('item_1', 'item_2', 'item_3', 'item_4');
    }
}
