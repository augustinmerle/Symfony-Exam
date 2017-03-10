<?php

namespace CiqualBundle\Service;

class CiqualManager
{
    private $entityManager = null;
    private $entity = null;

    public function __construct($entityManager, $entity = null)
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
