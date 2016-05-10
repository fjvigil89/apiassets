<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzimportCmd
 *
 * @ORM\Table(name="FzImport_Cmd", indexes={@ORM\Index(name="IX_FzImport_Cmd", columns={"mTable"})})
 * @ORM\Entity
 */
class FzimportCmd
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador9", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador9;

    /**
     * @var string
     *
     * @ORM\Column(name="mTable", type="string", length=80, nullable=false)
     */
    private $mtable;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hasTrigger", type="boolean", nullable=false)
     */
    private $hastrigger;

    /**
     * @var string
     *
     * @ORM\Column(name="mCmd", type="string", length=4000, nullable=false)
     */
    private $mcmd;

    /**
     * @var integer
     *
     * @ORM\Column(name="mRows", type="integer", nullable=false)
     */
    private $mrows;

    /**
     * @var string
     *
     * @ORM\Column(name="mMsg", type="string", length=450, nullable=false)
     */
    private $mmsg;


}
