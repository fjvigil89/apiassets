<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhEmpleadosIdiomas
 *
 * @ORM\Table(name="RH_Empleados_Idiomas")
 * @ORM\Entity
 */
class RhEmpleadosIdiomas
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Idioma", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idIdioma;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Idioma", type="string", length=15, nullable=false)
     */
    private $descIdioma;

    /**
     * @var integer
     *
     * @ORM\Column(name="Lee", type="smallint", nullable=false)
     */
    private $lee;

    /**
     * @var integer
     *
     * @ORM\Column(name="Habla", type="smallint", nullable=false)
     */
    private $habla;

    /**
     * @var integer
     *
     * @ORM\Column(name="Escribe", type="smallint", nullable=false)
     */
    private $escribe;


}
