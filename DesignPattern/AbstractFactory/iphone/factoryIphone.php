<?php
namespace DesignPattern\AbstractFactory\iphone;
use DesignPattern\AbstractFactory\factoryMain;

class factoryIphone extends factoryMain {

    function createStore()
    {
        return new iphoneStore;
    }

    function createProduct()
    {
        return new iphoneProduct;
    }
}
