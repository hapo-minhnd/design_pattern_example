<?php

namespace DesignPattern\AbstractFactory\macbook;
use DesignPattern\AbstractFactory\factoryMain;

class factoryMacbook extends factoryMain
{

    function createStore()
    {
        return new macbookStore;
    }

    function createProduct()
    {
        return new macbookProduct;
    }
}
