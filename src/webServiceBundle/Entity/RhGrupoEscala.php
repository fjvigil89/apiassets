<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhGrupoEscala
 *
 * @ORM\Table(name="RH_Grupo_Escala")
 * @ORM\Entity
 */
class RhGrupoEscala
{
    /**
     * @var string
     *
     * @ORM\Column(name="NGrupo", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ngrupo;

    /**
     * @var integer
     *
     * @ORM\Column(name="RGraduados", type="integer", nullable=false)
     */
    private $rgraduados;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tecnicos_T1", type="integer", nullable=false)
     */
    private $tecnicosT1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tecnicos_T2", type="integer", nullable=false)
     */
    private $tecnicosT2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tecnicos_T3", type="integer", nullable=false)
     */
    private $tecnicosT3;

    /**
     * @var integer
     *
     * @ORM\Column(name="Administrativos", type="integer", nullable=false)
     */
    private $administrativos;

    /**
     * @var integer
     *
     * @ORM\Column(name="Servicios", type="integer", nullable=false)
     */
    private $servicios;

    /**
     * @var integer
     *
     * @ORM\Column(name="Obreros", type="integer", nullable=false)
     */
    private $obreros;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dirigentes", type="integer", nullable=false)
     */
    private $dirigentes;

    /**
     * @var integer
     *
     * @ORM\Column(name="MSObreros", type="integer", nullable=false)
     */
    private $msobreros;

    /**
     * @var integer
     *
     * @ORM\Column(name="MSServicios", type="integer", nullable=false)
     */
    private $msservicios;

    /**
     * @var integer
     *
     * @ORM\Column(name="MSTecnicos", type="integer", nullable=false)
     */
    private $mstecnicos;

    /**
     * @var integer
     *
     * @ORM\Column(name="MSAdministrativos", type="integer", nullable=false)
     */
    private $msadministrativos;

    /**
     * @var integer
     *
     * @ORM\Column(name="MSDirigentes", type="integer", nullable=false)
     */
    private $msdirigentes;


}
