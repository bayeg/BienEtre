<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PromotionRepository")
 */
class Promotion
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
     * @ORM\Column(name="promotionName", type="string", length=255)
     */
    private $promotionName;

    /**
     * @var string
     *
     * @ORM\Column(name="promotionDescription", type="string", length=255)
     */
    private $promotionDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="promotionPDF", type="string", length=255)
     */
    private $promotionPDF;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="promotionStart", type="date")
     */
    private $promotionStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="promotionEnd", type="date")
     */
    private $promotionEnd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="promotionShowStart", type="date")
     */
    private $promotionShowStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="promotionShowEnd", type="date")
     */
    private $promotionShowEnd;


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
     * Set promotionName
     *
     * @param string $promotionName
     *
     * @return Promotion
     */
    public function setPromotionName($promotionName)
    {
        $this->promotionName = $promotionName;

        return $this;
    }

    /**
     * Get promotionName
     *
     * @return string
     */
    public function getPromotionName()
    {
        return $this->promotionName;
    }

    /**
     * Set promotionDescription
     *
     * @param string $promotionDescription
     *
     * @return Promotion
     */
    public function setPromotionDescription($promotionDescription)
    {
        $this->promotionDescription = $promotionDescription;

        return $this;
    }

    /**
     * Get promotionDescription
     *
     * @return string
     */
    public function getPromotionDescription()
    {
        return $this->promotionDescription;
    }

    /**
     * Set promotionPDF
     *
     * @param string $promotionPDF
     *
     * @return Promotion
     */
    public function setPromotionPDF($promotionPDF)
    {
        $this->promotionPDF = $promotionPDF;

        return $this;
    }

    /**
     * Get promotionPDF
     *
     * @return string
     */
    public function getPromotionPDF()
    {
        return $this->promotionPDF;
    }

    /**
     * Set promotionStart
     *
     * @param \DateTime $promotionStart
     *
     * @return Promotion
     */
    public function setPromotionStart($promotionStart)
    {
        $this->promotionStart = $promotionStart;

        return $this;
    }

    /**
     * Get promotionStart
     *
     * @return \DateTime
     */
    public function getPromotionStart()
    {
        return $this->promotionStart;
    }

    /**
     * Set promotionEnd
     *
     * @param \DateTime $promotionEnd
     *
     * @return Promotion
     */
    public function setPromotionEnd($promotionEnd)
    {
        $this->promotionEnd = $promotionEnd;

        return $this;
    }

    /**
     * Get promotionEnd
     *
     * @return \DateTime
     */
    public function getPromotionEnd()
    {
        return $this->promotionEnd;
    }

    /**
     * Set promotionShowStart
     *
     * @param \DateTime $promotionShowStart
     *
     * @return Promotion
     */
    public function setPromotionShowStart($promotionShowStart)
    {
        $this->promotionShowStart = $promotionShowStart;

        return $this;
    }

    /**
     * Get promotionShowStart
     *
     * @return \DateTime
     */
    public function getPromotionShowStart()
    {
        return $this->promotionShowStart;
    }

    /**
     * Set promotionShowEnd
     *
     * @param \DateTime $promotionShowEnd
     *
     * @return Promotion
     */
    public function setPromotionShowEnd($promotionShowEnd)
    {
        $this->promotionShowEnd = $promotionShowEnd;

        return $this;
    }

    /**
     * Get promotionShowEnd
     *
     * @return \DateTime
     */
    public function getPromotionShowEnd()
    {
        return $this->promotionShowEnd;
    }
}

