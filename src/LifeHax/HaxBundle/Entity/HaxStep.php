<?php

namespace LifeHax\HaxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * HaxStep
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LifeHax\HaxBundle\Repository\HaxStepRepository")
 */
class HaxStep
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
     * @ORM\OneToOne(targetEntity="LifeHax\HaxBundle\Entity\LifeHax")
     */
    private $lifeHax;

    /**
     * @ORM\OneToMany(targetEntity="LifeHax\HaxBundle\Entity\Step", mappedBy="hax")
     */
    private $steps;
    
    function __construct() {
        $this->steps = new ArrayCollection();
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

    public function getLifeHax() {
        return $this->lifeHax;
    }

    public function setLifeHax($lifeHax) {
        $this->lifeHax = $lifeHax;
    }

    public function getSteps() {
        return $this->steps;
    }

    public function setSteps($steps) {
        $this->steps = $steps;
    }

}
