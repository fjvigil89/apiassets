<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDetallesReporteHorasExtra
 *
 * @ORM\Table(name="RH_Detalles_Reporte_Horas_Extra", indexes={@ORM\Index(name="IX_RH_Detalles_Reporte_Horas_Extra", columns={"Contador"})})
 * @ORM\Entity
 */
class RhDetallesReporteHorasExtra
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
     * @ORM\Column(name="Importe", type="integer", nullable=false)
     */
    private $importe;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ccosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Obra", type="string", length=10, nullable=false)
     */
    private $idObra;

    /**
     * @var integer
     *
     * @ORM\Column(name="Clasificacion_Categ_Ocupac", type="smallint", nullable=false)
     */
    private $clasificacionCategOcupac;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_Divisa", type="integer", nullable=false)
     */
    private $tarifaDivisa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Divisa", type="integer", nullable=false)
     */
    private $importeDivisa;



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
     * @return RhDetallesReporteHorasExtra
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
     * @return RhDetallesReporteHorasExtra
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
     * @return RhDetallesReporteHorasExtra
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
     * @return RhDetallesReporteHorasExtra
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
     * @return RhDetallesReporteHorasExtra
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
     * @return RhDetallesReporteHorasExtra
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
     * @return RhDetallesReporteHorasExtra
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
     * @return RhDetallesReporteHorasExtra
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
     * Set importe
     *
     * @param integer $importe
     * @return RhDetallesReporteHorasExtra
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return integer 
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return RhDetallesReporteHorasExtra
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
     * Set idObra
     *
     * @param string $idObra
     * @return RhDetallesReporteHorasExtra
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
     * Set clasificacionCategOcupac
     *
     * @param integer $clasificacionCategOcupac
     * @return RhDetallesReporteHorasExtra
     */
    public function setClasificacionCategOcupac($clasificacionCategOcupac)
    {
        $this->clasificacionCategOcupac = $clasificacionCategOcupac;

        return $this;
    }

    /**
     * Get clasificacionCategOcupac
     *
     * @return integer 
     */
    public function getClasificacionCategOcupac()
    {
        return $this->clasificacionCategOcupac;
    }

    /**
     * Set tarifaDivisa
     *
     * @param integer $tarifaDivisa
     * @return RhDetallesReporteHorasExtra
     */
    public function setTarifaDivisa($tarifaDivisa)
    {
        $this->tarifaDivisa = $tarifaDivisa;

        return $this;
    }

    /**
     * Get tarifaDivisa
     *
     * @return integer 
     */
    public function getTarifaDivisa()
    {
        return $this->tarifaDivisa;
    }

    /**
     * Set importeDivisa
     *
     * @param integer $importeDivisa
     * @return RhDetallesReporteHorasExtra
     */
    public function setImporteDivisa($importeDivisa)
    {
        $this->importeDivisa = $importeDivisa;

        return $this;
    }

    /**
     * Get importeDivisa
     *
     * @return integer 
     */
    public function getImporteDivisa()
    {
        return $this->importeDivisa;
    }
}
