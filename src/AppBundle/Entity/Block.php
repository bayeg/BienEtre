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
     * @ORM\Column(name="blockName", type="string", length=255)
     */
    private $blockName;

    /**
     * @var string
     *
     * @ORM\Column(name="blockDescription", type="string", length=500)
     */
    private $blockDescription;


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
}

