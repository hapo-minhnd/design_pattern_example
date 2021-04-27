<?php
namespace DesignPattern\AbstractFactory\macbook;
use DesignPattern\AbstractFactory\Store;

class macbookStore implements Store
{
    public function price($product)
    {
        return 200; // set price for one product
    }
}
