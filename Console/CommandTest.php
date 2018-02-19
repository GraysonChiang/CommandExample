<?php

namespace Grayson\CommandExample\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class CommandTest
 * @package Grayson\CommandExample\Console
 */
class CommandTest extends Command
{

    protected function configure()
    {
        $this->setName('Grayson:command-test')
            ->setDescription('command test');
        return parent::configure();
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return CommandTest
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        //實際執行的地方
        return $this;
    }


}
