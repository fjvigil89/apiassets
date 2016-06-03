<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhTemporalNominilla
 *
 * @ORM\Table(name="RH_Temporal_Nominilla")
 * @ORM\Entity
 */
class RhTemporalNominilla
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
     * @var integer
     *
     * @ORM\Column(name="Clasificacion", type="smallint", nullable=false)
     */
    private $clasificacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Basico", type="integer", nullable=false)
     */
    private $salarioBasico;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plus", type="integer", nullable=false)
     */
    private $plus;

    /**
     * @var integer
     *
     * @ORM\Column(name="Antiguedad", type="integer", nullable=false)
     */
    private $antiguedad;

    /**
     * @var integer
     *
     * @ORM\Column(name="Otros", type="integer", nullable=false)
     */
    private $otros;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_a_Pagar", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasAPagar;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado", type="integer", nullable=false)
     */
    private $devengado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Acobrar", type="integer", nullable=false)
     */
    private $acobrar;

    /**
     * @var integer
     *
     * @ORM\Column(name="Deducciones", type="integer", nullable=false)
     */
    private $deducciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_Divisa", type="integer", nullable=false)
     */
    private $devengadoDivisa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Devengado_Tarjeta", type="integer", nullable=false)
     */
    private $devengadoTarjeta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Perfeccionamiento", type="integer", nullable=false)
     */
    private $perfeccionamiento;

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
     * @var boolean
     *
     * @ORM\Column(name="Pago_Divisa", type="boolean", nullable=false)
     */
    private $pagoDivisa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_BasicoMS", type="integer", nullable=false)
     */
    private $salarioBasicoms;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Nominilla_Mov", type="boolean", nullable=false)
     */
    private $nominillaMov;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Impresa", type="boolean", nullable=false)
     */
    private $impresa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Item", type="bigint", nullable=false)
     */
    private $item;

    /**
     * @var string
     *
     * @ORM\Column(name="AjusteCentavos", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $ajustecentavos;

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
     * @var string
     *
     * @ORM\Column(name="Dias_Tarjeta", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasTarjeta;



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
     * @return RhTemporalNominilla
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
     * @return RhTemporalNominilla
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
     * @return RhTemporalNominilla
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
     * @return RhTemporalNominilla
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
     * Set clasificacion
     *
     * @param integer $clasificacion
     * @return RhTemporalNominilla
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
     * Set salarioBasico
     *
     * @param integer $salarioBasico
     * @return RhTemporalNominilla
     */
    public function setSalarioBasico($salarioBasico)
    {
        $this->salarioBasico = $salarioBasico;

        return $this;
    }

    /**
     * Get salarioBasico
     *
     * @return integer 
     */
    public function getSalarioBasico()
    {
        return $this->salarioBasico;
    }

    /**
     * Set plus
     *
     * @param integer $plus
     * @return RhTemporalNominilla
     */
    public function setPlus($plus)
    {
        $this->plus = $plus;

        return $this;
    }

    /**
     * Get plus
     *
     * @return integer 
     */
    public function getPlus()
    {
        return $this->plus;
    }

    /**
     * Set antiguedad
     *
     * @param integer $antiguedad
     * @return RhTemporalNominilla
     */
    public function setAntiguedad($antiguedad)
    {
        $this->antiguedad = $antiguedad;

        return $this;
    }

    /**
     * Get antiguedad
     *
     * @return integer 
     */
    public function getAntiguedad()
    {
        return $this->antiguedad;
    }

    /**
     * Set otros
     *
     * @param integer $otros
     * @return RhTemporalNominilla
     */
    public function setOtros($otros)
    {
        $this->otros = $otros;

        return $this;
    }

    /**
     * Get otros
     *
     * @return integer 
     */
    public function getOtros()
    {
        return $this->otros;
    }

    /**
     * Set diasAPagar
     *
     * @param string $diasAPagar
     * @return RhTemporalNominilla
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
     * Set devengado
     *
     * @param integer $devengado
     * @return RhTemporalNominilla
     */
    public function setDevengado($devengado)
    {
        $this->devengado = $devengado;

        return $this;
    }

    /**
     * Get devengado
     *
     * @return integer 
     */
    public function getDevengado()
    {
        return $this->devengado;
    }

    /**
     * Set acobrar
     *
     * @param integer $acobrar
     * @return RhTemporalNominilla
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
     * Set deducciones
     *
     * @param integer $deducciones
     * @return RhTemporalNominilla
     */
    public function setDeducciones($deducciones)
    {
        $this->deducciones = $deducciones;

        return $this;
    }

    /**
     * Get deducciones
     *
     * @return integer 
     */
    public function getDeducciones()
    {
        return $this->deducciones;
    }

    /**
     * Set devengadoDivisa
     *
     * @param integer $devengadoDivisa
     * @return RhTemporalNominilla
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
     * Set devengadoTarjeta
     *
     * @param integer $devengadoTarjeta
     * @return RhTemporalNominilla
     */
    public function setDevengadoTarjeta($devengadoTarjeta)
    {
        $this->devengadoTarjeta = $devengadoTarjeta;

        return $this;
    }

    /**
     * Get devengadoTarjeta
     *
     * @return integer 
     */
    public function getDevengadoTarjeta()
    {
        return $this->devengadoTarjeta;
    }

    /**
     * Set perfeccionamiento
     *
     * @param integer $perfeccionamiento
     * @return RhTemporalNominilla
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
     * Set diasAcumulado
     *
     * @param string $diasAcumulado
     * @return RhTemporalNominilla
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
     * @return RhTemporalNominilla
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
     * Set anoTarjeta
     *
     * @param integer $anoTarjeta
     * @return RhTemporalNominilla
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
     * @return RhTemporalNominilla
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
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return RhTemporalNominilla
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
     * @return RhTemporalNominilla
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
     * Set pagoDivisa
     *
     * @param boolean $pagoDivisa
     * @return RhTemporalNominilla
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
     * Set salarioBasicoms
     *
     * @param integer $salarioBasicoms
     * @return RhTemporalNominilla
     */
    public function setSalarioBasicoms($salarioBasicoms)
    {
        $this->salarioBasicoms = $salarioBasicoms;

        return $this;
    }

    /**
     * Get salarioBasicoms
     *
     * @return integer 
     */
    public function getSalarioBasicoms()
    {
        return $this->salarioBasicoms;
    }

    /**
     * Set nominillaMov
     *
     * @param boolean $nominillaMov
     * @return RhTemporalNominilla
     */
    public function setNominillaMov($nominillaMov)
    {
        $this->nominillaMov = $nominillaMov;

        return $this;
    }

    /**
     * Get nominillaMov
     *
     * @return boolean 
     */
    public function getNominillaMov()
    {
        return $this->nominillaMov;
    }

    /**
     * Set impresa
     *
     * @param boolean $impresa
     * @return RhTemporalNominilla
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
     * Set item
     *
     * @param integer $item
     * @return RhTemporalNominilla
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

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
     * Set ajustecentavos
     *
     * @param string $ajustecentavos
     * @return RhTemporalNominilla
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
     * Set tarifaDivisa
     *
     * @param integer $tarifaDivisa
     * @return RhTemporalNominilla
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
     * @return RhTemporalNominilla
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
     * Set facturar
     *
     * @param boolean $facturar
     * @return RhTemporalNominilla
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
     * @return RhTemporalNominilla
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
     * Set diasTarjeta
     *
     * @param string $diasTarjeta
     * @return RhTemporalNominilla
     */
    public function setDiasTarjeta($diasTarjeta)
    {
        $this->diasTarjeta = $diasTarjeta;

        return $this;
    }

    /**
     * Get diasTarjeta
     *
     * @return string 
     */
    public function getDiasTarjeta()
    {
        return $this->diasTarjeta;
    }
}
