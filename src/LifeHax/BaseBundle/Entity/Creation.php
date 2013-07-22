<?php

namespace LifeHax\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Creation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LifeHax\BaseBundle\Repository\CreationRepository")
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
     * @ORM\Column(name="birth", type="datetime")
     */
    private $birth;


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
     * Set birth
     *
     * @param \DateTime $birth
     * @return Birth
     */
    public function setBirth($birth)
    {
        $this->birth = $birth;
        return $this;
    }

    /**
     * Get birth
     *
     * @return \DateTime 
     */
    public function getBirth()
    {
        return $this->birth;
    }
}
