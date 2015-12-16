<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhMsincidenciasms
 *
 * @ORM\Table(name="RH_MSIncidenciasMS")
 * @ORM\Entity
 */
class RhMsincidenciasms
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodIncidencia", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codincidencia;

    /**
     * @var string
     *
     * @ORM\Column(name="DescIncidencia", type="string", length=50, nullable=false)
     */
    private $descincidencia;

    /**
     * @var string
     *
     * @ORM\Column(name="PorcientoAfectacion", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoafectacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="LimiteInferior", type="smallint", nullable=false)
     */
    private $limiteinferior;

    /**
     * @var integer
     *
     * @ORM\Column(name="LimiteSuperior", type="smallint", nullable=false)
     */
    private $limitesuperior;

    /**
     * @var integer
     *
     * @ORM\Column(name="Clasificacion", type="smallint", nullable=false)
     */
    private $clasificacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AfectaAntiguedad", type="boolean", nullable=false)
     */
    private $afectaantiguedad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AfectaCoeficiente", type="boolean", nullable=false)
     */
    private $afectacoeficiente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AfectaTurno", type="boolean", nullable=false)
     */
    private $afectaturno;


}
