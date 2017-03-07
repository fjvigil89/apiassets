<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhPlantilla
 *
 * @ORM\Table(name="RH_Plantilla", uniqueConstraints={@ORM\UniqueConstraint(name="IX_RH_Plantilla", columns={"Id_Clave"})})
 * @ORM\Entity
 */
class RhPlantilla
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Nivel", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nivel;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Direccion", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idDireccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Direccion", type="string", length=100, nullable=false)
     */
    private $descDireccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clave", type="string", length=17, nullable=false)
     */
    private $idClave;


}
