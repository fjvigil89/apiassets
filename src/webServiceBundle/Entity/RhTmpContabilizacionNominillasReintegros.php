<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhTmpContabilizacionNominillasReintegros
 *
 * @ORM\Table(name="RH_Tmp_Contabilizacion_Nominillas_Reintegros")
 * @ORM\Entity
 */
class RhTmpContabilizacionNominillasReintegros
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ccosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     */
    private $idExpediente;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Reintegro_Salario", type="integer", nullable=false)
     */
    private $importeReintegroSalario;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Reintegro_Subsidio", type="integer", nullable=false)
     */
    private $importeReintegroSubsidio;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Reintegro_Vacaciones", type="integer", nullable=false)
     */
    private $importeReintegroVacaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Reintegro_Divisa", type="integer", nullable=false)
     */
    private $importeReintegroDivisa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Acobrar", type="integer", nullable=false)
     */
    private $acobrar;

    /**
     * @var string
     *
     * @ORM\Column(name="AjusteCentavos", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $ajustecentavos;



    /**
     * Get contador
     *
     * @return integer 
     */
    public function getContador()
    {
        return $this->contador;
    }

    /**
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return RhTmpContabilizacionNominillasReintegros
     */
    public function setIdCcosto($idCcosto)
    {
        $this->idCcosto = $idCcosto;

        return $this;
    }

    /**
     * Get idCcosto
     *
     * @return string 
     */
    public function getIdCcosto()
    {
        return $this->idCcosto;
    }

    /**
     * Set idExpediente
     *
     * @param string $idExpediente
     * @return RhTmpContabilizacionNominillasReintegros
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
     * Set importeReintegroSalario
     *
     * @param integer $importeReintegroSalario
     * @return RhTmpContabilizacionNominillasReintegros
     */
    public function setImporteReintegroSalario($importeReintegroSalario)
    {
        $this->importeReintegroSalario = $importeReintegroSalario;

        return $this;
    }

    /**
     * Get importeReintegroSalario
     *
     * @return integer 
     */
    public function getImporteReintegroSalario()
    {
        return $this->importeReintegroSalario;
    }

    /**
     * Set importeReintegroSubsidio
     *
     * @param integer $importeReintegroSubsidio
     * @return RhTmpContabilizacionNominillasReintegros
     */
    public function setImporteReintegroSubsidio($importeReintegroSubsidio)
    {
        $this->importeReintegroSubsidio = $importeReintegroSubsidio;

        return $this;
    }

    /**
     * Get importeReintegroSubsidio
     *
     * @return integer 
     */
    public function getImporteReintegroSubsidio()
    {
        return $this->importeReintegroSubsidio;
    }

    /**
     * Set importeReintegroVacaciones
     *
     * @param integer $importeReintegroVacaciones
     * @return RhTmpContabilizacionNominillasReintegros
     */
    public function setImporteReintegroVacaciones($importeReintegroVacaciones)
    {
        $this->importeReintegroVacaciones = $importeReintegroVacaciones;

        return $this;
    }

    /**
     * Get importeReintegroVacaciones
     *
     * @return integer 
     */
    public function getImporteReintegroVacaciones()
    {
        return $this->importeReintegroVacaciones;
    }

    /**
     * Set importeReintegroDivisa
     *
     * @param integer $importeReintegroDivisa
     * @return RhTmpContabilizacionNominillasReintegros
     */
    public function setImporteReintegroDivisa($importeReintegroDivisa)
    {
        $this->importeReintegroDivisa = $importeReintegroDivisa;

        return $this;
    }

    /**
     * Get importeReintegroDivisa
     *
     * @return integer 
     */
    public function getImporteReintegroDivisa()
    {
        return $this->importeReintegroDivisa;
    }

    /**
     * Set acobrar
     *
     * @param integer $acobrar
     * @return RhTmpContabilizacionNominillasReintegros
     */
    public function setAcobrar($acobrar)
    {
        $this->acobrar = $acobrar;

        return $this;
    }

    /**
     * Get acobrar
     *
     * @return integer 
     */
    public function getAcobrar()
    {
        return $this->acobrar;
    }

    /**
     * Set ajustecentavos
     *
     * @param string $ajustecentavos
     * @return RhTmpContabilizacionNominillasReintegros
     */
    public function setAjustecentavos($ajustecentavos)
    {
        $this->ajustecentavos = $ajustecentavos;

        return $this;
    }

    /**
     * Get ajustecentavos
     *
     * @return string 
     */
    public function getAjustecentavos()
    {
        return $this->ajustecentavos;
    }
}
