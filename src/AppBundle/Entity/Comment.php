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
     * @ORM\Column(name="commentRating", type="integer")
     */
    private $commentRating;

    /**
     * @var string
     *
     * @ORM\Column(name="commentTitle", type="string", length=255)
     */
    private $commentTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="commentContent", type="string", length=500)
     */
    private $commentContent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="commentDate", type="date")
     */
    private $commentDate;


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
}

