<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivoFijoModulos
 *
 * @ORM\Table(name="Activo_Fijo_Modulos")
 * @ORM\Entity
 */
class ActivoFijoModulos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Modulo", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idModulo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Modulo", type="string", length=255, nullable=false)
     */
    private $descModulo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Especificacion", type="string", length=15, nullable=false)
     */
    private $idEspecificacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_EstadoActual", type="datetime", nullable=false)
     */
    private $fechaEstadoactual;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Alquilado", type="boolean", nullable=false)
     */
    private $alquilado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Estado", type="string", length=3, nullable=false)
     */
    private $idEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cliente", type="string", length=15, nullable=false)
     */
    private $idCliente;

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
     * Get idModulo
     *
     * @return string 
     */
    public function getIdModulo()
    {
        return $this->idModulo;
    }

    /**
     * Set descModulo
     *
     * @param string $descModulo
     * @return ActivoFijoModulos
     */
    public function setDescModulo($descModulo)
    {
        $this->descModulo = $descModulo;

        return $this;
    }

    /**
     * Get descModulo
     *
     * @return string 
     */
    public function getDescModulo()
    {
        return $this->descModulo;
    }

    /**
     * Set idEspecificacion
     *
     * @param string $idEspecificacion
     * @return ActivoFijoModulos
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
     * Set fechaEstadoactual
     *
     * @param \DateTime $fechaEstadoactual
     * @return ActivoFijoModulos
     */
    public function setFechaEstadoactual($fechaEstadoactual)
    {
        $this->fechaEstadoactual = $fechaEstadoactual;

        return $this;
    }

    /**
     * Get fechaEstadoactual
     *
     * @return \DateTime 
     */
    public function getFechaEstadoactual()
    {
        return $this->fechaEstadoactual;
    }

    /**
     * Set alquilado
     *
     * @param boolean $alquilado
     * @return ActivoFijoModulos
     */
    public function setAlquilado($alquilado)
    {
        $this->alquilado = $alquilado;

        return $this;
    }

    /**
     * Get alquilado
     *
     * @return boolean 
     */
    public function getAlquilado()
    {
        return $this->alquilado;
    }

    /**
     * Set idEstado
     *
     * @param string $idEstado
     * @return ActivoFijoModulos
     */
    public function setIdEstado($idEstado)
    {
        $this->idEstado = $idEstado;

        return $this;
    }

    /**
     * Get idEstado
     *
     * @return string 
     */
    public function getIdEstado()
    {
        return $this->idEstado;
    }

    /**
     * Set idCliente
     *
     * @param string $idCliente
     * @return ActivoFijoModulos
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return string 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set codum
     *
     * @param integer $codum
     * @return ActivoFijoModulos
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
     * @return ActivoFijoModulos
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
     * @return ActivoFijoModulos
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
     * @return ActivoFijoModulos
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
     * @return ActivoFijoModulos
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
     * @return ActivoFijoModulos
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
     * @return ActivoFijoModulos
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
     * @return ActivoFijoModulos
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
     * @return ActivoFijoModulos
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
}
