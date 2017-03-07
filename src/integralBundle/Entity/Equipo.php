<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipo
 *
 * @ORM\Table(name="Equipo")
 * @ORM\Entity
 */
class Equipo
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cliente", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Equipo", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idEquipo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Equipo", type="string", length=60, nullable=false)
     */
    private $descEquipo;



    /**
     * Set idCliente
     *
     * @param string $idCliente
     * @return Equipo
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return string 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set idEquipo
     *
     * @param string $idEquipo
     * @return Equipo
     */
    public function setIdEquipo($idEquipo)
    {
        $this->idEquipo = $idEquipo;

        return $this;
    }

    /**
     * Get idEquipo
     *
     * @return string 
     */
    public function getIdEquipo()
    {
        return $this->idEquipo;
    }

    /**
     * Set descEquipo
     *
     * @param string $descEquipo
     * @return Equipo
     */
    public function setDescEquipo($descEquipo)
    {
        $this->descEquipo = $descEquipo;

        return $this;
    }

    /**
     * Get descEquipo
     *
     * @return string 
     */
    public function getDescEquipo()
    {
        return $this->descEquipo;
    }
}
