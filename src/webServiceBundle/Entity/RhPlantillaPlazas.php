<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhPlantillaPlazas
 *
 * @ORM\Table(name="RH_Plantilla_Plazas")
 * @ORM\Entity
 */
class RhPlantillaPlazas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Plaza", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $plaza;

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
     * @var string
     *
     * @ORM\Column(name="Id_Cargo", type="string", length=5, nullable=false)
     */
    private $idCargo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Vacante", type="boolean", nullable=false)
     */
    private $vacante;

    /**
     * @var integer
     *
     * @ORM\Column(name="Orden", type="bigint", nullable=false)
     */
    private $orden;


}
