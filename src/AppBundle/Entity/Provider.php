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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=255)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="vat", type="string", length=255)
     */
    private $vat;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Image", mappedBy="logoProvider")
     */
    private $logos;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Image", mappedBy="photoProvider")
     */
    private $photos;

    /**
     * @var ArrayCollection
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\ServiceCategory", inversedBy="providers")
     */
    private $serviceCategories;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Course", mappedBy="provider")
     */
    private $courses;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Promotion", mappedBy="provider")
     */
    private $promotions;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Comment", mappedBy="provider")
     */
    private $comments;


    /**
     * @var ArrayCollection
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Internaut", inversedBy="providers")
     */
    private $internauts;


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

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Provider
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
     * Set website
     *
     * @param string $website
     *
     * @return Provider
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Provider
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set vat
     *
     * @param string $vat
     *
     * @return Provider
     */
    public function setVat($vat)
    {
        $this->vat = $vat;

        return $this;
    }

    /**
     * Get vat
     *
     * @return string
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * Add logo
     *
     * @param \AppBundle\Entity\Image $logo
     *
     * @return Provider
     */
    public function addLogo(\AppBundle\Entity\Image $logo)
    {
        $this->logos[] = $logo;

        return $this;
    }

    /**
     * Remove logo
     *
     * @param \AppBundle\Entity\Image $logo
     */
    public function removeLogo(\AppBundle\Entity\Image $logo)
    {
        $this->logos->removeElement($logo);
    }

    /**
     * Get logos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLogos()
    {
        return $this->logos;
    }

    /**
     * Add photo
     *
     * @param \AppBundle\Entity\Image $photo
     *
     * @return Provider
     */
    public function addPhoto(\AppBundle\Entity\Image $photo)
    {
        $this->photos[] = $photo;

        return $this;
    }

    /**
     * Remove photo
     *
     * @param \AppBundle\Entity\Image $photo
     */
    public function removePhoto(\AppBundle\Entity\Image $photo)
    {
        $this->photos->removeElement($photo);
    }

    /**
     * Get photos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Add serviceCategory
     *
     * @param \AppBundle\Entity\ServiceCategory $serviceCategory
     *
     * @return Provider
     */
    public function addServiceCategory(\AppBundle\Entity\ServiceCategory $serviceCategory)
    {
        $this->serviceCategories[] = $serviceCategory;

        return $this;
    }

    /**
     * Remove serviceCategory
     *
     * @param \AppBundle\Entity\ServiceCategory $serviceCategory
     */
    public function removeServiceCategory(\AppBundle\Entity\ServiceCategory $serviceCategory)
    {
        $this->serviceCategories->removeElement($serviceCategory);
    }

    /**
     * Get serviceCategories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getServiceCategories()
    {
        return $this->serviceCategories;
    }

    /**
     * Add course
     *
     * @param \AppBundle\Entity\Course $course
     *
     * @return Provider
     */
    public function addCourse(\AppBundle\Entity\Course $course)
    {
        $this->courses[] = $course;

        return $this;
    }

    /**
     * Remove course
     *
     * @param \AppBundle\Entity\Course $course
     */
    public function removeCourse(\AppBundle\Entity\Course $course)
    {
        $this->courses->removeElement($course);
    }

    /**
     * Get courses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCourses()
    {
        return $this->courses;
    }

    /**
     * Add promotion
     *
     * @param \AppBundle\Entity\Promotion $promotion
     *
     * @return Provider
     */
    public function addPromotion(\AppBundle\Entity\Promotion $promotion)
    {
        $this->promotions[] = $promotion;

        return $this;
    }

    /**
     * Remove promotion
     *
     * @param \AppBundle\Entity\Promotion $promotion
     */
    public function removePromotion(\AppBundle\Entity\Promotion $promotion)
    {
        $this->promotions->removeElement($promotion);
    }

    /**
     * Get promotions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPromotions()
    {
        return $this->promotions;
    }

    /**
     * Add comment
     *
     * @param \AppBundle\Entity\Comment $comment
     *
     * @return Provider
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
     * Add internaut
     *
     * @param \AppBundle\Entity\Internaut $internaut
     *
     * @return Provider
     */
    public function addInternaut(\AppBundle\Entity\Internaut $internaut)
    {
        $this->internauts[] = $internaut;

        return $this;
    }

    /**
     * Remove internaut
     *
     * @param \AppBundle\Entity\Internaut $internaut
     */
    public function removeInternaut(\AppBundle\Entity\Internaut $internaut)
    {
        $this->internauts->removeElement($internaut);
    }

    /**
     * Get internauts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInternauts()
    {
        return $this->internauts;
    }
}
