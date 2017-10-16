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
     * @ORM\Column(name="image_order", type="integer")
     */
    private $imageOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="image_url", type="string", length=255)
     */
    private $imageURL;

    /**
     *@var Provider
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\Provider", inversedBy="providerLogos")
     */
    private $providerLogos;

    /**
     *@var Provider
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\Provider", inversedBy="providerPhotos")
     */
    private $providerPhotos;

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

    /**
     * Set providerLogos
     *
     * @param \AppBundle\Entity\Provider $providerLogos
     *
     * @return Image
     */
    public function setProviderLogos(\AppBundle\Entity\Provider $providerLogos = null)
    {
        $this->providerLogos = $providerLogos;

        return $this;
    }

    /**
     * Get providerLogos
     *
     * @return \AppBundle\Entity\Provider
     */
    public function getProviderLogos()
    {
        return $this->providerLogos;
    }

    /**
     * Set providerPhotos
     *
     * @param \AppBundle\Entity\Provider $providerPhotos
     *
     * @return Image
     */
    public function setProviderPhotos(\AppBundle\Entity\Provider $providerPhotos = null)
    {
        $this->providerPhotos = $providerPhotos;

        return $this;
    }

    /**
     * Get providerPhotos
     *
     * @return \AppBundle\Entity\Provider
     */
    public function getProviderPhotos()
    {
        return $this->providerPhotos;
    }
}
