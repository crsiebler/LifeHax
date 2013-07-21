<?php

namespace LifeHax\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
