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

    /**
     * Set internautImage
     *
     * @param \AppBundle\Entity\Image $internautImage
     *
     * @return Internaut
     */
    public function setInternautImage(\AppBundle\Entity\Image $internautImage = null)
    {
        $this->internautImage = $internautImage;

        return $this;
    }

    /**
     * Get internautImage
     *
     * @return \AppBundle\Entity\Image
     */
    public function getInternautImage()
    {
        return $this->internautImage;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->internautProviders = new \Doctrine\Common\Collections\ArrayCollection();
        $this->internautAbuses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->internautComments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->internautBlocks = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add internautProvider
     *
     * @param \AppBundle\Entity\Provider $internautProvider
     *
     * @return Internaut
     */
    public function addInternautProvider(\AppBundle\Entity\Provider $internautProvider)
    {
        $this->internautProviders[] = $internautProvider;

        return $this;
    }

    /**
     * Remove internautProvider
     *
     * @param \AppBundle\Entity\Provider $internautProvider
     */
    public function removeInternautProvider(\AppBundle\Entity\Provider $internautProvider)
    {
        $this->internautProviders->removeElement($internautProvider);
    }

    /**
     * Get internautProviders
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInternautProviders()
    {
        return $this->internautProviders;
    }

    /**
     * Add internautAbus
     *
     * @param \AppBundle\Entity\Abuse $internautAbus
     *
     * @return Internaut
     */
    public function addInternautAbus(\AppBundle\Entity\Abuse $internautAbus)
    {
        $this->internautAbuses[] = $internautAbus;

        return $this;
    }

    /**
     * Remove internautAbus
     *
     * @param \AppBundle\Entity\Abuse $internautAbus
     */
    public function removeInternautAbus(\AppBundle\Entity\Abuse $internautAbus)
    {
        $this->internautAbuses->removeElement($internautAbus);
    }

    /**
     * Get internautAbuses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInternautAbuses()
    {
        return $this->internautAbuses;
    }

    /**
     * Add internautComment
     *
     * @param \AppBundle\Entity\Comment $internautComment
     *
     * @return Internaut
     */
    public function addInternautComment(\AppBundle\Entity\Comment $internautComment)
    {
        $this->internautComments[] = $internautComment;

        return $this;
    }

    /**
     * Remove internautComment
     *
     * @param \AppBundle\Entity\Comment $internautComment
     */
    public function removeInternautComment(\AppBundle\Entity\Comment $internautComment)
    {
        $this->internautComments->removeElement($internautComment);
    }

    /**
     * Get internautComments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInternautComments()
    {
        return $this->internautComments;
    }

    /**
     * Add internautBlock
     *
     * @param \AppBundle\Entity\Block $internautBlock
     *
     * @return Internaut
     */
    public function addInternautBlock(\AppBundle\Entity\Block $internautBlock)
    {
        $this->internautBlocks[] = $internautBlock;

        return $this;
    }

    /**
     * Remove internautBlock
     *
     * @param \AppBundle\Entity\Block $internautBlock
     */
    public function removeInternautBlock(\AppBundle\Entity\Block $internautBlock)
    {
        $this->internautBlocks->removeElement($internautBlock);
    }

    /**
     * Get internautBlocks
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInternautBlocks()
    {
        return $this->internautBlocks;
    }

    /**
     * Add internautPosition
     *
     * @param \AppBundle\Entity\Position $internautPosition
     *
     * @return Internaut
     */
    public function addInternautPosition(\AppBundle\Entity\Position $internautPosition)
    {
        $this->internautPositions[] = $internautPosition;

        return $this;
    }

    /**
     * Remove internautPosition
     *
     * @param \AppBundle\Entity\Position $internautPosition
     */
    public function removeInternautPosition(\AppBundle\Entity\Position $internautPosition)
    {
        $this->internautPositions->removeElement($internautPosition);
    }

    /**
     * Get internautPositions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInternautPositions()
    {
        return $this->internautPositions;
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
}
