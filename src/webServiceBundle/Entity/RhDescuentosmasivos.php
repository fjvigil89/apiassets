<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDescuentosmasivos
 *
 * @ORM\Table(name="RH_DescuentosMasivos")
 * @ORM\Entity
 */
class RhDescuentosmasivos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NoDescuento", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nodescuento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Aprobada", type="datetime", nullable=false)
     */
    private $fechaAprobada;

    /**
     * @var integer
     *
     * @ORM\Column(name="Criterio", type="smallint", nullable=false)
     */
    private $criterio;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nivel", type="smallint", nullable=false)
     */
    private $nivel;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Incluir_Niv_Hijos", type="boolean", nullable=false)
     */
    private $incluirNivHijos;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_UOoCC", type="string", length=15, nullable=false)
     */
    private $idUoocc;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_UOoCC", type="string", length=120, nullable=false)
     */
    private $descUoocc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Descuento", type="integer", nullable=false)
     */
    private $descuento;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado", type="smallint", nullable=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_User", type="string", length=15, nullable=false)
     */
    private $idUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Op", type="datetime", nullable=false)
     */
    private $fechaOp;



    /**
     * Get nodescuento
     *
     * @return integer 
     */
    public function getNodescuento()
    {
        return $this->nodescuento;
    }

    /**
     * Set fechaAprobada
     *
     * @param \DateTime $fechaAprobada
     * @return RhDescuentosmasivos
     */
    public function setFechaAprobada($fechaAprobada)
    {
        $this->fechaAprobada = $fechaAprobada;

        return $this;
    }

    /**
     * Get fechaAprobada
     *
     * @return \DateTime 
     */
    public function getFechaAprobada()
    {
        return $this->fechaAprobada;
    }

    /**
     * Set criterio
     *
     * @param integer $criterio
     * @return RhDescuentosmasivos
     */
    public function setCriterio($criterio)
    {
        $this->criterio = $criterio;

        return $this;
    }

    /**
     * Get criterio
     *
     * @return integer 
     */
    public function getCriterio()
    {
        return $this->criterio;
    }

    /**
     * Set nivel
     *
     * @param integer $nivel
     * @return RhDescuentosmasivos
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return integer 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set incluirNivHijos
     *
     * @param boolean $incluirNivHijos
     * @return RhDescuentosmasivos
     */
    public function setIncluirNivHijos($incluirNivHijos)
    {
        $this->incluirNivHijos = $incluirNivHijos;

        return $this;
    }

    /**
     * Get incluirNivHijos
     *
     * @return boolean 
     */
    public function getIncluirNivHijos()
    {
        return $this->incluirNivHijos;
    }

    /**
     * Set idUoocc
     *
     * @param string $idUoocc
     * @return RhDescuentosmasivos
     */
    public function setIdUoocc($idUoocc)
    {
        $this->idUoocc = $idUoocc;

        return $this;
    }

    /**
     * Get idUoocc
     *
     * @return string 
     */
    public function getIdUoocc()
    {
        return $this->idUoocc;
    }

    /**
     * Set descUoocc
     *
     * @param string $descUoocc
     * @return RhDescuentosmasivos
     */
    public function setDescUoocc($descUoocc)
    {
        $this->descUoocc = $descUoocc;

        return $this;
    }

    /**
     * Get descUoocc
     *
     * @return string 
     */
    public function getDescUoocc()
    {
        return $this->descUoocc;
    }

    /**
     * Set descuento
     *
     * @param integer $descuento
     * @return RhDescuentosmasivos
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return integer 
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return RhDescuentosmasivos
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return RhDescuentosmasivos
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return string 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set fechaOp
     *
     * @param \DateTime $fechaOp
     * @return RhDescuentosmasivos
     */
    public function setFechaOp($fechaOp)
    {
        $this->fechaOp = $fechaOp;

        return $this;
    }

    /**
     * Get fechaOp
     *
     * @return \DateTime 
     */
    public function getFechaOp()
    {
        return $this->fechaOp;
    }
}
