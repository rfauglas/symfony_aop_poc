<?php


namespace App\Service;


use App\AnnotatedService\ServiceB;

class ServiceA
{
    /** @var ServiceB */
    private $serviceB;
    /**
     * ServiceA constructor.
     * @param ServiceB $serviceB
     */
    public function __construct(ServiceB $serviceB)
    {
        $this->serviceB = $serviceB;
    }

    public function doSomething(): string
    {
        $returnServiceB = $this->serviceB->doSomething();
        return "ServiceA.dosomething: {$returnServiceB}";
    }
}