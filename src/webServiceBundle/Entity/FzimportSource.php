<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzimportSource
 *
 * @ORM\Table(name="FzImport_Source")
 * @ORM\Entity
 */
class FzimportSource
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
     * @var integer
     *
     * @ORM\Column(name="ordeni", type="integer", nullable=true)
     */
    private $ordeni;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordend", type="integer", nullable=true)
     */
    private $ordend;

    /**
     * @var boolean
     *
     * @ORM\Column(name="usedel", type="boolean", nullable=true)
     */
    private $usedel;



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
     * @return FzimportSource
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
     * @return FzimportSource
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

    /**
     * Set ordeni
     *
     * @param integer $ordeni
     * @return FzimportSource
     */
    public function setOrdeni($ordeni)
    {
        $this->ordeni = $ordeni;

        return $this;
    }

    /**
     * Get ordeni
     *
     * @return integer 
     */
    public function getOrdeni()
    {
        return $this->ordeni;
    }

    /**
     * Set ordend
     *
     * @param integer $ordend
     * @return FzimportSource
     */
    public function setOrdend($ordend)
    {
        $this->ordend = $ordend;

        return $this;
    }

    /**
     * Get ordend
     *
     * @return integer 
     */
    public function getOrdend()
    {
        return $this->ordend;
    }

    /**
     * Set usedel
     *
     * @param boolean $usedel
     * @return FzimportSource
     */
    public function setUsedel($usedel)
    {
        $this->usedel = $usedel;

        return $this;
    }

    /**
     * Get usedel
     *
     * @return boolean 
     */
    public function getUsedel()
    {
        return $this->usedel;
    }
}
