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
     * @ORM\Column(name="promotion_name", type="string", length=255)
     */
    private $promotionName;

    /**
     * @var string
     *
     * @ORM\Column(name="promotion_description", type="string", length=255)
     */
    private $promotionDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="promotion_pdf", type="string", length=255)
     */
    private $promotionPDF;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="promotion_start", type="date")
     */
    private $promotionStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="promotion_end", type="date")
     */
    private $promotionEnd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="promotion_show_start", type="date")
     */
    private $promotionShowStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="promotion_show_end", type="date")
     */
    private $promotionShowEnd;

    /**
     *@var Provider
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\Provider", inversedBy="providerPromotions")
     */
    private $promotionProvider;

    /**
     *@var ServiceCategory
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\ServiceCategory", inversedBy="serviceCategoryPromotions")
     */
    private $promotionServiceCategory;



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

    /**
     * Set promotionProvider
     *
     * @param \AppBundle\Entity\Provider $promotionProvider
     *
     * @return Promotion
     */
    public function setPromotionProvider(\AppBundle\Entity\Provider $promotionProvider = null)
    {
        $this->promotionProvider = $promotionProvider;

        return $this;
    }

    /**
     * Get promotionProvider
     *
     * @return \AppBundle\Entity\Provider
     */
    public function getPromotionProvider()
    {
        return $this->promotionProvider;
    }

    /**
     * Set promotionServiceCategory
     *
     * @param \AppBundle\Entity\ServiceCategory $promotionServiceCategory
     *
     * @return Promotion
     */
    public function setPromotionServiceCategory(\AppBundle\Entity\ServiceCategory $promotionServiceCategory = null)
    {
        $this->promotionServiceCategory = $promotionServiceCategory;

        return $this;
    }

    /**
     * Get promotionServiceCategory
     *
     * @return \AppBundle\Entity\ServiceCategory
     */
    public function getPromotionServiceCategory()
    {
        return $this->promotionServiceCategory;
    }
}
