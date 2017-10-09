<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abuse
 *
 * @ORM\Table(name="abuse")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AbuseRepository")
 */
class Abuse
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
     * @ORM\Column(name="abuseDescription", type="string", length=500)
     */
    private $abuseDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="abuseDate", type="date")
     */
    private $abuseDate;


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
     * Set abuseDescription
     *
     * @param string $abuseDescription
     *
     * @return Abuse
     */
    public function setAbuseDescription($abuseDescription)
    {
        $this->abuseDescription = $abuseDescription;

        return $this;
    }

    /**
     * Get abuseDescription
     *
     * @return string
     */
    public function getAbuseDescription()
    {
        return $this->abuseDescription;
    }

    /**
     * Set abuseDate
     *
     * @param \DateTime $abuseDate
     *
     * @return Abuse
     */
    public function setAbuseDate($abuseDate)
    {
        $this->abuseDate = $abuseDate;

        return $this;
    }

    /**
     * Get abuseDate
     *
     * @return \DateTime
     */
    public function getAbuseDate()
    {
        return $this->abuseDate;
    }
}

