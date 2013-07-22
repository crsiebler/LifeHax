<?php

namespace LifeHax\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * User
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="LifeHax\UserBundle\Repository\UserRepository")
 */
class User extends BaseUser {

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToMany(targetEntity="LifeHax\UserBundle\Entity\Role", inversedBy="users")
     * @ORM\JoinTable(name="user_roles",
     *                  joinColumns={@ORM\JoinColumn(name="userID", referencedColumnName="id")},
     *                  inverseJoinColumns={@ORM\JoinColumn(name="roleID", referencedColumnName="id")})
     */
    private $userRoles;

    /**
     * @ORM\Column(name="firstName", type="string", length=75)
     */
    private $firstName;

    /**
     * @ORM\Column(name="lastName", type="string", length=75)
     */
    private $lastName;

    /**
     * @ORM\Column(type="datetime")
     * @var DateTime $createdOn
     */
    protected $createdOn;
    
    /**
     * @ORM\OneToMany(targetEntity="LifeHax\HaxBundle\Entity\LifeHax", mappedBy="user")
     */
    private $lifeHax;
    
    /**
     * @ORM\OneToOne(targetEntity="LifeHax\UserBundle\Entity\Resume", mappedBy="user")
     */
    private $resume;
    
    /**
     *
     * @param type $role
     * @return \Sonata\UserBundle\Entity\User
     */
    public function addRole($role) {
        //make sure user doesn't already have the role
        if (!$this->hasRole($role)) {
            $this->userRoles->add($role);
        }

        return $this;
    }

    /**
     *
     * @return type
     */
    public function getRoles() {
        return $this->userRoles->toArray();
    }

    /**
     *
     * @param type $role
     * @return boolean
     */
    public function hasRole($role) {
        foreach ($this->userRoles as $userRole) {
            if ($userRole == $role) {
                return true;
            }
        }

        return false;
    }

    public function hasRoleByName($role) {
        foreach ($this->userRoles as $userRole) {
            if (0 === strcmp($userRole->getName(), $role)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    public function __construct() {
        parent::__construct();
        $this->createdOn = new \DateTime('now');
        $this->userRoles = new ArrayCollection();
        $this->lifeHax = new ArrayCollection();
    }

    public function getUserRoles() {
        return $this->userRoles;
    }

    public function setUserRoles($userRoles) {
        $this->userRoles = $userRoles;
        return $this;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
        return $this;
    }
       
    public function getLifeHax() {
        return $this->lifeHax;
    }

    public function setLifeHax($lifeHax) {
        $this->lifeHax = $lifeHax;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function getEmail() {
        return $this->email;
    }
    
    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }
    
    public function getUsername() {
        return $this->username;
    }
    
    public function getCreatedOn() {
        return $this->createdOn;
    }

    public function getName() {
        return $this->getFirstName().' '.$this->getLastName();
    }

    public function __toString() {
        return $this->getFirstName() . ' ' . $this->getLastName();
    }

}