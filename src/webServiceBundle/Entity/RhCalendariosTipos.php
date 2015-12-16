<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhCalendariosTipos
 *
 * @ORM\Table(name="RH_Calendarios_Tipos")
 * @ORM\Entity
 */
class RhCalendariosTipos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Calendario", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $calendario;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Calendario", type="string", length=25, nullable=false)
     */
    private $descCalendario;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias_Laborables", type="smallint", nullable=false)
     */
    private $diasLaborables;

    /**
     * @var string
     *
     * @ORM\Column(name="FondoTiempoMes", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $fondotiempomes;

    /**
     * @var string
     *
     * @ORM\Column(name="FondoTiempoDia", type="decimal", precision=6, scale=4, nullable=false)
     */
    private $fondotiempodia;


}
