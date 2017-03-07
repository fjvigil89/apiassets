<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhCausasBajas
 *
 * @ORM\Table(name="RH_Causas_Bajas")
 * @ORM\Entity
 */
class RhCausasBajas
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_CausaBaja", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCausabaja;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_CausaBaja", type="string", length=50, nullable=false)
     */
    private $descCausabaja;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Rpt", type="string", length=10, nullable=false)
     */
    private $descRpt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Fluctuacion", type="boolean", nullable=false)
     */
    private $fluctuacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Clasificacion", type="smallint", nullable=false)
     */
    private $clasificacion;



    /**
     * Get idCausabaja
     *
     * @return string 
     */
    public function getIdCausabaja()
    {
        return $this->idCausabaja;
    }

    /**
     * Set descCausabaja
     *
     * @param string $descCausabaja
     * @return RhCausasBajas
     */
    public function setDescCausabaja($descCausabaja)
    {
        $this->descCausabaja = $descCausabaja;

        return $this;
    }

    /**
     * Get descCausabaja
     *
     * @return string 
     */
    public function getDescCausabaja()
    {
        return $this->descCausabaja;
    }

    /**
     * Set descRpt
     *
     * @param string $descRpt
     * @return RhCausasBajas
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
     * Set fluctuacion
     *
     * @param boolean $fluctuacion
     * @return RhCausasBajas
     */
    public function setFluctuacion($fluctuacion)
    {
        $this->fluctuacion = $fluctuacion;

        return $this;
    }

    /**
     * Get fluctuacion
     *
     * @return boolean 
     */
    public function getFluctuacion()
    {
        return $this->fluctuacion;
    }

    /**
     * Set clasificacion
     *
     * @param integer $clasificacion
     * @return RhCausasBajas
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
