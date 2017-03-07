<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NivelAgrupacion
 *
 * @ORM\Table(name="Nivel_Agrupacion")
 * @ORM\Entity
 */
class NivelAgrupacion
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAgrupacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Agrupacion", type="string", length=50, nullable=false)
     */
    private $agrupacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Contabilizar", type="boolean", nullable=false)
     */
    private $contabilizar;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nivel_Padre", type="smallint", nullable=false)
     */
    private $nivelPadre;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Padre", type="string", length=5, nullable=false)
     */
    private $idPadre;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Padre", type="string", length=50, nullable=false)
     */
    private $descPadre;



    /**
     * Get idAgrupacion
     *
     * @return string 
     */
    public function getIdAgrupacion()
    {
        return $this->idAgrupacion;
    }

    /**
     * Set agrupacion
     *
     * @param string $agrupacion
     * @return NivelAgrupacion
     */
    public function setAgrupacion($agrupacion)
    {
        $this->agrupacion = $agrupacion;

        return $this;
    }

    /**
     * Get agrupacion
     *
     * @return string 
     */
    public function getAgrupacion()
    {
        return $this->agrupacion;
    }

    /**
     * Set contabilizar
     *
     * @param boolean $contabilizar
     * @return NivelAgrupacion
     */
    public function setContabilizar($contabilizar)
    {
        $this->contabilizar = $contabilizar;

        return $this;
    }

    /**
     * Get contabilizar
     *
     * @return boolean 
     */
    public function getContabilizar()
    {
        return $this->contabilizar;
    }

    /**
     * Set nivelPadre
     *
     * @param integer $nivelPadre
     * @return NivelAgrupacion
     */
    public function setNivelPadre($nivelPadre)
    {
        $this->nivelPadre = $nivelPadre;

        return $this;
    }

    /**
     * Get nivelPadre
     *
     * @return integer 
     */
    public function getNivelPadre()
    {
        return $this->nivelPadre;
    }

    /**
     * Set idPadre
     *
     * @param string $idPadre
     * @return NivelAgrupacion
     */
    public function setIdPadre($idPadre)
    {
        $this->idPadre = $idPadre;

        return $this;
    }

    /**
     * Get idPadre
     *
     * @return string 
     */
    public function getIdPadre()
    {
        return $this->idPadre;
    }

    /**
     * Set descPadre
     *
     * @param string $descPadre
     * @return NivelAgrupacion
     */
    public function setDescPadre($descPadre)
    {
        $this->descPadre = $descPadre;

        return $this;
    }

    /**
     * Get descPadre
     *
     * @return string 
     */
    public function getDescPadre()
    {
        return $this->descPadre;
    }
}
