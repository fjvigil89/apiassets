<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OSiscCuentas
 *
 * @ORM\Table(name="O_SISC_Cuentas")
 * @ORM\Entity
 */
class OSiscCuentas
{
    /**
     * @var string
     *
     * @ORM\Column(name="Cta", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cta;

    /**
     * @var string
     *
     * @ORM\Column(name="Exportar_Hasta", type="string", length=11, nullable=false)
     */
    private $exportarHasta;



    /**
     * Get cta
     *
     * @return string 
     */
    public function getCta()
    {
        return $this->cta;
    }

    /**
     * Set exportarHasta
     *
     * @param string $exportarHasta
     * @return OSiscCuentas
     */
    public function setExportarHasta($exportarHasta)
    {
        $this->exportarHasta = $exportarHasta;

        return $this;
    }

    /**
     * Get exportarHasta
     *
     * @return string 
     */
    public function getExportarHasta()
    {
        return $this->exportarHasta;
    }
}
