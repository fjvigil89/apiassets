<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDetallesReporteNominillasRpt
 *
 * @ORM\Table(name="RH_Detalles_Reporte_Nominillas_Rpt", indexes={@ORM\Index(name="IX_RH_Detalles_Reporte_Nominillas_Rpt", columns={"Contador"})})
 * @ORM\Entity
 */
class RhDetallesReporteNominillasRpt
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
     * @var integer
     *
     * @ORM\Column(name="Clasificacion", type="smallint", nullable=false)
     */
    private $clasificacion;

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
     * @ORM\Column(name="Regimen_Salarial", type="smallint", nullable=false)
     */
    private $regimenSalarial;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_Horaria", type="integer", nullable=false)
     */
    private $tarifaHoraria;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_a_Pagar", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasAPagar;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe", type="integer", nullable=false)
     */
    private $importe;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Pago_Divisa", type="boolean", nullable=false)
     */
    private $pagoDivisa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Tarjeta", type="smallint", nullable=false)
     */
    private $anoTarjeta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes_Tarjeta", type="smallint", nullable=false)
     */
    private $mesTarjeta;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Acumulado", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasAcumulado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Acumulado", type="integer", nullable=false)
     */
    private $salarioAcumulado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Impresa", type="boolean", nullable=false)
     */
    private $impresa;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Procesada", type="boolean", nullable=false)
     */
    private $procesada;

    /**
     * @var integer
     *
     * @ORM\Column(name="ItemLink", type="bigint", nullable=false)
     */
    private $itemlink;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_Divisa", type="integer", nullable=false)
     */
    private $tarifaDivisa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Divisa_Factura", type="integer", nullable=false)
     */
    private $divisaFactura;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Factura_Confirmada", type="boolean", nullable=false)
     */
    private $facturaConfirmada;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Facturar", type="boolean", nullable=false)
     */
    private $facturar;

    /**
     * @var integer
     *
     * @ORM\Column(name="Impresa_Grupo", type="smallint", nullable=false)
     */
    private $impresaGrupo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PreAssets", type="boolean", nullable=false)
     */
    private $preassets;



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
     * @return RhDetallesReporteNominillasRpt
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
     * @return RhDetallesReporteNominillasRpt
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
     * @return RhDetallesReporteNominillasRpt
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
     * @return RhDetallesReporteNominillasRpt
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
     * @return RhDetallesReporteNominillasRpt
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
     * @return RhDetallesReporteNominillasRpt
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
     * Set clasificacion
     *
     * @param integer $clasificacion
     * @return RhDetallesReporteNominillasRpt
     */
    public function setClasificacion($clasificacion)
    {
        $this->clasificacion = $clasificacion;

        return $this;
    }

    /**
     * Get clasificacion
     *
     * @return integer 
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    /**
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return RhDetallesReporteNominillasRpt
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
     * @return RhDetallesReporteNominillasRpt
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
     * Set regimenSalarial
     *
     * @param integer $regimenSalarial
     * @return RhDetallesReporteNominillasRpt
     */
    public function setRegimenSalarial($regimenSalarial)
    {
        $this->regimenSalarial = $regimenSalarial;

        return $this;
    }

    /**
     * Get regimenSalarial
     *
     * @return integer 
     */
    public function getRegimenSalarial()
    {
        return $this->regimenSalarial;
    }

    /**
     * Set tarifaHoraria
     *
     * @param integer $tarifaHoraria
     * @return RhDetallesReporteNominillasRpt
     */
    public function setTarifaHoraria($tarifaHoraria)
    {
        $this->tarifaHoraria = $tarifaHoraria;

        return $this;
    }

    /**
     * Get tarifaHoraria
     *
     * @return integer 
     */
    public function getTarifaHoraria()
    {
        return $this->tarifaHoraria;
    }

    /**
     * Set diasAPagar
     *
     * @param string $diasAPagar
     * @return RhDetallesReporteNominillasRpt
     */
    public function setDiasAPagar($diasAPagar)
    {
        $this->diasAPagar = $diasAPagar;

        return $this;
    }

    /**
     * Get diasAPagar
     *
     * @return string 
     */
    public function getDiasAPagar()
    {
        return $this->diasAPagar;
    }

    /**
     * Set importe
     *
     * @param integer $importe
     * @return RhDetallesReporteNominillasRpt
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
     * Set pagoDivisa
     *
     * @param boolean $pagoDivisa
     * @return RhDetallesReporteNominillasRpt
     */
    public function setPagoDivisa($pagoDivisa)
    {
        $this->pagoDivisa = $pagoDivisa;

        return $this;
    }

    /**
     * Get pagoDivisa
     *
     * @return boolean 
     */
    public function getPagoDivisa()
    {
        return $this->pagoDivisa;
    }

    /**
     * Set anoTarjeta
     *
     * @param integer $anoTarjeta
     * @return RhDetallesReporteNominillasRpt
     */
    public function setAnoTarjeta($anoTarjeta)
    {
        $this->anoTarjeta = $anoTarjeta;

        return $this;
    }

    /**
     * Get anoTarjeta
     *
     * @return integer 
     */
    public function getAnoTarjeta()
    {
        return $this->anoTarjeta;
    }

    /**
     * Set mesTarjeta
     *
     * @param integer $mesTarjeta
     * @return RhDetallesReporteNominillasRpt
     */
    public function setMesTarjeta($mesTarjeta)
    {
        $this->mesTarjeta = $mesTarjeta;

        return $this;
    }

    /**
     * Get mesTarjeta
     *
     * @return integer 
     */
    public function getMesTarjeta()
    {
        return $this->mesTarjeta;
    }

    /**
     * Set diasAcumulado
     *
     * @param string $diasAcumulado
     * @return RhDetallesReporteNominillasRpt
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
     * Set salarioAcumulado
     *
     * @param integer $salarioAcumulado
     * @return RhDetallesReporteNominillasRpt
     */
    public function setSalarioAcumulado($salarioAcumulado)
    {
        $this->salarioAcumulado = $salarioAcumulado;

        return $this;
    }

    /**
     * Get salarioAcumulado
     *
     * @return integer 
     */
    public function getSalarioAcumulado()
    {
        return $this->salarioAcumulado;
    }

    /**
     * Set impresa
     *
     * @param boolean $impresa
     * @return RhDetallesReporteNominillasRpt
     */
    public function setImpresa($impresa)
    {
        $this->impresa = $impresa;

        return $this;
    }

    /**
     * Get impresa
     *
     * @return boolean 
     */
    public function getImpresa()
    {
        return $this->impresa;
    }

    /**
     * Set procesada
     *
     * @param boolean $procesada
     * @return RhDetallesReporteNominillasRpt
     */
    public function setProcesada($procesada)
    {
        $this->procesada = $procesada;

        return $this;
    }

    /**
     * Get procesada
     *
     * @return boolean 
     */
    public function getProcesada()
    {
        return $this->procesada;
    }

    /**
     * Set itemlink
     *
     * @param integer $itemlink
     * @return RhDetallesReporteNominillasRpt
     */
    public function setItemlink($itemlink)
    {
        $this->itemlink = $itemlink;

        return $this;
    }

    /**
     * Get itemlink
     *
     * @return integer 
     */
    public function getItemlink()
    {
        return $this->itemlink;
    }

    /**
     * Set tarifaDivisa
     *
     * @param integer $tarifaDivisa
     * @return RhDetallesReporteNominillasRpt
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
     * Set divisaFactura
     *
     * @param integer $divisaFactura
     * @return RhDetallesReporteNominillasRpt
     */
    public function setDivisaFactura($divisaFactura)
    {
        $this->divisaFactura = $divisaFactura;

        return $this;
    }

    /**
     * Get divisaFactura
     *
     * @return integer 
     */
    public function getDivisaFactura()
    {
        return $this->divisaFactura;
    }

    /**
     * Set facturaConfirmada
     *
     * @param boolean $facturaConfirmada
     * @return RhDetallesReporteNominillasRpt
     */
    public function setFacturaConfirmada($facturaConfirmada)
    {
        $this->facturaConfirmada = $facturaConfirmada;

        return $this;
    }

    /**
     * Get facturaConfirmada
     *
     * @return boolean 
     */
    public function getFacturaConfirmada()
    {
        return $this->facturaConfirmada;
    }

    /**
     * Set facturar
     *
     * @param boolean $facturar
     * @return RhDetallesReporteNominillasRpt
     */
    public function setFacturar($facturar)
    {
        $this->facturar = $facturar;

        return $this;
    }

    /**
     * Get facturar
     *
     * @return boolean 
     */
    public function getFacturar()
    {
        return $this->facturar;
    }

    /**
     * Set impresaGrupo
     *
     * @param integer $impresaGrupo
     * @return RhDetallesReporteNominillasRpt
     */
    public function setImpresaGrupo($impresaGrupo)
    {
        $this->impresaGrupo = $impresaGrupo;

        return $this;
    }

    /**
     * Get impresaGrupo
     *
     * @return integer 
     */
    public function getImpresaGrupo()
    {
        return $this->impresaGrupo;
    }

    /**
     * Set preassets
     *
     * @param boolean $preassets
     * @return RhDetallesReporteNominillasRpt
     */
    public function setPreassets($preassets)
    {
        $this->preassets = $preassets;

        return $this;
    }

    /**
     * Get preassets
     *
     * @return boolean 
     */
    public function getPreassets()
    {
        return $this->preassets;
    }
}
