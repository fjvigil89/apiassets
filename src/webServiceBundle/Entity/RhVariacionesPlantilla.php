<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhVariacionesPlantilla
 *
 * @ORM\Table(name="RH_Variaciones_Plantilla")
 * @ORM\Entity
 */
class RhVariacionesPlantilla
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NoVariacion", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $novariacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nivel", type="smallint", nullable=false)
     */
    private $nivel;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Direccion", type="string", length=15, nullable=false)
     */
    private $idDireccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Direccion", type="string", length=100, nullable=false)
     */
    private $descDireccion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Propuesta", type="datetime", nullable=false)
     */
    private $fechaPropuesta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Aprobada", type="datetime", nullable=false)
     */
    private $fechaAprobada;

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
     * Get novariacion
     *
     * @return integer 
     */
    public function getNovariacion()
    {
        return $this->novariacion;
    }

    /**
     * Set nivel
     *
     * @param integer $nivel
     * @return RhVariacionesPlantilla
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
     * Set idDireccion
     *
     * @param string $idDireccion
     * @return RhVariacionesPlantilla
     */
    public function setIdDireccion($idDireccion)
    {
        $this->idDireccion = $idDireccion;

        return $this;
    }

    /**
     * Get idDireccion
     *
     * @return string 
     */
    public function getIdDireccion()
    {
        return $this->idDireccion;
    }

    /**
     * Set descDireccion
     *
     * @param string $descDireccion
     * @return RhVariacionesPlantilla
     */
    public function setDescDireccion($descDireccion)
    {
        $this->descDireccion = $descDireccion;

        return $this;
    }

    /**
     * Get descDireccion
     *
     * @return string 
     */
    public function getDescDireccion()
    {
        return $this->descDireccion;
    }

    /**
     * Set fechaPropuesta
     *
     * @param \DateTime $fechaPropuesta
     * @return RhVariacionesPlantilla
     */
    public function setFechaPropuesta($fechaPropuesta)
    {
        $this->fechaPropuesta = $fechaPropuesta;

        return $this;
    }

    /**
     * Get fechaPropuesta
     *
     * @return \DateTime 
     */
    public function getFechaPropuesta()
    {
        return $this->fechaPropuesta;
    }

    /**
     * Set fechaAprobada
     *
     * @param \DateTime $fechaAprobada
     * @return RhVariacionesPlantilla
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
     * Set estado
     *
     * @param integer $estado
     * @return RhVariacionesPlantilla
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
     * @return RhVariacionesPlantilla
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
     * @return RhVariacionesPlantilla
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
