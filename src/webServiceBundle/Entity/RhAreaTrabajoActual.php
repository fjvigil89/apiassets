<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhAreaTrabajoActual
 *
 * @ORM\Table(name="RH_Area_Trabajo_Actual")
 * @ORM\Entity
 */
class RhAreaTrabajoActual
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Area", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idArea;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Area", type="string", length=50, nullable=false)
     */
    private $descArea;


}
