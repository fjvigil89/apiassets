<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhSalariosAdicionales
 *
 * @ORM\Table(name="RH_Salarios_Adicionales")
 * @ORM\Entity
 */
class RhSalariosAdicionales
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Tipo_Participacion", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoParticipacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Tipo_Participacion", type="string", length=50, nullable=false)
     */
    private $descTipoParticipacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Idoneidad_Fijo", type="integer", nullable=false)
     */
    private $idoneidadFijo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Idoneidad_Movil", type="integer", nullable=false)
     */
    private $idoneidadMovil;

    /**
     * @var string
     *
     * @ORM\Column(name="Retribucion_Complementaria", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $retribucionComplementaria;


}
