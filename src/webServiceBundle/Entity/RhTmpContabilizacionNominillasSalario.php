<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhTmpContabilizacionNominillasSalario
 *
 * @ORM\Table(name="RH_Tmp_Contabilizacion_Nominillas_Salario")
 * @ORM\Entity
 */
class RhTmpContabilizacionNominillasSalario
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
     * @ORM\Column(name="Acobrar", type="integer", nullable=false)
     */
    private $acobrar;

    /**
     * @var integer
     *
     * @ORM\Column(name="Disponibles60", type="integer", nullable=false)
     */
    private $disponibles60;

    /**
     * @var integer
     *
     * @ORM\Column(name="Disponibles100", type="integer", nullable=false)
     */
    private $disponibles100;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Devolucion_Retenciones", type="integer", nullable=false)
     */
    private $importeDevolucionRetenciones;

    /**
     * @var string
     *
     * @ORM\Column(name="AjusteCentavos", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $ajustecentavos;

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
     * @ORM\Column(name="Indemnizacion_con_Factura", type="integer", nullable=false)
     */
    private $indemnizacionConFactura;

    /**
     * @var integer
     *
     * @ORM\Column(name="Indemnizacion_sin_Factura", type="integer", nullable=false)
     */
    private $indemnizacionSinFactura;

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
     * @ORM\Column(name="Turnos_Nocturnos", type="integer", nullable=false)
     */
    private $turnosNocturnos;



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
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * Set devengado60
     *
     * @param integer $devengado60
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * Set salarioAcumuladoPago
     *
     * @param integer $salarioAcumuladoPago
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * Set acobrar
     *
     * @param integer $acobrar
     * @return RhTmpContabilizacionNominillasSalario
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
     * Set disponibles60
     *
     * @param integer $disponibles60
     * @return RhTmpContabilizacionNominillasSalario
     */
    public function setDisponibles60($disponibles60)
    {
        $this->disponibles60 = $disponibles60;

        return $this;
    }

    /**
     * Get disponibles60
     *
     * @return integer 
     */
    public function getDisponibles60()
    {
        return $this->disponibles60;
    }

    /**
     * Set disponibles100
     *
     * @param integer $disponibles100
     * @return RhTmpContabilizacionNominillasSalario
     */
    public function setDisponibles100($disponibles100)
    {
        $this->disponibles100 = $disponibles100;

        return $this;
    }

    /**
     * Get disponibles100
     *
     * @return integer 
     */
    public function getDisponibles100()
    {
        return $this->disponibles100;
    }

    /**
     * Set importeDevolucionRetenciones
     *
     * @param integer $importeDevolucionRetenciones
     * @return RhTmpContabilizacionNominillasSalario
     */
    public function setImporteDevolucionRetenciones($importeDevolucionRetenciones)
    {
        $this->importeDevolucionRetenciones = $importeDevolucionRetenciones;

        return $this;
    }

    /**
     * Get importeDevolucionRetenciones
     *
     * @return integer 
     */
    public function getImporteDevolucionRetenciones()
    {
        return $this->importeDevolucionRetenciones;
    }

    /**
     * Set ajustecentavos
     *
     * @param string $ajustecentavos
     * @return RhTmpContabilizacionNominillasSalario
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
     * Set idActividadIdCcostoIdObra
     *
     * @param string $idActividadIdCcostoIdObra
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * Set indemnizacionConFactura
     *
     * @param integer $indemnizacionConFactura
     * @return RhTmpContabilizacionNominillasSalario
     */
    public function setIndemnizacionConFactura($indemnizacionConFactura)
    {
        $this->indemnizacionConFactura = $indemnizacionConFactura;

        return $this;
    }

    /**
     * Get indemnizacionConFactura
     *
     * @return integer 
     */
    public function getIndemnizacionConFactura()
    {
        return $this->indemnizacionConFactura;
    }

    /**
     * Set indemnizacionSinFactura
     *
     * @param integer $indemnizacionSinFactura
     * @return RhTmpContabilizacionNominillasSalario
     */
    public function setIndemnizacionSinFactura($indemnizacionSinFactura)
    {
        $this->indemnizacionSinFactura = $indemnizacionSinFactura;

        return $this;
    }

    /**
     * Get indemnizacionSinFactura
     *
     * @return integer 
     */
    public function getIndemnizacionSinFactura()
    {
        return $this->indemnizacionSinFactura;
    }

    /**
     * Set importemsEt
     *
     * @param integer $importemsEt
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * @return RhTmpContabilizacionNominillasSalario
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
     * Set turnosNocturnos
     *
     * @param integer $turnosNocturnos
     * @return RhTmpContabilizacionNominillasSalario
     */
    public function setTurnosNocturnos($turnosNocturnos)
    {
        $this->turnosNocturnos = $turnosNocturnos;

        return $this;
    }

    /**
     * Get turnosNocturnos
     *
     * @return integer 
     */
    public function getTurnosNocturnos()
    {
        return $this->turnosNocturnos;
    }
}
