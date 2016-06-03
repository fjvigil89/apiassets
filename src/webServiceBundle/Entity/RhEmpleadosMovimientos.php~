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


}
