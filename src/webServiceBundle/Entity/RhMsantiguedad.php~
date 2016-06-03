<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhMsantiguedad
 *
 * @ORM\Table(name="RH_MSAntiguedad")
 * @ORM\Entity
 */
class RhMsantiguedad
{
    /**
     * @var string
     *
     * @ORM\Column(name="Codigo", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=50, nullable=false)
     */
    private $descripcion;

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
     * @ORM\Column(name="Porciento", type="integer", nullable=false)
     */
    private $porciento;


}
