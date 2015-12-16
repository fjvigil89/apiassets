<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhPromedioSubsidio
 *
 * @ORM\Table(name="RH_Promedio_Subsidio")
 * @ORM\Entity
 */
class RhPromedioSubsidio
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
     * @var integer
     *
     * @ORM\Column(name="Tipo", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Promedio", type="integer", nullable=false)
     */
    private $promedio;



    /**
     * Set idExpediente
     *
     * @param string $idExpediente
     * @return RhPromedioSubsidio
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
     * Set tipo
     *
     * @param integer $tipo
     * @return RhPromedioSubsidio
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set promedio
     *
     * @param integer $promedio
     * @return RhPromedioSubsidio
     */
    public function setPromedio($promedio)
    {
        $this->promedio = $promedio;

        return $this;
    }

    /**
     * Get promedio
     *
     * @return integer 
     */
    public function getPromedio()
    {
        return $this->promedio;
    }
}
