<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UtilTool
 *
 * @ORM\Table(name="Util_Tool")
 * @ORM\Entity
 */
class UtilTool
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
     * @var boolean
     *
     * @ORM\Column(name="Activo", type="boolean", nullable=false)
     */
    private $activo;



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
     * @return UtilTool
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
     * @return UtilTool
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
     * @return UtilTool
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
     * Set activo
     *
     * @param boolean $activo
     * @return UtilTool
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
}
