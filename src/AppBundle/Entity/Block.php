<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Block
 *
 * @ORM\Table(name="block")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BlockRepository")
 */
class Block
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=25)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


    /**
     *@var ArrayCollection
     *@ORM\OneToMany(targetEntity="AppBundle\Entity\Position", mappedBy="block")
     */
    private $positions;





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
     * Constructor
     */
    public function __construct()
    {
        $this->blockInternauts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add blockInternaut
     *
     * @param \AppBundle\Entity\Internaut $blockInternaut
     *
     * @return Block
     */
    public function addBlockInternaut(\AppBundle\Entity\Internaut $blockInternaut)
    {
        $this->blockInternauts[] = $blockInternaut;

        return $this;
    }

    /**
     * Remove blockInternaut
     *
     * @param \AppBundle\Entity\Internaut $blockInternaut
     */
    public function removeBlockInternaut(\AppBundle\Entity\Internaut $blockInternaut)
    {
        $this->blockInternauts->removeElement($blockInternaut);
    }

    /**
     * Get blockInternauts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBlockInternauts()
    {
        return $this->blockInternauts;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Block
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

    /**
     * Add blockPosition
     *
     * @param \AppBundle\Entity\Position $blockPosition
     *
     * @return Block
     */
    public function addBlockPosition(\AppBundle\Entity\Position $blockPosition)
    {
        $this->blockPositions[] = $blockPosition;

        return $this;
    }

    /**
     * Remove blockPosition
     *
     * @param \AppBundle\Entity\Position $blockPosition
     */
    public function removeBlockPosition(\AppBundle\Entity\Position $blockPosition)
    {
        $this->blockPositions->removeElement($blockPosition);
    }

    /**
     * Get blockPositions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBlockPositions()
    {
        return $this->blockPositions;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Block
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add position
     *
     * @param \AppBundle\Entity\Position $position
     *
     * @return Block
     */
    public function addPosition(\AppBundle\Entity\Position $position)
    {
        $this->positions[] = $position;

        return $this;
    }

    /**
     * Remove position
     *
     * @param \AppBundle\Entity\Position $position
     */
    public function removePosition(\AppBundle\Entity\Position $position)
    {
        $this->positions->removeElement($position);
    }

    /**
     * Get positions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPositions()
    {
        return $this->positions;
    }
}
