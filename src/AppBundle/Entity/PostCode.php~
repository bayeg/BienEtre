<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostCode
 *
 * @ORM\Table(name="post_code")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostCodeRepository")
 */
class PostCode
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
     * @ORM\Column(name="post_code", type="string", length=255)
     */
    private $postCode;

    /**
     *@var ArrayCollection
     *@ORM\OneToMany(targetEntity="AppBundle\Entity\User", mappedBy="userPostCode")
     */
    private $postCodeUsers;

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
     * Set postCode
     *
     * @param string $postCode
     *
     * @return PostCode
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * Get postCode
     *
     * @return string
     */
    public function getPostCode()
    {
        return $this->postCode;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->postCodeUsers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add postCodeUser
     *
     * @param \AppBundle\Entity\User $postCodeUser
     *
     * @return PostCode
     */
    public function addPostCodeUser(\AppBundle\Entity\User $postCodeUser)
    {
        $this->postCodeUsers[] = $postCodeUser;

        return $this;
    }

    /**
     * Remove postCodeUser
     *
     * @param \AppBundle\Entity\User $postCodeUser
     */
    public function removePostCodeUser(\AppBundle\Entity\User $postCodeUser)
    {
        $this->postCodeUsers->removeElement($postCodeUser);
    }

    /**
     * Get postCodeUsers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPostCodeUsers()
    {
        return $this->postCodeUsers;
    }
}
