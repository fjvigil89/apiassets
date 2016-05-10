<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDetallesReportePagoComedor
 *
 * @ORM\Table(name="RH_Detalles_Reporte_Pago_Comedor")
 * @ORM\Entity
 */
class RhDetallesReportePagoComedor
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
     * @var boolean
     *
     * @ORM\Column(name="Pago_Comedor_CUC_R", type="boolean", nullable=false)
     */
    private $pagoComedorCucR;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Pago_Comedor_CUC_W", type="boolean", nullable=false)
     */
    private $pagoComedorCucW;

    /**
     * @var integer
     *
     * @ORM\Column(name="Pago_Comedor_Tarifa_R", type="integer", nullable=false)
     */
    private $pagoComedorTarifaR;

    /**
     * @var integer
     *
     * @ORM\Column(name="Pago_Comedor_Tarifa_W", type="integer", nullable=false)
     */
    private $pagoComedorTarifaW;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias_Laborables", type="smallint", nullable=false)
     */
    private $diasLaborables;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias_Ausencias_R", type="smallint", nullable=false)
     */
    private $diasAusenciasR;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias_Ausencias_W", type="smallint", nullable=false)
     */
    private $diasAusenciasW;


}
