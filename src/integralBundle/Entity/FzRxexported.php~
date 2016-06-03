<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzRxexported
 *
 * @ORM\Table(name="Fz_RXExported")
 * @ORM\Entity
 */
class FzRxexported
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
     * @ORM\Column(name="Tipo_Export", type="smallint", nullable=false)
     */
    private $tipoExport;

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
     * @return FzRxexported
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
     * Set tipoExport
     *
     * @param integer $tipoExport
     * @return FzRxexported
     */
    public function setTipoExport($tipoExport)
    {
        $this->tipoExport = $tipoExport;

        return $this;
    }

    /**
     * Get tipoExport
     *
     * @return integer 
     */
    public function getTipoExport()
    {
        return $this->tipoExport;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return FzRxexported
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
