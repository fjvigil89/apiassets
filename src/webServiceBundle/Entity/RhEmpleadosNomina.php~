<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhEmpleadosNomina
 *
 * @ORM\Table(name="RH_Empleados_Nomina", uniqueConstraints={@ORM\UniqueConstraint(name="IX_Empleados_Nomina", columns={"Id_Expediente"})})
 * @ORM\Entity
 */
class RhEmpleadosNomina
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     */
    private $idExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellido_1", type="string", length=50, nullable=false)
     */
    private $apellido1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Nomina", type="boolean", nullable=false)
     */
    private $nomina;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Seleccionado_para_Pago", type="boolean", nullable=false)
     */
    private $seleccionadoParaPago;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa", type="integer", nullable=false)
     */
    private $tarifa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_Diaria", type="integer", nullable=false)
     */
    private $tarifaDiaria;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Basico", type="integer", nullable=false)
     */
    private $salarioBasico;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estimulo", type="integer", nullable=false)
     */
    private $estimulo;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento_Estimulo", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoEstimulo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Antiguedad", type="integer", nullable=false)
     */
    private $antiguedad;

    /**
     * @var integer
     *
     * @ORM\Column(name="Otros", type="integer", nullable=false)
     */
    private $otros;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plus", type="integer", nullable=false)
     */
    private $plus;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_por_Cargo", type="integer", nullable=false)
     */
    private $salarioPorCargo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Acumula_Vacaciones", type="boolean", nullable=false)
     */
    private $acumulaVacaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Acumulado", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasAcumulado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Acumulado", type="integer", nullable=false)
     */
    private $salarioAcumulado;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Acumulado_Temporal", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasAcumuladoTemporal;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Acumulado_Temporal", type="integer", nullable=false)
     */
    private $salarioAcumuladoTemporal;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nivel_Nomina", type="smallint", nullable=false)
     */
    private $nivelNomina;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Direccion_Nomina", type="string", length=15, nullable=false)
     */
    private $idDireccionNomina;

    /**
     * @var integer
     *
     * @ORM\Column(name="Invalidez_Parcial", type="integer", nullable=false)
     */
    private $invalidezParcial;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ex_Combatientes", type="integer", nullable=false)
     */
    private $exCombatientes;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento_Perfeccionamiento", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoPerfeccionamiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_Divisa", type="integer", nullable=false)
     */
    private $valorDivisa;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento_Pago_Divisa", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoPagoDivisa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estimulacion", type="integer", nullable=false)
     */
    private $estimulacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento_Estimulacion", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoEstimulacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Albergamiento", type="integer", nullable=false)
     */
    private $albergamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="OtrasRetribuciones", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $otrasretribuciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="HorarioIrregular", type="integer", nullable=false)
     */
    private $horarioirregular;

    /**
     * @var integer
     *
     * @ORM\Column(name="Otras_CLA", type="integer", nullable=false)
     */
    private $otrasCla;

    /**
     * @var string
     *
     * @ORM\Column(name="IETerritorial", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $ieterritorial;

    /**
     * @var string
     *
     * @ORM\Column(name="ETSector", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $etsector;

    /**
     * @var string
     *
     * @ORM\Column(name="Coeficente_Empresa_Empleadora", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $coeficenteEmpresaEmpleadora;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Tipo_Participacion", type="string", length=3, nullable=false)
     */
    private $idTipoParticipacion;

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
     * @ORM\Column(name="CoeficienteTarifa", type="integer", nullable=false)
     */
    private $coeficientetarifa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Descuento", type="integer", nullable=false)
     */
    private $descuento;

    /**
     * @var integer
     *
     * @ORM\Column(name="DescuentoMasivo", type="integer", nullable=false)
     */
    private $descuentomasivo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Estipendio_por_Estudio", type="boolean", nullable=false)
     */
    private $estipendioPorEstudio;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cuantia_Estipendio", type="integer", nullable=false)
     */
    private $cuantiaEstipendio;

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
     * @var string
     *
     * @ORM\Column(name="Cta_MNac", type="string", length=16, nullable=false)
     */
    private $ctaMnac;

    /**
     * @var string
     *
     * @ORM\Column(name="Cta_Divisa", type="string", length=16, nullable=false)
     */
    private $ctaDivisa;

    /**
     * @var string
     *
     * @ORM\Column(name="Nomb_Apell", type="string", length=25, nullable=false)
     */
    private $nombApell;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PagoMSAntig", type="boolean", nullable=false)
     */
    private $pagomsantig;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PagoTarjetaMagnetica", type="boolean", nullable=false)
     */
    private $pagotarjetamagnetica;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Calculo_por_tarifa_diaria", type="boolean", nullable=false)
     */
    private $calculoPorTarifaDiaria;

    /**
     * @var string
     *
     * @ORM\Column(name="CodTurno", type="string", length=3, nullable=false)
     */
    private $codturno;

    /**
     * @var string
     *
     * @ORM\Column(name="CodMSClasifEmplEstim", type="string", length=3, nullable=false)
     */
    private $codmsclasifemplestim;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Pago_Divisa", type="boolean", nullable=false)
     */
    private $pagoDivisa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Vacaciones_Adelantadas", type="integer", nullable=false)
     */
    private $importeVacacionesAdelantadas;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Vacaciones_Mes", type="integer", nullable=false)
     */
    private $importeVacacionesMes;

    /**
     * @var string
     *
     * @ORM\Column(name="Vacaciones_Descontadas", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $vacacionesDescontadas;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Descontado", type="integer", nullable=false)
     */
    private $importeDescontado;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Vacaciones_Adelantados", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasVacacionesAdelantados;

    /**
     * @var integer
     *
     * @ORM\Column(name="Orden_Salidas", type="integer", nullable=false)
     */
    private $ordenSalidas;

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
     * @var boolean
     *
     * @ORM\Column(name="NominaSeparada", type="boolean", nullable=false)
     */
    private $nominaseparada;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_Divisa", type="integer", nullable=false)
     */
    private $tarifaDivisa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Divisa", type="integer", nullable=false)
     */
    private $salarioDivisa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Pension", type="integer", nullable=false)
     */
    private $pension;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellido_2", type="string", length=50, nullable=false)
     */
    private $apellido2;

    /**
     * @var integer
     *
     * @ORM\Column(name="CUPEstimuloAcumVac", type="integer", nullable=false)
     */
    private $cupestimuloacumvac;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Beneficiario", type="string", length=15, nullable=false)
     */
    private $idBeneficiario;

    /**
     * @var string
     *
     * @ORM\Column(name="Beneficiario", type="string", length=50, nullable=false)
     */
    private $beneficiario;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PagoTarjetaMagneticaCUC", type="boolean", nullable=false)
     */
    private $pagotarjetamagneticacuc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Pago_Comedor_CUC", type="boolean", nullable=false)
     */
    private $pagoComedorCuc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Pago_Comedor_Tarifa", type="integer", nullable=false)
     */
    private $pagoComedorTarifa;


}
