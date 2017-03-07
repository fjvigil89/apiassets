<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OtrabajoEstados
 *
 * @ORM\Table(name="Otrabajo_Estados")
 * @ORM\Entity
 */
class OtrabajoEstados
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Estado", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Estado", type="string", length=50, nullable=false)
     */
    private $descEstado;

    /**
     * @var integer
     *
     * @ORM\Column(name="TiempoM", type="integer", nullable=false)
     */
    private $tiempom;



    /**
     * Get idEstado
     *
     * @return string 
     */
    public function getIdEstado()
    {
        return $this->idEstado;
    }

    /**
     * Set descEstado
     *
     * @param string $descEstado
     * @return OtrabajoEstados
     */
    public function setDescEstado($descEstado)
    {
        $this->descEstado = $descEstado;

        return $this;
    }

    /**
     * Get descEstado
     *
     * @return string 
     */
    public function getDescEstado()
    {
        return $this->descEstado;
    }

    /**
     * Set tiempom
     *
     * @param integer $tiempom
     * @return OtrabajoEstados
     */
    public function setTiempom($tiempom)
    {
        $this->tiempom = $tiempom;

        return $this;
    }

    /**
     * Get tiempom
     *
     * @return integer 
     */
    public function getTiempom()
    {
        return $this->tiempom;
    }
}
