<?php

namespace LifeHax\HaxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Step
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LifeHax\HaxBundle\Repository\StepRepository")
 */
class Step
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
     * @ORM\Column(name="msg", type="string", length=255)
     */
    private $msg;

    /**
     * @ORM\ManyToOne(targetEntity="LifeHax\HaxBundle\Entity\HaxStep", inversedBy="steps")
     */
    private $hax;
    
    /**
     * @ORM\OneToOne(targetEntity="LifeHax\BaseBundle\Entity\Image")
     */
    private $image;
    
    /**
     * @ORM\OneToOne(targetEntity="LifeHax\BaseBundle\Entity\Video")
     */
    private $video;
    
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
     * Set msg
     *
     * @param string $msg
     * @return Step
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
    
        return $this;
    }

    /**
     * Get msg
     *
     * @return string 
     */
    public function getMsg()
    {
        return $this->msg;
    }

    public function getHax() {
        return $this->hax;
    }

    public function setHax($hax) {
        $this->hax = $hax;
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function getVideo() {
        return $this->video;
    }

    public function setVideo($video) {
        $this->video = $video;
    }

}
