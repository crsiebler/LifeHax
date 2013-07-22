<?php

namespace LifeHax\HaxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * LifeHax
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LifeHax\HaxBundle\Repository\LifeHaxRepository")
 */
class LifeHax
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
     * @var boolean
     *
     * @ORM\Column(name="approved", type="boolean")
     */
    private $approved;
    
    /**
     * @ORM\OneToOne(targetEntity="LifeHax\BaseBundle\Entity\Creation")
     */
    private $creation;
    
    /**
     * @ORM\OneToMany(targetEntity="LifeHax\HaxBundle\Entity\Comment", mappedBy="lifeHax")
     */
    private $comments;
    
    /**
     * @ORM\OneToMany(targetEntity="LifeHax\HaxBundle\Entity\OPQA", mappedBy="lifeHax")
     */
    private $OPQAs;
    
    /**
     * @ORM\OneToOne(targetEntity="LifeHax\HaxBundle\Entity\HaxSec", mappedBy="lifeHax")
     */
    private $section;
    
    /**
     * @ORM\OneToOne(targetEntity="LifeHax\HaxBundle\Entity\Genre", mappedBy="lifeHax")
     */
    private $genre;
    
    function __construct() {
        $this->approved = false;
        $this->comments = new ArrayCollection();
        $this->OPQAs = new ArrayCollection();
    }

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
     * Set approved
     *
     * @param boolean $approved
     * @return LifeHax
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;
    
        return $this;
    }

    /**
     * Get approved
     *
     * @return boolean 
     */
    public function getApproved()
    {
        return $this->approved;
    }
    
    public function getComments() {
        return $this->comments;
    }

    public function setComments($comments) {
        $this->comments = $comments;
    }

    public function getOPQAs() {
        return $this->OPQAs;
    }

    public function setOPQAs($OPQAs) {
        $this->OPQA = $OPQAs;
    }

    public function getSection() {
        return $this->section;
    }

    public function setSection($section) {
        $this->section = $section;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
    }

    public function getCreation() {
        return $this->creation;
    }

    public function setCreation($creation) {
        $this->creation = $creation;
    }

}
