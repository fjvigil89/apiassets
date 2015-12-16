<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDetallesReporteNominillasMovAus
 *
 * @ORM\Table(name="RH_Detalles_Reporte_Nominillas_Mov_Aus", indexes={@ORM\Index(name="IX_RH_Detalles_Reporte_Nominillas_Mov_Aus", columns={"Contador"})})
 * @ORM\Entity
 */
class RhDetallesReporteNominillasMovAus
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
     * @ORM\Column(name="ItemLink", type="bigint", nullable=false)
     */
    private $itemlink;

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
     * @ORM\Column(name="Dias", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $dias;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porciento;

    /**
     * @var integer
     *
     * @ORM\Column(name="A_pagar_por", type="smallint", nullable=false)
     */
    private $aPagarPor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Deducible", type="boolean", nullable=false)
     */
    private $deducible;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Afecta_Subsidio", type="boolean", nullable=false)
     */
    private $afectaSubsidio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Afecta_Vacaciones", type="boolean", nullable=false)
     */
    private $afectaVacaciones;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Afecta_Vacaciones_Imp", type="boolean", nullable=false)
     */
    private $afectaVacacionesImp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Afecta_SNC_225", type="boolean", nullable=false)
     */
    private $afectaSnc225;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Afecta_SNC_225_Imp", type="boolean", nullable=false)
     */
    private $afectaSnc225Imp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Afecta_Evaluacion_Tecnicos", type="boolean", nullable=false)
     */
    private $afectaEvaluacionTecnicos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Afecta_Estimulo", type="boolean", nullable=false)
     */
    private $afectaEstimulo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Prenomina_Hrs", type="boolean", nullable=false)
     */
    private $prenominaHrs;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Suma_Reporte_Ausencia", type="boolean", nullable=false)
     */
    private $sumaReporteAusencia;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AfectaPromTrabajTot", type="boolean", nullable=false)
     */
    private $afectapromtrabajtot;

    /**
     * @var integer
     *
     * @ORM\Column(name="Clasificacion", type="smallint", nullable=false)
     */
    private $clasificacion;

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


}
