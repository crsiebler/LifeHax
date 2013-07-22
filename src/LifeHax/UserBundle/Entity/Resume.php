<?php

namespace LifeHax\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Resume
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LifeHax\UserBundle\Repository\ResumeRepository")
 */
class Resume
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\OneToMany(targetEntity="LifeHax\UserBundle\Entity\Profession", mappedBy="resume")
     */
    private $professions;

    /**
     * @ORM\OneToMany(targetEntity="LifeHax\UserBundle\Entity\Education", mappedBy="resume")
     */
    private $education;
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    function __construct() {
        $this->professions = new ArrayCollection();
        $this->education = new ArrayCollection();
    }

    public function getProfessions() {
        return $this->professions;
    }

    public function setProfessions($professions) {
        $this->professions = $professions;
    }

    public function getEducation() {
        return $this->education;
    }

    public function setEducation($education) {
        $this->education = $education;
    }

}
