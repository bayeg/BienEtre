<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * TempUser
 *
 * @ORM\Table(name="temp_user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TempUserRepository")
 */
class TempUser
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
     * @ORM\Column(name="email", type="string", length=100, unique=true)
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registrationDate", type="date")
     */
    private $registrationDate;

    /**
     * @var \string
     *
     * @ORM\Column(name="token", type="string", length=255)
     */
    private $token;



// ------------------------- Methods -------------------------

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->registrationDate = new \DateTime();
        $this->token = bin2hex(random_bytes(16));
    }

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
     * @return TempUser
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
     * @return TempUser
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
     * Set type
     *
     * @param string $type
     *
     * @return TempUser
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set registrationDate
     *
     * @param \DateTime $registrationDate
     *
     * @return TempUser
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
     * Set token
     *
     * @param string $token
     *
     * @return TempUser
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

//// ------------------------- UserInterface -------------------------
//
//    public function getRoles()
//    {
//        // TODO: Implement getRoles() method.
//    }
//
//    public function getSalt()
//    {
//        // TODO: Implement getSalt() method.
//    }
//
//    public function getUsername()
//    {
//        // TODO: Implement getUsername() method.
//    }
//
//    public function eraseCredentials()
//    {
//        // TODO: Implement eraseCredentials() method.
//    }
}
