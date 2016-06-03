<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhCategoriasOcupacionales
 *
 * @ORM\Table(name="RH_Categorias_Ocupacionales")
 * @ORM\Entity
 */
class RhCategoriasOcupacionales
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Categoria", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Categoria", type="string", length=25, nullable=false)
     */
    private $descCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="Identificacion", type="string", length=2, nullable=false)
     */
    private $identificacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Clasificacion", type="smallint", nullable=false)
     */
    private $clasificacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="CUCPromIndex", type="integer", nullable=false)
     */
    private $cucpromindex;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Lim_Salario_Estimular", type="boolean", nullable=false)
     */
    private $limSalarioEstimular;


}
