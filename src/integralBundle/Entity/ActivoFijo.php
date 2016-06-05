<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivoFijo
 *
 * @ORM\Table(name="Activo_Fijo", indexes={@ORM\Index(name="IX_Id_Rotulo", columns={"Id_Rotulo"})})
 * @ORM\Entity
 */
class ActivoFijo
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_ActivoFijo", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idActivofijo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_ActivoFijo", type="string", length=255, nullable=false)
     */
    private $descActivofijo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Rotulo", type="string", length=15, nullable=false)
     */
    private $idRotulo; //falta

    /**
     * @var string
     *
     * @ORM\Column(name="Id_TipoActivoFijo", type="string", length=3, nullable=false)
     */
    private $idTipoactivofijo;

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
     * @ORM\Column(name="Id_Especificacion", type="string", length=15, nullable=false)
     */
    private $idEspecificacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Alta", type="datetime", nullable=false)
     */
    private $fechaAlta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_Inicial", type="integer", nullable=false)
     */
    private $valorInicial;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_InicialMC", type="integer", nullable=false)
     */
    private $valorInicialmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_Residual", type="integer", nullable=false)
     */
    private $valorResidual;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_ResidualMC", type="integer", nullable=false)
     */
    private $valorResidualmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tasa_Depreciacion", type="integer", nullable=false)
     */
    private $tasaDepreciacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Depreciacion_Acumulada", type="integer", nullable=false)
     */
    private $depreciacionAcumulada;

    /**
     * @var integer
     *
     * @ORM\Column(name="Depreciacion_AcumuladaMC", type="integer", nullable=false)
     */
    private $depreciacionAcumuladamc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Depreciacion_Mensual", type="integer", nullable=false)
     */
    private $depreciacionMensual;

    /**
     * @var integer
     *
     * @ORM\Column(name="Depreciacion_MensualMC", type="integer", nullable=false)
     */
    private $depreciacionMensualmc;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado", type="string", length=15, nullable=false)
     */
    private $idEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ccosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_AreaResp", type="string", length=10, nullable=false)
     */
    private $idArearesp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_EstadoActual", type="datetime", nullable=false)
     */
    private $fechaEstadoactual;

    /**
     * @var string
     *
     * @ORM\Column(name="CNMB", type="string", length=50, nullable=false)
     */
    private $cnmb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Conteo", type="datetime", nullable=false)
     */
    private $fechaConteo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Marca", type="boolean", nullable=false)
     */
    private $marca;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Marca_Conteo", type="boolean", nullable=false)
     */
    private $marcaConteo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Activo", type="boolean", nullable=false)
     */
    private $activo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Alquilado", type="boolean", nullable=false)
     */
    private $alquilado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Estado_Activo", type="string", length=3, nullable=false)
     */
    private $idEstadoActivo;

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
     * @var boolean
     *
     * @ORM\Column(name="Disponible", type="boolean", nullable=false)
     */
    private $disponible;

    /**
     * @var string
     *
     * @ORM\Column(name="Numero_Serie", type="string", length=30, nullable=false)
     */
    private $numeroSerie;



    /**
     * Get idActivofijo
     *
     * @return string 
     */
    public function getIdActivofijo()
    {
        return $this->idActivofijo;
    }

    /**
     * Set descActivofijo
     *
     * @param string $descActivofijo
     * @return ActivoFijo
     */
    public function setDescActivofijo($descActivofijo)
    {
        $this->descActivofijo = $descActivofijo;

        return $this;
    }

    /**
     * Get descActivofijo
     *
     * @return string 
     */
    public function getDescActivofijo()
    {
        return $this->descActivofijo;
    }

    /**
     * Set idRotulo
     *
     * @param string $idRotulo
     * @return ActivoFijo
     */
    public function setIdRotulo($idRotulo)
    {
        $this->idRotulo = $idRotulo;

        return $this;
    }

    /**
     * Get idRotulo
     *
     * @return string 
     */
    public function getIdRotulo()
    {
        return $this->idRotulo;
    }

    /**
     * Set idTipoactivofijo
     *
     * @param string $idTipoactivofijo
     * @return ActivoFijo
     */
    public function setIdTipoactivofijo($idTipoactivofijo)
    {
        $this->idTipoactivofijo = $idTipoactivofijo;

        return $this;
    }

    /**
     * Get idTipoactivofijo
     *
     * @return string 
     */
    public function getIdTipoactivofijo()
    {
        return $this->idTipoactivofijo;
    }

    /**
     * Set idClasificacion
     *
     * @param string $idClasificacion
     * @return ActivoFijo
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
     * @return ActivoFijo
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
     * Set idEspecificacion
     *
     * @param string $idEspecificacion
     * @return ActivoFijo
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
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     * @return ActivoFijo
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime 
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set valorInicial
     *
     * @param integer $valorInicial
     * @return ActivoFijo
     */
    public function setValorInicial($valorInicial)
    {
        $this->valorInicial = $valorInicial;

        return $this;
    }

    /**
     * Get valorInicial
     *
     * @return integer 
     */
    public function getValorInicial()
    {
        return $this->valorInicial;
    }

    /**
     * Set valorInicialmc
     *
     * @param integer $valorInicialmc
     * @return ActivoFijo
     */
    public function setValorInicialmc($valorInicialmc)
    {
        $this->valorInicialmc = $valorInicialmc;

        return $this;
    }

    /**
     * Get valorInicialmc
     *
     * @return integer 
     */
    public function getValorInicialmc()
    {
        return $this->valorInicialmc;
    }

    /**
     * Set valorResidual
     *
     * @param integer $valorResidual
     * @return ActivoFijo
     */
    public function setValorResidual($valorResidual)
    {
        $this->valorResidual = $valorResidual;

        return $this;
    }

    /**
     * Get valorResidual
     *
     * @return integer 
     */
    public function getValorResidual()
    {
        return $this->valorResidual;
    }

    /**
     * Set valorResidualmc
     *
     * @param integer $valorResidualmc
     * @return ActivoFijo
     */
    public function setValorResidualmc($valorResidualmc)
    {
        $this->valorResidualmc = $valorResidualmc;

        return $this;
    }

    /**
     * Get valorResidualmc
     *
     * @return integer 
     */
    public function getValorResidualmc()
    {
        return $this->valorResidualmc;
    }

    /**
     * Set tasaDepreciacion
     *
     * @param integer $tasaDepreciacion
     * @return ActivoFijo
     */
    public function setTasaDepreciacion($tasaDepreciacion)
    {
        $this->tasaDepreciacion = $tasaDepreciacion;

        return $this;
    }

    /**
     * Get tasaDepreciacion
     *
     * @return integer 
     */
    public function getTasaDepreciacion()
    {
        return $this->tasaDepreciacion;
    }

    /**
     * Set depreciacionAcumulada
     *
     * @param integer $depreciacionAcumulada
     * @return ActivoFijo
     */
    public function setDepreciacionAcumulada($depreciacionAcumulada)
    {
        $this->depreciacionAcumulada = $depreciacionAcumulada;

        return $this;
    }

    /**
     * Get depreciacionAcumulada
     *
     * @return integer 
     */
    public function getDepreciacionAcumulada()
    {
        return $this->depreciacionAcumulada;
    }

    /**
     * Set depreciacionAcumuladamc
     *
     * @param integer $depreciacionAcumuladamc
     * @return ActivoFijo
     */
    public function setDepreciacionAcumuladamc($depreciacionAcumuladamc)
    {
        $this->depreciacionAcumuladamc = $depreciacionAcumuladamc;

        return $this;
    }

    /**
     * Get depreciacionAcumuladamc
     *
     * @return integer 
     */
    public function getDepreciacionAcumuladamc()
    {
        return $this->depreciacionAcumuladamc;
    }

    /**
     * Set depreciacionMensual
     *
     * @param integer $depreciacionMensual
     * @return ActivoFijo
     */
    public function setDepreciacionMensual($depreciacionMensual)
    {
        $this->depreciacionMensual = $depreciacionMensual;

        return $this;
    }

    /**
     * Get depreciacionMensual
     *
     * @return integer 
     */
    public function getDepreciacionMensual()
    {
        return $this->depreciacionMensual;
    }

    /**
     * Set depreciacionMensualmc
     *
     * @param integer $depreciacionMensualmc
     * @return ActivoFijo
     */
    public function setDepreciacionMensualmc($depreciacionMensualmc)
    {
        $this->depreciacionMensualmc = $depreciacionMensualmc;

        return $this;
    }

    /**
     * Get depreciacionMensualmc
     *
     * @return integer 
     */
    public function getDepreciacionMensualmc()
    {
        return $this->depreciacionMensualmc;
    }

    /**
     * Set idEmpleado
     *
     * @param string $idEmpleado
     * @return ActivoFijo
     */
    public function setIdEmpleado($idEmpleado)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado
     *
     * @return string 
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return ActivoFijo
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

    /**
     * Set idArearesp
     *
     * @param string $idArearesp
     * @return ActivoFijo
     */
    public function setIdArearesp($idArearesp)
    {
        $this->idArearesp = $idArearesp;

        return $this;
    }

    /**
     * Get idArearesp
     *
     * @return string 
     */
    public function getIdArearesp()
    {
        return $this->idArearesp;
    }

    /**
     * Set fechaEstadoactual
     *
     * @param \DateTime $fechaEstadoactual
     * @return ActivoFijo
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
     * Set cnmb
     *
     * @param string $cnmb
     * @return ActivoFijo
     */
    public function setCnmb($cnmb)
    {
        $this->cnmb = $cnmb;

        return $this;
    }

    /**
     * Get cnmb
     *
     * @return string 
     */
    public function getCnmb()
    {
        return $this->cnmb;
    }

    /**
     * Set fechaConteo
     *
     * @param \DateTime $fechaConteo
     * @return ActivoFijo
     */
    public function setFechaConteo($fechaConteo)
    {
        $this->fechaConteo = $fechaConteo;

        return $this;
    }

    /**
     * Get fechaConteo
     *
     * @return \DateTime 
     */
    public function getFechaConteo()
    {
        return $this->fechaConteo;
    }

    /**
     * Set marca
     *
     * @param boolean $marca
     * @return ActivoFijo
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return boolean 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set marcaConteo
     *
     * @param boolean $marcaConteo
     * @return ActivoFijo
     */
    public function setMarcaConteo($marcaConteo)
    {
        $this->marcaConteo = $marcaConteo;

        return $this;
    }

    /**
     * Get marcaConteo
     *
     * @return boolean 
     */
    public function getMarcaConteo()
    {
        return $this->marcaConteo;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return ActivoFijo
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set alquilado
     *
     * @param boolean $alquilado
     * @return ActivoFijo
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
     * Set idEstadoActivo
     *
     * @param string $idEstadoActivo
     * @return ActivoFijo
     */
    public function setIdEstadoActivo($idEstadoActivo)
    {
        $this->idEstadoActivo = $idEstadoActivo;

        return $this;
    }

    /**
     * Get idEstadoActivo
     *
     * @return string 
     */
    public function getIdEstadoActivo()
    {
        return $this->idEstadoActivo;
    }

    /**
     * Set idCliente
     *
     * @param string $idCliente
     * @return ActivoFijo
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
     * @return ActivoFijo
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
     * @return ActivoFijo
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
     * @return ActivoFijo
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
     * @return ActivoFijo
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
     * @return ActivoFijo
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
     * @return ActivoFijo
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
     * @return ActivoFijo
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
     * @return ActivoFijo
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
     * @return ActivoFijo
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
     * Set disponible
     *
     * @param boolean $disponible
     * @return ActivoFijo
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Get disponible
     *
     * @return boolean 
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * Set numeroSerie
     *
     * @param string $numeroSerie
     * @return ActivoFijo
     */
    public function setNumeroSerie($numeroSerie)
    {
        $this->numeroSerie = $numeroSerie;

        return $this;
    }

    /**
     * Get numeroSerie
     *
     * @return string 
     */
    public function getNumeroSerie()
    {
        return $this->numeroSerie;
    }
}
