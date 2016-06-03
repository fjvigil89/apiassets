<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClasificacionFacturas
 *
 * @ORM\Table(name="Clasificacion_Facturas")
 * @ORM\Entity
 */
class ClasificacionFacturas
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasifactura", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClasifactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Clasifactura", type="string", length=50, nullable=false)
     */
    private $descClasifactura;



    /**
     * Get idClasifactura
     *
     * @return string 
     */
    public function getIdClasifactura()
    {
        return $this->idClasifactura;
    }

    /**
     * Set descClasifactura
     *
     * @param string $descClasifactura
     * @return ClasificacionFacturas
     */
    public function setDescClasifactura($descClasifactura)
    {
        $this->descClasifactura = $descClasifactura;

        return $this;
    }

    /**
     * Get descClasifactura
     *
     * @return string 
     */
    public function getDescClasifactura()
    {
        return $this->descClasifactura;
    }
}
