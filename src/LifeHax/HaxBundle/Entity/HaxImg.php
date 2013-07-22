<?php

namespace LifeHax\HaxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HaxImg
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LifeHax\HaxBundle\Repository\HaxImgRepository")
 */
class HaxImg
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
     * @ORM\OneToOne(targetEntity="LifeHax\BaseBundle\Entity\Image")
     */
    private $image;

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

    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }

}
