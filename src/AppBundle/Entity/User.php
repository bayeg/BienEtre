<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 *
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="userType", type="string")
 * @ORM\DiscriminatorMap({"user" = "User", "provider" = "Provider", "internaut" = "Internaut"})
 */

class User
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
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="addressNumber", type="string", length=255)
     */
    private $addressNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="addressStreet", type="string", length=255)
     */
    private $addressStreet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registrationDate", type="date")
     */
    private $registrationDate;


    /**
     * @var int
     *
     * @ORM\Column(name="loginAttempts", type="integer")
     */
    private $loginAttempts;

    /**
     * @var bool
     *
     * @ORM\Column(name="banned", type="boolean")
     */
    private $banned;

    /**
     * @var bool
     *
     * @ORM\Column(name="registrationConfirmed", type="boolean")
     */
    private $registrationConfirmed;

    /**
     *@var PostCode
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\PostCode", inversedBy="postCodeUsers")
     */
    private $userPostCode;

    /**
     *@var Locality
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\Locality", inversedBy="localityUsers")
     */
    private $userLocality;

    /**
     *@var Commune
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\Commune", inversedBy="communeUsers")
     */
    private $userCommune;



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
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set addressNumber
     *
     * @param string $addressNumber
     *
     * @return User
     */
    public function setAddressNumber($addressNumber)
    {
        $this->addressNumber = $addressNumber;

        return $this;
    }

    /**
     * Get addressNumber
     *
     * @return string
     */
    public function getAddressNumber()
    {
        return $this->addressNumber;
    }

    /**
     * Set addressStreet
     *
     * @param string $addressStreet
     *
     * @return User
     */
    public function setAddressStreet($addressStreet)
    {
        $this->addressStreet = $addressStreet;

        return $this;
    }

    /**
     * Get addressStreet
     *
     * @return string
     */
    public function getAddressStreet()
    {
        return $this->addressStreet;
    }

    /**
     * Set registrationDate
     *
     * @param \DateTime $registrationDate
     *
     * @return User
     */
    public function setRegistrationDate($registrationDate)
    {
        $this->registrationDate = $registrationDate;

        return $this;
    }

    /**
     * Get registrationDate
     *
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }


    /**
     * Set loginAttempts
     *
     * @param integer $loginAttempts
     *
     * @return User
     */
    public function setLoginAttempts($loginAttempts)
    {
        $this->loginAttempts = $loginAttempts;

        return $this;
    }

    /**
     * Get loginAttempts
     *
     * @return int
     */
    public function getLoginAttempts()
    {
        return $this->loginAttempts;
    }

    /**
     * Set banned
     *
     * @param boolean $banned
     *
     * @return User
     */
    public function setBanned($banned)
    {
        $this->banned = $banned;

        return $this;
    }

    /**
     * Get banned
     *
     * @return bool
     */
    public function getBanned()
    {
        return $this->banned;
    }

    /**
     * Set registrationConfirmed
     *
     * @param boolean $registrationConfirmed
     *
     * @return User
     */
    public function setRegistrationConfirmed($registrationConfirmed)
    {
        $this->registrationConfirmed = $registrationConfirmed;

        return $this;
    }

    /**
     * Get registrationConfirmed
     *
     * @return bool
     */
    public function getRegistrationConfirmed()
    {
        return $this->registrationConfirmed;
    }

    /**
     * Set userPostCode
     *
     * @param \AppBundle\Entity\PostCode $userPostCode
     *
     * @return User
     */
    public function setUserPostCode(\AppBundle\Entity\PostCode $userPostCode = null)
    {
        $this->userPostCode = $userPostCode;

        return $this;
    }

    /**
     * Get userPostCode
     *
     * @return \AppBundle\Entity\PostCode
     */
    public function getUserPostCode()
    {
        return $this->userPostCode;
    }

    /**
     * Set userLocality
     *
     * @param \AppBundle\Entity\Locality $userLocality
     *
     * @return User
     */
    public function setUserLocality(\AppBundle\Entity\Locality $userLocality = null)
    {
        $this->userLocality = $userLocality;

        return $this;
    }

    /**
     * Get userLocality
     *
     * @return \AppBundle\Entity\Locality
     */
    public function getUserLocality()
    {
        return $this->userLocality;
    }

    /**
     * Set userCommune
     *
     * @param \AppBundle\Entity\Commune $userCommune
     *
     * @return User
     */
    public function setUserCommune(\AppBundle\Entity\Commune $userCommune = null)
    {
        $this->userCommune = $userCommune;

        return $this;
    }

    /**
     * Get userCommune
     *
     * @return \AppBundle\Entity\Commune
     */
    public function getUserCommune()
    {
        return $this->userCommune;
    }
}
