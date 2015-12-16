<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhRelojMarcajes
 *
 * @ORM\Table(name="RH_Reloj_Marcajes")
 * @ORM\Entity
 */
class RhRelojMarcajes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Item", type="bigint", nullable=false)
     */
    private $item;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nodo", type="smallint", nullable=false)
     */
    private $nodo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Tarjeta_Reloj", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTarjetaReloj;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     */
    private $idExpediente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Hora_Lectura", type="datetime", nullable=false)
     */
    private $fechaHoraLectura;


}
