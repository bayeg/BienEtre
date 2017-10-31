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
     * @ORM\Column(name="order", type="integer")
     */
    private $order;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     *@var Provider
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\Provider", inversedBy="logos")
     */
    private $logoProvider;

    /**
     *@var Provider
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\Provider", inversedBy="photos")
     */
    private $photoProvider;



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
     * Set order
     *
     * @param integer $order
     *
     * @return Image
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
     * Set url
     *
     * @param string $url
     *
     * @return Image
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set logoProvider
     *
     * @param \AppBundle\Entity\Provider $logoProvider
     *
     * @return Image
     */
    public function setLogoProvider(\AppBundle\Entity\Provider $logoProvider = null)
    {
        $this->logoProvider = $logoProvider;

        return $this;
    }

    /**
     * Get logoProvider
     *
     * @return \AppBundle\Entity\Provider
     */
    public function getLogoProvider()
    {
        return $this->logoProvider;
    }

    /**
     * Set photoProvider
     *
     * @param \AppBundle\Entity\Provider $photoProvider
     *
     * @return Image
     */
    public function setPhotoProvider(\AppBundle\Entity\Provider $photoProvider = null)
    {
        $this->photoProvider = $photoProvider;

        return $this;
    }

    /**
     * Get photoProvider
     *
     * @return \AppBundle\Entity\Provider
     */
    public function getPhotoProvider()
    {
        return $this->photoProvider;
    }
}
