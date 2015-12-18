<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhClavesSubsidios
 *
 * @ORM\Table(name="RH_Claves_Subsidios")
 * @ORM\Entity
 */
class RhClavesSubsidios
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clave", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClave;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Clave", type="string", length=50, nullable=false)
     */
    private $descClave;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porciento;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Carencia", type="boolean", nullable=false)
     */
    private $carencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="Clasificacion", type="smallint", nullable=false)
     */
    private $clasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clave_Ausencia", type="string", length=5, nullable=false)
     */
    private $idClaveAusencia;



    /**
     * Get idClave
     *
     * @return string 
     */
    public function getIdClave()
    {
        return $this->idClave;
    }

    /**
     * Set descClave
     *
     * @param string $descClave
     * @return RhClavesSubsidios
     */
    public function setDescClave($descClave)
    {
        $this->descClave = $descClave;

        return $this;
    }

    /**
     * Get descClave
     *
     * @return string 
     */
    public function getDescClave()
    {
        return $this->descClave;
    }

    /**
     * Set porciento
     *
     * @param string $porciento
     * @return RhClavesSubsidios
     */
    public function setPorciento($porciento)
    {
        $this->porciento = $porciento;

        return $this;
    }

    /**
     * Get porciento
     *
     * @return string 
     */
    public function getPorciento()
    {
        return $this->porciento;
    }

    /**
     * Set carencia
     *
     * @param boolean $carencia
     * @return RhClavesSubsidios
     */
    public function setCarencia($carencia)
    {
        $this->carencia = $carencia;

        return $this;
    }

    /**
     * Get carencia
     *
     * @return boolean 
     */
    public function getCarencia()
    {
        return $this->carencia;
    }

    /**
     * Set clasificacion
     *
     * @param integer $clasificacion
     * @return RhClavesSubsidios
     */
    public function setClasificacion($clasificacion)
    {
        $this->clasificacion = $clasificacion;

        return $this;
    }

    /**
     * Get clasificacion
     *
     * @return integer 
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    /**
     * Set idClaveAusencia
     *
     * @param string $idClaveAusencia
     * @return RhClavesSubsidios
     */
    public function setIdClaveAusencia($idClaveAusencia)
    {
        $this->idClaveAusencia = $idClaveAusencia;

        return $this;
    }

    /**
     * Get idClaveAusencia
     *
     * @return string 
     */
    public function getIdClaveAusencia()
    {
        return $this->idClaveAusencia;
    }
}
