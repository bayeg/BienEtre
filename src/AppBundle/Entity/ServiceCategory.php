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
     * @ORM\Column(name="serviceName", type="string", length=255)
     */
    private $serviceName;

    /**
     * @var string
     *
     * @ORM\Column(name="serviceDescription", type="string", length=500)
     */
    private $serviceDescription;

    /**
     * @var bool
     *
     * @ORM\Column(name="serviceFeatured", type="boolean")
     */
    private $serviceFeatured;

    /**
     * @var bool
     *
     * @ORM\Column(name="serviceValidity", type="boolean")
     */
    private $serviceValidity;


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
}

