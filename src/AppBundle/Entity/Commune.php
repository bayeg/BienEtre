<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commune
 *
 * @ORM\Table(name="commune")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommuneRepository")
 */
class Commune
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
     * @ORM\Column(name="commune", type="string", length=255)
     */
    private $commune;

    /**
     *@var ArrayCollection
     *@ORM\OneToMany(targetEntity="AppBundle\Entity\User", mappedBy="userCommune")
     */
    private $communeUsers;

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
     * Set commune
     *
     * @param string $commune
     *
     * @return Commune
     */
    public function setCommune($commune)
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * Get commune
     *
     * @return string
     */
    public function getCommune()
    {
        return $this->commune;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->communeUsers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add communeUser
     *
     * @param \AppBundle\Entity\User $communeUser
     *
     * @return Commune
     */
    public function addCommuneUser(\AppBundle\Entity\User $communeUser)
    {
        $this->communeUsers[] = $communeUser;

        return $this;
    }

    /**
     * Remove communeUser
     *
     * @param \AppBundle\Entity\User $communeUser
     */
    public function removeCommuneUser(\AppBundle\Entity\User $communeUser)
    {
        $this->communeUsers->removeElement($communeUser);
    }

    /**
     * Get communeUsers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommuneUsers()
    {
        return $this->communeUsers;
    }
}
