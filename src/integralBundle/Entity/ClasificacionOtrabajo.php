<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClasificacionOtrabajo
 *
 * @ORM\Table(name="Clasificacion_Otrabajo")
 * @ORM\Entity
 */
class ClasificacionOtrabajo
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasificacion", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Clasificacion", type="string", length=50, nullable=false)
     */
    private $descClasificacion;



    /**
     * Get idClasificacion
     *
     * @return string 
     */
    public function getIdClasificacion()
    {
        return $this->idClasificacion;
    }

    /**
     * Set descClasificacion
     *
     * @param string $descClasificacion
     * @return ClasificacionOtrabajo
     */
    public function setDescClasificacion($descClasificacion)
    {
        $this->descClasificacion = $descClasificacion;

        return $this;
    }

    /**
     * Get descClasificacion
     *
     * @return string 
     */
    public function getDescClasificacion()
    {
        return $this->descClasificacion;
    }
}
