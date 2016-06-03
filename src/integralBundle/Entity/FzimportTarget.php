<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzimportTarget
 *
 * @ORM\Table(name="FzImport_Target")
 * @ORM\Entity
 */
class FzimportTarget
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nTable", type="string", length=80, nullable=false)
     */
    private $ntable;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hasTrigger", type="boolean", nullable=false)
     */
    private $hastrigger;



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
     * Set ntable
     *
     * @param string $ntable
     * @return FzimportTarget
     */
    public function setNtable($ntable)
    {
        $this->ntable = $ntable;

        return $this;
    }

    /**
     * Get ntable
     *
     * @return string 
     */
    public function getNtable()
    {
        return $this->ntable;
    }

    /**
     * Set hastrigger
     *
     * @param boolean $hastrigger
     * @return FzimportTarget
     */
    public function setHastrigger($hastrigger)
    {
        $this->hastrigger = $hastrigger;

        return $this;
    }

    /**
     * Get hastrigger
     *
     * @return boolean 
     */
    public function getHastrigger()
    {
        return $this->hastrigger;
    }
}
