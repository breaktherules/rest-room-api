<?php
/**
 * Created by PhpStorm.
 * User: Naj Haq
 * Date: 4/19/2015
 * Time: 11:17 AM
 */

namespace Rest\Controller;

use Zend\EventManager\EventManagerInterface;
use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;


class UserController extends AbstractRestfulController
{
    public function get($id)
    {
        echo "Getting $id";
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
        $result = array(
            array ('id'=>1,'name'=>'Sample 1'),
            array ('id'=>2,'name'=>'Sample 2'),
            ) ;
        // $userApiService = $this->getServiceLocator()->get('userAPIService');
        // $result = $userApiService->getList();
        $response = $this->getResponse();
        $response->setStatusCode(200);
        return new JsonModel($result);
    }
}
