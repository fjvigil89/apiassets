<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UtilToolBackup
 *
 * @ORM\Table(name="Util_Tool_Backup")
 * @ORM\Entity
 */
class UtilToolBackup
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_UH", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUh;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_UH", type="string", length=255, nullable=false)
     */
    private $descUh;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_UH", type="string", length=3, nullable=false)
     */
    private $idClasifUh;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Alta", type="datetime", nullable=false)
     */
    private $fechaAlta;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $cantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_Inicial", type="integer", nullable=false)
     */
    private $valorInicial;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Activo", type="boolean", nullable=false)
     */
    private $activo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_InicialMC", type="integer", nullable=false)
     */
    private $valorInicialmc;



    /**
     * Get idUh
     *
     * @return string 
     */
    public function getIdUh()
    {
        return $this->idUh;
    }

    /**
     * Set descUh
     *
     * @param string $descUh
     * @return UtilToolBackup
     */
    public function setDescUh($descUh)
    {
        $this->descUh = $descUh;

        return $this;
    }

    /**
     * Get descUh
     *
     * @return string 
     */
    public function getDescUh()
    {
        return $this->descUh;
    }

    /**
     * Set idClasifUh
     *
     * @param string $idClasifUh
     * @return UtilToolBackup
     */
    public function setIdClasifUh($idClasifUh)
    {
        $this->idClasifUh = $idClasifUh;

        return $this;
    }

    /**
     * Get idClasifUh
     *
     * @return string 
     */
    public function getIdClasifUh()
    {
        return $this->idClasifUh;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     * @return UtilToolBackup
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime 
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set cantidad
     *
     * @param string $cantidad
     * @return UtilToolBackup
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return string 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set valorInicial
     *
     * @param integer $valorInicial
     * @return UtilToolBackup
     */
    public function setValorInicial($valorInicial)
    {
        $this->valorInicial = $valorInicial;

        return $this;
    }

    /**
     * Get valorInicial
     *
     * @return integer 
     */
    public function getValorInicial()
    {
        return $this->valorInicial;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return UtilToolBackup
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set valorInicialmc
     *
     * @param integer $valorInicialmc
     * @return UtilToolBackup
     */
    public function setValorInicialmc($valorInicialmc)
    {
        $this->valorInicialmc = $valorInicialmc;

        return $this;
    }

    /**
     * Get valorInicialmc
     *
     * @return integer 
     */
    public function getValorInicialmc()
    {
        return $this->valorInicialmc;
    }
}
