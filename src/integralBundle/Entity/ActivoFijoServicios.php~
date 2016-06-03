<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivoFijoServicios
 *
 * @ORM\Table(name="Activo_Fijo_Servicios")
 * @ORM\Entity
 */
class ActivoFijoServicios
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Servicio", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idServicio;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Servicio", type="string", length=100, nullable=false)
     */
    private $descServicio;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Especificacion", type="string", length=15, nullable=false)
     */
    private $idEspecificacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="CodUM", type="smallint", nullable=false)
     */
    private $codum;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_MBDflt", type="smallint", nullable=false)
     */
    private $tarifaMbdflt;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_MBMin", type="integer", nullable=false)
     */
    private $tarifaMbmin;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_MBMed", type="integer", nullable=false)
     */
    private $tarifaMbmed;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_MBMax", type="integer", nullable=false)
     */
    private $tarifaMbmax;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_MCDflt", type="smallint", nullable=false)
     */
    private $tarifaMcdflt;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_MCMin", type="integer", nullable=false)
     */
    private $tarifaMcmin;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_MCMed", type="integer", nullable=false)
     */
    private $tarifaMcmed;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_MCMax", type="integer", nullable=false)
     */
    private $tarifaMcmax;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasificacion", type="string", length=5, nullable=false)
     */
    private $idClasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Subclasificacion", type="string", length=5, nullable=false)
     */
    private $idSubclasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ccosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;



    /**
     * Get idServicio
     *
     * @return string 
     */
    public function getIdServicio()
    {
        return $this->idServicio;
    }

    /**
     * Set descServicio
     *
     * @param string $descServicio
     * @return ActivoFijoServicios
     */
    public function setDescServicio($descServicio)
    {
        $this->descServicio = $descServicio;

        return $this;
    }

    /**
     * Get descServicio
     *
     * @return string 
     */
    public function getDescServicio()
    {
        return $this->descServicio;
    }

    /**
     * Set idEspecificacion
     *
     * @param string $idEspecificacion
     * @return ActivoFijoServicios
     */
    public function setIdEspecificacion($idEspecificacion)
    {
        $this->idEspecificacion = $idEspecificacion;

        return $this;
    }

    /**
     * Get idEspecificacion
     *
     * @return string 
     */
    public function getIdEspecificacion()
    {
        return $this->idEspecificacion;
    }

    /**
     * Set codum
     *
     * @param integer $codum
     * @return ActivoFijoServicios
     */
    public function setCodum($codum)
    {
        $this->codum = $codum;

        return $this;
    }

    /**
     * Get codum
     *
     * @return integer 
     */
    public function getCodum()
    {
        return $this->codum;
    }

    /**
     * Set tarifaMbdflt
     *
     * @param integer $tarifaMbdflt
     * @return ActivoFijoServicios
     */
    public function setTarifaMbdflt($tarifaMbdflt)
    {
        $this->tarifaMbdflt = $tarifaMbdflt;

        return $this;
    }

    /**
     * Get tarifaMbdflt
     *
     * @return integer 
     */
    public function getTarifaMbdflt()
    {
        return $this->tarifaMbdflt;
    }

    /**
     * Set tarifaMbmin
     *
     * @param integer $tarifaMbmin
     * @return ActivoFijoServicios
     */
    public function setTarifaMbmin($tarifaMbmin)
    {
        $this->tarifaMbmin = $tarifaMbmin;

        return $this;
    }

    /**
     * Get tarifaMbmin
     *
     * @return integer 
     */
    public function getTarifaMbmin()
    {
        return $this->tarifaMbmin;
    }

    /**
     * Set tarifaMbmed
     *
     * @param integer $tarifaMbmed
     * @return ActivoFijoServicios
     */
    public function setTarifaMbmed($tarifaMbmed)
    {
        $this->tarifaMbmed = $tarifaMbmed;

        return $this;
    }

    /**
     * Get tarifaMbmed
     *
     * @return integer 
     */
    public function getTarifaMbmed()
    {
        return $this->tarifaMbmed;
    }

    /**
     * Set tarifaMbmax
     *
     * @param integer $tarifaMbmax
     * @return ActivoFijoServicios
     */
    public function setTarifaMbmax($tarifaMbmax)
    {
        $this->tarifaMbmax = $tarifaMbmax;

        return $this;
    }

    /**
     * Get tarifaMbmax
     *
     * @return integer 
     */
    public function getTarifaMbmax()
    {
        return $this->tarifaMbmax;
    }

    /**
     * Set tarifaMcdflt
     *
     * @param integer $tarifaMcdflt
     * @return ActivoFijoServicios
     */
    public function setTarifaMcdflt($tarifaMcdflt)
    {
        $this->tarifaMcdflt = $tarifaMcdflt;

        return $this;
    }

    /**
     * Get tarifaMcdflt
     *
     * @return integer 
     */
    public function getTarifaMcdflt()
    {
        return $this->tarifaMcdflt;
    }

    /**
     * Set tarifaMcmin
     *
     * @param integer $tarifaMcmin
     * @return ActivoFijoServicios
     */
    public function setTarifaMcmin($tarifaMcmin)
    {
        $this->tarifaMcmin = $tarifaMcmin;

        return $this;
    }

    /**
     * Get tarifaMcmin
     *
     * @return integer 
     */
    public function getTarifaMcmin()
    {
        return $this->tarifaMcmin;
    }

    /**
     * Set tarifaMcmed
     *
     * @param integer $tarifaMcmed
     * @return ActivoFijoServicios
     */
    public function setTarifaMcmed($tarifaMcmed)
    {
        $this->tarifaMcmed = $tarifaMcmed;

        return $this;
    }

    /**
     * Get tarifaMcmed
     *
     * @return integer 
     */
    public function getTarifaMcmed()
    {
        return $this->tarifaMcmed;
    }

    /**
     * Set tarifaMcmax
     *
     * @param integer $tarifaMcmax
     * @return ActivoFijoServicios
     */
    public function setTarifaMcmax($tarifaMcmax)
    {
        $this->tarifaMcmax = $tarifaMcmax;

        return $this;
    }

    /**
     * Get tarifaMcmax
     *
     * @return integer 
     */
    public function getTarifaMcmax()
    {
        return $this->tarifaMcmax;
    }

    /**
     * Set idClasificacion
     *
     * @param string $idClasificacion
     * @return ActivoFijoServicios
     */
    public function setIdClasificacion($idClasificacion)
    {
        $this->idClasificacion = $idClasificacion;

        return $this;
    }

    /**
     * Get idClasificacion
     *
     * @return string 
     */
    public function getIdClasificacion()
    {
        return $this->idClasificacion;
    }

    /**
     * Set idSubclasificacion
     *
     * @param string $idSubclasificacion
     * @return ActivoFijoServicios
     */
    public function setIdSubclasificacion($idSubclasificacion)
    {
        $this->idSubclasificacion = $idSubclasificacion;

        return $this;
    }

    /**
     * Get idSubclasificacion
     *
     * @return string 
     */
    public function getIdSubclasificacion()
    {
        return $this->idSubclasificacion;
    }

    /**
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return ActivoFijoServicios
     */
    public function setIdCcosto($idCcosto)
    {
        $this->idCcosto = $idCcosto;

        return $this;
    }

    /**
     * Get idCcosto
     *
     * @return string 
     */
    public function getIdCcosto()
    {
        return $this->idCcosto;
    }
}
