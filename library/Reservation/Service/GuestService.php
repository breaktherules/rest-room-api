<?php

namespace Reservation\Service;

use \Reservation\Entity\Guest ;
use \Reservation\Exception\GuestNotFound ;

class GuestService
{
    public function getAll(){

        $result = [];
        for ($i = 0; $i < 20; $i++) {
            $result[] = new Guest('Sample Name ' . $i, $i);
        }

        return $result;
    }

    public function getOne($id) {
        if ($id > 1000){
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
