<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhCausasAltas
 *
 * @ORM\Table(name="RH_Causas_Altas")
 * @ORM\Entity
 */
class RhCausasAltas
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_CausaAlta", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCausaalta;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_CausaAlta", type="string", length=50, nullable=false)
     */
    private $descCausaalta;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Rpt", type="string", length=10, nullable=false)
     */
    private $descRpt;

    /**
     * @var integer
     *
     * @ORM\Column(name="Clasificacion", type="smallint", nullable=false)
     */
    private $clasificacion;



    /**
     * Get idCausaalta
     *
     * @return string 
     */
    public function getIdCausaalta()
    {
        return $this->idCausaalta;
    }

    /**
     * Set descCausaalta
     *
     * @param string $descCausaalta
     * @return RhCausasAltas
     */
    public function setDescCausaalta($descCausaalta)
    {
        $this->descCausaalta = $descCausaalta;

        return $this;
    }

    /**
     * Get descCausaalta
     *
     * @return string 
     */
    public function getDescCausaalta()
    {
        return $this->descCausaalta;
    }

    /**
     * Set descRpt
     *
     * @param string $descRpt
     * @return RhCausasAltas
     */
    public function setDescRpt($descRpt)
    {
        $this->descRpt = $descRpt;

        return $this;
    }

    /**
     * Get descRpt
     *
     * @return string 
     */
    public function getDescRpt()
    {
        return $this->descRpt;
    }

    /**
     * Set clasificacion
     *
     * @param integer $clasificacion
     * @return RhCausasAltas
     */
    public function setClasificacion($clasificacion)
    {
        $this->clasificacion = $clasificacion;

        return $this;
    }

    /**
     * Get clasificacion
     *
     * @return integer 
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }
}
