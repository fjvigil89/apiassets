<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhVariacionesPlantillaDetalles
 *
 * @ORM\Table(name="RH_Variaciones_Plantilla_Detalles")
 * @ORM\Entity
 */
class RhVariacionesPlantillaDetalles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NoVariacion", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $novariacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cargo", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCargo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cargo", type="string", length=120, nullable=false)
     */
    private $descCargo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Propuesta", type="integer", nullable=false)
     */
    private $propuesta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Aprobadas", type="integer", nullable=false)
     */
    private $aprobadas;

    /**
     * @var integer
     *
     * @ORM\Column(name="Exceso", type="integer", nullable=false)
     */
    private $exceso;

    /**
     * @var integer
     *
     * @ORM\Column(name="CantidadPlazasAnterior", type="integer", nullable=false)
     */
    private $cantidadplazasanterior;


}
