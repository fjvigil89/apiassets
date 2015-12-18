<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhComprobanteExport
 *
 * @ORM\Table(name="RH_Comprobante_Export")
 * @ORM\Entity
 */
class RhComprobanteExport
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_compro", type="integer", nullable=false)
     */
    private $idCompro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Compro", type="smallint", nullable=false)
     */
    private $anoCompro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="smallint", nullable=false)
     */
    private $mes;

    /**
     * @var string
     *
     * @ORM\Column(name="Hecho_Por", type="string", length=60, nullable=false)
     */
    private $hechoPor;

    /**
     * @var string
     *
     * @ORM\Column(name="Revisado_Por", type="string", length=60, nullable=false)
     */
    private $revisadoPor;

    /**
     * @var string
     *
     * @ORM\Column(name="Observaciones", type="string", length=370, nullable=false)
     */
    private $observaciones;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="Clave_Tipo_Comprobante", type="smallint", nullable=false)
     */
    private $claveTipoComprobante;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Exportar", type="boolean", nullable=false)
     */
    private $exportar;


}
