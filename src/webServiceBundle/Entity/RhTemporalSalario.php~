<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhTemporalSalario
 *
 * @ORM\Table(name="RH_Temporal_Salario")
 * @ORM\Entity
 */
class RhTemporalSalario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="smallint", nullable=false)
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Pago", type="smallint", nullable=false)
     */
    private $tipoPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
     * @ORM\Column(name="Salario_Basico_Medidas", type="integer", nullable=false)
     */
    private $salarioBasicoMedidas;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_por_Cargo", type="integer", nullable=false)
     */
    private $salarioPorCargo;

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
     * @ORM\Column(name="Antiguedad", type="integer", nullable=false)
     */
    private $antiguedad;

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
     * @var integer
     *
     * @ORM\Column(name="Condiciones", type="integer", nullable=false)
     */
    private $condiciones;

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
     * @var string
     *
     * @ORM\Column(name="Dias_Trabajados", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $diasTrabajados;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_por_Subsidio", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $diasPorSubsidio;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_a_Pagar_por_Interruptos_Reubicados", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $diasAPagarPorInterruptosReubicados;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_a_Pagar_por_Interrupcion", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $diasAPagarPorInterrupcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_a_Pagar_por_Interrupcion60", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $diasAPagarPorInterrupcion60;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_a_Pagar_por_Interrupcion100", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $diasAPagarPorInterrupcion100;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado", type="integer", nullable=false)
     */
    private $devengado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_por_Subsidio", type="integer", nullable=false)
     */
    private $devengadoPorSubsidio;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_por_Interrupcion", type="integer", nullable=false)
     */
    private $devengadoPorInterrupcion;

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
     * @ORM\Column(name="DevengadoporSombrecumplimiento", type="integer", nullable=false)
     */
    private $devengadoporsombrecumplimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="Deducciones", type="integer", nullable=false)
     */
    private $deducciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="DeduccionesSalario", type="integer", nullable=false)
     */
    private $deduccionessalario;

    /**
     * @var integer
     *
     * @ORM\Column(name="DeduccionesReubicados", type="integer", nullable=false)
     */
    private $deduccionesreubicados;

    /**
     * @var integer
     *
     * @ORM\Column(name="DeduccionesInterrupto", type="integer", nullable=false)
     */
    private $deduccionesinterrupto;

    /**
     * @var integer
     *
     * @ORM\Column(name="OtrosDescuentosInterrupto", type="integer", nullable=false)
     */
    private $otrosdescuentosinterrupto;

    /**
     * @var integer
     *
     * @ORM\Column(name="OtrosDescuentosReubicados", type="integer", nullable=false)
     */
    private $otrosdescuentosreubicados;

    /**
     * @var integer
     *
     * @ORM\Column(name="OtrosDescuentosSalario", type="integer", nullable=false)
     */
    private $otrosdescuentossalario;

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
     * @ORM\Column(name="PerfecInterrupto", type="integer", nullable=false)
     */
    private $perfecinterrupto;

    /**
     * @var integer
     *
     * @ORM\Column(name="PerfecReubicados", type="integer", nullable=false)
     */
    private $perfecreubicados;

    /**
     * @var integer
     *
     * @ORM\Column(name="PerfecSalario", type="integer", nullable=false)
     */
    private $perfecsalario;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Acumulado_Pago", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasAcumuladoPago;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Acumulado_Pago", type="integer", nullable=false)
     */
    private $salarioAcumuladoPago;

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
     * @var integer
     *
     * @ORM\Column(name="Perfeccionamiento", type="integer", nullable=false)
     */
    private $perfeccionamiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="Descuento", type="integer", nullable=false)
     */
    private $descuento;

    /**
     * @var integer
     *
     * @ORM\Column(name="TarifaInterrupto", type="integer", nullable=false)
     */
    private $tarifainterrupto;

    /**
     * @var string
     *
     * @ORM\Column(name="AjusteCentavos", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $ajustecentavos;

    /**
     * @var integer
     *
     * @ORM\Column(name="ContraValor", type="integer", nullable=false)
     */
    private $contravalor;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteMS", type="integer", nullable=false)
     */
    private $importems;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estimulacion", type="integer", nullable=false)
     */
    private $estimulacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_por_Suspension", type="integer", nullable=false)
     */
    private $devengadoPorSuspension;

    /**
     * @var integer
     *
     * @ORM\Column(name="PagoOtros", type="integer", nullable=false)
     */
    private $pagootros;

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

    /**
     * @var integer
     *
     * @ORM\Column(name="Pago_Comedor_Dias", type="smallint", nullable=false)
     */
    private $pagoComedorDias;

    /**
     * @var integer
     *
     * @ORM\Column(name="Pago_Comedor", type="integer", nullable=false)
     */
    private $pagoComedor;

    /**
     * @var integer
     *
     * @ORM\Column(name="Otros_Pagos", type="integer", nullable=false)
     */
    private $otrosPagos;

    /**
     * @var integer
     *
     * @ORM\Column(name="DescuentoMasivo", type="integer", nullable=false)
     */
    private $descuentomasivo;


}
