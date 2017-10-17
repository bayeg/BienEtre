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
     * @ORM\Column(name="order", type="integer")
     */
    private $order;

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

    /**
     * Set positionBlock
     *
     * @param \AppBundle\Entity\Block $positionBlock
     *
     * @return Position
     */
    public function setPositionBlock(\AppBundle\Entity\Block $positionBlock = null)
    {
        $this->positionBlock = $positionBlock;

        return $this;
    }

    /**
     * Get positionBlock
     *
     * @return \AppBundle\Entity\Block
     */
    public function getPositionBlock()
    {
        return $this->positionBlock;
    }

    /**
     * Set positionInternaut
     *
     * @param \AppBundle\Entity\Internaut $positionInternaut
     *
     * @return Position
     */
    public function setPositionInternaut(\AppBundle\Entity\Internaut $positionInternaut = null)
    {
        $this->positionInternaut = $positionInternaut;

        return $this;
    }

    /**
     * Get positionInternaut
     *
     * @return \AppBundle\Entity\Internaut
     */
    public function getPositionInternaut()
    {
        return $this->positionInternaut;
    }

    /**
     * Set order
     *
     * @param integer $order
     *
     * @return Position
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return integer
     */
    public function getOrder()
    {
        return $this->order;
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
}
