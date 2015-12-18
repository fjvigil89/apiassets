<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhClavesSubsidios
 *
 * @ORM\Table(name="RH_Claves_Subsidios")
 * @ORM\Entity
 */
class RhClavesSubsidios
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clave", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClave;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Clave", type="string", length=50, nullable=false)
     */
    private $descClave;

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
     * @var integer
     *
     * @ORM\Column(name="Clasificacion", type="smallint", nullable=false)
     */
    private $clasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clave_Ausencia", type="string", length=5, nullable=false)
     */
    private $idClaveAusencia;


}
