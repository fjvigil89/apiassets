<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhEmpleadosMovimientos
 *
 * @ORM\Table(name="RH_Empleados_Movimientos")
 * @ORM\Entity
 */
class RhEmpleadosMovimientos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NoMovimiento", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nomovimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     */
    private $idExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="Empleado", type="string", length=152, nullable=false)
     */
    private $empleado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_CausaMov", type="string", length=5, nullable=false)
     */
    private $idCausamov;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Tipo_ContratoOld", type="string", length=3, nullable=false)
     */
    private $idTipoContratoold;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Tipo_ContratoNew", type="string", length=3, nullable=false)
     */
    private $idTipoContratonew;

    /**
     * @var integer
     *
     * @ORM\Column(name="Regimen_SalarialOld", type="smallint", nullable=false)
     */
    private $regimenSalarialold;

    /**
     * @var integer
     *
     * @ORM\Column(name="Regimen_SalarialNew", type="smallint", nullable=false)
     */
    private $regimenSalarialnew;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Tarifa_Horaria_con_ReporteOld", type="boolean", nullable=false)
     */
    private $tarifaHorariaConReporteold;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Tarifa_Horaria_con_ReporteNew", type="boolean", nullable=false)
     */
    private $tarifaHorariaConReportenew;

    /**
     * @var integer
     *
     * @ORM\Column(name="NivelOld", type="smallint", nullable=false)
     */
    private $nivelold;

    /**
     * @var integer
     *
     * @ORM\Column(name="NivelNew", type="smallint", nullable=false)
     */
    private $nivelnew;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_DireccionOld", type="string", length=15, nullable=false)
     */
    private $idDireccionold;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_DireccionNew", type="string", length=15, nullable=false)
     */
    private $idDireccionnew;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_CCostoOld", type="string", length=10, nullable=false)
     */
    private $idCcostoold;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_CCostoNew", type="string", length=10, nullable=false)
     */
    private $idCcostonew;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_CargoOld", type="string", length=5, nullable=false)
     */
    private $idCargoold;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_CargoNew", type="string", length=5, nullable=false)
     */
    private $idCargonew;

    /**
     * @var integer
     *
     * @ORM\Column(name="PlazaOld", type="bigint", nullable=false)
     */
    private $plazaold;

    /**
     * @var integer
     *
     * @ORM\Column(name="PlazaNew", type="bigint", nullable=false)
     */
    private $plazanew;

    /**
     * @var string
     *
     * @ORM\Column(name="CalendarioOld", type="string", length=3, nullable=false)
     */
    private $calendarioold;

    /**
     * @var string
     *
     * @ORM\Column(name="CalendarioNew", type="string", length=3, nullable=false)
     */
    private $calendarionew;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias_LaborablesOld", type="smallint", nullable=false)
     */
    private $diasLaborablesold;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias_LaborablesNew", type="smallint", nullable=false)
     */
    private $diasLaborablesnew;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Asignacion_por_CargoOld", type="boolean", nullable=false)
     */
    private $asignacionPorCargoold;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Asignacion_por_CargoNew", type="boolean", nullable=false)
     */
    private $asignacionPorCargonew;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_BasicoOld", type="integer", nullable=false)
     */
    private $salarioBasicoold;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_BasicoNew", type="integer", nullable=false)
     */
    private $salarioBasiconew;

    /**
     * @var integer
     *
     * @ORM\Column(name="EstimuloOld", type="integer", nullable=false)
     */
    private $estimuloold;

    /**
     * @var integer
     *
     * @ORM\Column(name="EstimuloNew", type="integer", nullable=false)
     */
    private $estimulonew;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento_EstimuloOld", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoEstimuloold;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento_EstimuloNew", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoEstimulonew;

    /**
     * @var integer
     *
     * @ORM\Column(name="AntiguedadOld", type="integer", nullable=false)
     */
    private $antiguedadold;

    /**
     * @var integer
     *
     * @ORM\Column(name="AntiguedadNew", type="integer", nullable=false)
     */
    private $antiguedadnew;

    /**
     * @var integer
     *
     * @ORM\Column(name="OtrosOld", type="integer", nullable=false)
     */
    private $otrosold;

    /**
     * @var integer
     *
     * @ORM\Column(name="OtrosNew", type="integer", nullable=false)
     */
    private $otrosnew;

    /**
     * @var integer
     *
     * @ORM\Column(name="PlusOld", type="integer", nullable=false)
     */
    private $plusold;

    /**
     * @var integer
     *
     * @ORM\Column(name="PlusNew", type="integer", nullable=false)
     */
    private $plusnew;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_por_CargoOld", type="integer", nullable=false)
     */
    private $salarioPorCargoold;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_por_CargoNew", type="integer", nullable=false)
     */
    private $salarioPorCargonew;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento_PerfeccionamientoOld", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoPerfeccionamientoold;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento_PerfeccionamientoNew", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoPerfeccionamientonew;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_DivisaOld", type="integer", nullable=false)
     */
    private $valorDivisaold;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_DivisaNew", type="integer", nullable=false)
     */
    private $valorDivisanew;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento_Pago_DivisaOld", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoPagoDivisaold;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento_Pago_DivisaNew", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoPagoDivisanew;

    /**
     * @var integer
     *
     * @ORM\Column(name="EstimulacionOld", type="integer", nullable=false)
     */
    private $estimulacionold;

    /**
     * @var integer
     *
     * @ORM\Column(name="EstimulacionNew", type="integer", nullable=false)
     */
    private $estimulacionnew;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento_EstimulacionOld", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoEstimulacionold;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento_EstimulacionNew", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoEstimulacionnew;

    /**
     * @var integer
     *
     * @ORM\Column(name="AlbergamientoOld", type="integer", nullable=false)
     */
    private $albergamientoold;

    /**
     * @var integer
     *
     * @ORM\Column(name="AlbergamientoNew", type="integer", nullable=false)
     */
    private $albergamientonew;

    /**
     * @var string
     *
     * @ORM\Column(name="OtrasRetribucionesOld", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $otrasretribucionesold;

    /**
     * @var string
     *
     * @ORM\Column(name="OtrasRetribucionesNew", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $otrasretribucionesnew;

    /**
     * @var integer
     *
     * @ORM\Column(name="HorarioIrregularOld", type="integer", nullable=false)
     */
    private $horarioirregularold;

    /**
     * @var integer
     *
     * @ORM\Column(name="HorarioIrregularNew", type="integer", nullable=false)
     */
    private $horarioirregularnew;

    /**
     * @var integer
     *
     * @ORM\Column(name="Otras_CLAOld", type="integer", nullable=false)
     */
    private $otrasClaold;

    /**
     * @var integer
     *
     * @ORM\Column(name="Otras_CLANew", type="integer", nullable=false)
     */
    private $otrasClanew;

    /**
     * @var string
     *
     * @ORM\Column(name="Coeficente_Empresa_EmpleadoraOld", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $coeficenteEmpresaEmpleadoraold;

    /**
     * @var string
     *
     * @ORM\Column(name="Coeficente_Empresa_EmpleadoraNew", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $coeficenteEmpresaEmpleadoranew;

    /**
     * @var string
     *
     * @ORM\Column(name="IETerritorialOld", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $ieterritorialold;

    /**
     * @var string
     *
     * @ORM\Column(name="IETerritorialNew", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $ieterritorialnew;

    /**
     * @var string
     *
     * @ORM\Column(name="ETSectorOld", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $etsectorold;

    /**
     * @var string
     *
     * @ORM\Column(name="ETSectorNew", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $etsectornew;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Tipo_ParticipacionOld", type="string", length=3, nullable=false)
     */
    private $idTipoParticipacionold;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Tipo_ParticipacionNew", type="string", length=3, nullable=false)
     */
    private $idTipoParticipacionnew;

    /**
     * @var integer
     *
     * @ORM\Column(name="Idoneidad_FijoOld", type="integer", nullable=false)
     */
    private $idoneidadFijoold;

    /**
     * @var integer
     *
     * @ORM\Column(name="Idoneidad_FijoNew", type="integer", nullable=false)
     */
    private $idoneidadFijonew;

    /**
     * @var integer
     *
     * @ORM\Column(name="Idoneidad_MovilOld", type="integer", nullable=false)
     */
    private $idoneidadMovilold;

    /**
     * @var integer
     *
     * @ORM\Column(name="Idoneidad_MovilNew", type="integer", nullable=false)
     */
    private $idoneidadMovilnew;

    /**
     * @var integer
     *
     * @ORM\Column(name="Retribucion_ComplementariaOld", type="integer", nullable=false)
     */
    private $retribucionComplementariaold;

    /**
     * @var integer
     *
     * @ORM\Column(name="Retribucion_ComplementariaNew", type="integer", nullable=false)
     */
    private $retribucionComplementarianew;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_CargoOld", type="datetime", nullable=false)
     */
    private $fechaCargoold;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_CargoNew", type="datetime", nullable=false)
     */
    private $fechaCargonew;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado", type="smallint", nullable=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_User", type="string", length=15, nullable=false)
     */
    private $idUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Op", type="datetime", nullable=false)
     */
    private $fechaOp;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_DivisaOld", type="integer", nullable=false)
     */
    private $salarioDivisaold;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_DivisaNew", type="integer", nullable=false)
     */
    private $salarioDivisanew;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nivel_NominaOld", type="smallint", nullable=false)
     */
    private $nivelNominaold;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nivel_NominaNew", type="smallint", nullable=false)
     */
    private $nivelNominanew;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Direccion_NominaOld", type="string", length=15, nullable=false)
     */
    private $idDireccionNominaold;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Direccion_NominaNew", type="string", length=15, nullable=false)
     */
    private $idDireccionNominanew;

    /**
     * @var integer
     *
     * @ORM\Column(name="NGrupoOld", type="smallint", nullable=false)
     */
    private $ngrupoold;

    /**
     * @var integer
     *
     * @ORM\Column(name="NGrupoNew", type="smallint", nullable=false)
     */
    private $ngruponew;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_ContratacionOld", type="datetime", nullable=false)
     */
    private $fechaContratacionold;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_ContratacionNew", type="datetime", nullable=false)
     */
    private $fechaContratacionnew;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Efectivo", type="datetime", nullable=false)
     */
    private $fechaEfectivo;



    /**
     * Get nomovimiento
     *
     * @return integer 
     */
    public function getNomovimiento()
    {
        return $this->nomovimiento;
    }

    /**
     * Set idExpediente
     *
     * @param string $idExpediente
     * @return RhEmpleadosMovimientos
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
     * Set empleado
     *
     * @param string $empleado
     * @return RhEmpleadosMovimientos
     */
    public function setEmpleado($empleado)
    {
        $this->empleado = $empleado;

        return $this;
    }

    /**
     * Get empleado
     *
     * @return string 
     */
    public function getEmpleado()
    {
        return $this->empleado;
    }

    /**
     * Set idCausamov
     *
     * @param string $idCausamov
     * @return RhEmpleadosMovimientos
     */
    public function setIdCausamov($idCausamov)
    {
        $this->idCausamov = $idCausamov;

        return $this;
    }

    /**
     * Get idCausamov
     *
     * @return string 
     */
    public function getIdCausamov()
    {
        return $this->idCausamov;
    }

    /**
     * Set idTipoContratoold
     *
     * @param string $idTipoContratoold
     * @return RhEmpleadosMovimientos
     */
    public function setIdTipoContratoold($idTipoContratoold)
    {
        $this->idTipoContratoold = $idTipoContratoold;

        return $this;
    }

    /**
     * Get idTipoContratoold
     *
     * @return string 
     */
    public function getIdTipoContratoold()
    {
        return $this->idTipoContratoold;
    }

    /**
     * Set idTipoContratonew
     *
     * @param string $idTipoContratonew
     * @return RhEmpleadosMovimientos
     */
    public function setIdTipoContratonew($idTipoContratonew)
    {
        $this->idTipoContratonew = $idTipoContratonew;

        return $this;
    }

    /**
     * Get idTipoContratonew
     *
     * @return string 
     */
    public function getIdTipoContratonew()
    {
        return $this->idTipoContratonew;
    }

    /**
     * Set regimenSalarialold
     *
     * @param integer $regimenSalarialold
     * @return RhEmpleadosMovimientos
     */
    public function setRegimenSalarialold($regimenSalarialold)
    {
        $this->regimenSalarialold = $regimenSalarialold;

        return $this;
    }

    /**
     * Get regimenSalarialold
     *
     * @return integer 
     */
    public function getRegimenSalarialold()
    {
        return $this->regimenSalarialold;
    }

    /**
     * Set regimenSalarialnew
     *
     * @param integer $regimenSalarialnew
     * @return RhEmpleadosMovimientos
     */
    public function setRegimenSalarialnew($regimenSalarialnew)
    {
        $this->regimenSalarialnew = $regimenSalarialnew;

        return $this;
    }

    /**
     * Get regimenSalarialnew
     *
     * @return integer 
     */
    public function getRegimenSalarialnew()
    {
        return $this->regimenSalarialnew;
    }

    /**
     * Set tarifaHorariaConReporteold
     *
     * @param boolean $tarifaHorariaConReporteold
     * @return RhEmpleadosMovimientos
     */
    public function setTarifaHorariaConReporteold($tarifaHorariaConReporteold)
    {
        $this->tarifaHorariaConReporteold = $tarifaHorariaConReporteold;

        return $this;
    }

    /**
     * Get tarifaHorariaConReporteold
     *
     * @return boolean 
     */
    public function getTarifaHorariaConReporteold()
    {
        return $this->tarifaHorariaConReporteold;
    }

    /**
     * Set tarifaHorariaConReportenew
     *
     * @param boolean $tarifaHorariaConReportenew
     * @return RhEmpleadosMovimientos
     */
    public function setTarifaHorariaConReportenew($tarifaHorariaConReportenew)
    {
        $this->tarifaHorariaConReportenew = $tarifaHorariaConReportenew;

        return $this;
    }

    /**
     * Get tarifaHorariaConReportenew
     *
     * @return boolean 
     */
    public function getTarifaHorariaConReportenew()
    {
        return $this->tarifaHorariaConReportenew;
    }

    /**
     * Set nivelold
     *
     * @param integer $nivelold
     * @return RhEmpleadosMovimientos
     */
    public function setNivelold($nivelold)
    {
        $this->nivelold = $nivelold;

        return $this;
    }

    /**
     * Get nivelold
     *
     * @return integer 
     */
    public function getNivelold()
    {
        return $this->nivelold;
    }

    /**
     * Set nivelnew
     *
     * @param integer $nivelnew
     * @return RhEmpleadosMovimientos
     */
    public function setNivelnew($nivelnew)
    {
        $this->nivelnew = $nivelnew;

        return $this;
    }

    /**
     * Get nivelnew
     *
     * @return integer 
     */
    public function getNivelnew()
    {
        return $this->nivelnew;
    }

    /**
     * Set idDireccionold
     *
     * @param string $idDireccionold
     * @return RhEmpleadosMovimientos
     */
    public function setIdDireccionold($idDireccionold)
    {
        $this->idDireccionold = $idDireccionold;

        return $this;
    }

    /**
     * Get idDireccionold
     *
     * @return string 
     */
    public function getIdDireccionold()
    {
        return $this->idDireccionold;
    }

    /**
     * Set idDireccionnew
     *
     * @param string $idDireccionnew
     * @return RhEmpleadosMovimientos
     */
    public function setIdDireccionnew($idDireccionnew)
    {
        $this->idDireccionnew = $idDireccionnew;

        return $this;
    }

    /**
     * Get idDireccionnew
     *
     * @return string 
     */
    public function getIdDireccionnew()
    {
        return $this->idDireccionnew;
    }

    /**
     * Set idCcostoold
     *
     * @param string $idCcostoold
     * @return RhEmpleadosMovimientos
     */
    public function setIdCcostoold($idCcostoold)
    {
        $this->idCcostoold = $idCcostoold;

        return $this;
    }

    /**
     * Get idCcostoold
     *
     * @return string 
     */
    public function getIdCcostoold()
    {
        return $this->idCcostoold;
    }

    /**
     * Set idCcostonew
     *
     * @param string $idCcostonew
     * @return RhEmpleadosMovimientos
     */
    public function setIdCcostonew($idCcostonew)
    {
        $this->idCcostonew = $idCcostonew;

        return $this;
    }

    /**
     * Get idCcostonew
     *
     * @return string 
     */
    public function getIdCcostonew()
    {
        return $this->idCcostonew;
    }

    /**
     * Set idCargoold
     *
     * @param string $idCargoold
     * @return RhEmpleadosMovimientos
     */
    public function setIdCargoold($idCargoold)
    {
        $this->idCargoold = $idCargoold;

        return $this;
    }

    /**
     * Get idCargoold
     *
     * @return string 
     */
    public function getIdCargoold()
    {
        return $this->idCargoold;
    }

    /**
     * Set idCargonew
     *
     * @param string $idCargonew
     * @return RhEmpleadosMovimientos
     */
    public function setIdCargonew($idCargonew)
    {
        $this->idCargonew = $idCargonew;

        return $this;
    }

    /**
     * Get idCargonew
     *
     * @return string 
     */
    public function getIdCargonew()
    {
        return $this->idCargonew;
    }

    /**
     * Set plazaold
     *
     * @param integer $plazaold
     * @return RhEmpleadosMovimientos
     */
    public function setPlazaold($plazaold)
    {
        $this->plazaold = $plazaold;

        return $this;
    }

    /**
     * Get plazaold
     *
     * @return integer 
     */
    public function getPlazaold()
    {
        return $this->plazaold;
    }

    /**
     * Set plazanew
     *
     * @param integer $plazanew
     * @return RhEmpleadosMovimientos
     */
    public function setPlazanew($plazanew)
    {
        $this->plazanew = $plazanew;

        return $this;
    }

    /**
     * Get plazanew
     *
     * @return integer 
     */
    public function getPlazanew()
    {
        return $this->plazanew;
    }

    /**
     * Set calendarioold
     *
     * @param string $calendarioold
     * @return RhEmpleadosMovimientos
     */
    public function setCalendarioold($calendarioold)
    {
        $this->calendarioold = $calendarioold;

        return $this;
    }

    /**
     * Get calendarioold
     *
     * @return string 
     */
    public function getCalendarioold()
    {
        return $this->calendarioold;
    }

    /**
     * Set calendarionew
     *
     * @param string $calendarionew
     * @return RhEmpleadosMovimientos
     */
    public function setCalendarionew($calendarionew)
    {
        $this->calendarionew = $calendarionew;

        return $this;
    }

    /**
     * Get calendarionew
     *
     * @return string 
     */
    public function getCalendarionew()
    {
        return $this->calendarionew;
    }

    /**
     * Set diasLaborablesold
     *
     * @param integer $diasLaborablesold
     * @return RhEmpleadosMovimientos
     */
    public function setDiasLaborablesold($diasLaborablesold)
    {
        $this->diasLaborablesold = $diasLaborablesold;

        return $this;
    }

    /**
     * Get diasLaborablesold
     *
     * @return integer 
     */
    public function getDiasLaborablesold()
    {
        return $this->diasLaborablesold;
    }

    /**
     * Set diasLaborablesnew
     *
     * @param integer $diasLaborablesnew
     * @return RhEmpleadosMovimientos
     */
    public function setDiasLaborablesnew($diasLaborablesnew)
    {
        $this->diasLaborablesnew = $diasLaborablesnew;

        return $this;
    }

    /**
     * Get diasLaborablesnew
     *
     * @return integer 
     */
    public function getDiasLaborablesnew()
    {
        return $this->diasLaborablesnew;
    }

    /**
     * Set asignacionPorCargoold
     *
     * @param boolean $asignacionPorCargoold
     * @return RhEmpleadosMovimientos
     */
    public function setAsignacionPorCargoold($asignacionPorCargoold)
    {
        $this->asignacionPorCargoold = $asignacionPorCargoold;

        return $this;
    }

    /**
     * Get asignacionPorCargoold
     *
     * @return boolean 
     */
    public function getAsignacionPorCargoold()
    {
        return $this->asignacionPorCargoold;
    }

    /**
     * Set asignacionPorCargonew
     *
     * @param boolean $asignacionPorCargonew
     * @return RhEmpleadosMovimientos
     */
    public function setAsignacionPorCargonew($asignacionPorCargonew)
    {
        $this->asignacionPorCargonew = $asignacionPorCargonew;

        return $this;
    }

    /**
     * Get asignacionPorCargonew
     *
     * @return boolean 
     */
    public function getAsignacionPorCargonew()
    {
        return $this->asignacionPorCargonew;
    }

    /**
     * Set salarioBasicoold
     *
     * @param integer $salarioBasicoold
     * @return RhEmpleadosMovimientos
     */
    public function setSalarioBasicoold($salarioBasicoold)
    {
        $this->salarioBasicoold = $salarioBasicoold;

        return $this;
    }

    /**
     * Get salarioBasicoold
     *
     * @return integer 
     */
    public function getSalarioBasicoold()
    {
        return $this->salarioBasicoold;
    }

    /**
     * Set salarioBasiconew
     *
     * @param integer $salarioBasiconew
     * @return RhEmpleadosMovimientos
     */
    public function setSalarioBasiconew($salarioBasiconew)
    {
        $this->salarioBasiconew = $salarioBasiconew;

        return $this;
    }

    /**
     * Get salarioBasiconew
     *
     * @return integer 
     */
    public function getSalarioBasiconew()
    {
        return $this->salarioBasiconew;
    }

    /**
     * Set estimuloold
     *
     * @param integer $estimuloold
     * @return RhEmpleadosMovimientos
     */
    public function setEstimuloold($estimuloold)
    {
        $this->estimuloold = $estimuloold;

        return $this;
    }

    /**
     * Get estimuloold
     *
     * @return integer 
     */
    public function getEstimuloold()
    {
        return $this->estimuloold;
    }

    /**
     * Set estimulonew
     *
     * @param integer $estimulonew
     * @return RhEmpleadosMovimientos
     */
    public function setEstimulonew($estimulonew)
    {
        $this->estimulonew = $estimulonew;

        return $this;
    }

    /**
     * Get estimulonew
     *
     * @return integer 
     */
    public function getEstimulonew()
    {
        return $this->estimulonew;
    }

    /**
     * Set porcientoEstimuloold
     *
     * @param string $porcientoEstimuloold
     * @return RhEmpleadosMovimientos
     */
    public function setPorcientoEstimuloold($porcientoEstimuloold)
    {
        $this->porcientoEstimuloold = $porcientoEstimuloold;

        return $this;
    }

    /**
     * Get porcientoEstimuloold
     *
     * @return string 
     */
    public function getPorcientoEstimuloold()
    {
        return $this->porcientoEstimuloold;
    }

    /**
     * Set porcientoEstimulonew
     *
     * @param string $porcientoEstimulonew
     * @return RhEmpleadosMovimientos
     */
    public function setPorcientoEstimulonew($porcientoEstimulonew)
    {
        $this->porcientoEstimulonew = $porcientoEstimulonew;

        return $this;
    }

    /**
     * Get porcientoEstimulonew
     *
     * @return string 
     */
    public function getPorcientoEstimulonew()
    {
        return $this->porcientoEstimulonew;
    }

    /**
     * Set antiguedadold
     *
     * @param integer $antiguedadold
     * @return RhEmpleadosMovimientos
     */
    public function setAntiguedadold($antiguedadold)
    {
        $this->antiguedadold = $antiguedadold;

        return $this;
    }

    /**
     * Get antiguedadold
     *
     * @return integer 
     */
    public function getAntiguedadold()
    {
        return $this->antiguedadold;
    }

    /**
     * Set antiguedadnew
     *
     * @param integer $antiguedadnew
     * @return RhEmpleadosMovimientos
     */
    public function setAntiguedadnew($antiguedadnew)
    {
        $this->antiguedadnew = $antiguedadnew;

        return $this;
    }

    /**
     * Get antiguedadnew
     *
     * @return integer 
     */
    public function getAntiguedadnew()
    {
        return $this->antiguedadnew;
    }

    /**
     * Set otrosold
     *
     * @param integer $otrosold
     * @return RhEmpleadosMovimientos
     */
    public function setOtrosold($otrosold)
    {
        $this->otrosold = $otrosold;

        return $this;
    }

    /**
     * Get otrosold
     *
     * @return integer 
     */
    public function getOtrosold()
    {
        return $this->otrosold;
    }

    /**
     * Set otrosnew
     *
     * @param integer $otrosnew
     * @return RhEmpleadosMovimientos
     */
    public function setOtrosnew($otrosnew)
    {
        $this->otrosnew = $otrosnew;

        return $this;
    }

    /**
     * Get otrosnew
     *
     * @return integer 
     */
    public function getOtrosnew()
    {
        return $this->otrosnew;
    }

    /**
     * Set plusold
     *
     * @param integer $plusold
     * @return RhEmpleadosMovimientos
     */
    public function setPlusold($plusold)
    {
        $this->plusold = $plusold;

        return $this;
    }

    /**
     * Get plusold
     *
     * @return integer 
     */
    public function getPlusold()
    {
        return $this->plusold;
    }

    /**
     * Set plusnew
     *
     * @param integer $plusnew
     * @return RhEmpleadosMovimientos
     */
    public function setPlusnew($plusnew)
    {
        $this->plusnew = $plusnew;

        return $this;
    }

    /**
     * Get plusnew
     *
     * @return integer 
     */
    public function getPlusnew()
    {
        return $this->plusnew;
    }

    /**
     * Set salarioPorCargoold
     *
     * @param integer $salarioPorCargoold
     * @return RhEmpleadosMovimientos
     */
    public function setSalarioPorCargoold($salarioPorCargoold)
    {
        $this->salarioPorCargoold = $salarioPorCargoold;

        return $this;
    }

    /**
     * Get salarioPorCargoold
     *
     * @return integer 
     */
    public function getSalarioPorCargoold()
    {
        return $this->salarioPorCargoold;
    }

    /**
     * Set salarioPorCargonew
     *
     * @param integer $salarioPorCargonew
     * @return RhEmpleadosMovimientos
     */
    public function setSalarioPorCargonew($salarioPorCargonew)
    {
        $this->salarioPorCargonew = $salarioPorCargonew;

        return $this;
    }

    /**
     * Get salarioPorCargonew
     *
     * @return integer 
     */
    public function getSalarioPorCargonew()
    {
        return $this->salarioPorCargonew;
    }

    /**
     * Set porcientoPerfeccionamientoold
     *
     * @param string $porcientoPerfeccionamientoold
     * @return RhEmpleadosMovimientos
     */
    public function setPorcientoPerfeccionamientoold($porcientoPerfeccionamientoold)
    {
        $this->porcientoPerfeccionamientoold = $porcientoPerfeccionamientoold;

        return $this;
    }

    /**
     * Get porcientoPerfeccionamientoold
     *
     * @return string 
     */
    public function getPorcientoPerfeccionamientoold()
    {
        return $this->porcientoPerfeccionamientoold;
    }

    /**
     * Set porcientoPerfeccionamientonew
     *
     * @param string $porcientoPerfeccionamientonew
     * @return RhEmpleadosMovimientos
     */
    public function setPorcientoPerfeccionamientonew($porcientoPerfeccionamientonew)
    {
        $this->porcientoPerfeccionamientonew = $porcientoPerfeccionamientonew;

        return $this;
    }

    /**
     * Get porcientoPerfeccionamientonew
     *
     * @return string 
     */
    public function getPorcientoPerfeccionamientonew()
    {
        return $this->porcientoPerfeccionamientonew;
    }

    /**
     * Set valorDivisaold
     *
     * @param integer $valorDivisaold
     * @return RhEmpleadosMovimientos
     */
    public function setValorDivisaold($valorDivisaold)
    {
        $this->valorDivisaold = $valorDivisaold;

        return $this;
    }

    /**
     * Get valorDivisaold
     *
     * @return integer 
     */
    public function getValorDivisaold()
    {
        return $this->valorDivisaold;
    }

    /**
     * Set valorDivisanew
     *
     * @param integer $valorDivisanew
     * @return RhEmpleadosMovimientos
     */
    public function setValorDivisanew($valorDivisanew)
    {
        $this->valorDivisanew = $valorDivisanew;

        return $this;
    }

    /**
     * Get valorDivisanew
     *
     * @return integer 
     */
    public function getValorDivisanew()
    {
        return $this->valorDivisanew;
    }

    /**
     * Set porcientoPagoDivisaold
     *
     * @param string $porcientoPagoDivisaold
     * @return RhEmpleadosMovimientos
     */
    public function setPorcientoPagoDivisaold($porcientoPagoDivisaold)
    {
        $this->porcientoPagoDivisaold = $porcientoPagoDivisaold;

        return $this;
    }

    /**
     * Get porcientoPagoDivisaold
     *
     * @return string 
     */
    public function getPorcientoPagoDivisaold()
    {
        return $this->porcientoPagoDivisaold;
    }

    /**
     * Set porcientoPagoDivisanew
     *
     * @param string $porcientoPagoDivisanew
     * @return RhEmpleadosMovimientos
     */
    public function setPorcientoPagoDivisanew($porcientoPagoDivisanew)
    {
        $this->porcientoPagoDivisanew = $porcientoPagoDivisanew;

        return $this;
    }

    /**
     * Get porcientoPagoDivisanew
     *
     * @return string 
     */
    public function getPorcientoPagoDivisanew()
    {
        return $this->porcientoPagoDivisanew;
    }

    /**
     * Set estimulacionold
     *
     * @param integer $estimulacionold
     * @return RhEmpleadosMovimientos
     */
    public function setEstimulacionold($estimulacionold)
    {
        $this->estimulacionold = $estimulacionold;

        return $this;
    }

    /**
     * Get estimulacionold
     *
     * @return integer 
     */
    public function getEstimulacionold()
    {
        return $this->estimulacionold;
    }

    /**
     * Set estimulacionnew
     *
     * @param integer $estimulacionnew
     * @return RhEmpleadosMovimientos
     */
    public function setEstimulacionnew($estimulacionnew)
    {
        $this->estimulacionnew = $estimulacionnew;

        return $this;
    }

    /**
     * Get estimulacionnew
     *
     * @return integer 
     */
    public function getEstimulacionnew()
    {
        return $this->estimulacionnew;
    }

    /**
     * Set porcientoEstimulacionold
     *
     * @param string $porcientoEstimulacionold
     * @return RhEmpleadosMovimientos
     */
    public function setPorcientoEstimulacionold($porcientoEstimulacionold)
    {
        $this->porcientoEstimulacionold = $porcientoEstimulacionold;

        return $this;
    }

    /**
     * Get porcientoEstimulacionold
     *
     * @return string 
     */
    public function getPorcientoEstimulacionold()
    {
        return $this->porcientoEstimulacionold;
    }

    /**
     * Set porcientoEstimulacionnew
     *
     * @param string $porcientoEstimulacionnew
     * @return RhEmpleadosMovimientos
     */
    public function setPorcientoEstimulacionnew($porcientoEstimulacionnew)
    {
        $this->porcientoEstimulacionnew = $porcientoEstimulacionnew;

        return $this;
    }

    /**
     * Get porcientoEstimulacionnew
     *
     * @return string 
     */
    public function getPorcientoEstimulacionnew()
    {
        return $this->porcientoEstimulacionnew;
    }

    /**
     * Set albergamientoold
     *
     * @param integer $albergamientoold
     * @return RhEmpleadosMovimientos
     */
    public function setAlbergamientoold($albergamientoold)
    {
        $this->albergamientoold = $albergamientoold;

        return $this;
    }

    /**
     * Get albergamientoold
     *
     * @return integer 
     */
    public function getAlbergamientoold()
    {
        return $this->albergamientoold;
    }

    /**
     * Set albergamientonew
     *
     * @param integer $albergamientonew
     * @return RhEmpleadosMovimientos
     */
    public function setAlbergamientonew($albergamientonew)
    {
        $this->albergamientonew = $albergamientonew;

        return $this;
    }

    /**
     * Get albergamientonew
     *
     * @return integer 
     */
    public function getAlbergamientonew()
    {
        return $this->albergamientonew;
    }

    /**
     * Set otrasretribucionesold
     *
     * @param string $otrasretribucionesold
     * @return RhEmpleadosMovimientos
     */
    public function setOtrasretribucionesold($otrasretribucionesold)
    {
        $this->otrasretribucionesold = $otrasretribucionesold;

        return $this;
    }

    /**
     * Get otrasretribucionesold
     *
     * @return string 
     */
    public function getOtrasretribucionesold()
    {
        return $this->otrasretribucionesold;
    }

    /**
     * Set otrasretribucionesnew
     *
     * @param string $otrasretribucionesnew
     * @return RhEmpleadosMovimientos
     */
    public function setOtrasretribucionesnew($otrasretribucionesnew)
    {
        $this->otrasretribucionesnew = $otrasretribucionesnew;

        return $this;
    }

    /**
     * Get otrasretribucionesnew
     *
     * @return string 
     */
    public function getOtrasretribucionesnew()
    {
        return $this->otrasretribucionesnew;
    }

    /**
     * Set horarioirregularold
     *
     * @param integer $horarioirregularold
     * @return RhEmpleadosMovimientos
     */
    public function setHorarioirregularold($horarioirregularold)
    {
        $this->horarioirregularold = $horarioirregularold;

        return $this;
    }

    /**
     * Get horarioirregularold
     *
     * @return integer 
     */
    public function getHorarioirregularold()
    {
        return $this->horarioirregularold;
    }

    /**
     * Set horarioirregularnew
     *
     * @param integer $horarioirregularnew
     * @return RhEmpleadosMovimientos
     */
    public function setHorarioirregularnew($horarioirregularnew)
    {
        $this->horarioirregularnew = $horarioirregularnew;

        return $this;
    }

    /**
     * Get horarioirregularnew
     *
     * @return integer 
     */
    public function getHorarioirregularnew()
    {
        return $this->horarioirregularnew;
    }

    /**
     * Set otrasClaold
     *
     * @param integer $otrasClaold
     * @return RhEmpleadosMovimientos
     */
    public function setOtrasClaold($otrasClaold)
    {
        $this->otrasClaold = $otrasClaold;

        return $this;
    }

    /**
     * Get otrasClaold
     *
     * @return integer 
     */
    public function getOtrasClaold()
    {
        return $this->otrasClaold;
    }

    /**
     * Set otrasClanew
     *
     * @param integer $otrasClanew
     * @return RhEmpleadosMovimientos
     */
    public function setOtrasClanew($otrasClanew)
    {
        $this->otrasClanew = $otrasClanew;

        return $this;
    }

    /**
     * Get otrasClanew
     *
     * @return integer 
     */
    public function getOtrasClanew()
    {
        return $this->otrasClanew;
    }

    /**
     * Set coeficenteEmpresaEmpleadoraold
     *
     * @param string $coeficenteEmpresaEmpleadoraold
     * @return RhEmpleadosMovimientos
     */
    public function setCoeficenteEmpresaEmpleadoraold($coeficenteEmpresaEmpleadoraold)
    {
        $this->coeficenteEmpresaEmpleadoraold = $coeficenteEmpresaEmpleadoraold;

        return $this;
    }

    /**
     * Get coeficenteEmpresaEmpleadoraold
     *
     * @return string 
     */
    public function getCoeficenteEmpresaEmpleadoraold()
    {
        return $this->coeficenteEmpresaEmpleadoraold;
    }

    /**
     * Set coeficenteEmpresaEmpleadoranew
     *
     * @param string $coeficenteEmpresaEmpleadoranew
     * @return RhEmpleadosMovimientos
     */
    public function setCoeficenteEmpresaEmpleadoranew($coeficenteEmpresaEmpleadoranew)
    {
        $this->coeficenteEmpresaEmpleadoranew = $coeficenteEmpresaEmpleadoranew;

        return $this;
    }

    /**
     * Get coeficenteEmpresaEmpleadoranew
     *
     * @return string 
     */
    public function getCoeficenteEmpresaEmpleadoranew()
    {
        return $this->coeficenteEmpresaEmpleadoranew;
    }

    /**
     * Set ieterritorialold
     *
     * @param string $ieterritorialold
     * @return RhEmpleadosMovimientos
     */
    public function setIeterritorialold($ieterritorialold)
    {
        $this->ieterritorialold = $ieterritorialold;

        return $this;
    }

    /**
     * Get ieterritorialold
     *
     * @return string 
     */
    public function getIeterritorialold()
    {
        return $this->ieterritorialold;
    }

    /**
     * Set ieterritorialnew
     *
     * @param string $ieterritorialnew
     * @return RhEmpleadosMovimientos
     */
    public function setIeterritorialnew($ieterritorialnew)
    {
        $this->ieterritorialnew = $ieterritorialnew;

        return $this;
    }

    /**
     * Get ieterritorialnew
     *
     * @return string 
     */
    public function getIeterritorialnew()
    {
        return $this->ieterritorialnew;
    }

    /**
     * Set etsectorold
     *
     * @param string $etsectorold
     * @return RhEmpleadosMovimientos
     */
    public function setEtsectorold($etsectorold)
    {
        $this->etsectorold = $etsectorold;

        return $this;
    }

    /**
     * Get etsectorold
     *
     * @return string 
     */
    public function getEtsectorold()
    {
        return $this->etsectorold;
    }

    /**
     * Set etsectornew
     *
     * @param string $etsectornew
     * @return RhEmpleadosMovimientos
     */
    public function setEtsectornew($etsectornew)
    {
        $this->etsectornew = $etsectornew;

        return $this;
    }

    /**
     * Get etsectornew
     *
     * @return string 
     */
    public function getEtsectornew()
    {
        return $this->etsectornew;
    }

    /**
     * Set idTipoParticipacionold
     *
     * @param string $idTipoParticipacionold
     * @return RhEmpleadosMovimientos
     */
    public function setIdTipoParticipacionold($idTipoParticipacionold)
    {
        $this->idTipoParticipacionold = $idTipoParticipacionold;

        return $this;
    }

    /**
     * Get idTipoParticipacionold
     *
     * @return string 
     */
    public function getIdTipoParticipacionold()
    {
        return $this->idTipoParticipacionold;
    }

    /**
     * Set idTipoParticipacionnew
     *
     * @param string $idTipoParticipacionnew
     * @return RhEmpleadosMovimientos
     */
    public function setIdTipoParticipacionnew($idTipoParticipacionnew)
    {
        $this->idTipoParticipacionnew = $idTipoParticipacionnew;

        return $this;
    }

    /**
     * Get idTipoParticipacionnew
     *
     * @return string 
     */
    public function getIdTipoParticipacionnew()
    {
        return $this->idTipoParticipacionnew;
    }

    /**
     * Set idoneidadFijoold
     *
     * @param integer $idoneidadFijoold
     * @return RhEmpleadosMovimientos
     */
    public function setIdoneidadFijoold($idoneidadFijoold)
    {
        $this->idoneidadFijoold = $idoneidadFijoold;

        return $this;
    }

    /**
     * Get idoneidadFijoold
     *
     * @return integer 
     */
    public function getIdoneidadFijoold()
    {
        return $this->idoneidadFijoold;
    }

    /**
     * Set idoneidadFijonew
     *
     * @param integer $idoneidadFijonew
     * @return RhEmpleadosMovimientos
     */
    public function setIdoneidadFijonew($idoneidadFijonew)
    {
        $this->idoneidadFijonew = $idoneidadFijonew;

        return $this;
    }

    /**
     * Get idoneidadFijonew
     *
     * @return integer 
     */
    public function getIdoneidadFijonew()
    {
        return $this->idoneidadFijonew;
    }

    /**
     * Set idoneidadMovilold
     *
     * @param integer $idoneidadMovilold
     * @return RhEmpleadosMovimientos
     */
    public function setIdoneidadMovilold($idoneidadMovilold)
    {
        $this->idoneidadMovilold = $idoneidadMovilold;

        return $this;
    }

    /**
     * Get idoneidadMovilold
     *
     * @return integer 
     */
    public function getIdoneidadMovilold()
    {
        return $this->idoneidadMovilold;
    }

    /**
     * Set idoneidadMovilnew
     *
     * @param integer $idoneidadMovilnew
     * @return RhEmpleadosMovimientos
     */
    public function setIdoneidadMovilnew($idoneidadMovilnew)
    {
        $this->idoneidadMovilnew = $idoneidadMovilnew;

        return $this;
    }

    /**
     * Get idoneidadMovilnew
     *
     * @return integer 
     */
    public function getIdoneidadMovilnew()
    {
        return $this->idoneidadMovilnew;
    }

    /**
     * Set retribucionComplementariaold
     *
     * @param integer $retribucionComplementariaold
     * @return RhEmpleadosMovimientos
     */
    public function setRetribucionComplementariaold($retribucionComplementariaold)
    {
        $this->retribucionComplementariaold = $retribucionComplementariaold;

        return $this;
    }

    /**
     * Get retribucionComplementariaold
     *
     * @return integer 
     */
    public function getRetribucionComplementariaold()
    {
        return $this->retribucionComplementariaold;
    }

    /**
     * Set retribucionComplementarianew
     *
     * @param integer $retribucionComplementarianew
     * @return RhEmpleadosMovimientos
     */
    public function setRetribucionComplementarianew($retribucionComplementarianew)
    {
        $this->retribucionComplementarianew = $retribucionComplementarianew;

        return $this;
    }

    /**
     * Get retribucionComplementarianew
     *
     * @return integer 
     */
    public function getRetribucionComplementarianew()
    {
        return $this->retribucionComplementarianew;
    }

    /**
     * Set fechaCargoold
     *
     * @param \DateTime $fechaCargoold
     * @return RhEmpleadosMovimientos
     */
    public function setFechaCargoold($fechaCargoold)
    {
        $this->fechaCargoold = $fechaCargoold;

        return $this;
    }

    /**
     * Get fechaCargoold
     *
     * @return \DateTime 
     */
    public function getFechaCargoold()
    {
        return $this->fechaCargoold;
    }

    /**
     * Set fechaCargonew
     *
     * @param \DateTime $fechaCargonew
     * @return RhEmpleadosMovimientos
     */
    public function setFechaCargonew($fechaCargonew)
    {
        $this->fechaCargonew = $fechaCargonew;

        return $this;
    }

    /**
     * Get fechaCargonew
     *
     * @return \DateTime 
     */
    public function getFechaCargonew()
    {
        return $this->fechaCargonew;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return RhEmpleadosMovimientos
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return RhEmpleadosMovimientos
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return string 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set fechaOp
     *
     * @param \DateTime $fechaOp
     * @return RhEmpleadosMovimientos
     */
    public function setFechaOp($fechaOp)
    {
        $this->fechaOp = $fechaOp;

        return $this;
    }

    /**
     * Get fechaOp
     *
     * @return \DateTime 
     */
    public function getFechaOp()
    {
        return $this->fechaOp;
    }

    /**
     * Set salarioDivisaold
     *
     * @param integer $salarioDivisaold
     * @return RhEmpleadosMovimientos
     */
    public function setSalarioDivisaold($salarioDivisaold)
    {
        $this->salarioDivisaold = $salarioDivisaold;

        return $this;
    }

    /**
     * Get salarioDivisaold
     *
     * @return integer 
     */
    public function getSalarioDivisaold()
    {
        return $this->salarioDivisaold;
    }

    /**
     * Set salarioDivisanew
     *
     * @param integer $salarioDivisanew
     * @return RhEmpleadosMovimientos
     */
    public function setSalarioDivisanew($salarioDivisanew)
    {
        $this->salarioDivisanew = $salarioDivisanew;

        return $this;
    }

    /**
     * Get salarioDivisanew
     *
     * @return integer 
     */
    public function getSalarioDivisanew()
    {
        return $this->salarioDivisanew;
    }

    /**
     * Set nivelNominaold
     *
     * @param integer $nivelNominaold
     * @return RhEmpleadosMovimientos
     */
    public function setNivelNominaold($nivelNominaold)
    {
        $this->nivelNominaold = $nivelNominaold;

        return $this;
    }

    /**
     * Get nivelNominaold
     *
     * @return integer 
     */
    public function getNivelNominaold()
    {
        return $this->nivelNominaold;
    }

    /**
     * Set nivelNominanew
     *
     * @param integer $nivelNominanew
     * @return RhEmpleadosMovimientos
     */
    public function setNivelNominanew($nivelNominanew)
    {
        $this->nivelNominanew = $nivelNominanew;

        return $this;
    }

    /**
     * Get nivelNominanew
     *
     * @return integer 
     */
    public function getNivelNominanew()
    {
        return $this->nivelNominanew;
    }

    /**
     * Set idDireccionNominaold
     *
     * @param string $idDireccionNominaold
     * @return RhEmpleadosMovimientos
     */
    public function setIdDireccionNominaold($idDireccionNominaold)
    {
        $this->idDireccionNominaold = $idDireccionNominaold;

        return $this;
    }

    /**
     * Get idDireccionNominaold
     *
     * @return string 
     */
    public function getIdDireccionNominaold()
    {
        return $this->idDireccionNominaold;
    }

    /**
     * Set idDireccionNominanew
     *
     * @param string $idDireccionNominanew
     * @return RhEmpleadosMovimientos
     */
    public function setIdDireccionNominanew($idDireccionNominanew)
    {
        $this->idDireccionNominanew = $idDireccionNominanew;

        return $this;
    }

    /**
     * Get idDireccionNominanew
     *
     * @return string 
     */
    public function getIdDireccionNominanew()
    {
        return $this->idDireccionNominanew;
    }

    /**
     * Set ngrupoold
     *
     * @param integer $ngrupoold
     * @return RhEmpleadosMovimientos
     */
    public function setNgrupoold($ngrupoold)
    {
        $this->ngrupoold = $ngrupoold;

        return $this;
    }

    /**
     * Get ngrupoold
     *
     * @return integer 
     */
    public function getNgrupoold()
    {
        return $this->ngrupoold;
    }

    /**
     * Set ngruponew
     *
     * @param integer $ngruponew
     * @return RhEmpleadosMovimientos
     */
    public function setNgruponew($ngruponew)
    {
        $this->ngruponew = $ngruponew;

        return $this;
    }

    /**
     * Get ngruponew
     *
     * @return integer 
     */
    public function getNgruponew()
    {
        return $this->ngruponew;
    }

    /**
     * Set fechaContratacionold
     *
     * @param \DateTime $fechaContratacionold
     * @return RhEmpleadosMovimientos
     */
    public function setFechaContratacionold($fechaContratacionold)
    {
        $this->fechaContratacionold = $fechaContratacionold;

        return $this;
    }

    /**
     * Get fechaContratacionold
     *
     * @return \DateTime 
     */
    public function getFechaContratacionold()
    {
        return $this->fechaContratacionold;
    }

    /**
     * Set fechaContratacionnew
     *
     * @param \DateTime $fechaContratacionnew
     * @return RhEmpleadosMovimientos
     */
    public function setFechaContratacionnew($fechaContratacionnew)
    {
        $this->fechaContratacionnew = $fechaContratacionnew;

        return $this;
    }

    /**
     * Get fechaContratacionnew
     *
     * @return \DateTime 
     */
    public function getFechaContratacionnew()
    {
        return $this->fechaContratacionnew;
    }

    /**
     * Set fechaEfectivo
     *
     * @param \DateTime $fechaEfectivo
     * @return RhEmpleadosMovimientos
     */
    public function setFechaEfectivo($fechaEfectivo)
    {
        $this->fechaEfectivo = $fechaEfectivo;

        return $this;
    }

    /**
     * Get fechaEfectivo
     *
     * @return \DateTime 
     */
    public function getFechaEfectivo()
    {
        return $this->fechaEfectivo;
    }
}
