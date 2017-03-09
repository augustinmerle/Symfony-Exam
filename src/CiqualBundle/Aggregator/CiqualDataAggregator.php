<?php

namespace CiqualBundle\Aggregator;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use AppBundle\Entity\Ciqual;
use CiqualBundle\Normalizer\CiqualNameConverter;

class CiqualDataAggregator
{
    private $url;

    private $ciqualManager;

    public function __construct($ciqualManager, string $url = null)
    {
        $this->ciqualManager = $ciqualManager;
        $this->url = 'https://pro.anses.fr/TableCIQUAL/Documents/';

    }

    /**
     * @param string|null $date
     * @return array
     * @throws \Exception
     */
    private function serializeCiqualData($data) : array
    {
        $normalizer = new ObjectNormalizer(null, new CiqualNameConverter());
        $normalizer->setIgnoredAttributes(array('Energie, Règlement UE N° 1169/2011 (kcal/100g)'));

        $serializer = new Serializer(array($normalizer), [new CsvEncoder(';')]);

        // decoding CSV contents
        $data = mb_convert_encoding($data, 'UTF-8', 'ISO-8859-1');

        $responseDecoded = $serializer->decode($data, 'csv');
        foreach ($responseDecoded as $line)
        {
            $this->ciqualManager->createNewCirqual($serializer->denormalize($line, Ciqual::class, 'csv' ));
        }

        if ($responseDecoded === false || is_null($responseDecoded)) {
            throw new \Exception('failure to decode csv response');
        }
        return $responseDecoded;
    }

    /**
     * @param string|null $date
     * @return array
     * @throws \Exception
     */
    public function getCiqualByUrl()
    {
      $serviceUrl = $this->url.'Table_Ciqual_2016.csv';
      $curl = curl_init($serviceUrl);
      if ($curl === false) {
          throw new \Exception('curl connection failed');
      }

      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_ENCODING ,"ISO-8859-1");

      $curlResponse = curl_exec($curl);
      if ($curlResponse === false) {
          throw new \Exception('There is an error in executing the curl session');
      }
      curl_close($curl);

      return $this->serializeCiqualData($curlResponse);

    }

    public function getCiqualByLocalFile($filePath)
    {
        if (is_file($filePath)){
            $data = file_get_contents($filePath);
        }

        return $this->serializeCiqualData($data);
    }
}
