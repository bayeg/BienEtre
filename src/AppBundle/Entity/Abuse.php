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
     * @ORM\Column(name="description", type="string", length=500)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

// ------------------------- Relationship parameters -------------------------

    /**
     *@var Comment
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\Comment", inversedBy="abuses")
     */
    private $comment;


    /**
     *@var Internaut
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\Internaut", inversedBy="abuses")
     */
    private $internaut;


// ------------------------- Methods -------------------------


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
     * Set description
     *
     * @param string $description
     *
     * @return Abuse
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Abuse
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set comment
     *
     * @param \AppBundle\Entity\Comment $comment
     *
     * @return Abuse
     */
    public function setComment(\AppBundle\Entity\Comment $comment = null)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return \AppBundle\Entity\Comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set internaut
     *
     * @param \AppBundle\Entity\Internaut $internaut
     *
     * @return Abuse
     */
    public function setInternaut(\AppBundle\Entity\Internaut $internaut = null)
    {
        $this->internaut = $internaut;

        return $this;
    }

    /**
     * Get internaut
     *
     * @return \AppBundle\Entity\Internaut
     */
    public function getInternaut()
    {
        return $this->internaut;
    }

    public function __toString()
    {
        return $this->getDescription();
    }

}
