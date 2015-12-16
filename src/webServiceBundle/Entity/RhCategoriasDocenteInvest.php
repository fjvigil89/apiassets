<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhCategoriasDocenteInvest
 *
 * @ORM\Table(name="RH_Categorias_Docente_Invest")
 * @ORM\Entity
 */
class RhCategoriasDocenteInvest
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Categoria_DI", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategoriaDi;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Categoria_DI", type="string", length=50, nullable=false)
     */
    private $descCategoriaDi;

    /**
     * @var string
     *
     * @ORM\Column(name="Identificacion_DI", type="string", length=2, nullable=false)
     */
    private $identificacionDi;

    /**
     * @var string
     *
     * @ORM\Column(name="Clasificacion_DI", type="string", length=1, nullable=false)
     */
    private $clasificacionDi;

    /**
     * @var integer
     *
     * @ORM\Column(name="Anos_DI", type="smallint", nullable=false)
     */
    private $anosDi;



    /**
     * Get idCategoriaDi
     *
     * @return string 
     */
    public function getIdCategoriaDi()
    {
        return $this->idCategoriaDi;
    }

    /**
     * Set descCategoriaDi
     *
     * @param string $descCategoriaDi
     * @return RhCategoriasDocenteInvest
     */
    public function setDescCategoriaDi($descCategoriaDi)
    {
        $this->descCategoriaDi = $descCategoriaDi;

        return $this;
    }

    /**
     * Get descCategoriaDi
     *
     * @return string 
     */
    public function getDescCategoriaDi()
    {
        return $this->descCategoriaDi;
    }

    /**
     * Set identificacionDi
     *
     * @param string $identificacionDi
     * @return RhCategoriasDocenteInvest
     */
    public function setIdentificacionDi($identificacionDi)
    {
        $this->identificacionDi = $identificacionDi;

        return $this;
    }

    /**
     * Get identificacionDi
     *
     * @return string 
     */
    public function getIdentificacionDi()
    {
        return $this->identificacionDi;
    }

    /**
     * Set clasificacionDi
     *
     * @param string $clasificacionDi
     * @return RhCategoriasDocenteInvest
     */
    public function setClasificacionDi($clasificacionDi)
    {
        $this->clasificacionDi = $clasificacionDi;

        return $this;
    }

    /**
     * Get clasificacionDi
     *
     * @return string 
     */
    public function getClasificacionDi()
    {
        return $this->clasificacionDi;
    }

    /**
     * Set anosDi
     *
     * @param integer $anosDi
     * @return RhCategoriasDocenteInvest
     */
    public function setAnosDi($anosDi)
    {
        $this->anosDi = $anosDi;

        return $this;
    }

    /**
     * Get anosDi
     *
     * @return integer 
     */
    public function getAnosDi()
    {
        return $this->anosDi;
    }
}
