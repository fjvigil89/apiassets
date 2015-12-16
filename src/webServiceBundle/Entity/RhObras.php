<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhObras
 *
 * @ORM\Table(name="RH_Obras")
 * @ORM\Entity
 */
class RhObras
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Obra", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idObra;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Obra", type="string", length=50, nullable=false)
     */
    private $descObra;


}
