<?php

namespace AppBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceCategory
 *
 * @ORM\Table(name="service_category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ServiceCategoryRepository")
 */
class ServiceCategory
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(name="slug", type="string")
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=500)
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="featured", type="boolean")
     */
    private $featured;

    /**
     * @var bool
     *
     * @ORM\Column(name="validity", type="boolean")
     */
    private $validity;

// ------------------------- Relationship parameters -------------------------

    /**
     * @var Image
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Image", cascade={"persist"})
     */
    private $serviceImage;

    /**
     *@var ArrayCollection
     *@ORM\ManyToMany(targetEntity="AppBundle\Entity\Provider", mappedBy="serviceCategories")
     */
    private $providers;


    /**
     *@var ArrayCollection
     *@ORM\OneToMany(targetEntity="AppBundle\Entity\Promotion", mappedBy="serviceCategory")
     */
    private $promotions;


// ------------------------- Methods -------------------------

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->providers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->promotions = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return ServiceCategory
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
     * Set description
     *
     * @param string $description
     *
     * @return ServiceCategory
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
     * Set featured
     *
     * @param boolean $featured
     *
     * @return ServiceCategory
     */
    public function setFeatured($featured)
    {
        $this->featured = $featured;

        return $this;
    }

    /**
     * Get featured
     *
     * @return boolean
     */
    public function getFeatured()
    {
        return $this->featured;
    }

    /**
     * Set validity
     *
     * @param boolean $validity
     *
     * @return ServiceCategory
     */
    public function setValidity($validity)
    {
        $this->validity = $validity;

        return $this;
    }

    /**
     * Get validity
     *
     * @return boolean
     */
    public function getValidity()
    {
        return $this->validity;
    }

    /**
     * Set serviceImage
     *
     * @param \AppBundle\Entity\Image $serviceImage
     *
     * @return ServiceCategory
     */
    public function setServiceImage(\AppBundle\Entity\Image $serviceImage = null)
    {
        $this->serviceImage = $serviceImage;

        return $this;
    }

    /**
     * Get serviceImage
     *
     * @return \AppBundle\Entity\Image
     */
    public function getServiceImage()
    {
        return $this->serviceImage;
    }

    /**
     * Add provider
     *
     * @param \AppBundle\Entity\Provider $provider
     *
     * @return ServiceCategory
     */
    public function addProvider(\AppBundle\Entity\Provider $provider)
    {
        $this->providers[] = $provider;

        return $this;
    }

    /**
     * Remove provider
     *
     * @param \AppBundle\Entity\Provider $provider
     */
    public function removeProvider(\AppBundle\Entity\Provider $provider)
    {
        $this->providers->removeElement($provider);
    }

    /**
     * Get providers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProviders()
    {
        return $this->providers;
    }

    /**
     * Add promotion
     *
     * @param \AppBundle\Entity\Promotion $promotion
     *
     * @return ServiceCategory
     */
    public function addPromotion(\AppBundle\Entity\Promotion $promotion)
    {
        $this->promotions[] = $promotion;

        return $this;
    }

    /**
     * Remove promotion
     *
     * @param \AppBundle\Entity\Promotion $promotion
     */
    public function removePromotion(\AppBundle\Entity\Promotion $promotion)
    {
        $this->promotions->removeElement($promotion);
    }

    /**
     * Get promotions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPromotions()
    {
        return $this->promotions;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return ServiceCategory
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    public function __toString()
    {
        return $this->getName();
    }
}
