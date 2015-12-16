<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhSubsidiosAdelantados
 *
 * @ORM\Table(name="RH_Subsidios_Adelantados")
 * @ORM\Entity
 */
class RhSubsidiosAdelantados
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clave", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idClave;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Adelantados", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $diasAdelantados;



    /**
     * Set idExpediente
     *
     * @param string $idExpediente
     * @return RhSubsidiosAdelantados
     */
    public function setIdExpediente($idExpediente)
    {
        $this->idExpediente = $idExpediente;

        return $this;
    }

    /**
     * Get idExpediente
     *
     * @return string 
     */
    public function getIdExpediente()
    {
        return $this->idExpediente;
    }

    /**
     * Set idClave
     *
     * @param string $idClave
     * @return RhSubsidiosAdelantados
     */
    public function setIdClave($idClave)
    {
        $this->idClave = $idClave;

        return $this;
    }

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
     * Set diasAdelantados
     *
     * @param string $diasAdelantados
     * @return RhSubsidiosAdelantados
     */
    public function setDiasAdelantados($diasAdelantados)
    {
        $this->diasAdelantados = $diasAdelantados;

        return $this;
    }

    /**
     * Get diasAdelantados
     *
     * @return string 
     */
    public function getDiasAdelantados()
    {
        return $this->diasAdelantados;
    }
}
