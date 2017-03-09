<?php

namespace CiqualBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;



class FmuCiqualImporterCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('fmu:ciqual-importer')
            ->setDescription('...')
            ->addArgument('argument', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $argument = $input->getArgument('argument');

        if ($input->getOption('option')) {
            // ...
        }

        $output->writeln('Début import Table Ciqual');
        $data = [];
        try {
            $data = $this->getContainer()->get('fmu.ciqual.aggregator.data')->getCiqualDataByYear();
        } catch (\Exception $e) {
            $output->writeln($e->getMessage());
        }
        var_dump($data);
        $output->writeln('Command result.');

    }

}
