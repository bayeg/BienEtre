<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Newsletter
 *
 * @ORM\Table(name="newsletter")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NewsletterRepository")
 */
class Newsletter
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
     * @ORM\Column(name="newsletterTitle", type="string", length=255)
     */
    private $newsletterTitle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="newsletterDate", type="date")
     */
    private $newsletterDate;

    /**
     * @var string
     *
     * @ORM\Column(name="newsletterPDF", type="string", length=255)
     */
    private $newsletterPDF;


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
     * Set newsletterTitle
     *
     * @param string $newsletterTitle
     *
     * @return Newsletter
     */
    public function setNewsletterTitle($newsletterTitle)
    {
        $this->newsletterTitle = $newsletterTitle;

        return $this;
    }

    /**
     * Get newsletterTitle
     *
     * @return string
     */
    public function getNewsletterTitle()
    {
        return $this->newsletterTitle;
    }

    /**
     * Set newsletterDate
     *
     * @param \DateTime $newsletterDate
     *
     * @return Newsletter
     */
    public function setNewsletterDate($newsletterDate)
    {
        $this->newsletterDate = $newsletterDate;

        return $this;
    }

    /**
     * Get newsletterDate
     *
     * @return \DateTime
     */
    public function getNewsletterDate()
    {
        return $this->newsletterDate;
    }

    /**
     * Set newsletterPDF
     *
     * @param string $newsletterPDF
     *
     * @return Newsletter
     */
    public function setNewsletterPDF($newsletterPDF)
    {
        $this->newsletterPDF = $newsletterPDF;

        return $this;
    }

    /**
     * Get newsletterPDF
     *
     * @return string
     */
    public function getNewsletterPDF()
    {
        return $this->newsletterPDF;
    }
}

