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

// ------------------------- Column parameters -------------------------

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    private $firstName;

    /**
     * @var bool
     *
     * @ORM\Column(name="newsletter", type="boolean")
     */
    private $newsletter;

    /**
     * @var string
     *
     * @ORM\Column(name="my_user_type", type="string")
     */
    private $myUserType;



// ------------------------- Relationship parameters -------------------------

    /**
     * @var Image
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Image")
     */
    private $image;

    /**
     *@var ArrayCollection
     *@ORM\ManyToMany(targetEntity="AppBundle\Entity\Provider", mappedBy="internauts")
     */
    private $providers;

    /**
     *@var ArrayCollection
     *@ORM\OneToMany(targetEntity="AppBundle\Entity\Abuse", mappedBy="internaut")
     */
    private $abuses;

    /**
     *@var ArrayCollection
     *@ORM\OneToMany(targetEntity="AppBundle\Entity\Comment", mappedBy="internaut")
     */
    private $comments;

    /**
     *@var ArrayCollection
     *@ORM\OneToMany(targetEntity="AppBundle\Entity\Position", mappedBy="internaut")
     */
    private $positions;

// ------------------------- Methods -------------------------

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->providers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->abuses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->positions = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Internaut
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Internaut
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
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
     * @return boolean
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Set image
     *
     * @param \AppBundle\Entity\Image $image
     *
     * @return Internaut
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
     * Add provider
     *
     * @param \AppBundle\Entity\Provider $provider
     *
     * @return Internaut
     */
    public function addProvider(\AppBundle\Entity\Provider $provider)
    {
        $this->providers[] = $provider;

        return $this;
    }

    /**
     * Remove provider
     *
     * @param \AppBundle\Entity\Provider $provider
     */
    public function removeProvider(\AppBundle\Entity\Provider $provider)
    {
        $this->providers->removeElement($provider);
    }

    /**
     * Get providers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProviders()
    {
        return $this->providers;
    }

    /**
     * Add abus
     *
     * @param \AppBundle\Entity\Abuse $abus
     *
     * @return Internaut
     */
    public function addAbus(\AppBundle\Entity\Abuse $abus)
    {
        $this->abuses[] = $abus;

        return $this;
    }

    /**
     * Remove abus
     *
     * @param \AppBundle\Entity\Abuse $abus
     */
    public function removeAbus(\AppBundle\Entity\Abuse $abus)
    {
        $this->abuses->removeElement($abus);
    }

    /**
     * Get abuses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAbuses()
    {
        return $this->abuses;
    }

    /**
     * Add comment
     *
     * @param \AppBundle\Entity\Comment $comment
     *
     * @return Internaut
     */
    public function addComment(\AppBundle\Entity\Comment $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \AppBundle\Entity\Comment $comment
     */
    public function removeComment(\AppBundle\Entity\Comment $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Add position
     *
     * @param \AppBundle\Entity\Position $position
     *
     * @return Internaut
     */
    public function addPosition(\AppBundle\Entity\Position $position)
    {
        $this->positions[] = $position;

        return $this;
    }

    /**
     * Remove position
     *
     * @param \AppBundle\Entity\Position $position
     */
    public function removePosition(\AppBundle\Entity\Position $position)
    {
        $this->positions->removeElement($position);
    }

    /**
     * Get positions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPositions()
    {
        return $this->positions;
    }

    /**
     * @return mixed
     */
    public function getMyUserType()
    {
        return $this->myUserType;
    }

    /**
     * @param mixed $myUserType
     */
    public function setMyUserType($myUserType)
    {
        $this->myUserType = $myUserType;
    }


    public function __toString()
    {
        return $this->getEmail();
    }
}
