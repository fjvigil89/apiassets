<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZzsystemTables
 *
 * @ORM\Table(name="ZZSystem_Tables")
 * @ORM\Entity
 */
class ZzsystemTables
{
    /**
     * @var string
     *
     * @ORM\Column(name="mTable", type="string", length=50, nullable=false)
     */
    private $mtable;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador9", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador9;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LIMPIAR", type="boolean", nullable=false)
     */
    private $limpiar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Revisada_Indices", type="boolean", nullable=false)
     */
    private $revisadaIndices;



    /**
     * Set mtable
     *
     * @param string $mtable
     * @return ZzsystemTables
     */
    public function setMtable($mtable)
    {
        $this->mtable = $mtable;

        return $this;
    }

    /**
     * Get mtable
     *
     * @return string 
     */
    public function getMtable()
    {
        return $this->mtable;
    }

    /**
     * Get contador9
     *
     * @return integer 
     */
    public function getContador9()
    {
        return $this->contador9;
    }

    /**
     * Set limpiar
     *
     * @param boolean $limpiar
     * @return ZzsystemTables
     */
    public function setLimpiar($limpiar)
    {
        $this->limpiar = $limpiar;

        return $this;
    }

    /**
     * Get limpiar
     *
     * @return boolean 
     */
    public function getLimpiar()
    {
        return $this->limpiar;
    }

    /**
     * Set revisadaIndices
     *
     * @param boolean $revisadaIndices
     * @return ZzsystemTables
     */
    public function setRevisadaIndices($revisadaIndices)
    {
        $this->revisadaIndices = $revisadaIndices;

        return $this;
    }

    /**
     * Get revisadaIndices
     *
     * @return boolean 
     */
    public function getRevisadaIndices()
    {
        return $this->revisadaIndices;
    }
}
