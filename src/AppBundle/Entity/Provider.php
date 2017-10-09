<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provider
 *
 * @ORM\Table(name="provider")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProviderRepository")
 */
class Provider
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
     * @ORM\Column(name="providerName", type="string", length=255)
     */
    private $providerName;

    /**
     * @var string
     *
     * @ORM\Column(name="providerWebsite", type="string", length=255)
     */
    private $providerWebsite;

    /**
     * @var string
     *
     * @ORM\Column(name="providerEmail", type="string", length=255)
     */
    private $providerEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="providerPhone", type="string", length=255)
     */
    private $providerPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="providerVAT", type="string", length=255)
     */
    private $providerVAT;


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
     * Set providerName
     *
     * @param string $providerName
     *
     * @return Provider
     */
    public function setProviderName($providerName)
    {
        $this->providerName = $providerName;

        return $this;
    }

    /**
     * Get providerName
     *
     * @return string
     */
    public function getProviderName()
    {
        return $this->providerName;
    }

    /**
     * Set providerWebsite
     *
     * @param string $providerWebsite
     *
     * @return Provider
     */
    public function setProviderWebsite($providerWebsite)
    {
        $this->providerWebsite = $providerWebsite;

        return $this;
    }

    /**
     * Get providerWebsite
     *
     * @return string
     */
    public function getProviderWebsite()
    {
        return $this->providerWebsite;
    }

    /**
     * Set providerEmail
     *
     * @param string $providerEmail
     *
     * @return Provider
     */
    public function setProviderEmail($providerEmail)
    {
        $this->providerEmail = $providerEmail;

        return $this;
    }

    /**
     * Get providerEmail
     *
     * @return string
     */
    public function getProviderEmail()
    {
        return $this->providerEmail;
    }

    /**
     * Set providerPhone
     *
     * @param string $providerPhone
     *
     * @return Provider
     */
    public function setProviderPhone($providerPhone)
    {
        $this->providerPhone = $providerPhone;

        return $this;
    }

    /**
     * Get providerPhone
     *
     * @return string
     */
    public function getProviderPhone()
    {
        return $this->providerPhone;
    }

    /**
     * Set providerVAT
     *
     * @param string $providerVAT
     *
     * @return Provider
     */
    public function setProviderVAT($providerVAT)
    {
        $this->providerVAT = $providerVAT;

        return $this;
    }

    /**
     * Get providerVAT
     *
     * @return string
     */
    public function getProviderVAT()
    {
        return $this->providerVAT;
    }
}

