<?php


namespace App\AOP;


use CG\Proxy\MethodInterceptorInterface;
use CG\Proxy\MethodInvocation;

class ServiceInterceptor implements MethodInterceptorInterface
{

    public function intercept(MethodInvocation $invocation)
    {
        $returnedObject = $invocation->proceed();
        return "Intercepted: {$returnedObject}";
    }
}