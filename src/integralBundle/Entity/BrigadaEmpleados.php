<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BrigadaEmpleados
 *
 * @ORM\Table(name="Brigada_Empleados")
 * @ORM\Entity
 */
class BrigadaEmpleados
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado", type="string", length=15, nullable=false)
     */
    private $idEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Brigada", type="string", length=10, nullable=false)
     */
    private $idBrigada;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Comercial", type="string", length=50, nullable=false)
     */
    private $descComercial;



    /**
     * Set idEmpleado
     *
     * @param string $idEmpleado
     * @return BrigadaEmpleados
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

    /**
     * Set idBrigada
     *
     * @param string $idBrigada
     * @return BrigadaEmpleados
     */
    public function setIdBrigada($idBrigada)
    {
        $this->idBrigada = $idBrigada;

        return $this;
    }

    /**
     * Get idBrigada
     *
     * @return string 
     */
    public function getIdBrigada()
    {
        return $this->idBrigada;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set descComercial
     *
     * @param string $descComercial
     * @return BrigadaEmpleados
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
}
