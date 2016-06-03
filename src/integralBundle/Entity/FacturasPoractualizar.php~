<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacturasPoractualizar
 *
 * @ORM\Table(name="Facturas_PorActualizar", uniqueConstraints={@ORM\UniqueConstraint(name="PK_FactPor_Actualizar", columns={"Ano_Factura", "Id_Factura"})})
 * @ORM\Entity
 */
class FacturasPoractualizar
{
    /**
     * @var string
     *
     * @ORM\Column(name="Ano_Factura", type="string", length=4, nullable=true)
     */
    private $anoFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Factura", type="string", length=15, nullable=true)
     */
    private $idFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cliente", type="string", length=15, nullable=true)
     */
    private $idCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cliente", type="string", length=50, nullable=true)
     */
    private $descCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado", type="string", length=15, nullable=true)
     */
    private $idEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Empleado", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $descEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Pedido", type="string", length=15, nullable=true)
     */
    private $idPedido;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Factura", type="smallint", nullable=true)
     */
    private $tipoFactura;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipofactura", type="smallint", nullable=true)
     */
    private $tipofactura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fech_Factura", type="datetime", nullable=true)
     */
    private $fechFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Proveedor", type="string", length=15, nullable=true)
     */
    private $idProveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Proveedor", type="string", length=50, nullable=true)
     */
    private $descProveedor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Despacho", type="datetime", nullable=true)
     */
    private $fechaDespacho;

    /**
     * @var string
     *
     * @ORM\Column(name="Enviado_A", type="string", length=50, nullable=true)
     */
    private $enviadoA;

    /**
     * @var string
     *
     * @ORM\Column(name="Enviado_Mediante", type="string", length=50, nullable=true)
     */
    private $enviadoMediante;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe", type="integer", nullable=true)
     */
    private $importe;

    /**
     * @var string
     *
     * @ORM\Column(name="Recargos", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $recargos;

    /**
     * @var string
     *
     * @ORM\Column(name="descuentos", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $descuentos;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=200, nullable=true)
     */
    private $nota;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Confirmada", type="boolean", nullable=true)
     */
    private $confirmada;

    /**
     * @var string
     *
     * @ORM\Column(name="Bandera", type="string", length=1, nullable=true)
     */
    private $bandera;

    /**
     * @var string
     *
     * @ORM\Column(name="Anulada", type="string", length=1, nullable=true)
     */
    private $anulada;

    /**
     * @var string
     *
     * @ORM\Column(name="Ano_Oferta", type="string", length=4, nullable=true)
     */
    private $anoOferta;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Organismo", type="string", length=12, nullable=true)
     */
    private $idOrganismo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Despachado", type="boolean", nullable=true)
     */
    private $despachado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Facturado", type="datetime", nullable=true)
     */
    private $fechaFacturado;

    /**
     * @var string
     *
     * @ORM\Column(name="Referencia", type="string", length=30, nullable=true)
     */
    private $referencia;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=true)
     */
    private $idAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Cambio", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $cambio;

    /**
     * @var integer
     *
     * @ORM\Column(name="Credito", type="integer", nullable=true)
     */
    private $credito;

    /**
     * @var string
     *
     * @ORM\Column(name="Atte", type="string", length=50, nullable=true)
     */
    private $atte;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Devuelto", type="integer", nullable=true)
     */
    private $importeDevuelto;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Cobrado", type="integer", nullable=true)
     */
    private $importeCobrado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cobrada", type="boolean", nullable=true)
     */
    private $cobrada;

    /**
     * @var string
     *
     * @ORM\Column(name="Impuesto_Devuelto", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $impuestoDevuelto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_FormaPago", type="string", length=3, nullable=true)
     */
    private $idFormapago;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Periodo_Anterior", type="boolean", nullable=true)
     */
    private $periodoAnterior;

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda", type="string", length=5, nullable=true)
     */
    private $moneda;

    /**
     * @var integer
     *
     * @ORM\Column(name="Arancel", type="integer", nullable=true)
     */
    private $arancel;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Termino_Cobro", type="smallint", nullable=true)
     */
    private $tipoTerminoCobro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias1", type="smallint", nullable=true)
     */
    private $dias1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor1", type="integer", nullable=true)
     */
    private $valor1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias2", type="smallint", nullable=true)
     */
    private $dias2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor2", type="integer", nullable=true)
     */
    private $valor2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias3", type="smallint", nullable=true)
     */
    private $dias3;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor3", type="integer", nullable=true)
     */
    private $valor3;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias4", type="smallint", nullable=true)
     */
    private $dias4;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor4", type="integer", nullable=true)
     */
    private $valor4;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias5", type="smallint", nullable=true)
     */
    private $dias5;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor5", type="integer", nullable=true)
     */
    private $valor5;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias6", type="smallint", nullable=true)
     */
    private $dias6;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor6", type="integer", nullable=true)
     */
    private $valor6;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias7", type="smallint", nullable=true)
     */
    private $dias7;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor7", type="integer", nullable=true)
     */
    private $valor7;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias8", type="smallint", nullable=true)
     */
    private $dias8;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor8", type="integer", nullable=true)
     */
    private $valor8;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias9", type="smallint", nullable=true)
     */
    private $dias9;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor9", type="integer", nullable=true)
     */
    private $valor9;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Compro", type="string", length=5, nullable=true)
     */
    private $idCompro;

    /**
     * @var string
     *
     * @ORM\Column(name="Mes", type="string", length=4, nullable=true)
     */
    private $mes;

    /**
     * @var string
     *
     * @ORM\Column(name="Ano_Compro", type="string", length=4, nullable=true)
     */
    private $anoCompro;

    /**
     * @var string
     *
     * @ORM\Column(name="Conduce", type="string", length=15, nullable=true)
     */
    private $conduce;

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda_Factura", type="string", length=5, nullable=true)
     */
    private $monedaFactura;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor1_moneda", type="integer", nullable=true)
     */
    private $valor1Moneda;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor2_moneda8", type="integer", nullable=true)
     */
    private $valor2Moneda8;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor3_moneda7", type="integer", nullable=true)
     */
    private $valor3Moneda7;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor4_moneda6", type="integer", nullable=true)
     */
    private $valor4Moneda6;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor5_moneda5", type="integer", nullable=true)
     */
    private $valor5Moneda5;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor6_moneda4", type="integer", nullable=true)
     */
    private $valor6Moneda4;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor7_moneda3", type="integer", nullable=true)
     */
    private $valor7Moneda3;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor8_moneda2", type="integer", nullable=true)
     */
    private $valor8Moneda2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor9_moneda1", type="integer", nullable=true)
     */
    private $valor9Moneda1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_DevueltoMn", type="integer", nullable=true)
     */
    private $importeDevueltomn;

    /**
     * @var string
     *
     * @ORM\Column(name="Tro", type="string", length=50, nullable=true)
     */
    private $tro;

    /**
     * @var string
     *
     * @ORM\Column(name="Gavinete", type="string", length=50, nullable=true)
     */
    private $gavinete;

    /**
     * @var string
     *
     * @ORM\Column(name="Tramo", type="string", length=50, nullable=true)
     */
    private $tramo;

    /**
     * @var string
     *
     * @ORM\Column(name="Despachadopor", type="string", length=60, nullable=true)
     */
    private $despachadopor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Marca_Conteo", type="boolean", nullable=true)
     */
    private $marcaConteo;



    /**
     * Set anoFactura
     *
     * @param string $anoFactura
     * @return FacturasPoractualizar
     */
    public function setAnoFactura($anoFactura)
    {
        $this->anoFactura = $anoFactura;

        return $this;
    }

    /**
     * Get anoFactura
     *
     * @return string 
     */
    public function getAnoFactura()
    {
        return $this->anoFactura;
    }

    /**
     * Set idFactura
     *
     * @param string $idFactura
     * @return FacturasPoractualizar
     */
    public function setIdFactura($idFactura)
    {
        $this->idFactura = $idFactura;

        return $this;
    }

    /**
     * Get idFactura
     *
     * @return string 
     */
    public function getIdFactura()
    {
        return $this->idFactura;
    }

    /**
     * Set idCliente
     *
     * @param string $idCliente
     * @return FacturasPoractualizar
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return string 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set descCliente
     *
     * @param string $descCliente
     * @return FacturasPoractualizar
     */
    public function setDescCliente($descCliente)
    {
        $this->descCliente = $descCliente;

        return $this;
    }

    /**
     * Get descCliente
     *
     * @return string 
     */
    public function getDescCliente()
    {
        return $this->descCliente;
    }

    /**
     * Set idEmpleado
     *
     * @param string $idEmpleado
     * @return FacturasPoractualizar
     */
    public function setIdEmpleado($idEmpleado)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado
     *
     * @return string 
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Get descEmpleado
     *
     * @return string 
     */
    public function getDescEmpleado()
    {
        return $this->descEmpleado;
    }

    /**
     * Set idPedido
     *
     * @param string $idPedido
     * @return FacturasPoractualizar
     */
    public function setIdPedido($idPedido)
    {
        $this->idPedido = $idPedido;

        return $this;
    }

    /**
     * Get idPedido
     *
     * @return string 
     */
    public function getIdPedido()
    {
        return $this->idPedido;
    }

    /**
     * Set tipoFactura
     *
     * @param integer $tipoFactura
     * @return FacturasPoractualizar
     */
    public function setTipoFactura($tipoFactura)
    {
        $this->tipoFactura = $tipoFactura;

        return $this;
    }

    /**
     * Get tipoFactura
     *
     * @return integer 
     */
    public function getTipoFactura()
    {
        return $this->tipoFactura;
    }

    /**
     * Set tipofactura
     *
     * @param integer $tipofactura
     * @return FacturasPoractualizar
     */
    public function setTipofactura($tipofactura)
    {
        $this->tipofactura = $tipofactura;

        return $this;
    }

    /**
     * Get tipofactura
     *
     * @return integer 
     */
    public function getTipofactura()
    {
        return $this->tipofactura;
    }

    /**
     * Set fechFactura
     *
     * @param \DateTime $fechFactura
     * @return FacturasPoractualizar
     */
    public function setFechFactura($fechFactura)
    {
        $this->fechFactura = $fechFactura;

        return $this;
    }

    /**
     * Get fechFactura
     *
     * @return \DateTime 
     */
    public function getFechFactura()
    {
        return $this->fechFactura;
    }

    /**
     * Set idProveedor
     *
     * @param string $idProveedor
     * @return FacturasPoractualizar
     */
    public function setIdProveedor($idProveedor)
    {
        $this->idProveedor = $idProveedor;

        return $this;
    }

    /**
     * Get idProveedor
     *
     * @return string 
     */
    public function getIdProveedor()
    {
        return $this->idProveedor;
    }

    /**
     * Set descProveedor
     *
     * @param string $descProveedor
     * @return FacturasPoractualizar
     */
    public function setDescProveedor($descProveedor)
    {
        $this->descProveedor = $descProveedor;

        return $this;
    }

    /**
     * Get descProveedor
     *
     * @return string 
     */
    public function getDescProveedor()
    {
        return $this->descProveedor;
    }

    /**
     * Set fechaDespacho
     *
     * @param \DateTime $fechaDespacho
     * @return FacturasPoractualizar
     */
    public function setFechaDespacho($fechaDespacho)
    {
        $this->fechaDespacho = $fechaDespacho;

        return $this;
    }

    /**
     * Get fechaDespacho
     *
     * @return \DateTime 
     */
    public function getFechaDespacho()
    {
        return $this->fechaDespacho;
    }

    /**
     * Set enviadoA
     *
     * @param string $enviadoA
     * @return FacturasPoractualizar
     */
    public function setEnviadoA($enviadoA)
    {
        $this->enviadoA = $enviadoA;

        return $this;
    }

    /**
     * Get enviadoA
     *
     * @return string 
     */
    public function getEnviadoA()
    {
        return $this->enviadoA;
    }

    /**
     * Set enviadoMediante
     *
     * @param string $enviadoMediante
     * @return FacturasPoractualizar
     */
    public function setEnviadoMediante($enviadoMediante)
    {
        $this->enviadoMediante = $enviadoMediante;

        return $this;
    }

    /**
     * Get enviadoMediante
     *
     * @return string 
     */
    public function getEnviadoMediante()
    {
        return $this->enviadoMediante;
    }

    /**
     * Set importe
     *
     * @param integer $importe
     * @return FacturasPoractualizar
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
     * Set recargos
     *
     * @param string $recargos
     * @return FacturasPoractualizar
     */
    public function setRecargos($recargos)
    {
        $this->recargos = $recargos;

        return $this;
    }

    /**
     * Get recargos
     *
     * @return string 
     */
    public function getRecargos()
    {
        return $this->recargos;
    }

    /**
     * Set descuentos
     *
     * @param string $descuentos
     * @return FacturasPoractualizar
     */
    public function setDescuentos($descuentos)
    {
        $this->descuentos = $descuentos;

        return $this;
    }

    /**
     * Get descuentos
     *
     * @return string 
     */
    public function getDescuentos()
    {
        return $this->descuentos;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return FacturasPoractualizar
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string 
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set confirmada
     *
     * @param boolean $confirmada
     * @return FacturasPoractualizar
     */
    public function setConfirmada($confirmada)
    {
        $this->confirmada = $confirmada;

        return $this;
    }

    /**
     * Get confirmada
     *
     * @return boolean 
     */
    public function getConfirmada()
    {
        return $this->confirmada;
    }

    /**
     * Set bandera
     *
     * @param string $bandera
     * @return FacturasPoractualizar
     */
    public function setBandera($bandera)
    {
        $this->bandera = $bandera;

        return $this;
    }

    /**
     * Get bandera
     *
     * @return string 
     */
    public function getBandera()
    {
        return $this->bandera;
    }

    /**
     * Set anulada
     *
     * @param string $anulada
     * @return FacturasPoractualizar
     */
    public function setAnulada($anulada)
    {
        $this->anulada = $anulada;

        return $this;
    }

    /**
     * Get anulada
     *
     * @return string 
     */
    public function getAnulada()
    {
        return $this->anulada;
    }

    /**
     * Set anoOferta
     *
     * @param string $anoOferta
     * @return FacturasPoractualizar
     */
    public function setAnoOferta($anoOferta)
    {
        $this->anoOferta = $anoOferta;

        return $this;
    }

    /**
     * Get anoOferta
     *
     * @return string 
     */
    public function getAnoOferta()
    {
        return $this->anoOferta;
    }

    /**
     * Set idOrganismo
     *
     * @param string $idOrganismo
     * @return FacturasPoractualizar
     */
    public function setIdOrganismo($idOrganismo)
    {
        $this->idOrganismo = $idOrganismo;

        return $this;
    }

    /**
     * Get idOrganismo
     *
     * @return string 
     */
    public function getIdOrganismo()
    {
        return $this->idOrganismo;
    }

    /**
     * Set despachado
     *
     * @param boolean $despachado
     * @return FacturasPoractualizar
     */
    public function setDespachado($despachado)
    {
        $this->despachado = $despachado;

        return $this;
    }

    /**
     * Get despachado
     *
     * @return boolean 
     */
    public function getDespachado()
    {
        return $this->despachado;
    }

    /**
     * Set fechaFacturado
     *
     * @param \DateTime $fechaFacturado
     * @return FacturasPoractualizar
     */
    public function setFechaFacturado($fechaFacturado)
    {
        $this->fechaFacturado = $fechaFacturado;

        return $this;
    }

    /**
     * Get fechaFacturado
     *
     * @return \DateTime 
     */
    public function getFechaFacturado()
    {
        return $this->fechaFacturado;
    }

    /**
     * Set referencia
     *
     * @param string $referencia
     * @return FacturasPoractualizar
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia
     *
     * @return string 
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return FacturasPoractualizar
     */
    public function setIdAlmacen($idAlmacen)
    {
        $this->idAlmacen = $idAlmacen;

        return $this;
    }

    /**
     * Get idAlmacen
     *
     * @return string 
     */
    public function getIdAlmacen()
    {
        return $this->idAlmacen;
    }

    /**
     * Set cambio
     *
     * @param string $cambio
     * @return FacturasPoractualizar
     */
    public function setCambio($cambio)
    {
        $this->cambio = $cambio;

        return $this;
    }

    /**
     * Get cambio
     *
     * @return string 
     */
    public function getCambio()
    {
        return $this->cambio;
    }

    /**
     * Set credito
     *
     * @param integer $credito
     * @return FacturasPoractualizar
     */
    public function setCredito($credito)
    {
        $this->credito = $credito;

        return $this;
    }

    /**
     * Get credito
     *
     * @return integer 
     */
    public function getCredito()
    {
        return $this->credito;
    }

    /**
     * Set atte
     *
     * @param string $atte
     * @return FacturasPoractualizar
     */
    public function setAtte($atte)
    {
        $this->atte = $atte;

        return $this;
    }

    /**
     * Get atte
     *
     * @return string 
     */
    public function getAtte()
    {
        return $this->atte;
    }

    /**
     * Set importeDevuelto
     *
     * @param integer $importeDevuelto
     * @return FacturasPoractualizar
     */
    public function setImporteDevuelto($importeDevuelto)
    {
        $this->importeDevuelto = $importeDevuelto;

        return $this;
    }

    /**
     * Get importeDevuelto
     *
     * @return integer 
     */
    public function getImporteDevuelto()
    {
        return $this->importeDevuelto;
    }

    /**
     * Set importeCobrado
     *
     * @param integer $importeCobrado
     * @return FacturasPoractualizar
     */
    public function setImporteCobrado($importeCobrado)
    {
        $this->importeCobrado = $importeCobrado;

        return $this;
    }

    /**
     * Get importeCobrado
     *
     * @return integer 
     */
    public function getImporteCobrado()
    {
        return $this->importeCobrado;
    }

    /**
     * Set cobrada
     *
     * @param boolean $cobrada
     * @return FacturasPoractualizar
     */
    public function setCobrada($cobrada)
    {
        $this->cobrada = $cobrada;

        return $this;
    }

    /**
     * Get cobrada
     *
     * @return boolean 
     */
    public function getCobrada()
    {
        return $this->cobrada;
    }

    /**
     * Set impuestoDevuelto
     *
     * @param string $impuestoDevuelto
     * @return FacturasPoractualizar
     */
    public function setImpuestoDevuelto($impuestoDevuelto)
    {
        $this->impuestoDevuelto = $impuestoDevuelto;

        return $this;
    }

    /**
     * Get impuestoDevuelto
     *
     * @return string 
     */
    public function getImpuestoDevuelto()
    {
        return $this->impuestoDevuelto;
    }

    /**
     * Set idFormapago
     *
     * @param string $idFormapago
     * @return FacturasPoractualizar
     */
    public function setIdFormapago($idFormapago)
    {
        $this->idFormapago = $idFormapago;

        return $this;
    }

    /**
     * Get idFormapago
     *
     * @return string 
     */
    public function getIdFormapago()
    {
        return $this->idFormapago;
    }

    /**
     * Set periodoAnterior
     *
     * @param boolean $periodoAnterior
     * @return FacturasPoractualizar
     */
    public function setPeriodoAnterior($periodoAnterior)
    {
        $this->periodoAnterior = $periodoAnterior;

        return $this;
    }

    /**
     * Get periodoAnterior
     *
     * @return boolean 
     */
    public function getPeriodoAnterior()
    {
        return $this->periodoAnterior;
    }

    /**
     * Set moneda
     *
     * @param string $moneda
     * @return FacturasPoractualizar
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;

        return $this;
    }

    /**
     * Get moneda
     *
     * @return string 
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * Set arancel
     *
     * @param integer $arancel
     * @return FacturasPoractualizar
     */
    public function setArancel($arancel)
    {
        $this->arancel = $arancel;

        return $this;
    }

    /**
     * Get arancel
     *
     * @return integer 
     */
    public function getArancel()
    {
        return $this->arancel;
    }

    /**
     * Set tipoTerminoCobro
     *
     * @param integer $tipoTerminoCobro
     * @return FacturasPoractualizar
     */
    public function setTipoTerminoCobro($tipoTerminoCobro)
    {
        $this->tipoTerminoCobro = $tipoTerminoCobro;

        return $this;
    }

    /**
     * Get tipoTerminoCobro
     *
     * @return integer 
     */
    public function getTipoTerminoCobro()
    {
        return $this->tipoTerminoCobro;
    }

    /**
     * Set dias1
     *
     * @param integer $dias1
     * @return FacturasPoractualizar
     */
    public function setDias1($dias1)
    {
        $this->dias1 = $dias1;

        return $this;
    }

    /**
     * Get dias1
     *
     * @return integer 
     */
    public function getDias1()
    {
        return $this->dias1;
    }

    /**
     * Set valor1
     *
     * @param integer $valor1
     * @return FacturasPoractualizar
     */
    public function setValor1($valor1)
    {
        $this->valor1 = $valor1;

        return $this;
    }

    /**
     * Get valor1
     *
     * @return integer 
     */
    public function getValor1()
    {
        return $this->valor1;
    }

    /**
     * Set dias2
     *
     * @param integer $dias2
     * @return FacturasPoractualizar
     */
    public function setDias2($dias2)
    {
        $this->dias2 = $dias2;

        return $this;
    }

    /**
     * Get dias2
     *
     * @return integer 
     */
    public function getDias2()
    {
        return $this->dias2;
    }

    /**
     * Set valor2
     *
     * @param integer $valor2
     * @return FacturasPoractualizar
     */
    public function setValor2($valor2)
    {
        $this->valor2 = $valor2;

        return $this;
    }

    /**
     * Get valor2
     *
     * @return integer 
     */
    public function getValor2()
    {
        return $this->valor2;
    }

    /**
     * Set dias3
     *
     * @param integer $dias3
     * @return FacturasPoractualizar
     */
    public function setDias3($dias3)
    {
        $this->dias3 = $dias3;

        return $this;
    }

    /**
     * Get dias3
     *
     * @return integer 
     */
    public function getDias3()
    {
        return $this->dias3;
    }

    /**
     * Set valor3
     *
     * @param integer $valor3
     * @return FacturasPoractualizar
     */
    public function setValor3($valor3)
    {
        $this->valor3 = $valor3;

        return $this;
    }

    /**
     * Get valor3
     *
     * @return integer 
     */
    public function getValor3()
    {
        return $this->valor3;
    }

    /**
     * Set dias4
     *
     * @param integer $dias4
     * @return FacturasPoractualizar
     */
    public function setDias4($dias4)
    {
        $this->dias4 = $dias4;

        return $this;
    }

    /**
     * Get dias4
     *
     * @return integer 
     */
    public function getDias4()
    {
        return $this->dias4;
    }

    /**
     * Set valor4
     *
     * @param integer $valor4
     * @return FacturasPoractualizar
     */
    public function setValor4($valor4)
    {
        $this->valor4 = $valor4;

        return $this;
    }

    /**
     * Get valor4
     *
     * @return integer 
     */
    public function getValor4()
    {
        return $this->valor4;
    }

    /**
     * Set dias5
     *
     * @param integer $dias5
     * @return FacturasPoractualizar
     */
    public function setDias5($dias5)
    {
        $this->dias5 = $dias5;

        return $this;
    }

    /**
     * Get dias5
     *
     * @return integer 
     */
    public function getDias5()
    {
        return $this->dias5;
    }

    /**
     * Set valor5
     *
     * @param integer $valor5
     * @return FacturasPoractualizar
     */
    public function setValor5($valor5)
    {
        $this->valor5 = $valor5;

        return $this;
    }

    /**
     * Get valor5
     *
     * @return integer 
     */
    public function getValor5()
    {
        return $this->valor5;
    }

    /**
     * Set dias6
     *
     * @param integer $dias6
     * @return FacturasPoractualizar
     */
    public function setDias6($dias6)
    {
        $this->dias6 = $dias6;

        return $this;
    }

    /**
     * Get dias6
     *
     * @return integer 
     */
    public function getDias6()
    {
        return $this->dias6;
    }

    /**
     * Set valor6
     *
     * @param integer $valor6
     * @return FacturasPoractualizar
     */
    public function setValor6($valor6)
    {
        $this->valor6 = $valor6;

        return $this;
    }

    /**
     * Get valor6
     *
     * @return integer 
     */
    public function getValor6()
    {
        return $this->valor6;
    }

    /**
     * Set dias7
     *
     * @param integer $dias7
     * @return FacturasPoractualizar
     */
    public function setDias7($dias7)
    {
        $this->dias7 = $dias7;

        return $this;
    }

    /**
     * Get dias7
     *
     * @return integer 
     */
    public function getDias7()
    {
        return $this->dias7;
    }

    /**
     * Set valor7
     *
     * @param integer $valor7
     * @return FacturasPoractualizar
     */
    public function setValor7($valor7)
    {
        $this->valor7 = $valor7;

        return $this;
    }

    /**
     * Get valor7
     *
     * @return integer 
     */
    public function getValor7()
    {
        return $this->valor7;
    }

    /**
     * Set dias8
     *
     * @param integer $dias8
     * @return FacturasPoractualizar
     */
    public function setDias8($dias8)
    {
        $this->dias8 = $dias8;

        return $this;
    }

    /**
     * Get dias8
     *
     * @return integer 
     */
    public function getDias8()
    {
        return $this->dias8;
    }

    /**
     * Set valor8
     *
     * @param integer $valor8
     * @return FacturasPoractualizar
     */
    public function setValor8($valor8)
    {
        $this->valor8 = $valor8;

        return $this;
    }

    /**
     * Get valor8
     *
     * @return integer 
     */
    public function getValor8()
    {
        return $this->valor8;
    }

    /**
     * Set dias9
     *
     * @param integer $dias9
     * @return FacturasPoractualizar
     */
    public function setDias9($dias9)
    {
        $this->dias9 = $dias9;

        return $this;
    }

    /**
     * Get dias9
     *
     * @return integer 
     */
    public function getDias9()
    {
        return $this->dias9;
    }

    /**
     * Set valor9
     *
     * @param integer $valor9
     * @return FacturasPoractualizar
     */
    public function setValor9($valor9)
    {
        $this->valor9 = $valor9;

        return $this;
    }

    /**
     * Get valor9
     *
     * @return integer 
     */
    public function getValor9()
    {
        return $this->valor9;
    }

    /**
     * Set idCompro
     *
     * @param string $idCompro
     * @return FacturasPoractualizar
     */
    public function setIdCompro($idCompro)
    {
        $this->idCompro = $idCompro;

        return $this;
    }

    /**
     * Get idCompro
     *
     * @return string 
     */
    public function getIdCompro()
    {
        return $this->idCompro;
    }

    /**
     * Set mes
     *
     * @param string $mes
     * @return FacturasPoractualizar
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return string 
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set anoCompro
     *
     * @param string $anoCompro
     * @return FacturasPoractualizar
     */
    public function setAnoCompro($anoCompro)
    {
        $this->anoCompro = $anoCompro;

        return $this;
    }

    /**
     * Get anoCompro
     *
     * @return string 
     */
    public function getAnoCompro()
    {
        return $this->anoCompro;
    }

    /**
     * Set conduce
     *
     * @param string $conduce
     * @return FacturasPoractualizar
     */
    public function setConduce($conduce)
    {
        $this->conduce = $conduce;

        return $this;
    }

    /**
     * Get conduce
     *
     * @return string 
     */
    public function getConduce()
    {
        return $this->conduce;
    }

    /**
     * Set monedaFactura
     *
     * @param string $monedaFactura
     * @return FacturasPoractualizar
     */
    public function setMonedaFactura($monedaFactura)
    {
        $this->monedaFactura = $monedaFactura;

        return $this;
    }

    /**
     * Get monedaFactura
     *
     * @return string 
     */
    public function getMonedaFactura()
    {
        return $this->monedaFactura;
    }

    /**
     * Set valor1Moneda
     *
     * @param integer $valor1Moneda
     * @return FacturasPoractualizar
     */
    public function setValor1Moneda($valor1Moneda)
    {
        $this->valor1Moneda = $valor1Moneda;

        return $this;
    }

    /**
     * Get valor1Moneda
     *
     * @return integer 
     */
    public function getValor1Moneda()
    {
        return $this->valor1Moneda;
    }

    /**
     * Set valor2Moneda8
     *
     * @param integer $valor2Moneda8
     * @return FacturasPoractualizar
     */
    public function setValor2Moneda8($valor2Moneda8)
    {
        $this->valor2Moneda8 = $valor2Moneda8;

        return $this;
    }

    /**
     * Get valor2Moneda8
     *
     * @return integer 
     */
    public function getValor2Moneda8()
    {
        return $this->valor2Moneda8;
    }

    /**
     * Set valor3Moneda7
     *
     * @param integer $valor3Moneda7
     * @return FacturasPoractualizar
     */
    public function setValor3Moneda7($valor3Moneda7)
    {
        $this->valor3Moneda7 = $valor3Moneda7;

        return $this;
    }

    /**
     * Get valor3Moneda7
     *
     * @return integer 
     */
    public function getValor3Moneda7()
    {
        return $this->valor3Moneda7;
    }

    /**
     * Set valor4Moneda6
     *
     * @param integer $valor4Moneda6
     * @return FacturasPoractualizar
     */
    public function setValor4Moneda6($valor4Moneda6)
    {
        $this->valor4Moneda6 = $valor4Moneda6;

        return $this;
    }

    /**
     * Get valor4Moneda6
     *
     * @return integer 
     */
    public function getValor4Moneda6()
    {
        return $this->valor4Moneda6;
    }

    /**
     * Set valor5Moneda5
     *
     * @param integer $valor5Moneda5
     * @return FacturasPoractualizar
     */
    public function setValor5Moneda5($valor5Moneda5)
    {
        $this->valor5Moneda5 = $valor5Moneda5;

        return $this;
    }

    /**
     * Get valor5Moneda5
     *
     * @return integer 
     */
    public function getValor5Moneda5()
    {
        return $this->valor5Moneda5;
    }

    /**
     * Set valor6Moneda4
     *
     * @param integer $valor6Moneda4
     * @return FacturasPoractualizar
     */
    public function setValor6Moneda4($valor6Moneda4)
    {
        $this->valor6Moneda4 = $valor6Moneda4;

        return $this;
    }

    /**
     * Get valor6Moneda4
     *
     * @return integer 
     */
    public function getValor6Moneda4()
    {
        return $this->valor6Moneda4;
    }

    /**
     * Set valor7Moneda3
     *
     * @param integer $valor7Moneda3
     * @return FacturasPoractualizar
     */
    public function setValor7Moneda3($valor7Moneda3)
    {
        $this->valor7Moneda3 = $valor7Moneda3;

        return $this;
    }

    /**
     * Get valor7Moneda3
     *
     * @return integer 
     */
    public function getValor7Moneda3()
    {
        return $this->valor7Moneda3;
    }

    /**
     * Set valor8Moneda2
     *
     * @param integer $valor8Moneda2
     * @return FacturasPoractualizar
     */
    public function setValor8Moneda2($valor8Moneda2)
    {
        $this->valor8Moneda2 = $valor8Moneda2;

        return $this;
    }

    /**
     * Get valor8Moneda2
     *
     * @return integer 
     */
    public function getValor8Moneda2()
    {
        return $this->valor8Moneda2;
    }

    /**
     * Set valor9Moneda1
     *
     * @param integer $valor9Moneda1
     * @return FacturasPoractualizar
     */
    public function setValor9Moneda1($valor9Moneda1)
    {
        $this->valor9Moneda1 = $valor9Moneda1;

        return $this;
    }

    /**
     * Get valor9Moneda1
     *
     * @return integer 
     */
    public function getValor9Moneda1()
    {
        return $this->valor9Moneda1;
    }

    /**
     * Set importeDevueltomn
     *
     * @param integer $importeDevueltomn
     * @return FacturasPoractualizar
     */
    public function setImporteDevueltomn($importeDevueltomn)
    {
        $this->importeDevueltomn = $importeDevueltomn;

        return $this;
    }

    /**
     * Get importeDevueltomn
     *
     * @return integer 
     */
    public function getImporteDevueltomn()
    {
        return $this->importeDevueltomn;
    }

    /**
     * Set tro
     *
     * @param string $tro
     * @return FacturasPoractualizar
     */
    public function setTro($tro)
    {
        $this->tro = $tro;

        return $this;
    }

    /**
     * Get tro
     *
     * @return string 
     */
    public function getTro()
    {
        return $this->tro;
    }

    /**
     * Set gavinete
     *
     * @param string $gavinete
     * @return FacturasPoractualizar
     */
    public function setGavinete($gavinete)
    {
        $this->gavinete = $gavinete;

        return $this;
    }

    /**
     * Get gavinete
     *
     * @return string 
     */
    public function getGavinete()
    {
        return $this->gavinete;
    }

    /**
     * Set tramo
     *
     * @param string $tramo
     * @return FacturasPoractualizar
     */
    public function setTramo($tramo)
    {
        $this->tramo = $tramo;

        return $this;
    }

    /**
     * Get tramo
     *
     * @return string 
     */
    public function getTramo()
    {
        return $this->tramo;
    }

    /**
     * Set despachadopor
     *
     * @param string $despachadopor
     * @return FacturasPoractualizar
     */
    public function setDespachadopor($despachadopor)
    {
        $this->despachadopor = $despachadopor;

        return $this;
    }

    /**
     * Get despachadopor
     *
     * @return string 
     */
    public function getDespachadopor()
    {
        return $this->despachadopor;
    }

    /**
     * Set marcaConteo
     *
     * @param boolean $marcaConteo
     * @return FacturasPoractualizar
     */
    public function setMarcaConteo($marcaConteo)
    {
        $this->marcaConteo = $marcaConteo;

        return $this;
    }

    /**
     * Get marcaConteo
     *
     * @return boolean 
     */
    public function getMarcaConteo()
    {
        return $this->marcaConteo;
    }
}
