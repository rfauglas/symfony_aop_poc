<?php


namespace App\Commands;


use App\Service\ServiceA;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestAopCmd extends Command
{
    /** @var ServiceA */
    private $serviceA;

    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:test-aop';

    /**
     * TestAopCmd constructor.
     * @param ServiceA $serviceA
     */
    public function __construct(ServiceA $serviceA)
    {
        parent::__construct();
        $this->serviceA = $serviceA;
    }

    protected function configure()
    {
        $this->setDescription("Test AOP library");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $returnedMsg = $this->serviceA->doSomething();
    }

}