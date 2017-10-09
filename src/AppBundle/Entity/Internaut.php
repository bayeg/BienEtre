<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Internaut
 *
 * @ORM\Table(name="internaut")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InternautRepository")
 */
class Internaut extends User
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
     * @ORM\Column(name="internautLastName", type="string", length=255)
     */
    private $internautLastName;

    /**
     * @var string
     *
     * @ORM\Column(name="internautFirstName", type="string", length=255)
     */
    private $internautFirstName;

    /**
     * @var bool
     *
     * @ORM\Column(name="newsletter", type="boolean")
     */
    private $newsletter;


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
     * Set internautLastName
     *
     * @param string $internautLastName
     *
     * @return Internaut
     */
    public function setInternautLastName($internautLastName)
    {
        $this->internautLastName = $internautLastName;

        return $this;
    }

    /**
     * Get internautLastName
     *
     * @return string
     */
    public function getInternautLastName()
    {
        return $this->internautLastName;
    }

    /**
     * Set internautFirstName
     *
     * @param string $internautFirstName
     *
     * @return Internaut
     */
    public function setInternautFirstName($internautFirstName)
    {
        $this->internautFirstName = $internautFirstName;

        return $this;
    }

    /**
     * Get internautFirstName
     *
     * @return string
     */
    public function getInternautFirstName()
    {
        return $this->internautFirstName;
    }

    /**
     * Set newsletter
     *
     * @param boolean $newsletter
     *
     * @return Internaut
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get newsletter
     *
     * @return bool
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }
}

