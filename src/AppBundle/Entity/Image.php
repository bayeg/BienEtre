<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ImageRepository")
 */
class Image
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
     * @ORM\Column(name="imageOrder", type="integer")
     */
    private $imageOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="imageURL", type="string", length=255)
     */
    private $imageURL;


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
     * Set imageOrder
     *
     * @param integer $imageOrder
     *
     * @return Image
     */
    public function setImageOrder($imageOrder)
    {
        $this->imageOrder = $imageOrder;

        return $this;
    }

    /**
     * Get imageOrder
     *
     * @return int
     */
    public function getImageOrder()
    {
        return $this->imageOrder;
    }

    /**
     * Set imageURL
     *
     * @param string $imageURL
     *
     * @return Image
     */
    public function setImageURL($imageURL)
    {
        $this->imageURL = $imageURL;

        return $this;
    }

    /**
     * Get imageURL
     *
     * @return string
     */
    public function getImageURL()
    {
        return $this->imageURL;
    }
}

