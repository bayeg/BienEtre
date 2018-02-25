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

// ------------------------- Column parameters -------------------------

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
     * @ORM\Column(name="position_order", type="integer")
     */
    private $positionOrder;

// ------------------------- Relationship parameters -------------------------

    /**
     *@var Block
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\Block", inversedBy="positions")
     */
    private $block;

    /**
     *@var Internaut
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\Internaut", inversedBy="positions")
     */
    private $internaut;

// ------------------------- Methods -------------------------


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
     * @return integer
     */
    public function getPositionOrder()
    {
        return $this->positionOrder;
    }

    /**
     * Set block
     *
     * @param \AppBundle\Entity\Block $block
     *
     * @return Position
     */
    public function setBlock(\AppBundle\Entity\Block $block = null)
    {
        $this->block = $block;

        return $this;
    }

    /**
     * Get block
     *
     * @return \AppBundle\Entity\Block
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * Set internaut
     *
     * @param \AppBundle\Entity\Internaut $internaut
     *
     * @return Position
     */
    public function setInternaut(\AppBundle\Entity\Internaut $internaut = null)
    {
        $this->internaut = $internaut;

        return $this;
    }

    /**
     * Get internaut
     *
     * @return \AppBundle\Entity\Internaut
     */
    public function getInternaut()
    {
        return $this->internaut;
    }

    public function __toString()
{
    return 'Position'.$this->getPositionOrder();
}
}
