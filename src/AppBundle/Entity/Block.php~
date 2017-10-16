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
     * @ORM\Column(name="block_name", type="string", length=255)
     */
    private $blockName;

    /**
     * @var string
     *
     * @ORM\Column(name="block_description", type="string", length=500)
     */
    private $blockDescription;

    /**
     *@var ArrayCollection
     *@ORM\ManyToMany(targetEntity="AppBundle\Entity\Internaut")
     */
    private $blockInternauts;





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
     * Set blockName
     *
     * @param string $blockName
     *
     * @return Block
     */
    public function setBlockName($blockName)
    {
        $this->blockName = $blockName;

        return $this;
    }

    /**
     * Get blockName
     *
     * @return string
     */
    public function getBlockName()
    {
        return $this->blockName;
    }

    /**
     * Set blockDescription
     *
     * @param string $blockDescription
     *
     * @return Block
     */
    public function setBlockDescription($blockDescription)
    {
        $this->blockDescription = $blockDescription;

        return $this;
    }

    /**
     * Get blockDescription
     *
     * @return string
     */
    public function getBlockDescription()
    {
        return $this->blockDescription;
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
}
