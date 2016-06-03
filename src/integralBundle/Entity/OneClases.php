<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OneClases
 *
 * @ORM\Table(name="ONE_Clases")
 * @ORM\Entity
 */
class OneClases
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1", type="integer", nullable=false)
     */
    private $contador1;

    /**
     * @var string
     *
     * @ORM\Column(name="Clase", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clase;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=30, nullable=false)
     */
    private $descripcion;



    /**
     * Set contador1
     *
     * @param integer $contador1
     * @return OneClases
     */
    public function setContador1($contador1)
    {
        $this->contador1 = $contador1;

        return $this;
    }

    /**
     * Get contador1
     *
     * @return integer 
     */
    public function getContador1()
    {
        return $this->contador1;
    }

    /**
     * Get clase
     *
     * @return string 
     */
    public function getClase()
    {
        return $this->clase;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return OneClases
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}
