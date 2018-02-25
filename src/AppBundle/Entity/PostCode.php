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
     * @ORM\Column(name="post_code", type="string", length=25)
     */
    private $postCode;

// ------------------------- Relationship parameters -------------------------

//    /**
//     *@var ArrayCollection
//     *@ORM\OneToMany(targetEntity="AppBundle\Entity\User", mappedBy="postCode")
//     */
//    private $users;


// ------------------------- Methods -------------------------


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return PostCode
     */
    public function addUser(\AppBundle\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \AppBundle\Entity\User $user
     */
    public function removeUser(\AppBundle\Entity\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }

    public function __toString()
    {
        return $this->getPostCode();
    }
}
