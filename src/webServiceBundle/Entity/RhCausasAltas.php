<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhCausasAltas
 *
 * @ORM\Table(name="RH_Causas_Altas")
 * @ORM\Entity
 */
class RhCausasAltas
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_CausaAlta", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCausaalta;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_CausaAlta", type="string", length=50, nullable=false)
     */
    private $descCausaalta;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Rpt", type="string", length=10, nullable=false)
     */
    private $descRpt;

    /**
     * @var integer
     *
     * @ORM\Column(name="Clasificacion", type="smallint", nullable=false)
     */
    private $clasificacion;


}
