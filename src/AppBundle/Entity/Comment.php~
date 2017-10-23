<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommentRepository")
 */
class Comment
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
     * @var int
     *
     * @ORM\Column(name="rating", type="integer")
     */
    private $rating;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=25)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     *@var Provider
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\Provider", inversedBy="comments")
     */
    private $provider;

    /**
     *@var ArrayCollection
     *@ORM\OneToMany(targetEntity="AppBundle\Entity\Abuse", mappedBy="comment")
     */
    private $abuses;

    /**
     *@var Internaut
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\Internaut", inversedBy="comments")
     */
    private $internaut;


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
     * Constructor
     */
    public function __construct()
    {
        $this->commentAbuses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set commentProvider
     *
     * @param \AppBundle\Entity\Provider $commentProvider
     *
     * @return Comment
     */
    public function setCommentProvider(\AppBundle\Entity\Provider $commentProvider = null)
    {
        $this->commentProvider = $commentProvider;

        return $this;
    }

    /**
     * Get commentProvider
     *
     * @return \AppBundle\Entity\Provider
     */
    public function getCommentProvider()
    {
        return $this->commentProvider;
    }

    /**
     * Add commentAbus
     *
     * @param \AppBundle\Entity\Abuse $commentAbus
     *
     * @return Comment
     */
    public function addCommentAbus(\AppBundle\Entity\Abuse $commentAbus)
    {
        $this->commentAbuses[] = $commentAbus;

        return $this;
    }

    /**
     * Remove commentAbus
     *
     * @param \AppBundle\Entity\Abuse $commentAbus
     */
    public function removeCommentAbus(\AppBundle\Entity\Abuse $commentAbus)
    {
        $this->commentAbuses->removeElement($commentAbus);
    }

    /**
     * Get commentAbuses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommentAbuses()
    {
        return $this->commentAbuses;
    }

    /**
     * Set commentInternaut
     *
     * @param \AppBundle\Entity\Internaut $commentInternaut
     *
     * @return Comment
     */
    public function setCommentInternaut(\AppBundle\Entity\Internaut $commentInternaut = null)
    {
        $this->commentInternaut = $commentInternaut;

        return $this;
    }

    /**
     * Get commentInternaut
     *
     * @return \AppBundle\Entity\Internaut
     */
    public function getCommentInternaut()
    {
        return $this->commentInternaut;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     *
     * @return Comment
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Comment
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Comment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Comment
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
     * Set provider
     *
     * @param \AppBundle\Entity\Provider $provider
     *
     * @return Comment
     */
    public function setProvider(\AppBundle\Entity\Provider $provider = null)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Get provider
     *
     * @return \AppBundle\Entity\Provider
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Add abus
     *
     * @param \AppBundle\Entity\Abuse $abus
     *
     * @return Comment
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
     * Set internaut
     *
     * @param \AppBundle\Entity\Internaut $internaut
     *
     * @return Comment
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
}
