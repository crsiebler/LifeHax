<?php

namespace LifeHax\HaxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HaxSec
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class HaxSec
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
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=64)
     */
    private $description;

    /**
     * @ORM\OneToOne(targetEntity="LifeHax\HaxBundle\Entity\LifeHax", inversedBy="section")
     */
    private $lifeHax;

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
     * Set description
     *
     * @param string $description
     * @return HaxSec
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

    public function getLifeHax() {
        return $this->lifeHax;
    }

    public function setLifeHax($lifeHax) {
        $this->lifeHax = $lifeHax;
    }

}
