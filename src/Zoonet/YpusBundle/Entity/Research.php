<?php

namespace Zoonet\YpusBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
*@ORM\Entity
*@ORM\Table(name="Research")
*/
class Research
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @ORM\Column(type="string")
     */
    protected $what;


    /**
     * @ORM\Column(name="`where`", type="string")
     */
    protected $where;



    /**
     * @ORM\Column(type="boolean")
     */
    protected $active;


    /**
     * @ORM\Column(type="integer")
     */
     protected $status;


    /**
     * @ORM\Column(type="datetime")
     */
    protected $created_at;


    /**
     * @ORM\Column(type="datetime")
     */
    protected $updated_at;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $started_at;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $finished_at;

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
     * Set what
     *
     * @param string $what
     * @return Research
     */
    public function setWhat($what)
    {
        $this->what = $what;
    
        return $this;
    }

    /**
     * Get what
     *
     * @return string 
     */
    public function getWhat()
    {
        return $this->what;
    }

    /**
     * Set where
     *
     * @param string $where
     * @return Research
     */
    public function setWhere($where)
    {
        $this->where = $where;
    
        return $this;
    }

    /**
     * Get where
     *
     * @return string 
     */
    public function getWhere()
    {
        return $this->where;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Research
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Research
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Research
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    
        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Research
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    
        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set started_at
     *
     * @param \DateTime $startedAt
     * @return Research
     */
    public function setStartedAt($startedAt)
    {
        $this->started_at = $startedAt;
    
        return $this;
    }

    /**
     * Get started_at
     *
     * @return \DateTime 
     */
    public function getStartedAt()
    {
        return $this->started_at;
    }

    /**
     * Set finished_at
     *
     * @param \DateTime $finishedAt
     * @return Research
     */
    public function setFinishedAt($finishedAt)
    {
        $this->finished_at = $finishedAt;
    
        return $this;
    }

    /**
     * Get finished_at
     *
     * @return \DateTime 
     */
    public function getFinishedAt()
    {
        return $this->finished_at;
    }
}