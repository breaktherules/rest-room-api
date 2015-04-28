<?php

namespace Reservation\Service;

use \Reservation\Entity\Guest ;
use \Reservation\Exception\GuestNotFound ;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;



class GuestService implements
    ServiceLocatorAwareInterface
{
    protected $services ;

    public function setServiceLocator(ServiceLocatorInterface $serviceLocator)
    {
        $this->services = $serviceLocator;
    }

    /**
     * Get service locator
     *
     * @return ServiceLocatorInterface
     */
    public function  getServiceLocator()
    {
        return $this->services ;
    }


    /**
     * Find all guest in the system.
     * @todo implement pagination
     * @todo implement filtering
     * @todo implement error handling, such as DB error
     * @return array | Doctrine Collection
     */
    public function getAll()
    {
        /** @var $entityManager */
        $entityManager = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        $result = $entityManager->getRepository('\Reservation\Entity\Guest')->findAll();

        return $result;
    }

    public function getOne($id) {
        if ($id > 1000) {
            throw  new GuestNotFound();
        }
        $guest = new Guest('Sample Name ' . $id, $id);
        return $guest ;
    }

    public function createGuest($name)
    {
        $guest = new Guest($name);
        return $guest ;
    }

}
