<?php

namespace DesignPattern\AbstractFactory\iphone;

use DesignPattern\AbstractFactory\Store;
use function GuzzleHttp\Psr7\_caseless_remove;

class iphoneStore implements Store
{

    public function price($product)
    {
        switch ($product) {
            case 'item_1':
                $value = 100;
                break;
            case 'item_2':
                $value = 200;
                break;
            default:
                $value = 10;
                break;
        }
        return $value;
    }
}
