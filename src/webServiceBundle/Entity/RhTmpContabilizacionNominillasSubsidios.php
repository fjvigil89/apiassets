<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhTmpContabilizacionNominillasSubsidios
 *
 * @ORM\Table(name="RH_Tmp_Contabilizacion_Nominillas_Subsidios")
 * @ORM\Entity
 */
class RhTmpContabilizacionNominillasSubsidios
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
     * @ORM\Column(name="Importe_Pago_Subsidio_EnfermAccid", type="integer", nullable=false)
     */
    private $importePagoSubsidioEnfermaccid;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Pago_Subsidio_Maternidad", type="integer", nullable=false)
     */
    private $importePagoSubsidioMaternidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Pago_Subsidio_PrestacSocial", type="integer", nullable=false)
     */
    private $importePagoSubsidioPrestacsocial;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Acumulado_Pago", type="integer", nullable=false)
     */
    private $salarioAcumuladoPago;

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
     * @var integer
     *
     * @ORM\Column(name="Importe_Pago_Subsidio_Invalidez_Parcial", type="integer", nullable=false)
     */
    private $importePagoSubsidioInvalidezParcial;



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
     * @return RhTmpContabilizacionNominillasSubsidios
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
     * @return RhTmpContabilizacionNominillasSubsidios
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
     * Set importePagoSubsidioEnfermaccid
     *
     * @param integer $importePagoSubsidioEnfermaccid
     * @return RhTmpContabilizacionNominillasSubsidios
     */
    public function setImportePagoSubsidioEnfermaccid($importePagoSubsidioEnfermaccid)
    {
        $this->importePagoSubsidioEnfermaccid = $importePagoSubsidioEnfermaccid;

        return $this;
    }

    /**
     * Get importePagoSubsidioEnfermaccid
     *
     * @return integer 
     */
    public function getImportePagoSubsidioEnfermaccid()
    {
        return $this->importePagoSubsidioEnfermaccid;
    }

    /**
     * Set importePagoSubsidioMaternidad
     *
     * @param integer $importePagoSubsidioMaternidad
     * @return RhTmpContabilizacionNominillasSubsidios
     */
    public function setImportePagoSubsidioMaternidad($importePagoSubsidioMaternidad)
    {
        $this->importePagoSubsidioMaternidad = $importePagoSubsidioMaternidad;

        return $this;
    }

    /**
     * Get importePagoSubsidioMaternidad
     *
     * @return integer 
     */
    public function getImportePagoSubsidioMaternidad()
    {
        return $this->importePagoSubsidioMaternidad;
    }

    /**
     * Set importePagoSubsidioPrestacsocial
     *
     * @param integer $importePagoSubsidioPrestacsocial
     * @return RhTmpContabilizacionNominillasSubsidios
     */
    public function setImportePagoSubsidioPrestacsocial($importePagoSubsidioPrestacsocial)
    {
        $this->importePagoSubsidioPrestacsocial = $importePagoSubsidioPrestacsocial;

        return $this;
    }

    /**
     * Get importePagoSubsidioPrestacsocial
     *
     * @return integer 
     */
    public function getImportePagoSubsidioPrestacsocial()
    {
        return $this->importePagoSubsidioPrestacsocial;
    }

    /**
     * Set salarioAcumuladoPago
     *
     * @param integer $salarioAcumuladoPago
     * @return RhTmpContabilizacionNominillasSubsidios
     */
    public function setSalarioAcumuladoPago($salarioAcumuladoPago)
    {
        $this->salarioAcumuladoPago = $salarioAcumuladoPago;

        return $this;
    }

    /**
     * Get salarioAcumuladoPago
     *
     * @return integer 
     */
    public function getSalarioAcumuladoPago()
    {
        return $this->salarioAcumuladoPago;
    }

    /**
     * Set perfeccionamiento
     *
     * @param integer $perfeccionamiento
     * @return RhTmpContabilizacionNominillasSubsidios
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
     * @return RhTmpContabilizacionNominillasSubsidios
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
     * @return RhTmpContabilizacionNominillasSubsidios
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

    /**
     * Set importePagoSubsidioInvalidezParcial
     *
     * @param integer $importePagoSubsidioInvalidezParcial
     * @return RhTmpContabilizacionNominillasSubsidios
     */
    public function setImportePagoSubsidioInvalidezParcial($importePagoSubsidioInvalidezParcial)
    {
        $this->importePagoSubsidioInvalidezParcial = $importePagoSubsidioInvalidezParcial;

        return $this;
    }

    /**
     * Get importePagoSubsidioInvalidezParcial
     *
     * @return integer 
     */
    public function getImportePagoSubsidioInvalidezParcial()
    {
        return $this->importePagoSubsidioInvalidezParcial;
    }
}
