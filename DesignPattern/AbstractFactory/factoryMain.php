<?php
namespace DesignPattern\AbstractFactory;

abstract class factoryMain
{
    abstract function createStore(); // create store

    abstract function createProduct(); // create list product

    public function makeMoney()
    {
        $defaultValue = 0;
        $store = $this->createStore();
        $items = $this->createProduct()->items();
        foreach ($items as $item) {
            $defaultValue += $store->price($item);
        }
        return $defaultValue;
    }
}
