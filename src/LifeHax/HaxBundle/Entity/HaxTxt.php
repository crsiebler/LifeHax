<?php

namespace LifeHax\HaxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HaxTxt
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LifeHax\HaxBundle\Repository\HaxTxtRepository")
 */
class HaxTxt
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
     * @ORM\OneToOne(targetEntity="LifeHax\HaxBundle\Entity\LifeHax")
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
     * Set msg
     *
     * @param string $msg
     * @return HaxTxt
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

    public function getLifeHax() {
        return $this->lifeHax;
    }

    public function setLifeHax($lifeHax) {
        $this->lifeHax = $lifeHax;
    }

}
