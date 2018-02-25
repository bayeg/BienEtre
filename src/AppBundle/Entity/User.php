<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

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

class User implements UserInterface
{

// ------------------------- Column parameters -------------------------

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
     * @ORM\Column(name="email", type="string", length=255, unique=true)
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
     * @ORM\Column(name="address_number", type="string", length=255)
     */
    private $addressNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="address_street", type="string", length=255)
     */
    private $addressStreet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registration_date", type="date")
     */
    private $registrationDate;


    /**
     * @var int
     *
     * @ORM\Column(name="login_attempts", type="integer")
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
     * @ORM\Column(name="registration_confirmed", type="boolean")
     */
    private $registrationConfirmed;

// ------------------------- Relationship parameters -------------------------

    /**
     *@var PostCode
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\PostCode")
     */
    private $postCode;

    /**
     *@var Locality
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\Locality")
     */
    private $locality;

    /**
     *@var Commune
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\Commune")
     */
    private $commune;

// ------------------------- Methods -------------------------

    /**
     * Get id
     *
     * @return integer
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
     * @return integer
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
     * @return boolean
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
     * @return boolean
     */
    public function getRegistrationConfirmed()
    {
        return $this->registrationConfirmed;
    }

    /**
     * Set postCode
     *
     * @param \AppBundle\Entity\PostCode $postCode
     *
     * @return User
     */
    public function setPostCode(\AppBundle\Entity\PostCode $postCode = null)
    {
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * Get postCode
     *
     * @return \AppBundle\Entity\PostCode
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * Set locality
     *
     * @param \AppBundle\Entity\Locality $locality
     *
     * @return User
     */
    public function setLocality(\AppBundle\Entity\Locality $locality = null)
    {
        $this->locality = $locality;

        return $this;
    }

    /**
     * Get locality
     *
     * @return \AppBundle\Entity\Locality
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * Set commune
     *
     * @param \AppBundle\Entity\Commune $commune
     *
     * @return User
     */
    public function setCommune(\AppBundle\Entity\Commune $commune = null)
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * Get commune
     *
     * @return \AppBundle\Entity\Commune
     */
    public function getCommune()
    {
        return $this->commune;
    }

    /**
     * @return mixed
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * @param mixed $plainPassword
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
        // to make understand Doctrine that the plainPassword has been changed
        // even if not persisted, so listeners are called
        $this->password = null;
    }

    // ------------------------- Methods : UserInterface -------------------------

    public function getUsername()
    {
        return $this->email;
    }
    public function getRoles()
    {
        return ['ROLE_USER'];
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function eraseCredentials()
    {
        // called after login so the plainPassword is not saved anywhere
        $this->plainPassword = null;
    }
}
