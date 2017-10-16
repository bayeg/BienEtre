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
     * @ORM\Column(name="comment_rating", type="integer")
     */
    private $commentRating;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_title", type="string", length=25)
     */
    private $commentTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_content", type="string", length=255)
     */
    private $commentContent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="comment_date", type="date")
     */
    private $commentDate;

    /**
     *@var Provider
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\Provider", inversedBy="providerComments")
     */
    private $commentProvider;

    /**
     *@var ArrayCollection
     *@ORM\OneToMany(targetEntity="AppBundle\Entity\Abuse", mappedBy="abuseComment")
     */
    private $commentAbuses;

    /**
     *@var Internaut
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\Internaut", inversedBy="internautComments")
     */
    private $commentInternaut;


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
     * Set commentRating
     *
     * @param integer $commentRating
     *
     * @return Comment
     */
    public function setCommentRating($commentRating)
    {
        $this->commentRating = $commentRating;

        return $this;
    }

    /**
     * Get commentRating
     *
     * @return int
     */
    public function getCommentRating()
    {
        return $this->commentRating;
    }

    /**
     * Set commentTitle
     *
     * @param string $commentTitle
     *
     * @return Comment
     */
    public function setCommentTitle($commentTitle)
    {
        $this->commentTitle = $commentTitle;

        return $this;
    }

    /**
     * Get commentTitle
     *
     * @return string
     */
    public function getCommentTitle()
    {
        return $this->commentTitle;
    }

    /**
     * Set commentContent
     *
     * @param string $commentContent
     *
     * @return Comment
     */
    public function setCommentContent($commentContent)
    {
        $this->commentContent = $commentContent;

        return $this;
    }

    /**
     * Get commentContent
     *
     * @return string
     */
    public function getCommentContent()
    {
        return $this->commentContent;
    }

    /**
     * Set commentDate
     *
     * @param \DateTime $commentDate
     *
     * @return Comment
     */
    public function setCommentDate($commentDate)
    {
        $this->commentDate = $commentDate;

        return $this;
    }

    /**
     * Get commentDate
     *
     * @return \DateTime
     */
    public function getCommentDate()
    {
        return $this->commentDate;
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
}
