<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDetallesReporteVacaciones
 *
 * @ORM\Table(name="RH_Detalles_Reporte_Vacaciones", indexes={@ORM\Index(name="IX_RH_Detalles_Reporte_Vacaciones", columns={"Contador"})})
 * @ORM\Entity
 */
class RhDetallesReporteVacaciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Item", type="bigint", nullable=false)
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
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Pago", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipoPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
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
     * @ORM\Column(name="Dias_Solicitados_Periodo", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasSolicitadosPeriodo;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Solicitados_Adelantados", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasSolicitadosAdelantados;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Solicitados", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasSolicitados;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Pagados_Periodo", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasPagadosPeriodo;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Pagados_Adelantados", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasPagadosAdelantados;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Pagados", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasPagados;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe", type="integer", nullable=false)
     */
    private $importe;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Liquidacion", type="boolean", nullable=false)
     */
    private $liquidacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nivel", type="smallint", nullable=false)
     */
    private $nivel;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Direccion", type="string", length=15, nullable=false)
     */
    private $idDireccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Origen", type="smallint", nullable=false)
     */
    private $origen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias_Feriados_Periodo", type="smallint", nullable=false)
     */
    private $diasFeriadosPeriodo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias_Feriados_Adelantados", type="smallint", nullable=false)
     */
    private $diasFeriadosAdelantados;


}
