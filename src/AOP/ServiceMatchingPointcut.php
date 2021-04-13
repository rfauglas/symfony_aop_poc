<?php


namespace App\AOP;


use JMS\AopBundle\Aop\PointcutInterface;

class ServiceMatchingPointcut implements PointcutInterface
{


    /**
     * ServiceMatchingPointcut constructor.
     */
    public function __construct()
    {
    }

    public function matchesClass(\ReflectionClass $class)
    {
        return boolval(preg_match('/^App\\\\Service/',$class->getName()));
    }

    public function matchesMethod(\ReflectionMethod $method)
    {
        return $method->isPublic();// TODO: Implement matchesMethod() method.
    }
}