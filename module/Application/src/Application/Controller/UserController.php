<?php
/**
 * Created by PhpStorm.
 * User: Naj Haq
 * Date: 4/19/2015
 * Time: 11:17 AM
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\ViewModel;


class UserController extends AbstractRestfulController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}
