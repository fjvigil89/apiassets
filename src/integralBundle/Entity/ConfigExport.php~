<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfigExport
 *
 * @ORM\Table(name="Config_Export")
 * @ORM\Entity
 */
class ConfigExport
{
    /**
     * @var string
     *
     * @ORM\Column(name="Name_Export", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nameExport;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador_Doc", type="integer", nullable=false)
     */
    private $contadorDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Doc", type="string", length=3, nullable=true)
     */
    private $tipoDoc;



    /**
     * Get nameExport
     *
     * @return string 
     */
    public function getNameExport()
    {
        return $this->nameExport;
    }

    /**
     * Set contadorDoc
     *
     * @param integer $contadorDoc
     * @return ConfigExport
     */
    public function setContadorDoc($contadorDoc)
    {
        $this->contadorDoc = $contadorDoc;

        return $this;
    }

    /**
     * Get contadorDoc
     *
     * @return integer 
     */
    public function getContadorDoc()
    {
        return $this->contadorDoc;
    }

    /**
     * Set tipoDoc
     *
     * @param string $tipoDoc
     * @return ConfigExport
     */
    public function setTipoDoc($tipoDoc)
    {
        $this->tipoDoc = $tipoDoc;

        return $this;
    }

    /**
     * Get tipoDoc
     *
     * @return string 
     */
    public function getTipoDoc()
    {
        return $this->tipoDoc;
    }
}
