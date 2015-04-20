<?php
/**
 * Created by PhpStorm.
 * User: Naj Haq
 * Date: 4/19/2015
 * Time: 11:17 AM
 */

namespace Application\Controller;

use Zend\EventManager\EventManagerInterface;
use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;
use Zend\View\Model\ViewModel;


class UserController extends AbstractRestfulController
{
    protected $collectionsMethods = array('GET', 'POST');
    protected $itemMethods = array('GET', 'PUT', 'DELETE');


    protected function getOptions()
    {
        if ($this->params()->fromRoute('id', false)) {
            return $this->itemMethods;
        }
        return $this->collectionsMethods;
    }

    protected $viewModelMap = array();
    public function options()
    {


        $response = $this->getResponse();

        $response->getHeaders()->addHeaderLine('Allow', implode($this->getOptions(), ','));
        return $response;
    }

    public function setEventManager(EventManagerInterface $event)
    {
        $this->events = $event;
        $event->attach('dispatch', array($this, 'checkOptions'), 10);
    }

    public function checkOptions($e)
    {
        $matches  = $e->getRouteMatch();
        $response = $e->getResponse();
        $request  = $e->getRequest();
        $method   = $request->getMethod();

        // test if we matched an individual resource, and then test
        // if we allow the particular request method
        if ($matches->getParam('id', false)) {
            if (!in_array($method, $this->resourceMethods)) {
                $response->setStatusCode(405);
                return $response;
            }
            return;
        }

        // We matched a collection; test if we allow the particular request
        // method
        if (!in_array($method, $this->collectionsMethods)) {
            $response->setStatusCode(405);
            return $response;
        }

//        if (in_array($this->getRequest()->getMethod(), $this->getOptions())) {
//            return ;
//        }
//        $response = $this->getResponse();
//        $response->setStatusCode(405);
//        return $response;
    }

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
