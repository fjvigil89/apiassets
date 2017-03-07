<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProveedoresPuntosRecogida
 *
 * @ORM\Table(name="Proveedores_Puntos_Recogida")
 * @ORM\Entity
 */
class ProveedoresPuntosRecogida
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Proveedor", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Punto_Recogida", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPuntoRecogida;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Punto_Recogida", type="string", length=40, nullable=false)
     */
    private $descPuntoRecogida;



    /**
     * Set idProveedor
     *
     * @param string $idProveedor
     * @return ProveedoresPuntosRecogida
     */
    public function setIdProveedor($idProveedor)
    {
        $this->idProveedor = $idProveedor;

        return $this;
    }

    /**
     * Get idProveedor
     *
     * @return string 
     */
    public function getIdProveedor()
    {
        return $this->idProveedor;
    }

    /**
     * Set idPuntoRecogida
     *
     * @param string $idPuntoRecogida
     * @return ProveedoresPuntosRecogida
     */
    public function setIdPuntoRecogida($idPuntoRecogida)
    {
        $this->idPuntoRecogida = $idPuntoRecogida;

        return $this;
    }

    /**
     * Get idPuntoRecogida
     *
     * @return string 
     */
    public function getIdPuntoRecogida()
    {
        return $this->idPuntoRecogida;
    }

    /**
     * Set descPuntoRecogida
     *
     * @param string $descPuntoRecogida
     * @return ProveedoresPuntosRecogida
     */
    public function setDescPuntoRecogida($descPuntoRecogida)
    {
        $this->descPuntoRecogida = $descPuntoRecogida;

        return $this;
    }

    /**
     * Get descPuntoRecogida
     *
     * @return string 
     */
    public function getDescPuntoRecogida()
    {
        return $this->descPuntoRecogida;
    }
}
