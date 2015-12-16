<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhClasificacionP2
 *
 * @ORM\Table(name="RH_Clasificacion_P2")
 * @ORM\Entity
 */
class RhClasificacionP2
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_P2", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClasifP2;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Clasif_P2", type="string", length=50, nullable=false)
     */
    private $descClasifP2;


}
