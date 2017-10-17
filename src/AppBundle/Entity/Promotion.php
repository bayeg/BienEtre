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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="pdf", type="string", length=255)
     */
    private $pdf;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start", type="date")
     */
    private $start;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end", type="date")
     */
    private $end;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="show_start", type="date")
     */
    private $showStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="show_end", type="date")
     */
    private $showEnd;

    /**
     *@var Provider
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\Provider", inversedBy="promotions")
     */
    private $provider;

    /**
     *@var ServiceCategory
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\ServiceCategory", inversedBy="promotions")
     */
    private $serviceCategory;



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

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Promotion
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Promotion
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set pdf
     *
     * @param string $pdf
     *
     * @return Promotion
     */
    public function setPdf($pdf)
    {
        $this->pdf = $pdf;

        return $this;
    }

    /**
     * Get pdf
     *
     * @return string
     */
    public function getPdf()
    {
        return $this->pdf;
    }

    /**
     * Set start
     *
     * @param \DateTime $start
     *
     * @return Promotion
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     *
     * @return Promotion
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set showStart
     *
     * @param \DateTime $showStart
     *
     * @return Promotion
     */
    public function setShowStart($showStart)
    {
        $this->showStart = $showStart;

        return $this;
    }

    /**
     * Get showStart
     *
     * @return \DateTime
     */
    public function getShowStart()
    {
        return $this->showStart;
    }

    /**
     * Set showEnd
     *
     * @param \DateTime $showEnd
     *
     * @return Promotion
     */
    public function setShowEnd($showEnd)
    {
        $this->showEnd = $showEnd;

        return $this;
    }

    /**
     * Get showEnd
     *
     * @return \DateTime
     */
    public function getShowEnd()
    {
        return $this->showEnd;
    }

    /**
     * Set provider
     *
     * @param \AppBundle\Entity\Provider $provider
     *
     * @return Promotion
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
     * Set serviceCategory
     *
     * @param \AppBundle\Entity\ServiceCategory $serviceCategory
     *
     * @return Promotion
     */
    public function setServiceCategory(\AppBundle\Entity\ServiceCategory $serviceCategory = null)
    {
        $this->serviceCategory = $serviceCategory;

        return $this;
    }

    /**
     * Get serviceCategory
     *
     * @return \AppBundle\Entity\ServiceCategory
     */
    public function getServiceCategory()
    {
        return $this->serviceCategory;
    }
}
