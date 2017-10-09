<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Position
 *
 * @ORM\Table(name="position")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PositionRepository")
 */
class Position
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="positionOrder", type="integer")
     */
    private $positionOrder;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set positionOrder
     *
     * @param integer $positionOrder
     *
     * @return Position
     */
    public function setPositionOrder($positionOrder)
    {
        $this->positionOrder = $positionOrder;

        return $this;
    }

    /**
     * Get positionOrder
     *
     * @return int
     */
    public function getPositionOrder()
    {
        return $this->positionOrder;
    }
}

