<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDeducciones
 *
 * @ORM\Table(name="RH_Deducciones")
 * @ORM\Entity
 */
class RhDeducciones
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Deduccion", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDeduccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Deduccion", type="string", length=50, nullable=false)
     */
    private $descDeduccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Grupo", type="smallint", nullable=false)
     */
    private $grupo;



    /**
     * Get idDeduccion
     *
     * @return string 
     */
    public function getIdDeduccion()
    {
        return $this->idDeduccion;
    }

    /**
     * Set descDeduccion
     *
     * @param string $descDeduccion
     * @return RhDeducciones
     */
    public function setDescDeduccion($descDeduccion)
    {
        $this->descDeduccion = $descDeduccion;

        return $this;
    }

    /**
     * Get descDeduccion
     *
     * @return string 
     */
    public function getDescDeduccion()
    {
        return $this->descDeduccion;
    }

    /**
     * Set grupo
     *
     * @param integer $grupo
     * @return RhDeducciones
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return integer 
     */
    public function getGrupo()
    {
        return $this->grupo;
    }
}
