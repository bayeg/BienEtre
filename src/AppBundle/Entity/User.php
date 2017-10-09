<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 *
 * @Entity
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="userType", type="string")
 * @DiscriminatorMap({"user" = "User", "provider" = "Provider", "internaut" = "Internaut"})
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
}

