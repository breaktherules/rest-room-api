<?php
/**
 * Created by PhpStorm.
 * User: Naj Haq
 * Date: 4/19/2015
 * Time: 11:17 AM
 */

namespace Rest\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;


class GuestController extends AbstractRestfulController
{
    public function get($id)
    {
        $guestService = new \Reservation\Service\GuestService();
        $result = $guestService->getOne($id);
        $response = $this->getResponse();
        $response->setStatusCode(200);
        return new JsonModel($result);
    }

    public function create($data)
    {
        echo "creating";
    }


    public function delete($id)
    {
        echo "deleting ";
    }

    public function deleteList($data)
    {
        echo "delete listing ";
    }

    public function replaceList($data)
    {
        echo "replacing List ";
    }

    public function update($id, $data)
    {
        echo "updating";
    }

    public function getList()
    {
        /** @var \Reservation\Service\GuestService $guestService */
        $guestService = $this->getServiceLocator()->get('Reservation\Service\GuestService');
        $result = $guestService->getAll();
        $response = $this->getResponse();
        $response->setStatusCode(200);
        return new JsonModel($result);
    }
}
