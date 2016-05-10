<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhExpedientesMovimientos
 *
 * @ORM\Table(name="RH_Expedientes_Movimientos")
 * @ORM\Entity
 */
class RhExpedientesMovimientos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NoMovExped", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nomovexped;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ExpedienteOld", type="string", length=15, nullable=false)
     */
    private $idExpedienteold;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=152, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ExpedienteNew", type="string", length=15, nullable=false)
     */
    private $idExpedientenew;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=100, nullable=false)
     */
    private $nota;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado", type="smallint", nullable=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_User", type="string", length=15, nullable=false)
     */
    private $idUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Op", type="datetime", nullable=false)
     */
    private $fechaOp;


}
