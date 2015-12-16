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



    /**
     * Set item
     *
     * @param integer $item
     * @return RhRelojMarcajes
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return integer 
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set nodo
     *
     * @param integer $nodo
     * @return RhRelojMarcajes
     */
    public function setNodo($nodo)
    {
        $this->nodo = $nodo;

        return $this;
    }

    /**
     * Get nodo
     *
     * @return integer 
     */
    public function getNodo()
    {
        return $this->nodo;
    }

    /**
     * Get idTarjetaReloj
     *
     * @return string 
     */
    public function getIdTarjetaReloj()
    {
        return $this->idTarjetaReloj;
    }

    /**
     * Set idExpediente
     *
     * @param string $idExpediente
     * @return RhRelojMarcajes
     */
    public function setIdExpediente($idExpediente)
    {
        $this->idExpediente = $idExpediente;

        return $this;
    }

    /**
     * Get idExpediente
     *
     * @return string 
     */
    public function getIdExpediente()
    {
        return $this->idExpediente;
    }

    /**
     * Set fechaHoraLectura
     *
     * @param \DateTime $fechaHoraLectura
     * @return RhRelojMarcajes
     */
    public function setFechaHoraLectura($fechaHoraLectura)
    {
        $this->fechaHoraLectura = $fechaHoraLectura;

        return $this;
    }

    /**
     * Get fechaHoraLectura
     *
     * @return \DateTime 
     */
    public function getFechaHoraLectura()
    {
        return $this->fechaHoraLectura;
    }
}
