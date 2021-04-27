<?php
namespace DesignPattern\AbstractFactory;

class Client
{
    public $factoryMain;

    public function __construct(\DesignPattern\AbstractFactory\factoryMain $factoryMain)
    {
        $this->factoryMain = $factoryMain;
    }

    public function run(){
        return print 'My total bill:' . $this->factoryMain->makeMoney() . PHP_EOL;
    }
}
