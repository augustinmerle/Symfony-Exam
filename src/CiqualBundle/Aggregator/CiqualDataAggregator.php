<?php

namespace CiqualBundle\Aggregator;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class CiqualDataAggregator
{
    private $url;

    public function __construct(string $url = null)
    {
        $this->url = 'https://pro.anses.fr/TableCIQUAL/Documents/';
    }

    /**
     * @param string|null $date
     * @return array
     * @throws \Exception
     */
    public function getCiqualDataByYear(string $year = null) : array
    {
        if (is_null($year)) {
            $date = (new \DateTime())->format('YY');
        }
        $serviceUrl = $this->url.'Table_Ciqual_2016.csv';
        $curl = curl_init('https://pro.anses.fr/TableCIQUAL/Documents/Table_Ciqual_2016.csv');
        if ($curl === false) {
            throw new \Exception('curl connection failed');
        }

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
//        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        $curlResponse = curl_exec($curl);
        if ($curlResponse === false) {
            throw new \Exception('There is an error in executing the curl session');
        }
        curl_close($curl);
        $serializer = new Serializer([new ObjectNormalizer()], [new CsvEncoder(';')]);
        //$serializer = $this->getContainer()->get('serializer');

        // decoding CSV contents
        $responseDecoded = $serializer->decode($curlResponse, 'csv');

        if ($responseDecoded === false || is_null($responseDecoded)) {
            throw new \Exception('failure to decode csv response');
        }

        return $responseDecoded;
    }
}
