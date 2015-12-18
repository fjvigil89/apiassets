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


}
