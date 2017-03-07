<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhSalariosAdicionales
 *
 * @ORM\Table(name="RH_Salarios_Adicionales")
 * @ORM\Entity
 */
class RhSalariosAdicionales
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Tipo_Participacion", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoParticipacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Tipo_Participacion", type="string", length=50, nullable=false)
     */
    private $descTipoParticipacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Idoneidad_Fijo", type="integer", nullable=false)
     */
    private $idoneidadFijo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Idoneidad_Movil", type="integer", nullable=false)
     */
    private $idoneidadMovil;

    /**
     * @var string
     *
     * @ORM\Column(name="Retribucion_Complementaria", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $retribucionComplementaria;



    /**
     * Get idTipoParticipacion
     *
     * @return string 
     */
    public function getIdTipoParticipacion()
    {
        return $this->idTipoParticipacion;
    }

    /**
     * Set descTipoParticipacion
     *
     * @param string $descTipoParticipacion
     * @return RhSalariosAdicionales
     */
    public function setDescTipoParticipacion($descTipoParticipacion)
    {
        $this->descTipoParticipacion = $descTipoParticipacion;

        return $this;
    }

    /**
     * Get descTipoParticipacion
     *
     * @return string 
     */
    public function getDescTipoParticipacion()
    {
        return $this->descTipoParticipacion;
    }

    /**
     * Set idoneidadFijo
     *
     * @param integer $idoneidadFijo
     * @return RhSalariosAdicionales
     */
    public function setIdoneidadFijo($idoneidadFijo)
    {
        $this->idoneidadFijo = $idoneidadFijo;

        return $this;
    }

    /**
     * Get idoneidadFijo
     *
     * @return integer 
     */
    public function getIdoneidadFijo()
    {
        return $this->idoneidadFijo;
    }

    /**
     * Set idoneidadMovil
     *
     * @param integer $idoneidadMovil
     * @return RhSalariosAdicionales
     */
    public function setIdoneidadMovil($idoneidadMovil)
    {
        $this->idoneidadMovil = $idoneidadMovil;

        return $this;
    }

    /**
     * Get idoneidadMovil
     *
     * @return integer 
     */
    public function getIdoneidadMovil()
    {
        return $this->idoneidadMovil;
    }

    /**
     * Set retribucionComplementaria
     *
     * @param string $retribucionComplementaria
     * @return RhSalariosAdicionales
     */
    public function setRetribucionComplementaria($retribucionComplementaria)
    {
        $this->retribucionComplementaria = $retribucionComplementaria;

        return $this;
    }

    /**
     * Get retribucionComplementaria
     *
     * @return string 
     */
    public function getRetribucionComplementaria()
    {
        return $this->retribucionComplementaria;
    }
}
