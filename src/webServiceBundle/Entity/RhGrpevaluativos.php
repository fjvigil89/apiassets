<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhGrpevaluativos
 *
 * @ORM\Table(name="RH_GrpEvaluativos")
 * @ORM\Entity
 */
class RhGrpevaluativos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_GrpEvaluativo", type="string", length=7, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGrpevaluativo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_GrpEvaluativo", type="string", length=50, nullable=false)
     */
    private $descGrpevaluativo;


}
