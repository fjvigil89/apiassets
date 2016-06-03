<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDetallesReporteTarifaHoraria
 *
 * @ORM\Table(name="RH_Detalles_Reporte_Tarifa_Horaria", indexes={@ORM\Index(name="IX_RH_Detalles_Reporte_Tarifa_Horaria", columns={"Contador"})})
 * @ORM\Entity
 */
class RhDetallesReporteTarifaHoraria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Item", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $item;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="smallint", nullable=false)
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Pago", type="smallint", nullable=false)
     */
    private $tipoPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     */
    private $idExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=152, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Horas", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $horas;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa", type="integer", nullable=false)
     */
    private $tarifa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Tarifa", type="integer", nullable=false)
     */
    private $importeTarifa;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento_Sobrecumplimiento", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoSobrecumplimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="Otros_Pagos", type="integer", nullable=false)
     */
    private $otrosPagos;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Sobrecumplimiento", type="integer", nullable=false)
     */
    private $importeSobrecumplimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Total", type="integer", nullable=false)
     */
    private $importeTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ccosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Obra", type="string", length=10, nullable=false)
     */
    private $idObra;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Actividad", type="string", length=3, nullable=false)
     */
    private $idActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="Horas_Otra_Tarifa", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $horasOtraTarifa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Otra_Tarifa", type="integer", nullable=false)
     */
    private $otraTarifa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Otra_Tarifa", type="integer", nullable=false)
     */
    private $importeOtraTarifa;



    /**
     * Get item
     *
     * @return integer 
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set contador
     *
     * @param integer $contador
     * @return RhDetallesReporteTarifaHoraria
     */
    public function setContador($contador)
    {
        $this->contador = $contador;

        return $this;
    }

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
     * Set ano
     *
     * @param integer $ano
     * @return RhDetallesReporteTarifaHoraria
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return integer 
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return RhDetallesReporteTarifaHoraria
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return integer 
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set tipoPago
     *
     * @param integer $tipoPago
     * @return RhDetallesReporteTarifaHoraria
     */
    public function setTipoPago($tipoPago)
    {
        $this->tipoPago = $tipoPago;

        return $this;
    }

    /**
     * Get tipoPago
     *
     * @return integer 
     */
    public function getTipoPago()
    {
        return $this->tipoPago;
    }

    /**
     * Set idExpediente
     *
     * @param string $idExpediente
     * @return RhDetallesReporteTarifaHoraria
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
     * Set nombre
     *
     * @param string $nombre
     * @return RhDetallesReporteTarifaHoraria
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set horas
     *
     * @param string $horas
     * @return RhDetallesReporteTarifaHoraria
     */
    public function setHoras($horas)
    {
        $this->horas = $horas;

        return $this;
    }

    /**
     * Get horas
     *
     * @return string 
     */
    public function getHoras()
    {
        return $this->horas;
    }

    /**
     * Set tarifa
     *
     * @param integer $tarifa
     * @return RhDetallesReporteTarifaHoraria
     */
    public function setTarifa($tarifa)
    {
        $this->tarifa = $tarifa;

        return $this;
    }

    /**
     * Get tarifa
     *
     * @return integer 
     */
    public function getTarifa()
    {
        return $this->tarifa;
    }

    /**
     * Set importeTarifa
     *
     * @param integer $importeTarifa
     * @return RhDetallesReporteTarifaHoraria
     */
    public function setImporteTarifa($importeTarifa)
    {
        $this->importeTarifa = $importeTarifa;

        return $this;
    }

    /**
     * Get importeTarifa
     *
     * @return integer 
     */
    public function getImporteTarifa()
    {
        return $this->importeTarifa;
    }

    /**
     * Set porcientoSobrecumplimiento
     *
     * @param string $porcientoSobrecumplimiento
     * @return RhDetallesReporteTarifaHoraria
     */
    public function setPorcientoSobrecumplimiento($porcientoSobrecumplimiento)
    {
        $this->porcientoSobrecumplimiento = $porcientoSobrecumplimiento;

        return $this;
    }

    /**
     * Get porcientoSobrecumplimiento
     *
     * @return string 
     */
    public function getPorcientoSobrecumplimiento()
    {
        return $this->porcientoSobrecumplimiento;
    }

    /**
     * Set otrosPagos
     *
     * @param integer $otrosPagos
     * @return RhDetallesReporteTarifaHoraria
     */
    public function setOtrosPagos($otrosPagos)
    {
        $this->otrosPagos = $otrosPagos;

        return $this;
    }

    /**
     * Get otrosPagos
     *
     * @return integer 
     */
    public function getOtrosPagos()
    {
        return $this->otrosPagos;
    }

    /**
     * Set importeSobrecumplimiento
     *
     * @param integer $importeSobrecumplimiento
     * @return RhDetallesReporteTarifaHoraria
     */
    public function setImporteSobrecumplimiento($importeSobrecumplimiento)
    {
        $this->importeSobrecumplimiento = $importeSobrecumplimiento;

        return $this;
    }

    /**
     * Get importeSobrecumplimiento
     *
     * @return integer 
     */
    public function getImporteSobrecumplimiento()
    {
        return $this->importeSobrecumplimiento;
    }

    /**
     * Set importeTotal
     *
     * @param integer $importeTotal
     * @return RhDetallesReporteTarifaHoraria
     */
    public function setImporteTotal($importeTotal)
    {
        $this->importeTotal = $importeTotal;

        return $this;
    }

    /**
     * Get importeTotal
     *
     * @return integer 
     */
    public function getImporteTotal()
    {
        return $this->importeTotal;
    }

    /**
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return RhDetallesReporteTarifaHoraria
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return RhDetallesReporteTarifaHoraria
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set idObra
     *
     * @param string $idObra
     * @return RhDetallesReporteTarifaHoraria
     */
    public function setIdObra($idObra)
    {
        $this->idObra = $idObra;

        return $this;
    }

    /**
     * Get idObra
     *
     * @return string 
     */
    public function getIdObra()
    {
        return $this->idObra;
    }

    /**
     * Set idActividad
     *
     * @param string $idActividad
     * @return RhDetallesReporteTarifaHoraria
     */
    public function setIdActividad($idActividad)
    {
        $this->idActividad = $idActividad;

        return $this;
    }

    /**
     * Get idActividad
     *
     * @return string 
     */
    public function getIdActividad()
    {
        return $this->idActividad;
    }

    /**
     * Set horasOtraTarifa
     *
     * @param string $horasOtraTarifa
     * @return RhDetallesReporteTarifaHoraria
     */
    public function setHorasOtraTarifa($horasOtraTarifa)
    {
        $this->horasOtraTarifa = $horasOtraTarifa;

        return $this;
    }

    /**
     * Get horasOtraTarifa
     *
     * @return string 
     */
    public function getHorasOtraTarifa()
    {
        return $this->horasOtraTarifa;
    }

    /**
     * Set otraTarifa
     *
     * @param integer $otraTarifa
     * @return RhDetallesReporteTarifaHoraria
     */
    public function setOtraTarifa($otraTarifa)
    {
        $this->otraTarifa = $otraTarifa;

        return $this;
    }

    /**
     * Get otraTarifa
     *
     * @return integer 
     */
    public function getOtraTarifa()
    {
        return $this->otraTarifa;
    }

    /**
     * Set importeOtraTarifa
     *
     * @param integer $importeOtraTarifa
     * @return RhDetallesReporteTarifaHoraria
     */
    public function setImporteOtraTarifa($importeOtraTarifa)
    {
        $this->importeOtraTarifa = $importeOtraTarifa;

        return $this;
    }

    /**
     * Get importeOtraTarifa
     *
     * @return integer 
     */
    public function getImporteOtraTarifa()
    {
        return $this->importeOtraTarifa;
    }
}
