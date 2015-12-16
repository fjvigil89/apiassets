<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhConversionPlazas
 *
 * @ORM\Table(name="RH_Conversion_Plazas")
 * @ORM\Entity
 */
class RhConversionPlazas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NoConversion", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $noconversion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Aprobada", type="datetime", nullable=false)
     */
    private $fechaAprobada;

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
     * @var string
     *
     * @ORM\Column(name="Id_CargoOld", type="string", length=5, nullable=false)
     */
    private $idCargoold;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_CargoOld", type="string", length=120, nullable=false)
     */
    private $descCargoold;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plaza", type="bigint", nullable=false)
     */
    private $plaza;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Vacante", type="boolean", nullable=false)
     */
    private $vacante;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_CargoNew", type="string", length=5, nullable=false)
     */
    private $idCargonew;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_CargoNew", type="string", length=120, nullable=false)
     */
    private $descCargonew;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Categoria", type="string", length=25, nullable=false)
     */
    private $descCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Subcategoria", type="string", length=50, nullable=false)
     */
    private $descSubcategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="RGrupo", type="string", length=5, nullable=false)
     */
    private $rgrupo;

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
     * Get noconversion
     *
     * @return integer 
     */
    public function getNoconversion()
    {
        return $this->noconversion;
    }

    /**
     * Set fechaAprobada
     *
     * @param \DateTime $fechaAprobada
     * @return RhConversionPlazas
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
     * Set nivel
     *
     * @param integer $nivel
     * @return RhConversionPlazas
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
     * @return RhConversionPlazas
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
     * @return RhConversionPlazas
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
     * Set idCargoold
     *
     * @param string $idCargoold
     * @return RhConversionPlazas
     */
    public function setIdCargoold($idCargoold)
    {
        $this->idCargoold = $idCargoold;

        return $this;
    }

    /**
     * Get idCargoold
     *
     * @return string 
     */
    public function getIdCargoold()
    {
        return $this->idCargoold;
    }

    /**
     * Set descCargoold
     *
     * @param string $descCargoold
     * @return RhConversionPlazas
     */
    public function setDescCargoold($descCargoold)
    {
        $this->descCargoold = $descCargoold;

        return $this;
    }

    /**
     * Get descCargoold
     *
     * @return string 
     */
    public function getDescCargoold()
    {
        return $this->descCargoold;
    }

    /**
     * Set plaza
     *
     * @param integer $plaza
     * @return RhConversionPlazas
     */
    public function setPlaza($plaza)
    {
        $this->plaza = $plaza;

        return $this;
    }

    /**
     * Get plaza
     *
     * @return integer 
     */
    public function getPlaza()
    {
        return $this->plaza;
    }

    /**
     * Set vacante
     *
     * @param boolean $vacante
     * @return RhConversionPlazas
     */
    public function setVacante($vacante)
    {
        $this->vacante = $vacante;

        return $this;
    }

    /**
     * Get vacante
     *
     * @return boolean 
     */
    public function getVacante()
    {
        return $this->vacante;
    }

    /**
     * Set idCargonew
     *
     * @param string $idCargonew
     * @return RhConversionPlazas
     */
    public function setIdCargonew($idCargonew)
    {
        $this->idCargonew = $idCargonew;

        return $this;
    }

    /**
     * Get idCargonew
     *
     * @return string 
     */
    public function getIdCargonew()
    {
        return $this->idCargonew;
    }

    /**
     * Set descCargonew
     *
     * @param string $descCargonew
     * @return RhConversionPlazas
     */
    public function setDescCargonew($descCargonew)
    {
        $this->descCargonew = $descCargonew;

        return $this;
    }

    /**
     * Get descCargonew
     *
     * @return string 
     */
    public function getDescCargonew()
    {
        return $this->descCargonew;
    }

    /**
     * Set descCategoria
     *
     * @param string $descCategoria
     * @return RhConversionPlazas
     */
    public function setDescCategoria($descCategoria)
    {
        $this->descCategoria = $descCategoria;

        return $this;
    }

    /**
     * Get descCategoria
     *
     * @return string 
     */
    public function getDescCategoria()
    {
        return $this->descCategoria;
    }

    /**
     * Set descSubcategoria
     *
     * @param string $descSubcategoria
     * @return RhConversionPlazas
     */
    public function setDescSubcategoria($descSubcategoria)
    {
        $this->descSubcategoria = $descSubcategoria;

        return $this;
    }

    /**
     * Get descSubcategoria
     *
     * @return string 
     */
    public function getDescSubcategoria()
    {
        return $this->descSubcategoria;
    }

    /**
     * Set rgrupo
     *
     * @param string $rgrupo
     * @return RhConversionPlazas
     */
    public function setRgrupo($rgrupo)
    {
        $this->rgrupo = $rgrupo;

        return $this;
    }

    /**
     * Get rgrupo
     *
     * @return string 
     */
    public function getRgrupo()
    {
        return $this->rgrupo;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return RhConversionPlazas
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
     * @return RhConversionPlazas
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
     * @return RhConversionPlazas
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
