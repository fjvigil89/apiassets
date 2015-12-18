<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDetallesReporteVinculacionOtAn
 *
 * @ORM\Table(name="RH_Detalles_Reporte_Vinculacion_OT_AN", indexes={@ORM\Index(name="IX_RH_Detalles_Reporte_Vinculacion_OT_AN", columns={"Contador"})})
 * @ORM\Entity
 */
class RhDetallesReporteVinculacionOtAn
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Item", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $item;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

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
     * @var integer
     *
     * @ORM\Column(name="Tipo", type="smallint", nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     */
    private $idExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=152, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Actividad", type="string", length=15, nullable=false)
     */
    private $idActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Actividad", type="string", length=100, nullable=false)
     */
    private $descActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="UM", type="string", length=10, nullable=false)
     */
    private $um;

    /**
     * @var string
     *
     * @ORM\Column(name="Tasa", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $tasa;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Norma", type="string", length=1, nullable=false)
     */
    private $tipoNorma;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad_Actividad", type="decimal", precision=12, scale=4, nullable=false)
     */
    private $cantidadActividad;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_Actividad", type="integer", nullable=false)
     */
    private $devengadoActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="Horas_Actividad", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $horasActividad;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_Otros", type="integer", nullable=false)
     */
    private $devengadoOtros;

    /**
     * @var string
     *
     * @ORM\Column(name="Horas_Multioficio", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $horasMultioficio;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_Multioficio", type="integer", nullable=false)
     */
    private $devengadoMultioficio;

    /**
     * @var string
     *
     * @ORM\Column(name="CumplimNorma", type="decimal", precision=12, scale=6, nullable=false)
     */
    private $cumplimnorma;

    /**
     * @var string
     *
     * @ORM\Column(name="PagoSobrecumplim", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $pagosobrecumplim;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Basico", type="integer", nullable=false)
     */
    private $salarioBasico;

    /**
     * @var string
     *
     * @ORM\Column(name="IddeOrdendeTrabajo", type="string", length=25, nullable=false)
     */
    private $iddeordendetrabajo;

    /**
     * @var string
     *
     * @ORM\Column(name="Horas_Adelantadas", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $horasAdelantadas;

    /**
     * @var string
     *
     * @ORM\Column(name="Horas_Interrupto", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $horasInterrupto;

    /**
     * @var string
     *
     * @ORM\Column(name="Horas_Tasadas", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $horasTasadas;

    /**
     * @var string
     *
     * @ORM\Column(name="Horas_Real_Trabajadas", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $horasRealTrabajadas;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_Horas_Adelantadas", type="integer", nullable=false)
     */
    private $tarifaHorasAdelantadas;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_Horas_Vinculacion", type="integer", nullable=false)
     */
    private $tarifaHorasVinculacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento_Interrupcion", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoInterrupcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento_Importe_Tasado", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoImporteTasado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_Horas_Adelantadas", type="integer", nullable=false)
     */
    private $devengadoHorasAdelantadas;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_Horas_Interrupcion", type="integer", nullable=false)
     */
    private $devengadoHorasInterrupcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_Horas_Tasadas", type="integer", nullable=false)
     */
    private $devengadoHorasTasadas;

    /**
     * @var integer
     *
     * @ORM\Column(name="Total_Devengado", type="integer", nullable=false)
     */
    private $totalDevengado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ccosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;


}
