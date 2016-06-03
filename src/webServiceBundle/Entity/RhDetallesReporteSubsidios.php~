<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDetallesReporteSubsidios
 *
 * @ORM\Table(name="RH_Detalles_Reporte_Subsidios", indexes={@ORM\Index(name="IX_RH_Detalles_Reporte_Subsidios", columns={"Contador"})})
 * @ORM\Entity
 */
class RhDetallesReporteSubsidios
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
     * @ORM\Column(name="Id_Clave", type="string", length=5, nullable=false)
     */
    private $idClave;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porciento;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Carencia", type="boolean", nullable=false)
     */
    private $carencia;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Naturales", type="decimal", precision=9, scale=4, nullable=false)
     */
    private $diasNaturales;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_a_Pagar", type="decimal", precision=9, scale=4, nullable=false)
     */
    private $diasAPagar;

    /**
     * @var integer
     *
     * @ORM\Column(name="Promedio", type="integer", nullable=false)
     */
    private $promedio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Valido", type="datetime", nullable=false)
     */
    private $fechaValido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Pago", type="datetime", nullable=false)
     */
    private $fechaPago;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Resolucion", type="datetime", nullable=false)
     */
    private $fechaResolucion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Certificado", type="smallint", nullable=false)
     */
    private $tipoCertificado;

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
