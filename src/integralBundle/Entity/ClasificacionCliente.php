<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClasificacionCliente
 *
 * @ORM\Table(name="Clasificacion_Cliente")
 * @ORM\Entity
 */
class ClasificacionCliente
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasificacion_Cliente", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClasificacionCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Clasificacion_Cliente", type="string", length=50, nullable=false)
     */
    private $descClasificacionCliente;



    /**
     * Get idClasificacionCliente
     *
     * @return string 
     */
    public function getIdClasificacionCliente()
    {
        return $this->idClasificacionCliente;
    }

    /**
     * Set descClasificacionCliente
     *
     * @param string $descClasificacionCliente
     * @return ClasificacionCliente
     */
    public function setDescClasificacionCliente($descClasificacionCliente)
    {
        $this->descClasificacionCliente = $descClasificacionCliente;

        return $this;
    }

    /**
     * Get descClasificacionCliente
     *
     * @return string 
     */
    public function getDescClasificacionCliente()
    {
        return $this->descClasificacionCliente;
    }
}
