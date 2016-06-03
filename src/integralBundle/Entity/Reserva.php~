<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reserva
 *
 * @ORM\Table(name="Reserva")
 * @ORM\Entity
 */
class Reserva
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_documento", type="string", length=15, nullable=true)
     */
    private $idDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $cantidad;



    /**
     * Get idAlmacen
     *
     * @return string 
     */
    public function getIdAlmacen()
    {
        return $this->idAlmacen;
    }

    /**
     * Set idDocumento
     *
     * @param string $idDocumento
     * @return Reserva
     */
    public function setIdDocumento($idDocumento)
    {
        $this->idDocumento = $idDocumento;

        return $this;
    }

    /**
     * Get idDocumento
     *
     * @return string 
     */
    public function getIdDocumento()
    {
        return $this->idDocumento;
    }

    /**
     * Set cantidad
     *
     * @param string $cantidad
     * @return Reserva
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return string 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }
}
