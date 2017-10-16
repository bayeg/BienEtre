<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceCategory
 *
 * @ORM\Table(name="service_category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ServiceCategoryRepository")
 */
class ServiceCategory
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
     * @ORM\Column(name="service_name", type="string", length=255)
     */
    private $serviceName;

    /**
     * @var string
     *
     * @ORM\Column(name="service_description", type="string", length=500)
     */
    private $serviceDescription;

    /**
     * @var bool
     *
     * @ORM\Column(name="service_featured", type="boolean")
     */
    private $serviceFeatured;

    /**
     * @var bool
     *
     * @ORM\Column(name="service_validity", type="boolean")
     */
    private $serviceValidity;

    /**
     * @var Image
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Image")
     */
    private $image;

    /**
     *@var ArrayCollection
     *@ORM\ManyToMany(targetEntity="AppBundle\Entity\Provider")
     */
    private $serviceCategoryProviders;


    /**
     *@var ArrayCollection
     *@ORM\OneToMany(targetEntity="AppBundle\Entity\Promotion", mappedBy="promotionServiceCategory")
     */
    private $serviceCategoryPromotions;


    

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
     * Set serviceName
     *
     * @param string $serviceName
     *
     * @return ServiceCategory
     */
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;

        return $this;
    }

    /**
     * Get serviceName
     *
     * @return string
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * Set serviceDescription
     *
     * @param string $serviceDescription
     *
     * @return ServiceCategory
     */
    public function setServiceDescription($serviceDescription)
    {
        $this->serviceDescription = $serviceDescription;

        return $this;
    }

    /**
     * Get serviceDescription
     *
     * @return string
     */
    public function getServiceDescription()
    {
        return $this->serviceDescription;
    }

    /**
     * Set serviceFeatured
     *
     * @param boolean $serviceFeatured
     *
     * @return ServiceCategory
     */
    public function setServiceFeatured($serviceFeatured)
    {
        $this->serviceFeatured = $serviceFeatured;

        return $this;
    }

    /**
     * Get serviceFeatured
     *
     * @return bool
     */
    public function getServiceFeatured()
    {
        return $this->serviceFeatured;
    }

    /**
     * Set serviceValidity
     *
     * @param boolean $serviceValidity
     *
     * @return ServiceCategory
     */
    public function setServiceValidity($serviceValidity)
    {
        $this->serviceValidity = $serviceValidity;

        return $this;
    }

    /**
     * Get serviceValidity
     *
     * @return bool
     */
    public function getServiceValidity()
    {
        return $this->serviceValidity;
    }

    /**
     * Set image
     *
     * @param \AppBundle\Entity\Image $image
     *
     * @return ServiceCategory
     */
    public function setImage(\AppBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \AppBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->serviceCategoryProviders = new \Doctrine\Common\Collections\ArrayCollection();
        $this->serviceCategoryPromotions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add serviceCategoryProvider
     *
     * @param \AppBundle\Entity\Provider $serviceCategoryProvider
     *
     * @return ServiceCategory
     */
    public function addServiceCategoryProvider(\AppBundle\Entity\Provider $serviceCategoryProvider)
    {
        $this->serviceCategoryProviders[] = $serviceCategoryProvider;

        return $this;
    }

    /**
     * Remove serviceCategoryProvider
     *
     * @param \AppBundle\Entity\Provider $serviceCategoryProvider
     */
    public function removeServiceCategoryProvider(\AppBundle\Entity\Provider $serviceCategoryProvider)
    {
        $this->serviceCategoryProviders->removeElement($serviceCategoryProvider);
    }

    /**
     * Get serviceCategoryProviders
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getServiceCategoryProviders()
    {
        return $this->serviceCategoryProviders;
    }

    /**
     * Add serviceCategoryPromotion
     *
     * @param \AppBundle\Entity\Promotion $serviceCategoryPromotion
     *
     * @return ServiceCategory
     */
    public function addServiceCategoryPromotion(\AppBundle\Entity\Promotion $serviceCategoryPromotion)
    {
        $this->serviceCategoryPromotions[] = $serviceCategoryPromotion;

        return $this;
    }

    /**
     * Remove serviceCategoryPromotion
     *
     * @param \AppBundle\Entity\Promotion $serviceCategoryPromotion
     */
    public function removeServiceCategoryPromotion(\AppBundle\Entity\Promotion $serviceCategoryPromotion)
    {
        $this->serviceCategoryPromotions->removeElement($serviceCategoryPromotion);
    }

    /**
     * Get serviceCategoryPromotions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getServiceCategoryPromotions()
    {
        return $this->serviceCategoryPromotions;
    }
}
