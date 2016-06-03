<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzimportData
 *
 * @ORM\Table(name="FzImport_Data")
 * @ORM\Entity
 */
class FzimportData
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador9", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador9;

    /**
     * @var string
     *
     * @ORM\Column(name="mTable", type="string", length=80, nullable=false)
     */
    private $mtable;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Importar", type="boolean", nullable=false)
     */
    private $importar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Limpiar", type="boolean", nullable=false)
     */
    private $limpiar;



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
     * Set mtable
     *
     * @param string $mtable
     * @return FzimportData
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
     * Set importar
     *
     * @param boolean $importar
     * @return FzimportData
     */
    public function setImportar($importar)
    {
        $this->importar = $importar;

        return $this;
    }

    /**
     * Get importar
     *
     * @return boolean 
     */
    public function getImportar()
    {
        return $this->importar;
    }

    /**
     * Set limpiar
     *
     * @param boolean $limpiar
     * @return FzimportData
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
}
