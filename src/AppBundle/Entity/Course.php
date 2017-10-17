<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Course
 *
 * @ORM\Table(name="course")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CourseRepository")
 */
class Course
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
     * @ORM\Column(name="description", type="string", length=500)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="tariff", type="string", length=255)
     */
    private $tariff;

    /**
     * @var string
     *
     * @ORM\Column(name="cinfo", type="string", length=500)
     */
    private $info;

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
     *@var Auteur
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\Provider", inversedBy="courses")
     */
    private $provider;




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
     * Set courseName
     *
     * @param string $courseName
     *
     * @return Course
     */
    public function setCourseName($courseName)
    {
        $this->courseName = $courseName;

        return $this;
    }

    /**
     * Get courseName
     *
     * @return string
     */
    public function getCourseName()
    {
        return $this->courseName;
    }

    /**
     * Set courseDescription
     *
     * @param string $courseDescription
     *
     * @return Course
     */
    public function setCourseDescription($courseDescription)
    {
        $this->courseDescription = $courseDescription;

        return $this;
    }

    /**
     * Get courseDescription
     *
     * @return string
     */
    public function getCourseDescription()
    {
        return $this->courseDescription;
    }

    /**
     * Set courseTariff
     *
     * @param string $courseTariff
     *
     * @return Course
     */
    public function setCourseTariff($courseTariff)
    {
        $this->courseTariff = $courseTariff;

        return $this;
    }

    /**
     * Get courseTariff
     *
     * @return string
     */
    public function getCourseTariff()
    {
        return $this->courseTariff;
    }

    /**
     * Set courseInfo
     *
     * @param string $courseInfo
     *
     * @return Course
     */
    public function setCourseInfo($courseInfo)
    {
        $this->courseInfo = $courseInfo;

        return $this;
    }

    /**
     * Get courseInfo
     *
     * @return string
     */
    public function getCourseInfo()
    {
        return $this->courseInfo;
    }

    /**
     * Set courseStart
     *
     * @param \DateTime $courseStart
     *
     * @return Course
     */
    public function setCourseStart($courseStart)
    {
        $this->courseStart = $courseStart;

        return $this;
    }

    /**
     * Get courseStart
     *
     * @return \DateTime
     */
    public function getCourseStart()
    {
        return $this->courseStart;
    }

    /**
     * Set courseEnd
     *
     * @param \DateTime $courseEnd
     *
     * @return Course
     */
    public function setCourseEnd($courseEnd)
    {
        $this->courseEnd = $courseEnd;

        return $this;
    }

    /**
     * Get courseEnd
     *
     * @return \DateTime
     */
    public function getCourseEnd()
    {
        return $this->courseEnd;
    }

    /**
     * Set courseShowStart
     *
     * @param \DateTime $courseShowStart
     *
     * @return Course
     */
    public function setCourseShowStart($courseShowStart)
    {
        $this->courseShowStart = $courseShowStart;

        return $this;
    }

    /**
     * Get courseShowStart
     *
     * @return \DateTime
     */
    public function getCourseShowStart()
    {
        return $this->courseShowStart;
    }

    /**
     * Set courseShowEnd
     *
     * @param \DateTime $courseShowEnd
     *
     * @return Course
     */
    public function setCourseShowEnd($courseShowEnd)
    {
        $this->courseShowEnd = $courseShowEnd;

        return $this;
    }

    /**
     * Get courseShowEnd
     *
     * @return \DateTime
     */
    public function getCourseShowEnd()
    {
        return $this->courseShowEnd;
    }

    /**
     * Set courseProvider
     *
     * @param \AppBundle\Entity\Provider $courseProvider
     *
     * @return Course
     */
    public function setCourseProvider(\AppBundle\Entity\Provider $courseProvider = null)
    {
        $this->courseProvider = $courseProvider;

        return $this;
    }

    /**
     * Get courseProvider
     *
     * @return \AppBundle\Entity\Provider
     */
    public function getCourseProvider()
    {
        return $this->courseProvider;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Course
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
     * @return Course
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
     * Set tariff
     *
     * @param string $tariff
     *
     * @return Course
     */
    public function setTariff($tariff)
    {
        $this->tariff = $tariff;

        return $this;
    }

    /**
     * Get tariff
     *
     * @return string
     */
    public function getTariff()
    {
        return $this->tariff;
    }

    /**
     * Set info
     *
     * @param string $info
     *
     * @return Course
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set start
     *
     * @param \DateTime $start
     *
     * @return Course
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
     * @return Course
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
     * @return Course
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
     * @return Course
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
     * @return Course
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
}
