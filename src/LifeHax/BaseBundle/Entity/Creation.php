<?php

namespace LifeHax\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Creation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LifeHax\BaseBundle\Entity\CreationRepository")
 */
class Creation
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
     * @var \DateTime
     *
     * @ORM\Column(name="edit", type="datetime")
     */
    private $edit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;


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
     * Set edit
     *
     * @param \DateTime $edit
     * @return Creation
     */
    public function setEdit($edit)
    {
        $this->edit = $edit;
    
        return $this;
    }

    /**
     * Get edit
     *
     * @return \DateTime 
     */
    public function getEdit()
    {
        return $this->edit;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Creation
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }
}
