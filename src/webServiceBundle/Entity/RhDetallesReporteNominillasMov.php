<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDetallesReporteNominillasMov
 *
 * @ORM\Table(name="RH_Detalles_Reporte_Nominillas_Mov", indexes={@ORM\Index(name="IX_RH_Detalles_Reporte_Nominillas_Mov", columns={"Contador"})})
 * @ORM\Entity
 */
class RhDetallesReporteNominillasMov
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
     * @var integer
     *
     * @ORM\Column(name="Regimen_Salarial", type="smallint", nullable=false)
     */
    private $regimenSalarial;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nivel", type="smallint", nullable=false)
     */
    private $nivel;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Direccion", type="string", length=15, nullable=false)
     */
    private $idDireccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cargo", type="string", length=5, nullable=false)
     */
    private $idCargo;

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
     * @ORM\Column(name="Dias_Laborables", type="smallint", nullable=false)
     */
    private $diasLaborables;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tarifa_Horaria", type="integer", nullable=false)
     */
    private $tarifaHoraria;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Basico", type="integer", nullable=false)
     */
    private $salarioBasico;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estimulo", type="integer", nullable=false)
     */
    private $estimulo;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento_Estimulo", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoEstimulo;

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
     * @var integer
     *
     * @ORM\Column(name="Plus", type="integer", nullable=false)
     */
    private $plus;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_por_Cargo", type="integer", nullable=false)
     */
    private $salarioPorCargo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estimulacion", type="integer", nullable=false)
     */
    private $estimulacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento_Estimulacion", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoEstimulacion;

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
     * @var string
     *
     * @ORM\Column(name="Desc_Cargo", type="string", length=120, nullable=false)
     */
    private $descCargo;

    /**
     * @var string
     *
     * @ORM\Column(name="FondoTiempoDia", type="decimal", precision=6, scale=4, nullable=false)
     */
    private $fondotiempodia;

    /**
     * @var integer
     *
     * @ORM\Column(name="Impresa_Grupo", type="smallint", nullable=false)
     */
    private $impresaGrupo;

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
     * @ORM\Column(name="NoMovimiento", type="bigint", nullable=false)
     */
    private $nomovimiento;



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
     * @return RhDetallesReporteNominillasMov
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
     * @return RhDetallesReporteNominillasMov
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
     * @return RhDetallesReporteNominillasMov
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
     * @return RhDetallesReporteNominillasMov
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
     * @return RhDetallesReporteNominillasMov
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
     * @return RhDetallesReporteNominillasMov
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
     * @return RhDetallesReporteNominillasMov
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
     * Set regimenSalarial
     *
     * @param integer $regimenSalarial
     * @return RhDetallesReporteNominillasMov
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
     * Set nivel
     *
     * @param integer $nivel
     * @return RhDetallesReporteNominillasMov
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return integer 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set idDireccion
     *
     * @param string $idDireccion
     * @return RhDetallesReporteNominillasMov
     */
    public function setIdDireccion($idDireccion)
    {
        $this->idDireccion = $idDireccion;

        return $this;
    }

    /**
     * Get idDireccion
     *
     * @return string 
     */
    public function getIdDireccion()
    {
        return $this->idDireccion;
    }

    /**
     * Set idCargo
     *
     * @param string $idCargo
     * @return RhDetallesReporteNominillasMov
     */
    public function setIdCargo($idCargo)
    {
        $this->idCargo = $idCargo;

        return $this;
    }

    /**
     * Get idCargo
     *
     * @return string 
     */
    public function getIdCargo()
    {
        return $this->idCargo;
    }

    /**
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return RhDetallesReporteNominillasMov
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
     * @return RhDetallesReporteNominillasMov
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
     * Set diasLaborables
     *
     * @param integer $diasLaborables
     * @return RhDetallesReporteNominillasMov
     */
    public function setDiasLaborables($diasLaborables)
    {
        $this->diasLaborables = $diasLaborables;

        return $this;
    }

    /**
     * Get diasLaborables
     *
     * @return integer 
     */
    public function getDiasLaborables()
    {
        return $this->diasLaborables;
    }

    /**
     * Set tarifaHoraria
     *
     * @param integer $tarifaHoraria
     * @return RhDetallesReporteNominillasMov
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
     * Set salarioBasico
     *
     * @param integer $salarioBasico
     * @return RhDetallesReporteNominillasMov
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
     * Set estimulo
     *
     * @param integer $estimulo
     * @return RhDetallesReporteNominillasMov
     */
    public function setEstimulo($estimulo)
    {
        $this->estimulo = $estimulo;

        return $this;
    }

    /**
     * Get estimulo
     *
     * @return integer 
     */
    public function getEstimulo()
    {
        return $this->estimulo;
    }

    /**
     * Set porcientoEstimulo
     *
     * @param string $porcientoEstimulo
     * @return RhDetallesReporteNominillasMov
     */
    public function setPorcientoEstimulo($porcientoEstimulo)
    {
        $this->porcientoEstimulo = $porcientoEstimulo;

        return $this;
    }

    /**
     * Get porcientoEstimulo
     *
     * @return string 
     */
    public function getPorcientoEstimulo()
    {
        return $this->porcientoEstimulo;
    }

    /**
     * Set antiguedad
     *
     * @param integer $antiguedad
     * @return RhDetallesReporteNominillasMov
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
     * @return RhDetallesReporteNominillasMov
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
     * Set plus
     *
     * @param integer $plus
     * @return RhDetallesReporteNominillasMov
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
     * Set salarioPorCargo
     *
     * @param integer $salarioPorCargo
     * @return RhDetallesReporteNominillasMov
     */
    public function setSalarioPorCargo($salarioPorCargo)
    {
        $this->salarioPorCargo = $salarioPorCargo;

        return $this;
    }

    /**
     * Get salarioPorCargo
     *
     * @return integer 
     */
    public function getSalarioPorCargo()
    {
        return $this->salarioPorCargo;
    }

    /**
     * Set estimulacion
     *
     * @param integer $estimulacion
     * @return RhDetallesReporteNominillasMov
     */
    public function setEstimulacion($estimulacion)
    {
        $this->estimulacion = $estimulacion;

        return $this;
    }

    /**
     * Get estimulacion
     *
     * @return integer 
     */
    public function getEstimulacion()
    {
        return $this->estimulacion;
    }

    /**
     * Set porcientoEstimulacion
     *
     * @param string $porcientoEstimulacion
     * @return RhDetallesReporteNominillasMov
     */
    public function setPorcientoEstimulacion($porcientoEstimulacion)
    {
        $this->porcientoEstimulacion = $porcientoEstimulacion;

        return $this;
    }

    /**
     * Get porcientoEstimulacion
     *
     * @return string 
     */
    public function getPorcientoEstimulacion()
    {
        return $this->porcientoEstimulacion;
    }

    /**
     * Set diasAPagar
     *
     * @param string $diasAPagar
     * @return RhDetallesReporteNominillasMov
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
     * @return RhDetallesReporteNominillasMov
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
     * Set anoTarjeta
     *
     * @param integer $anoTarjeta
     * @return RhDetallesReporteNominillasMov
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
     * @return RhDetallesReporteNominillasMov
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
     * @return RhDetallesReporteNominillasMov
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
     * @return RhDetallesReporteNominillasMov
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
     * @return RhDetallesReporteNominillasMov
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
     * @return RhDetallesReporteNominillasMov
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
     * Set descCargo
     *
     * @param string $descCargo
     * @return RhDetallesReporteNominillasMov
     */
    public function setDescCargo($descCargo)
    {
        $this->descCargo = $descCargo;

        return $this;
    }

    /**
     * Get descCargo
     *
     * @return string 
     */
    public function getDescCargo()
    {
        return $this->descCargo;
    }

    /**
     * Set fondotiempodia
     *
     * @param string $fondotiempodia
     * @return RhDetallesReporteNominillasMov
     */
    public function setFondotiempodia($fondotiempodia)
    {
        $this->fondotiempodia = $fondotiempodia;

        return $this;
    }

    /**
     * Get fondotiempodia
     *
     * @return string 
     */
    public function getFondotiempodia()
    {
        return $this->fondotiempodia;
    }

    /**
     * Set impresaGrupo
     *
     * @param integer $impresaGrupo
     * @return RhDetallesReporteNominillasMov
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
     * Set tarifaDivisa
     *
     * @param integer $tarifaDivisa
     * @return RhDetallesReporteNominillasMov
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
     * @return RhDetallesReporteNominillasMov
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
     * @return RhDetallesReporteNominillasMov
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
     * @return RhDetallesReporteNominillasMov
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
     * Set nomovimiento
     *
     * @param integer $nomovimiento
     * @return RhDetallesReporteNominillasMov
     */
    public function setNomovimiento($nomovimiento)
    {
        $this->nomovimiento = $nomovimiento;

        return $this;
    }

    /**
     * Get nomovimiento
     *
     * @return integer 
     */
    public function getNomovimiento()
    {
        return $this->nomovimiento;
    }
}
