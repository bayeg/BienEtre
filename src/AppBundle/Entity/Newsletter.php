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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="pdf", type="string", length=255)
     */
    private $pdf;



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

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Newsletter
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Newsletter
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
     * Set pdf
     *
     * @param string $pdf
     *
     * @return Newsletter
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
}
