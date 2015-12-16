<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzimportSource
 *
 * @ORM\Table(name="FzImport_Source")
 * @ORM\Entity
 */
class FzimportSource
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nTable", type="string", length=80, nullable=false)
     */
    private $ntable;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hasTrigger", type="boolean", nullable=false)
     */
    private $hastrigger;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordeni", type="integer", nullable=true)
     */
    private $ordeni;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordend", type="integer", nullable=true)
     */
    private $ordend;

    /**
     * @var boolean
     *
     * @ORM\Column(name="usedel", type="boolean", nullable=true)
     */
    private $usedel;


}
