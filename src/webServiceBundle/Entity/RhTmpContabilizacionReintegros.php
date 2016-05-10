<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhTmpContabilizacionReintegros
 *
 * @ORM\Table(name="RH_Tmp_Contabilizacion_Reintegros")
 * @ORM\Entity
 */
class RhTmpContabilizacionReintegros
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
     * @ORM\Column(name="Importe_Indebido_Salario", type="integer", nullable=false)
     */
    private $importeIndebidoSalario;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Indebido_Salario_909", type="integer", nullable=false)
     */
    private $importeIndebidoSalario909;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_909", type="integer", nullable=false)
     */
    private $importe909;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Reintegro_Subsidio", type="integer", nullable=false)
     */
    private $importeReintegroSubsidio;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Indebido_Subsidio", type="integer", nullable=false)
     */
    private $importeIndebidoSubsidio;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Reintegro_Vacaciones", type="integer", nullable=false)
     */
    private $importeReintegroVacaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Indebido_Vacaciones", type="integer", nullable=false)
     */
    private $importeIndebidoVacaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Reintegro_Divisa", type="integer", nullable=false)
     */
    private $importeReintegroDivisa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Indebido_Divisa", type="integer", nullable=false)
     */
    private $importeIndebidoDivisa;



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
     * @return RhTmpContabilizacionReintegros
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
     * @return RhTmpContabilizacionReintegros
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
     * @return RhTmpContabilizacionReintegros
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
     * Set importeIndebidoSalario
     *
     * @param integer $importeIndebidoSalario
     * @return RhTmpContabilizacionReintegros
     */
    public function setImporteIndebidoSalario($importeIndebidoSalario)
    {
        $this->importeIndebidoSalario = $importeIndebidoSalario;

        return $this;
    }

    /**
     * Get importeIndebidoSalario
     *
     * @return integer 
     */
    public function getImporteIndebidoSalario()
    {
        return $this->importeIndebidoSalario;
    }

    /**
     * Set importeIndebidoSalario909
     *
     * @param integer $importeIndebidoSalario909
     * @return RhTmpContabilizacionReintegros
     */
    public function setImporteIndebidoSalario909($importeIndebidoSalario909)
    {
        $this->importeIndebidoSalario909 = $importeIndebidoSalario909;

        return $this;
    }

    /**
     * Get importeIndebidoSalario909
     *
     * @return integer 
     */
    public function getImporteIndebidoSalario909()
    {
        return $this->importeIndebidoSalario909;
    }

    /**
     * Set importe909
     *
     * @param integer $importe909
     * @return RhTmpContabilizacionReintegros
     */
    public function setImporte909($importe909)
    {
        $this->importe909 = $importe909;

        return $this;
    }

    /**
     * Get importe909
     *
     * @return integer 
     */
    public function getImporte909()
    {
        return $this->importe909;
    }

    /**
     * Set importeReintegroSubsidio
     *
     * @param integer $importeReintegroSubsidio
     * @return RhTmpContabilizacionReintegros
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
     * Set importeIndebidoSubsidio
     *
     * @param integer $importeIndebidoSubsidio
     * @return RhTmpContabilizacionReintegros
     */
    public function setImporteIndebidoSubsidio($importeIndebidoSubsidio)
    {
        $this->importeIndebidoSubsidio = $importeIndebidoSubsidio;

        return $this;
    }

    /**
     * Get importeIndebidoSubsidio
     *
     * @return integer 
     */
    public function getImporteIndebidoSubsidio()
    {
        return $this->importeIndebidoSubsidio;
    }

    /**
     * Set importeReintegroVacaciones
     *
     * @param integer $importeReintegroVacaciones
     * @return RhTmpContabilizacionReintegros
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
     * Set importeIndebidoVacaciones
     *
     * @param integer $importeIndebidoVacaciones
     * @return RhTmpContabilizacionReintegros
     */
    public function setImporteIndebidoVacaciones($importeIndebidoVacaciones)
    {
        $this->importeIndebidoVacaciones = $importeIndebidoVacaciones;

        return $this;
    }

    /**
     * Get importeIndebidoVacaciones
     *
     * @return integer 
     */
    public function getImporteIndebidoVacaciones()
    {
        return $this->importeIndebidoVacaciones;
    }

    /**
     * Set importeReintegroDivisa
     *
     * @param integer $importeReintegroDivisa
     * @return RhTmpContabilizacionReintegros
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
     * Set importeIndebidoDivisa
     *
     * @param integer $importeIndebidoDivisa
     * @return RhTmpContabilizacionReintegros
     */
    public function setImporteIndebidoDivisa($importeIndebidoDivisa)
    {
        $this->importeIndebidoDivisa = $importeIndebidoDivisa;

        return $this;
    }

    /**
     * Get importeIndebidoDivisa
     *
     * @return integer 
     */
    public function getImporteIndebidoDivisa()
    {
        return $this->importeIndebidoDivisa;
    }
}
