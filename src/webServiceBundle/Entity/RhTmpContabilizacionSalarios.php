<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhTmpContabilizacionSalarios
 *
 * @ORM\Table(name="RH_Tmp_Contabilizacion_Salarios")
 * @ORM\Entity
 */
class RhTmpContabilizacionSalarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ccosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     */
    private $idExpediente;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Basico", type="integer", nullable=false)
     */
    private $salarioBasico;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plus", type="integer", nullable=false)
     */
    private $plus;

    /**
     * @var integer
     *
     * @ORM\Column(name="Otros_Salarios", type="integer", nullable=false)
     */
    private $otrosSalarios;

    /**
     * @var integer
     *
     * @ORM\Column(name="Antiguedad", type="integer", nullable=false)
     */
    private $antiguedad;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_por_Cargo", type="integer", nullable=false)
     */
    private $salarioPorCargo;

    /**
     * @var integer
     *
     * @ORM\Column(name="IETerritorial", type="integer", nullable=false)
     */
    private $ieterritorial;

    /**
     * @var integer
     *
     * @ORM\Column(name="ETSector", type="integer", nullable=false)
     */
    private $etsector;

    /**
     * @var integer
     *
     * @ORM\Column(name="Horas_Extra", type="integer", nullable=false)
     */
    private $horasExtra;

    /**
     * @var integer
     *
     * @ORM\Column(name="Condiciones", type="integer", nullable=false)
     */
    private $condiciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="Albergamiento", type="integer", nullable=false)
     */
    private $albergamiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="HorarioIrregular", type="integer", nullable=false)
     */
    private $horarioirregular;

    /**
     * @var integer
     *
     * @ORM\Column(name="Idoneidad_Fijo", type="integer", nullable=false)
     */
    private $idoneidadFijo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Idoneidad_Movil", type="integer", nullable=false)
     */
    private $idoneidadMovil;

    /**
     * @var integer
     *
     * @ORM\Column(name="Retribucion_Complementaria", type="integer", nullable=false)
     */
    private $retribucionComplementaria;

    /**
     * @var integer
     *
     * @ORM\Column(name="OtrasRetribuciones", type="integer", nullable=false)
     */
    private $otrasretribuciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="Otras_CLA", type="integer", nullable=false)
     */
    private $otrasCla;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado60", type="integer", nullable=false)
     */
    private $devengado60;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado100", type="integer", nullable=false)
     */
    private $devengado100;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_por_Suspension", type="integer", nullable=false)
     */
    private $devengadoPorSuspension;

    /**
     * @var integer
     *
     * @ORM\Column(name="DevengadoReubicados", type="integer", nullable=false)
     */
    private $devengadoreubicados;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_Divisa", type="integer", nullable=false)
     */
    private $devengadoDivisa;

    /**
     * @var integer
     *
     * @ORM\Column(name="SalarioResultado", type="integer", nullable=false)
     */
    private $salarioresultado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Acumulado_Pago", type="integer", nullable=false)
     */
    private $salarioAcumuladoPago;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteMS", type="integer", nullable=false)
     */
    private $importems;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Sobrecumplimiento", type="integer", nullable=false)
     */
    private $importeSobrecumplimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="Perfeccionamiento", type="integer", nullable=false)
     */
    private $perfeccionamiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estimulacion", type="integer", nullable=false)
     */
    private $estimulacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Recargo_Total", type="integer", nullable=false)
     */
    private $recargoTotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="Acobrar", type="integer", nullable=false)
     */
    private $acobrar;

    /**
     * @var integer
     *
     * @ORM\Column(name="Descuento", type="integer", nullable=false)
     */
    private $descuento;

    /**
     * @var string
     *
     * @ORM\Column(name="AjusteCentavos", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $ajustecentavos;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento_Fondo", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoFondo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Actividad_Id_Ccosto_Id_Obra", type="string", length=20, nullable=false)
     */
    private $idActividadIdCcostoIdObra;

    /**
     * @var integer
     *
     * @ORM\Column(name="Decreto_Ley_91", type="integer", nullable=false)
     */
    private $decretoLey91;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Actividad", type="string", length=3, nullable=false)
     */
    private $idActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Obra", type="string", length=10, nullable=false)
     */
    private $idObra;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteMS_ET", type="integer", nullable=false)
     */
    private $importemsEt;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteMS_EE", type="integer", nullable=false)
     */
    private $importemsEe;

    /**
     * @var integer
     *
     * @ORM\Column(name="Pago_Comedor", type="integer", nullable=false)
     */
    private $pagoComedor;

    /**
     * @var integer
     *
     * @ORM\Column(name="Pago_Comedor_Divisa", type="integer", nullable=false)
     */
    private $pagoComedorDivisa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Otros_Pagos1", type="integer", nullable=false)
     */
    private $otrosPagos1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Otros_Pagos2", type="integer", nullable=false)
     */
    private $otrosPagos2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Otros_Pagos3", type="integer", nullable=false)
     */
    private $otrosPagos3;

    /**
     * @var integer
     *
     * @ORM\Column(name="Otros_Pagos4", type="integer", nullable=false)
     */
    private $otrosPagos4;

    /**
     * @var integer
     *
     * @ORM\Column(name="Otros_Pagos5", type="integer", nullable=false)
     */
    private $otrosPagos5;



    /**
     * Get contador
     *
     * @return integer 
     */
    public function getContador()
    {
        return $this->contador;
    }

    /**
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return RhTmpContabilizacionSalarios
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
     * Set idExpediente
     *
     * @param string $idExpediente
     * @return RhTmpContabilizacionSalarios
     */
    public function setIdExpediente($idExpediente)
    {
        $this->idExpediente = $idExpediente;

        return $this;
    }

    /**
     * Get idExpediente
     *
     * @return string 
     */
    public function getIdExpediente()
    {
        return $this->idExpediente;
    }

    /**
     * Set salarioBasico
     *
     * @param integer $salarioBasico
     * @return RhTmpContabilizacionSalarios
     */
    public function setSalarioBasico($salarioBasico)
    {
        $this->salarioBasico = $salarioBasico;

        return $this;
    }

    /**
     * Get salarioBasico
     *
     * @return integer 
     */
    public function getSalarioBasico()
    {
        return $this->salarioBasico;
    }

    /**
     * Set plus
     *
     * @param integer $plus
     * @return RhTmpContabilizacionSalarios
     */
    public function setPlus($plus)
    {
        $this->plus = $plus;

        return $this;
    }

    /**
     * Get plus
     *
     * @return integer 
     */
    public function getPlus()
    {
        return $this->plus;
    }

    /**
     * Set otrosSalarios
     *
     * @param integer $otrosSalarios
     * @return RhTmpContabilizacionSalarios
     */
    public function setOtrosSalarios($otrosSalarios)
    {
        $this->otrosSalarios = $otrosSalarios;

        return $this;
    }

    /**
     * Get otrosSalarios
     *
     * @return integer 
     */
    public function getOtrosSalarios()
    {
        return $this->otrosSalarios;
    }

    /**
     * Set antiguedad
     *
     * @param integer $antiguedad
     * @return RhTmpContabilizacionSalarios
     */
    public function setAntiguedad($antiguedad)
    {
        $this->antiguedad = $antiguedad;

        return $this;
    }

    /**
     * Get antiguedad
     *
     * @return integer 
     */
    public function getAntiguedad()
    {
        return $this->antiguedad;
    }

    /**
     * Set salarioPorCargo
     *
     * @param integer $salarioPorCargo
     * @return RhTmpContabilizacionSalarios
     */
    public function setSalarioPorCargo($salarioPorCargo)
    {
        $this->salarioPorCargo = $salarioPorCargo;

        return $this;
    }

    /**
     * Get salarioPorCargo
     *
     * @return integer 
     */
    public function getSalarioPorCargo()
    {
        return $this->salarioPorCargo;
    }

    /**
     * Set ieterritorial
     *
     * @param integer $ieterritorial
     * @return RhTmpContabilizacionSalarios
     */
    public function setIeterritorial($ieterritorial)
    {
        $this->ieterritorial = $ieterritorial;

        return $this;
    }

    /**
     * Get ieterritorial
     *
     * @return integer 
     */
    public function getIeterritorial()
    {
        return $this->ieterritorial;
    }

    /**
     * Set etsector
     *
     * @param integer $etsector
     * @return RhTmpContabilizacionSalarios
     */
    public function setEtsector($etsector)
    {
        $this->etsector = $etsector;

        return $this;
    }

    /**
     * Get etsector
     *
     * @return integer 
     */
    public function getEtsector()
    {
        return $this->etsector;
    }

    /**
     * Set horasExtra
     *
     * @param integer $horasExtra
     * @return RhTmpContabilizacionSalarios
     */
    public function setHorasExtra($horasExtra)
    {
        $this->horasExtra = $horasExtra;

        return $this;
    }

    /**
     * Get horasExtra
     *
     * @return integer 
     */
    public function getHorasExtra()
    {
        return $this->horasExtra;
    }

    /**
     * Set condiciones
     *
     * @param integer $condiciones
     * @return RhTmpContabilizacionSalarios
     */
    public function setCondiciones($condiciones)
    {
        $this->condiciones = $condiciones;

        return $this;
    }

    /**
     * Get condiciones
     *
     * @return integer 
     */
    public function getCondiciones()
    {
        return $this->condiciones;
    }

    /**
     * Set albergamiento
     *
     * @param integer $albergamiento
     * @return RhTmpContabilizacionSalarios
     */
    public function setAlbergamiento($albergamiento)
    {
        $this->albergamiento = $albergamiento;

        return $this;
    }

    /**
     * Get albergamiento
     *
     * @return integer 
     */
    public function getAlbergamiento()
    {
        return $this->albergamiento;
    }

    /**
     * Set horarioirregular
     *
     * @param integer $horarioirregular
     * @return RhTmpContabilizacionSalarios
     */
    public function setHorarioirregular($horarioirregular)
    {
        $this->horarioirregular = $horarioirregular;

        return $this;
    }

    /**
     * Get horarioirregular
     *
     * @return integer 
     */
    public function getHorarioirregular()
    {
        return $this->horarioirregular;
    }

    /**
     * Set idoneidadFijo
     *
     * @param integer $idoneidadFijo
     * @return RhTmpContabilizacionSalarios
     */
    public function setIdoneidadFijo($idoneidadFijo)
    {
        $this->idoneidadFijo = $idoneidadFijo;

        return $this;
    }

    /**
     * Get idoneidadFijo
     *
     * @return integer 
     */
    public function getIdoneidadFijo()
    {
        return $this->idoneidadFijo;
    }

    /**
     * Set idoneidadMovil
     *
     * @param integer $idoneidadMovil
     * @return RhTmpContabilizacionSalarios
     */
    public function setIdoneidadMovil($idoneidadMovil)
    {
        $this->idoneidadMovil = $idoneidadMovil;

        return $this;
    }

    /**
     * Get idoneidadMovil
     *
     * @return integer 
     */
    public function getIdoneidadMovil()
    {
        return $this->idoneidadMovil;
    }

    /**
     * Set retribucionComplementaria
     *
     * @param integer $retribucionComplementaria
     * @return RhTmpContabilizacionSalarios
     */
    public function setRetribucionComplementaria($retribucionComplementaria)
    {
        $this->retribucionComplementaria = $retribucionComplementaria;

        return $this;
    }

    /**
     * Get retribucionComplementaria
     *
     * @return integer 
     */
    public function getRetribucionComplementaria()
    {
        return $this->retribucionComplementaria;
    }

    /**
     * Set otrasretribuciones
     *
     * @param integer $otrasretribuciones
     * @return RhTmpContabilizacionSalarios
     */
    public function setOtrasretribuciones($otrasretribuciones)
    {
        $this->otrasretribuciones = $otrasretribuciones;

        return $this;
    }

    /**
     * Get otrasretribuciones
     *
     * @return integer 
     */
    public function getOtrasretribuciones()
    {
        return $this->otrasretribuciones;
    }

    /**
     * Set otrasCla
     *
     * @param integer $otrasCla
     * @return RhTmpContabilizacionSalarios
     */
    public function setOtrasCla($otrasCla)
    {
        $this->otrasCla = $otrasCla;

        return $this;
    }

    /**
     * Get otrasCla
     *
     * @return integer 
     */
    public function getOtrasCla()
    {
        return $this->otrasCla;
    }

    /**
     * Set devengado60
     *
     * @param integer $devengado60
     * @return RhTmpContabilizacionSalarios
     */
    public function setDevengado60($devengado60)
    {
        $this->devengado60 = $devengado60;

        return $this;
    }

    /**
     * Get devengado60
     *
     * @return integer 
     */
    public function getDevengado60()
    {
        return $this->devengado60;
    }

    /**
     * Set devengado100
     *
     * @param integer $devengado100
     * @return RhTmpContabilizacionSalarios
     */
    public function setDevengado100($devengado100)
    {
        $this->devengado100 = $devengado100;

        return $this;
    }

    /**
     * Get devengado100
     *
     * @return integer 
     */
    public function getDevengado100()
    {
        return $this->devengado100;
    }

    /**
     * Set devengadoPorSuspension
     *
     * @param integer $devengadoPorSuspension
     * @return RhTmpContabilizacionSalarios
     */
    public function setDevengadoPorSuspension($devengadoPorSuspension)
    {
        $this->devengadoPorSuspension = $devengadoPorSuspension;

        return $this;
    }

    /**
     * Get devengadoPorSuspension
     *
     * @return integer 
     */
    public function getDevengadoPorSuspension()
    {
        return $this->devengadoPorSuspension;
    }

    /**
     * Set devengadoreubicados
     *
     * @param integer $devengadoreubicados
     * @return RhTmpContabilizacionSalarios
     */
    public function setDevengadoreubicados($devengadoreubicados)
    {
        $this->devengadoreubicados = $devengadoreubicados;

        return $this;
    }

    /**
     * Get devengadoreubicados
     *
     * @return integer 
     */
    public function getDevengadoreubicados()
    {
        return $this->devengadoreubicados;
    }

    /**
     * Set devengadoDivisa
     *
     * @param integer $devengadoDivisa
     * @return RhTmpContabilizacionSalarios
     */
    public function setDevengadoDivisa($devengadoDivisa)
    {
        $this->devengadoDivisa = $devengadoDivisa;

        return $this;
    }

    /**
     * Get devengadoDivisa
     *
     * @return integer 
     */
    public function getDevengadoDivisa()
    {
        return $this->devengadoDivisa;
    }

    /**
     * Set salarioresultado
     *
     * @param integer $salarioresultado
     * @return RhTmpContabilizacionSalarios
     */
    public function setSalarioresultado($salarioresultado)
    {
        $this->salarioresultado = $salarioresultado;

        return $this;
    }

    /**
     * Get salarioresultado
     *
     * @return integer 
     */
    public function getSalarioresultado()
    {
        return $this->salarioresultado;
    }

    /**
     * Set salarioAcumuladoPago
     *
     * @param integer $salarioAcumuladoPago
     * @return RhTmpContabilizacionSalarios
     */
    public function setSalarioAcumuladoPago($salarioAcumuladoPago)
    {
        $this->salarioAcumuladoPago = $salarioAcumuladoPago;

        return $this;
    }

    /**
     * Get salarioAcumuladoPago
     *
     * @return integer 
     */
    public function getSalarioAcumuladoPago()
    {
        return $this->salarioAcumuladoPago;
    }

    /**
     * Set importems
     *
     * @param integer $importems
     * @return RhTmpContabilizacionSalarios
     */
    public function setImportems($importems)
    {
        $this->importems = $importems;

        return $this;
    }

    /**
     * Get importems
     *
     * @return integer 
     */
    public function getImportems()
    {
        return $this->importems;
    }

    /**
     * Set importeSobrecumplimiento
     *
     * @param integer $importeSobrecumplimiento
     * @return RhTmpContabilizacionSalarios
     */
    public function setImporteSobrecumplimiento($importeSobrecumplimiento)
    {
        $this->importeSobrecumplimiento = $importeSobrecumplimiento;

        return $this;
    }

    /**
     * Get importeSobrecumplimiento
     *
     * @return integer 
     */
    public function getImporteSobrecumplimiento()
    {
        return $this->importeSobrecumplimiento;
    }

    /**
     * Set perfeccionamiento
     *
     * @param integer $perfeccionamiento
     * @return RhTmpContabilizacionSalarios
     */
    public function setPerfeccionamiento($perfeccionamiento)
    {
        $this->perfeccionamiento = $perfeccionamiento;

        return $this;
    }

    /**
     * Get perfeccionamiento
     *
     * @return integer 
     */
    public function getPerfeccionamiento()
    {
        return $this->perfeccionamiento;
    }

    /**
     * Set estimulacion
     *
     * @param integer $estimulacion
     * @return RhTmpContabilizacionSalarios
     */
    public function setEstimulacion($estimulacion)
    {
        $this->estimulacion = $estimulacion;

        return $this;
    }

    /**
     * Get estimulacion
     *
     * @return integer 
     */
    public function getEstimulacion()
    {
        return $this->estimulacion;
    }

    /**
     * Set recargoTotal
     *
     * @param integer $recargoTotal
     * @return RhTmpContabilizacionSalarios
     */
    public function setRecargoTotal($recargoTotal)
    {
        $this->recargoTotal = $recargoTotal;

        return $this;
    }

    /**
     * Get recargoTotal
     *
     * @return integer 
     */
    public function getRecargoTotal()
    {
        return $this->recargoTotal;
    }

    /**
     * Set acobrar
     *
     * @param integer $acobrar
     * @return RhTmpContabilizacionSalarios
     */
    public function setAcobrar($acobrar)
    {
        $this->acobrar = $acobrar;

        return $this;
    }

    /**
     * Get acobrar
     *
     * @return integer 
     */
    public function getAcobrar()
    {
        return $this->acobrar;
    }

    /**
     * Set descuento
     *
     * @param integer $descuento
     * @return RhTmpContabilizacionSalarios
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return integer 
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Set ajustecentavos
     *
     * @param string $ajustecentavos
     * @return RhTmpContabilizacionSalarios
     */
    public function setAjustecentavos($ajustecentavos)
    {
        $this->ajustecentavos = $ajustecentavos;

        return $this;
    }

    /**
     * Get ajustecentavos
     *
     * @return string 
     */
    public function getAjustecentavos()
    {
        return $this->ajustecentavos;
    }

    /**
     * Set porcientoFondo
     *
     * @param string $porcientoFondo
     * @return RhTmpContabilizacionSalarios
     */
    public function setPorcientoFondo($porcientoFondo)
    {
        $this->porcientoFondo = $porcientoFondo;

        return $this;
    }

    /**
     * Get porcientoFondo
     *
     * @return string 
     */
    public function getPorcientoFondo()
    {
        return $this->porcientoFondo;
    }

    /**
     * Set idActividadIdCcostoIdObra
     *
     * @param string $idActividadIdCcostoIdObra
     * @return RhTmpContabilizacionSalarios
     */
    public function setIdActividadIdCcostoIdObra($idActividadIdCcostoIdObra)
    {
        $this->idActividadIdCcostoIdObra = $idActividadIdCcostoIdObra;

        return $this;
    }

    /**
     * Get idActividadIdCcostoIdObra
     *
     * @return string 
     */
    public function getIdActividadIdCcostoIdObra()
    {
        return $this->idActividadIdCcostoIdObra;
    }

    /**
     * Set decretoLey91
     *
     * @param integer $decretoLey91
     * @return RhTmpContabilizacionSalarios
     */
    public function setDecretoLey91($decretoLey91)
    {
        $this->decretoLey91 = $decretoLey91;

        return $this;
    }

    /**
     * Get decretoLey91
     *
     * @return integer 
     */
    public function getDecretoLey91()
    {
        return $this->decretoLey91;
    }

    /**
     * Set idActividad
     *
     * @param string $idActividad
     * @return RhTmpContabilizacionSalarios
     */
    public function setIdActividad($idActividad)
    {
        $this->idActividad = $idActividad;

        return $this;
    }

    /**
     * Get idActividad
     *
     * @return string 
     */
    public function getIdActividad()
    {
        return $this->idActividad;
    }

    /**
     * Set idObra
     *
     * @param string $idObra
     * @return RhTmpContabilizacionSalarios
     */
    public function setIdObra($idObra)
    {
        $this->idObra = $idObra;

        return $this;
    }

    /**
     * Get idObra
     *
     * @return string 
     */
    public function getIdObra()
    {
        return $this->idObra;
    }

    /**
     * Set importemsEt
     *
     * @param integer $importemsEt
     * @return RhTmpContabilizacionSalarios
     */
    public function setImportemsEt($importemsEt)
    {
        $this->importemsEt = $importemsEt;

        return $this;
    }

    /**
     * Get importemsEt
     *
     * @return integer 
     */
    public function getImportemsEt()
    {
        return $this->importemsEt;
    }

    /**
     * Set importemsEe
     *
     * @param integer $importemsEe
     * @return RhTmpContabilizacionSalarios
     */
    public function setImportemsEe($importemsEe)
    {
        $this->importemsEe = $importemsEe;

        return $this;
    }

    /**
     * Get importemsEe
     *
     * @return integer 
     */
    public function getImportemsEe()
    {
        return $this->importemsEe;
    }

    /**
     * Set pagoComedor
     *
     * @param integer $pagoComedor
     * @return RhTmpContabilizacionSalarios
     */
    public function setPagoComedor($pagoComedor)
    {
        $this->pagoComedor = $pagoComedor;

        return $this;
    }

    /**
     * Get pagoComedor
     *
     * @return integer 
     */
    public function getPagoComedor()
    {
        return $this->pagoComedor;
    }

    /**
     * Set pagoComedorDivisa
     *
     * @param integer $pagoComedorDivisa
     * @return RhTmpContabilizacionSalarios
     */
    public function setPagoComedorDivisa($pagoComedorDivisa)
    {
        $this->pagoComedorDivisa = $pagoComedorDivisa;

        return $this;
    }

    /**
     * Get pagoComedorDivisa
     *
     * @return integer 
     */
    public function getPagoComedorDivisa()
    {
        return $this->pagoComedorDivisa;
    }

    /**
     * Set otrosPagos1
     *
     * @param integer $otrosPagos1
     * @return RhTmpContabilizacionSalarios
     */
    public function setOtrosPagos1($otrosPagos1)
    {
        $this->otrosPagos1 = $otrosPagos1;

        return $this;
    }

    /**
     * Get otrosPagos1
     *
     * @return integer 
     */
    public function getOtrosPagos1()
    {
        return $this->otrosPagos1;
    }

    /**
     * Set otrosPagos2
     *
     * @param integer $otrosPagos2
     * @return RhTmpContabilizacionSalarios
     */
    public function setOtrosPagos2($otrosPagos2)
    {
        $this->otrosPagos2 = $otrosPagos2;

        return $this;
    }

    /**
     * Get otrosPagos2
     *
     * @return integer 
     */
    public function getOtrosPagos2()
    {
        return $this->otrosPagos2;
    }

    /**
     * Set otrosPagos3
     *
     * @param integer $otrosPagos3
     * @return RhTmpContabilizacionSalarios
     */
    public function setOtrosPagos3($otrosPagos3)
    {
        $this->otrosPagos3 = $otrosPagos3;

        return $this;
    }

    /**
     * Get otrosPagos3
     *
     * @return integer 
     */
    public function getOtrosPagos3()
    {
        return $this->otrosPagos3;
    }

    /**
     * Set otrosPagos4
     *
     * @param integer $otrosPagos4
     * @return RhTmpContabilizacionSalarios
     */
    public function setOtrosPagos4($otrosPagos4)
    {
        $this->otrosPagos4 = $otrosPagos4;

        return $this;
    }

    /**
     * Get otrosPagos4
     *
     * @return integer 
     */
    public function getOtrosPagos4()
    {
        return $this->otrosPagos4;
    }

    /**
     * Set otrosPagos5
     *
     * @param integer $otrosPagos5
     * @return RhTmpContabilizacionSalarios
     */
    public function setOtrosPagos5($otrosPagos5)
    {
        $this->otrosPagos5 = $otrosPagos5;

        return $this;
    }

    /**
     * Get otrosPagos5
     *
     * @return integer 
     */
    public function getOtrosPagos5()
    {
        return $this->otrosPagos5;
    }
}
