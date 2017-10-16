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
     * @ORM\Column(name="abuse_description", type="string", length=500)
     */
    private $abuseDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="abuse_date", type="date")
     */
    private $abuseDate;


    /**
     *@var Comment
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\Comment", inversedBy="commentAbuses")
     */
    private $abuseComment;


    /**
     *@var Internaut
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\Internaut", inversedBy="internautAbuses")
     */
    private $abuseInternaut;






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

    /**
     * Set abuseComment
     *
     * @param \AppBundle\Entity\Comment $abuseComment
     *
     * @return Abuse
     */
    public function setAbuseComment(\AppBundle\Entity\Comment $abuseComment = null)
    {
        $this->abuseComment = $abuseComment;

        return $this;
    }

    /**
     * Get abuseComment
     *
     * @return \AppBundle\Entity\Comment
     */
    public function getAbuseComment()
    {
        return $this->abuseComment;
    }

    /**
     * Set abuseInternaut
     *
     * @param \AppBundle\Entity\Internaut $abuseInternaut
     *
     * @return Abuse
     */
    public function setAbuseInternaut(\AppBundle\Entity\Internaut $abuseInternaut = null)
    {
        $this->abuseInternaut = $abuseInternaut;

        return $this;
    }

    /**
     * Get abuseInternaut
     *
     * @return \AppBundle\Entity\Internaut
     */
    public function getAbuseInternaut()
    {
        return $this->abuseInternaut;
    }
}
