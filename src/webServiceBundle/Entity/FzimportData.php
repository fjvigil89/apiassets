<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzimportData
 *
 * @ORM\Table(name="FzImport_Data")
 * @ORM\Entity
 */
class FzimportData
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
     * @ORM\Column(name="Importar", type="boolean", nullable=false)
     */
    private $importar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Limpiar", type="boolean", nullable=false)
     */
    private $limpiar;


}
