<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comercial
 *
 * @ORM\Table(name="Comercial")
 * @ORM\Entity
 */
class Comercial
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Comercial", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComercial;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Comercial", type="string", length=40, nullable=false)
     */
    private $descComercial;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado", type="string", length=15, nullable=false)
     */
    private $idEmpleado;



    /**
     * Get idComercial
     *
     * @return integer 
     */
    public function getIdComercial()
    {
        return $this->idComercial;
    }

    /**
     * Set descComercial
     *
     * @param string $descComercial
     * @return Comercial
     */
    public function setDescComercial($descComercial)
    {
        $this->descComercial = $descComercial;

        return $this;
    }

    /**
     * Get descComercial
     *
     * @return string 
     */
    public function getDescComercial()
    {
        return $this->descComercial;
    }

    /**
     * Set idEmpleado
     *
     * @param string $idEmpleado
     * @return Comercial
     */
    public function setIdEmpleado($idEmpleado)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado
     *
     * @return string 
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }
}
