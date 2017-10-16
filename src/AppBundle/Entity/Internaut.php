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
     * @ORM\Column(name="internaut_last_name", type="string", length=255)
     */
    private $internautLastName;

    /**
     * @var string
     *
     * @ORM\Column(name="internaut_first_name", type="string", length=255)
     */
    private $internautFirstName;

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
    private $internautImage;

    /**
     *@var ArrayCollection
     *@ORM\ManyToMany(targetEntity="AppBundle\Entity\Provider")
     */
    private $internautProviders;

    /**
     *@var ArrayCollection
     *@ORM\OneToMany(targetEntity="AppBundle\Entity\Abuse", mappedBy="abuseInternaut")
     */
    private $internautAbuses;

    /**
     *@var ArrayCollection
     *@ORM\OneToMany(targetEntity="AppBundle\Entity\Comment", mappedBy="commentInternaut")
     */
    private $internautComments;

    /**
     *@var ArrayCollection
     *@ORM\ManyToMany(targetEntity="AppBundle\Entity\Block")
     */
    private $internautBlocks;






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
}
