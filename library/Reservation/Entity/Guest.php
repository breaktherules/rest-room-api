<?php

namespace Reservation\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Entity as Entity;

/**
 * Guest
 *
 * @Entity(repositoryClass="Repository\GuesRepository")
 * @ORM\Table(name="guest")
 * @ORM\Entity
 */
class Guest
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30, nullable=false)
     */
    private $name;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Guest
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
