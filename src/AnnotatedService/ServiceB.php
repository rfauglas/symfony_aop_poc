<?php


namespace App\AnnotatedService;


use App\AOP\AopService;

/**
 * @AopService
 */
class ServiceB
{
    public function doSomething(): string
    {
        return "ServiceB.dosomething: reached!";
    }
}