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
     * @ORM\Column(name="courseName", type="string", length=255)
     */
    private $courseName;

    /**
     * @var string
     *
     * @ORM\Column(name="courseDescription", type="string", length=500)
     */
    private $courseDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="courseTariff", type="string", length=255)
     */
    private $courseTariff;

    /**
     * @var string
     *
     * @ORM\Column(name="courseInfo", type="string", length=500)
     */
    private $courseInfo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="courseStart", type="date")
     */
    private $courseStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="courseEnd", type="date")
     */
    private $courseEnd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="courseShowStart", type="date")
     */
    private $courseShowStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="courseShowEnd", type="date")
     */
    private $courseShowEnd;


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
}

