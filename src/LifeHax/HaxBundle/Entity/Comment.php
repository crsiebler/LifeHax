<?php

namespace LifeHax\HaxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LifeHax\HaxBundle\Repository\CommentRepository")
 */
class Comment
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
     * @ORM\ManyToOne(targetEntity="LifeHax\HaxBundle\Entity\LifeHax", inversedBy="comments")
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
     * @return Comment
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
