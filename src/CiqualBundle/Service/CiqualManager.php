<?php

namespace CiqualBundle\Service;

use AppBundle\Entity\Ciqual;

class CiqualManager
{
  private $entityManager = null;
    private $entity = null;

    public function __construct($entityManager, $entity=null)
    {
        $this->entityManager = $entityManager;
        $this->entity = $entity;
    }

    public function createNewCirqual($object)
    {
        $this->entityManager->persist($object);
        $this->entityManager->flush();
        return $object;
    }
}
