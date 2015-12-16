<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhTmpContabilizacionNominillasVacation
 *
 * @ORM\Table(name="RH_Tmp_Contabilizacion_Nominillas_Vacation")
 * @ORM\Entity
 */
class RhTmpContabilizacionNominillasVacation
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
     * @ORM\Column(name="Importe_Pago_Vacaciones", type="integer", nullable=false)
     */
    private $importePagoVacaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_Divisa", type="integer", nullable=false)
     */
    private $devengadoDivisa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Perfeccionamiento", type="integer", nullable=false)
     */
    private $perfeccionamiento;

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
     * @return RhTmpContabilizacionNominillasVacation
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
     * @return RhTmpContabilizacionNominillasVacation
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
     * Set importePagoVacaciones
     *
     * @param integer $importePagoVacaciones
     * @return RhTmpContabilizacionNominillasVacation
     */
    public function setImportePagoVacaciones($importePagoVacaciones)
    {
        $this->importePagoVacaciones = $importePagoVacaciones;

        return $this;
    }

    /**
     * Get importePagoVacaciones
     *
     * @return integer 
     */
    public function getImportePagoVacaciones()
    {
        return $this->importePagoVacaciones;
    }

    /**
     * Set devengadoDivisa
     *
     * @param integer $devengadoDivisa
     * @return RhTmpContabilizacionNominillasVacation
     */
    public function setDevengadoDivisa($devengadoDivisa)
    {
        $this->devengadoDivisa = $devengadoDivisa;

        return $this;
    }

    /**
     * Get devengadoDivisa
     *
     * @return integer 
     */
    public function getDevengadoDivisa()
    {
        return $this->devengadoDivisa;
    }

    /**
     * Set perfeccionamiento
     *
     * @param integer $perfeccionamiento
     * @return RhTmpContabilizacionNominillasVacation
     */
    public function setPerfeccionamiento($perfeccionamiento)
    {
        $this->perfeccionamiento = $perfeccionamiento;

        return $this;
    }

    /**
     * Get perfeccionamiento
     *
     * @return integer 
     */
    public function getPerfeccionamiento()
    {
        return $this->perfeccionamiento;
    }

    /**
     * Set acobrar
     *
     * @param integer $acobrar
     * @return RhTmpContabilizacionNominillasVacation
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
     * @return RhTmpContabilizacionNominillasVacation
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
