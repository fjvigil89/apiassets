<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhTmpVacacionesSobregiradas
 *
 * @ORM\Table(name="RH_Tmp_Vacaciones_Sobregiradas")
 * @ORM\Entity
 */
class RhTmpVacacionesSobregiradas
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Acumulado", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasAcumulado;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Pagados", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasPagados;



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
     * Set diasAcumulado
     *
     * @param string $diasAcumulado
     * @return RhTmpVacacionesSobregiradas
     */
    public function setDiasAcumulado($diasAcumulado)
    {
        $this->diasAcumulado = $diasAcumulado;

        return $this;
    }

    /**
     * Get diasAcumulado
     *
     * @return string 
     */
    public function getDiasAcumulado()
    {
        return $this->diasAcumulado;
    }

    /**
     * Set diasPagados
     *
     * @param string $diasPagados
     * @return RhTmpVacacionesSobregiradas
     */
    public function setDiasPagados($diasPagados)
    {
        $this->diasPagados = $diasPagados;

        return $this;
    }

    /**
     * Get diasPagados
     *
     * @return string 
     */
    public function getDiasPagados()
    {
        return $this->diasPagados;
    }
}
