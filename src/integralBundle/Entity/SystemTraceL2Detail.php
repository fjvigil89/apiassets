<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SystemTraceL2Detail
 *
 * @ORM\Table(name="System_Trace_L2_Detail")
 * @ORM\Entity
 */
class SystemTraceL2Detail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="MASTER_ID", type="integer", nullable=false)
     */
    private $masterId;

    /**
     * @var integer
     *
     * @ORM\Column(name="NR", type="integer", nullable=false)
     */
    private $nr;

    /**
     * @var integer
     *
     * @ORM\Column(name="PC", type="integer", nullable=false)
     */
    private $pc;

    /**
     * @var string
     *
     * @ORM\Column(name="FieldName", type="string", length=128, nullable=true)
     */
    private $fieldname;

    /**
     * @var string
     *
     * @ORM\Column(name="OldValue", type="string", length=1000, nullable=true)
     */
    private $oldvalue;

    /**
     * @var string
     *
     * @ORM\Column(name="NewValue", type="string", length=1000, nullable=true)
     */
    private $newvalue;



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
     * Set masterId
     *
     * @param integer $masterId
     * @return SystemTraceL2Detail
     */
    public function setMasterId($masterId)
    {
        $this->masterId = $masterId;

        return $this;
    }

    /**
     * Get masterId
     *
     * @return integer 
     */
    public function getMasterId()
    {
        return $this->masterId;
    }

    /**
     * Set nr
     *
     * @param integer $nr
     * @return SystemTraceL2Detail
     */
    public function setNr($nr)
    {
        $this->nr = $nr;

        return $this;
    }

    /**
     * Get nr
     *
     * @return integer 
     */
    public function getNr()
    {
        return $this->nr;
    }

    /**
     * Set pc
     *
     * @param integer $pc
     * @return SystemTraceL2Detail
     */
    public function setPc($pc)
    {
        $this->pc = $pc;

        return $this;
    }

    /**
     * Get pc
     *
     * @return integer 
     */
    public function getPc()
    {
        return $this->pc;
    }

    /**
     * Set fieldname
     *
     * @param string $fieldname
     * @return SystemTraceL2Detail
     */
    public function setFieldname($fieldname)
    {
        $this->fieldname = $fieldname;

        return $this;
    }

    /**
     * Get fieldname
     *
     * @return string 
     */
    public function getFieldname()
    {
        return $this->fieldname;
    }

    /**
     * Set oldvalue
     *
     * @param string $oldvalue
     * @return SystemTraceL2Detail
     */
    public function setOldvalue($oldvalue)
    {
        $this->oldvalue = $oldvalue;

        return $this;
    }

    /**
     * Get oldvalue
     *
     * @return string 
     */
    public function getOldvalue()
    {
        return $this->oldvalue;
    }

    /**
     * Set newvalue
     *
     * @param string $newvalue
     * @return SystemTraceL2Detail
     */
    public function setNewvalue($newvalue)
    {
        $this->newvalue = $newvalue;

        return $this;
    }

    /**
     * Get newvalue
     *
     * @return string 
     */
    public function getNewvalue()
    {
        return $this->newvalue;
    }
}
