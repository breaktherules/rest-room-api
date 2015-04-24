<?php
/**
 * Created by PhpStorm.
 * User: Najam.Haque
 * Date: 4/23/2015
 * Time: 7:58 PM
 */

namespace Reservation\Entity;


class Guest {

    protected $id ;
    protected $name ;

    public function __construct($name, $id=null)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}
