<?php

namespace CiqualBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class FmuCiqualImporterCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('fmu:ciqual-importer')
            ->setDescription('command to import Ciqual data from local or distant')
            ->addOption('local', null, InputOption::VALUE_OPTIONAL, 'local csv file')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $argument = $input->getOption('local');
        $data = [];
        $output->writeln('Début import Table Ciqual');

        if ($argument != null) {
            $data = $this->getContainer()->get('fmu.ciqual.aggregator.data')->getCiqualByLocalFile($argument);
        } else {
            try {
                $data = $this->getContainer()->get('fmu.ciqual.aggregator.data')->getCiqualByUrl();
            } catch (\Exception $e) {
                $output->writeln($e->getMessage());
            }
        }
        $output->writeln('Command finished.');
    }
}
