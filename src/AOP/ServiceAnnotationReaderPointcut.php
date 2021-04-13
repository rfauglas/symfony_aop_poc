<?php


namespace App\AOP;


use Doctrine\Common\Annotations\Reader;
use JMS\AopBundle\Aop\PointcutInterface;

class ServiceAnnotationReaderPointcut implements PointcutInterface
{
    private $excludePath=[];
    private $includePath=[];
    /** @var Reader */
    private $reader;

    /**
     * AopServiceAnnotationReader constructor.
     * @param array $excludePath
     * @param array $includePath
     * @param Reader $reader
     */
    public function __construct(array $excludePath, array $includePath, Reader $reader)
    {
        $this->excludePath = $excludePath;
        $this->includePath = $includePath;
        $this->reader = $reader;
    }

    public function matchesClass(\ReflectionClass $class):bool
    {
        return boolval($this->reader->getClassAnnotation($class, AopService::class));
    }

    public function matchesMethod(\ReflectionMethod $method)
    {
        return true;
        // TODO: Implement matchesMethod() method.
    }
}