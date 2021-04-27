<?php
require __DIR__ . '/../../vendor/autoload.php';

$client = new \DesignPattern\AbstractFactory\Client(new \DesignPattern\AbstractFactory\iphone\factoryIphone());

$client->run();
