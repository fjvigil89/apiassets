<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzRximported
 *
 * @ORM\Table(name="Fz_RXImported")
 * @ORM\Entity
 */
class FzRximported
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
     * @ORM\Column(name="Id_Modulo", type="string", length=2, nullable=false)
     */
    private $idModulo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Import", type="smallint", nullable=false)
     */
    private $tipoImport;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Last_Update", type="datetime", nullable=false)
     */
    private $lastUpdate;



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
     * Set idModulo
     *
     * @param string $idModulo
     * @return FzRximported
     */
    public function setIdModulo($idModulo)
    {
        $this->idModulo = $idModulo;

        return $this;
    }

    /**
     * Get idModulo
     *
     * @return string 
     */
    public function getIdModulo()
    {
        return $this->idModulo;
    }

    /**
     * Set tipoImport
     *
     * @param integer $tipoImport
     * @return FzRximported
     */
    public function setTipoImport($tipoImport)
    {
        $this->tipoImport = $tipoImport;

        return $this;
    }

    /**
     * Get tipoImport
     *
     * @return integer 
     */
    public function getTipoImport()
    {
        return $this->tipoImport;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return FzRximported
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * Get lastUpdate
     *
     * @return \DateTime 
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }
}
