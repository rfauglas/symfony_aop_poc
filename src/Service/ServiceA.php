<?php


namespace App\Service;


class ServiceA
{
    /**
     * ServiceA constructor.
     */
    public function __construct()
    {
    }

    public function doSomething(): string
    {
        return "ServiceA.dosomething: Reached!";
    }
}