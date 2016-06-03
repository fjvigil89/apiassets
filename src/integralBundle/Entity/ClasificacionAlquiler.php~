<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClasificacionAlquiler
 *
 * @ORM\Table(name="Clasificacion_Alquiler")
 * @ORM\Entity
 */
class ClasificacionAlquiler
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_ClasifRent", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClasifrent;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_ClasifRent", type="string", length=50, nullable=false)
     */
    private $descClasifrent;



    /**
     * Get idClasifrent
     *
     * @return string 
     */
    public function getIdClasifrent()
    {
        return $this->idClasifrent;
    }

    /**
     * Set descClasifrent
     *
     * @param string $descClasifrent
     * @return ClasificacionAlquiler
     */
    public function setDescClasifrent($descClasifrent)
    {
        $this->descClasifrent = $descClasifrent;

        return $this;
    }

    /**
     * Get descClasifrent
     *
     * @return string 
     */
    public function getDescClasifrent()
    {
        return $this->descClasifrent;
    }
}
