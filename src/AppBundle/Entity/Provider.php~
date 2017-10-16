<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provider
 *
 * @ORM\Table(name="provider")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProviderRepository")
 */
class Provider extends User
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
     * @ORM\Column(name="provider_name", type="string", length=255)
     */
    private $providerName;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_website", type="string", length=255)
     */
    private $providerWebsite;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_email", type="string", length=255)
     */
    private $providerEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_phone", type="string", length=255)
     */
    private $providerPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_vat", type="string", length=255)
     */
    private $providerVAT;

    /**
     *@var ArrayCollection
     *@ORM\OneToMany(targetEntity="AppBundle\Entity\Image", mappedBy="providerLogos")
     */
    private $providerLogos;

    /**
     *@var ArrayCollection
     *@ORM\OneToMany(targetEntity="AppBundle\Entity\Image", mappedBy="providerPhotos")
     */
    private $providerPhotos;

    /**
     *@var ArrayCollection
     *@ORM\ManyToMany(targetEntity="AppBundle\Entity\ServiceCategory")
     */
    private $providerServiceCategories;

    /**
     *@var ArrayCollection
     *@ORM\OneToMany(targetEntity="AppBundle\Entity\Course", mappedBy="courseProvider")
     */
    private $providerCourses;

    /**
     *@var ArrayCollection
     *@ORM\OneToMany(targetEntity="AppBundle\Entity\Promotion", mappedBy="promotionProvider")
     */
    private $providerPromotions;

    /**
     *@var ArrayCollection
     *@ORM\OneToMany(targetEntity="AppBundle\Entity\Comment", mappedBy="commentProvider")
     */
    private $providerComments;


    /**
     *@var ArrayCollection
     *@ORM\ManyToMany(targetEntity="AppBundle\Entity\Internaut")
     */
    private $providerInternauts;




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
     * Set providerName
     *
     * @param string $providerName
     *
     * @return Provider
     */
    public function setProviderName($providerName)
    {
        $this->providerName = $providerName;

        return $this;
    }

    /**
     * Get providerName
     *
     * @return string
     */
    public function getProviderName()
    {
        return $this->providerName;
    }

    /**
     * Set providerWebsite
     *
     * @param string $providerWebsite
     *
     * @return Provider
     */
    public function setProviderWebsite($providerWebsite)
    {
        $this->providerWebsite = $providerWebsite;

        return $this;
    }

    /**
     * Get providerWebsite
     *
     * @return string
     */
    public function getProviderWebsite()
    {
        return $this->providerWebsite;
    }

    /**
     * Set providerEmail
     *
     * @param string $providerEmail
     *
     * @return Provider
     */
    public function setProviderEmail($providerEmail)
    {
        $this->providerEmail = $providerEmail;

        return $this;
    }

    /**
     * Get providerEmail
     *
     * @return string
     */
    public function getProviderEmail()
    {
        return $this->providerEmail;
    }

    /**
     * Set providerPhone
     *
     * @param string $providerPhone
     *
     * @return Provider
     */
    public function setProviderPhone($providerPhone)
    {
        $this->providerPhone = $providerPhone;

        return $this;
    }

    /**
     * Get providerPhone
     *
     * @return string
     */
    public function getProviderPhone()
    {
        return $this->providerPhone;
    }

    /**
     * Set providerVAT
     *
     * @param string $providerVAT
     *
     * @return Provider
     */
    public function setProviderVAT($providerVAT)
    {
        $this->providerVAT = $providerVAT;

        return $this;
    }

    /**
     * Get providerVAT
     *
     * @return string
     */
    public function getProviderVAT()
    {
        return $this->providerVAT;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->providerLogos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->providerPhotos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add providerLogo
     *
     * @param \AppBundle\Entity\Image $providerLogo
     *
     * @return Provider
     */
    public function addProviderLogo(\AppBundle\Entity\Image $providerLogo)
    {
        $this->providerLogos[] = $providerLogo;

        return $this;
    }

    /**
     * Remove providerLogo
     *
     * @param \AppBundle\Entity\Image $providerLogo
     */
    public function removeProviderLogo(\AppBundle\Entity\Image $providerLogo)
    {
        $this->providerLogos->removeElement($providerLogo);
    }

    /**
     * Get providerLogos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProviderLogos()
    {
        return $this->providerLogos;
    }

    /**
     * Add providerPhoto
     *
     * @param \AppBundle\Entity\Image $providerPhoto
     *
     * @return Provider
     */
    public function addProviderPhoto(\AppBundle\Entity\Image $providerPhoto)
    {
        $this->providerPhotos[] = $providerPhoto;

        return $this;
    }

    /**
     * Remove providerPhoto
     *
     * @param \AppBundle\Entity\Image $providerPhoto
     */
    public function removeProviderPhoto(\AppBundle\Entity\Image $providerPhoto)
    {
        $this->providerPhotos->removeElement($providerPhoto);
    }

    /**
     * Get providerPhotos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProviderPhotos()
    {
        return $this->providerPhotos;
    }

    /**
     * Add providerServiceCategory
     *
     * @param \AppBundle\Entity\ServiceCategory $providerServiceCategory
     *
     * @return Provider
     */
    public function addProviderServiceCategory(\AppBundle\Entity\ServiceCategory $providerServiceCategory)
    {
        $this->providerServiceCategories[] = $providerServiceCategory;

        return $this;
    }

    /**
     * Remove providerServiceCategory
     *
     * @param \AppBundle\Entity\ServiceCategory $providerServiceCategory
     */
    public function removeProviderServiceCategory(\AppBundle\Entity\ServiceCategory $providerServiceCategory)
    {
        $this->providerServiceCategories->removeElement($providerServiceCategory);
    }

    /**
     * Get providerServiceCategories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProviderServiceCategories()
    {
        return $this->providerServiceCategories;
    }

    /**
     * Add providerCourse
     *
     * @param \AppBundle\Entity\Course $providerCourse
     *
     * @return Provider
     */
    public function addProviderCourse(\AppBundle\Entity\Course $providerCourse)
    {
        $this->providerCourses[] = $providerCourse;

        return $this;
    }

    /**
     * Remove providerCourse
     *
     * @param \AppBundle\Entity\Course $providerCourse
     */
    public function removeProviderCourse(\AppBundle\Entity\Course $providerCourse)
    {
        $this->providerCourses->removeElement($providerCourse);
    }

    /**
     * Get providerCourses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProviderCourses()
    {
        return $this->providerCourses;
    }

    /**
     * Add providerPromotion
     *
     * @param \AppBundle\Entity\Promotion $providerPromotion
     *
     * @return Provider
     */
    public function addProviderPromotion(\AppBundle\Entity\Promotion $providerPromotion)
    {
        $this->providerPromotions[] = $providerPromotion;

        return $this;
    }

    /**
     * Remove providerPromotion
     *
     * @param \AppBundle\Entity\Promotion $providerPromotion
     */
    public function removeProviderPromotion(\AppBundle\Entity\Promotion $providerPromotion)
    {
        $this->providerPromotions->removeElement($providerPromotion);
    }

    /**
     * Get providerPromotions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProviderPromotions()
    {
        return $this->providerPromotions;
    }

    /**
     * Add providerComment
     *
     * @param \AppBundle\Entity\Comment $providerComment
     *
     * @return Provider
     */
    public function addProviderComment(\AppBundle\Entity\Comment $providerComment)
    {
        $this->providerComments[] = $providerComment;

        return $this;
    }

    /**
     * Remove providerComment
     *
     * @param \AppBundle\Entity\Comment $providerComment
     */
    public function removeProviderComment(\AppBundle\Entity\Comment $providerComment)
    {
        $this->providerComments->removeElement($providerComment);
    }

    /**
     * Get providerComments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProviderComments()
    {
        return $this->providerComments;
    }

    /**
     * Add providerInternaut
     *
     * @param \AppBundle\Entity\Internaut $providerInternaut
     *
     * @return Provider
     */
    public function addProviderInternaut(\AppBundle\Entity\Internaut $providerInternaut)
    {
        $this->providerInternauts[] = $providerInternaut;

        return $this;
    }

    /**
     * Remove providerInternaut
     *
     * @param \AppBundle\Entity\Internaut $providerInternaut
     */
    public function removeProviderInternaut(\AppBundle\Entity\Internaut $providerInternaut)
    {
        $this->providerInternauts->removeElement($providerInternaut);
    }

    /**
     * Get providerInternauts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProviderInternauts()
    {
        return $this->providerInternauts;
    }
}
