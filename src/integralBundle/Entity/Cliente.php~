<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="Cliente", indexes={@ORM\Index(name="IX_Organismo", columns={"Id_Organismo"})})
 * @ORM\Entity
 */
class Cliente
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cliente", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cliente", type="string", length=50, nullable=false)
     */
    private $descCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre_Contacto", type="string", length=30, nullable=false)
     */
    private $nombreContacto;

    /**
     * @var string
     *
     * @ORM\Column(name="Cargo_Contacto", type="string", length=30, nullable=false)
     */
    private $cargoContacto;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion", type="string", length=80, nullable=false)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Ciudad", type="string", length=15, nullable=false)
     */
    private $ciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="Region", type="string", length=15, nullable=false)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="Zip_Code", type="string", length=10, nullable=false)
     */
    private $zipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="Pais", type="string", length=5, nullable=false)
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono", type="string", length=24, nullable=false)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="Fax", type="string", length=24, nullable=false)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=255, nullable=false)
     */
    private $nota;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Organismo", type="string", length=15, nullable=false)
     */
    private $idOrganismo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nacional_oExtranjero", type="smallint", nullable=false)
     */
    private $nacionalOextranjero;

    /**
     * @var string
     *
     * @ORM\Column(name="Ruc", type="string", length=30, nullable=false)
     */
    private $ruc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Credito", type="smallint", nullable=false)
     */
    private $credito;

    /**
     * @var integer
     *
     * @ORM\Column(name="DescuentoMB", type="integer", nullable=false)
     */
    private $descuentomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="DescuentoMC", type="integer", nullable=false)
     */
    private $descuentomc;

    /**
     * @var integer
     *
     * @ORM\Column(name="RecargoMB", type="integer", nullable=false)
     */
    private $recargomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="RecargoMC", type="integer", nullable=false)
     */
    private $recargomc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Limite_Credito", type="smallint", nullable=false)
     */
    private $limiteCredito;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_Limite", type="integer", nullable=false)
     */
    private $valorLimite;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Permitir_Facturacion", type="boolean", nullable=false)
     */
    private $permitirFacturacion;

    /**
     * @var string
     *
     * @ORM\Column(name="E_mail", type="string", length=50, nullable=false)
     */
    private $eMail;

    /**
     * @var integer
     *
     * @ORM\Column(name="Lista_PrecioMB", type="smallint", nullable=false)
     */
    private $listaPreciomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Lista_PrecioMC", type="smallint", nullable=false)
     */
    private $listaPreciomc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Descontinuado", type="boolean", nullable=false)
     */
    private $descontinuado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_CPago", type="string", length=10, nullable=false)
     */
    private $idCpago;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Financiamiento", type="boolean", nullable=false)
     */
    private $financiamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Comercial", type="string", length=5, nullable=false)
     */
    private $idComercial;

    /**
     * @var integer
     *
     * @ORM\Column(name="Criterio_Precio_Venta", type="smallint", nullable=false)
     */
    private $criterioPrecioVenta;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasifactura", type="string", length=10, nullable=false)
     */
    private $idClasifactura;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Tributable", type="boolean", nullable=false)
     */
    private $tributable;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Requiere_Desc", type="boolean", nullable=false)
     */
    private $requiereDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="Codigo_Como_Deudor", type="string", length=10, nullable=false)
     */
    private $codigoComoDeudor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="interno", type="boolean", nullable=false)
     */
    private $interno;

    /**
     * @var string
     *
     * @ORM\Column(name="CodAreaGeo", type="string", length=10, nullable=false)
     */
    private $codareageo;

    /**
     * @var string
     *
     * @ORM\Column(name="CodCanalDist", type="string", length=10, nullable=false)
     */
    private $codcanaldist;

    /**
     * @var string
     *
     * @ORM\Column(name="NoContrato", type="string", length=20, nullable=false)
     */
    private $nocontrato;

    /**
     * @var string
     *
     * @ORM\Column(name="NoSolicitud", type="string", length=20, nullable=false)
     */
    private $nosolicitud;

    /**
     * @var string
     *
     * @ORM\Column(name="NoSucursal", type="string", length=15, nullable=false)
     */
    private $nosucursal;

    /**
     * @var string
     *
     * @ORM\Column(name="NoCtas", type="string", length=40, nullable=false)
     */
    private $noctas;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cobrador", type="string", length=5, nullable=false)
     */
    private $idCobrador;

    /**
     * @var integer
     *
     * @ORM\Column(name="Lista_PrecioSerMB", type="smallint", nullable=false)
     */
    private $listaPreciosermb;

    /**
     * @var integer
     *
     * @ORM\Column(name="Lista_PrecioSerMC", type="smallint", nullable=false)
     */
    private $listaPreciosermc;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Recomen", type="string", length=15, nullable=false)
     */
    private $idRecomen;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Recomen", type="string", length=50, nullable=false)
     */
    private $descRecomen;

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda_Factura", type="string", length=5, nullable=false)
     */
    private $monedaFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasifactura_Salario", type="string", length=10, nullable=false)
     */
    private $idClasifacturaSalario;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasifactura_Indemnizacion", type="string", length=10, nullable=false)
     */
    private $idClasifacturaIndemnizacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Contrato", type="datetime", nullable=false)
     */
    private $fechaContrato;

    /**
     * @var string
     *
     * @ORM\Column(name="Reg_Comercial", type="string", length=30, nullable=false)
     */
    private $regComercial;

    /**
     * @var string
     *
     * @ORM\Column(name="Codigo_ONE", type="string", length=30, nullable=false)
     */
    private $codigoOne;

    /**
     * @var string
     *
     * @ORM\Column(name="NoCtasMC", type="string", length=40, nullable=false)
     */
    private $noctasmc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Entrada", type="datetime", nullable=false)
     */
    private $fechaEntrada;

    /**
     * @var string
     *
     * @ORM\Column(name="CodRutaDist", type="string", length=10, nullable=false)
     */
    private $codrutadist;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoNCF", type="smallint", nullable=false)
     */
    private $tiponcf;

    /**
     * @var boolean
     *
     * @ORM\Column(name="FactvsAnticipo", type="boolean", nullable=false)
     */
    private $factvsanticipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_Limite_MC", type="integer", nullable=false)
     */
    private $valorLimiteMc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Credito_MC", type="smallint", nullable=false)
     */
    private $creditoMc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Preferencial", type="boolean", nullable=false)
     */
    private $preferencial;

    /**
     * @var boolean
     *
     * @ORM\Column(name="VIP", type="boolean", nullable=false)
     */
    private $vip;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_AFavor", type="integer", nullable=false)
     */
    private $importeAfavor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Potencial", type="boolean", nullable=false)
     */
    private $potencial;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_Cliente", type="string", length=10, nullable=false)
     */
    private $idClasifCliente;



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
     * @return Cliente
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
     * Set nombreContacto
     *
     * @param string $nombreContacto
     * @return Cliente
     */
    public function setNombreContacto($nombreContacto)
    {
        $this->nombreContacto = $nombreContacto;

        return $this;
    }

    /**
     * Get nombreContacto
     *
     * @return string 
     */
    public function getNombreContacto()
    {
        return $this->nombreContacto;
    }

    /**
     * Set cargoContacto
     *
     * @param string $cargoContacto
     * @return Cliente
     */
    public function setCargoContacto($cargoContacto)
    {
        $this->cargoContacto = $cargoContacto;

        return $this;
    }

    /**
     * Get cargoContacto
     *
     * @return string 
     */
    public function getCargoContacto()
    {
        return $this->cargoContacto;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Cliente
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return Cliente
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return Cliente
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     * @return Cliente
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string 
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set pais
     *
     * @param string $pais
     * @return Cliente
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Cliente
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Cliente
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return Cliente
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
     * Set idOrganismo
     *
     * @param string $idOrganismo
     * @return Cliente
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
     * Set nacionalOextranjero
     *
     * @param integer $nacionalOextranjero
     * @return Cliente
     */
    public function setNacionalOextranjero($nacionalOextranjero)
    {
        $this->nacionalOextranjero = $nacionalOextranjero;

        return $this;
    }

    /**
     * Get nacionalOextranjero
     *
     * @return integer 
     */
    public function getNacionalOextranjero()
    {
        return $this->nacionalOextranjero;
    }

    /**
     * Set ruc
     *
     * @param string $ruc
     * @return Cliente
     */
    public function setRuc($ruc)
    {
        $this->ruc = $ruc;

        return $this;
    }

    /**
     * Get ruc
     *
     * @return string 
     */
    public function getRuc()
    {
        return $this->ruc;
    }

    /**
     * Set credito
     *
     * @param integer $credito
     * @return Cliente
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
     * Set descuentomb
     *
     * @param integer $descuentomb
     * @return Cliente
     */
    public function setDescuentomb($descuentomb)
    {
        $this->descuentomb = $descuentomb;

        return $this;
    }

    /**
     * Get descuentomb
     *
     * @return integer 
     */
    public function getDescuentomb()
    {
        return $this->descuentomb;
    }

    /**
     * Set descuentomc
     *
     * @param integer $descuentomc
     * @return Cliente
     */
    public function setDescuentomc($descuentomc)
    {
        $this->descuentomc = $descuentomc;

        return $this;
    }

    /**
     * Get descuentomc
     *
     * @return integer 
     */
    public function getDescuentomc()
    {
        return $this->descuentomc;
    }

    /**
     * Set recargomb
     *
     * @param integer $recargomb
     * @return Cliente
     */
    public function setRecargomb($recargomb)
    {
        $this->recargomb = $recargomb;

        return $this;
    }

    /**
     * Get recargomb
     *
     * @return integer 
     */
    public function getRecargomb()
    {
        return $this->recargomb;
    }

    /**
     * Set recargomc
     *
     * @param integer $recargomc
     * @return Cliente
     */
    public function setRecargomc($recargomc)
    {
        $this->recargomc = $recargomc;

        return $this;
    }

    /**
     * Get recargomc
     *
     * @return integer 
     */
    public function getRecargomc()
    {
        return $this->recargomc;
    }

    /**
     * Set limiteCredito
     *
     * @param integer $limiteCredito
     * @return Cliente
     */
    public function setLimiteCredito($limiteCredito)
    {
        $this->limiteCredito = $limiteCredito;

        return $this;
    }

    /**
     * Get limiteCredito
     *
     * @return integer 
     */
    public function getLimiteCredito()
    {
        return $this->limiteCredito;
    }

    /**
     * Set valorLimite
     *
     * @param integer $valorLimite
     * @return Cliente
     */
    public function setValorLimite($valorLimite)
    {
        $this->valorLimite = $valorLimite;

        return $this;
    }

    /**
     * Get valorLimite
     *
     * @return integer 
     */
    public function getValorLimite()
    {
        return $this->valorLimite;
    }

    /**
     * Set permitirFacturacion
     *
     * @param boolean $permitirFacturacion
     * @return Cliente
     */
    public function setPermitirFacturacion($permitirFacturacion)
    {
        $this->permitirFacturacion = $permitirFacturacion;

        return $this;
    }

    /**
     * Get permitirFacturacion
     *
     * @return boolean 
     */
    public function getPermitirFacturacion()
    {
        return $this->permitirFacturacion;
    }

    /**
     * Set eMail
     *
     * @param string $eMail
     * @return Cliente
     */
    public function setEMail($eMail)
    {
        $this->eMail = $eMail;

        return $this;
    }

    /**
     * Get eMail
     *
     * @return string 
     */
    public function getEMail()
    {
        return $this->eMail;
    }

    /**
     * Set listaPreciomb
     *
     * @param integer $listaPreciomb
     * @return Cliente
     */
    public function setListaPreciomb($listaPreciomb)
    {
        $this->listaPreciomb = $listaPreciomb;

        return $this;
    }

    /**
     * Get listaPreciomb
     *
     * @return integer 
     */
    public function getListaPreciomb()
    {
        return $this->listaPreciomb;
    }

    /**
     * Set listaPreciomc
     *
     * @param integer $listaPreciomc
     * @return Cliente
     */
    public function setListaPreciomc($listaPreciomc)
    {
        $this->listaPreciomc = $listaPreciomc;

        return $this;
    }

    /**
     * Get listaPreciomc
     *
     * @return integer 
     */
    public function getListaPreciomc()
    {
        return $this->listaPreciomc;
    }

    /**
     * Set descontinuado
     *
     * @param boolean $descontinuado
     * @return Cliente
     */
    public function setDescontinuado($descontinuado)
    {
        $this->descontinuado = $descontinuado;

        return $this;
    }

    /**
     * Get descontinuado
     *
     * @return boolean 
     */
    public function getDescontinuado()
    {
        return $this->descontinuado;
    }

    /**
     * Set idCpago
     *
     * @param string $idCpago
     * @return Cliente
     */
    public function setIdCpago($idCpago)
    {
        $this->idCpago = $idCpago;

        return $this;
    }

    /**
     * Get idCpago
     *
     * @return string 
     */
    public function getIdCpago()
    {
        return $this->idCpago;
    }

    /**
     * Set financiamiento
     *
     * @param boolean $financiamiento
     * @return Cliente
     */
    public function setFinanciamiento($financiamiento)
    {
        $this->financiamiento = $financiamiento;

        return $this;
    }

    /**
     * Get financiamiento
     *
     * @return boolean 
     */
    public function getFinanciamiento()
    {
        return $this->financiamiento;
    }

    /**
     * Set idComercial
     *
     * @param string $idComercial
     * @return Cliente
     */
    public function setIdComercial($idComercial)
    {
        $this->idComercial = $idComercial;

        return $this;
    }

    /**
     * Get idComercial
     *
     * @return string 
     */
    public function getIdComercial()
    {
        return $this->idComercial;
    }

    /**
     * Set criterioPrecioVenta
     *
     * @param integer $criterioPrecioVenta
     * @return Cliente
     */
    public function setCriterioPrecioVenta($criterioPrecioVenta)
    {
        $this->criterioPrecioVenta = $criterioPrecioVenta;

        return $this;
    }

    /**
     * Get criterioPrecioVenta
     *
     * @return integer 
     */
    public function getCriterioPrecioVenta()
    {
        return $this->criterioPrecioVenta;
    }

    /**
     * Set idClasifactura
     *
     * @param string $idClasifactura
     * @return Cliente
     */
    public function setIdClasifactura($idClasifactura)
    {
        $this->idClasifactura = $idClasifactura;

        return $this;
    }

    /**
     * Get idClasifactura
     *
     * @return string 
     */
    public function getIdClasifactura()
    {
        return $this->idClasifactura;
    }

    /**
     * Set tributable
     *
     * @param boolean $tributable
     * @return Cliente
     */
    public function setTributable($tributable)
    {
        $this->tributable = $tributable;

        return $this;
    }

    /**
     * Get tributable
     *
     * @return boolean 
     */
    public function getTributable()
    {
        return $this->tributable;
    }

    /**
     * Set requiereDesc
     *
     * @param boolean $requiereDesc
     * @return Cliente
     */
    public function setRequiereDesc($requiereDesc)
    {
        $this->requiereDesc = $requiereDesc;

        return $this;
    }

    /**
     * Get requiereDesc
     *
     * @return boolean 
     */
    public function getRequiereDesc()
    {
        return $this->requiereDesc;
    }

    /**
     * Set codigoComoDeudor
     *
     * @param string $codigoComoDeudor
     * @return Cliente
     */
    public function setCodigoComoDeudor($codigoComoDeudor)
    {
        $this->codigoComoDeudor = $codigoComoDeudor;

        return $this;
    }

    /**
     * Get codigoComoDeudor
     *
     * @return string 
     */
    public function getCodigoComoDeudor()
    {
        return $this->codigoComoDeudor;
    }

    /**
     * Set interno
     *
     * @param boolean $interno
     * @return Cliente
     */
    public function setInterno($interno)
    {
        $this->interno = $interno;

        return $this;
    }

    /**
     * Get interno
     *
     * @return boolean 
     */
    public function getInterno()
    {
        return $this->interno;
    }

    /**
     * Set codareageo
     *
     * @param string $codareageo
     * @return Cliente
     */
    public function setCodareageo($codareageo)
    {
        $this->codareageo = $codareageo;

        return $this;
    }

    /**
     * Get codareageo
     *
     * @return string 
     */
    public function getCodareageo()
    {
        return $this->codareageo;
    }

    /**
     * Set codcanaldist
     *
     * @param string $codcanaldist
     * @return Cliente
     */
    public function setCodcanaldist($codcanaldist)
    {
        $this->codcanaldist = $codcanaldist;

        return $this;
    }

    /**
     * Get codcanaldist
     *
     * @return string 
     */
    public function getCodcanaldist()
    {
        return $this->codcanaldist;
    }

    /**
     * Set nocontrato
     *
     * @param string $nocontrato
     * @return Cliente
     */
    public function setNocontrato($nocontrato)
    {
        $this->nocontrato = $nocontrato;

        return $this;
    }

    /**
     * Get nocontrato
     *
     * @return string 
     */
    public function getNocontrato()
    {
        return $this->nocontrato;
    }

    /**
     * Set nosolicitud
     *
     * @param string $nosolicitud
     * @return Cliente
     */
    public function setNosolicitud($nosolicitud)
    {
        $this->nosolicitud = $nosolicitud;

        return $this;
    }

    /**
     * Get nosolicitud
     *
     * @return string 
     */
    public function getNosolicitud()
    {
        return $this->nosolicitud;
    }

    /**
     * Set nosucursal
     *
     * @param string $nosucursal
     * @return Cliente
     */
    public function setNosucursal($nosucursal)
    {
        $this->nosucursal = $nosucursal;

        return $this;
    }

    /**
     * Get nosucursal
     *
     * @return string 
     */
    public function getNosucursal()
    {
        return $this->nosucursal;
    }

    /**
     * Set noctas
     *
     * @param string $noctas
     * @return Cliente
     */
    public function setNoctas($noctas)
    {
        $this->noctas = $noctas;

        return $this;
    }

    /**
     * Get noctas
     *
     * @return string 
     */
    public function getNoctas()
    {
        return $this->noctas;
    }

    /**
     * Set idCobrador
     *
     * @param string $idCobrador
     * @return Cliente
     */
    public function setIdCobrador($idCobrador)
    {
        $this->idCobrador = $idCobrador;

        return $this;
    }

    /**
     * Get idCobrador
     *
     * @return string 
     */
    public function getIdCobrador()
    {
        return $this->idCobrador;
    }

    /**
     * Set listaPreciosermb
     *
     * @param integer $listaPreciosermb
     * @return Cliente
     */
    public function setListaPreciosermb($listaPreciosermb)
    {
        $this->listaPreciosermb = $listaPreciosermb;

        return $this;
    }

    /**
     * Get listaPreciosermb
     *
     * @return integer 
     */
    public function getListaPreciosermb()
    {
        return $this->listaPreciosermb;
    }

    /**
     * Set listaPreciosermc
     *
     * @param integer $listaPreciosermc
     * @return Cliente
     */
    public function setListaPreciosermc($listaPreciosermc)
    {
        $this->listaPreciosermc = $listaPreciosermc;

        return $this;
    }

    /**
     * Get listaPreciosermc
     *
     * @return integer 
     */
    public function getListaPreciosermc()
    {
        return $this->listaPreciosermc;
    }

    /**
     * Set idRecomen
     *
     * @param string $idRecomen
     * @return Cliente
     */
    public function setIdRecomen($idRecomen)
    {
        $this->idRecomen = $idRecomen;

        return $this;
    }

    /**
     * Get idRecomen
     *
     * @return string 
     */
    public function getIdRecomen()
    {
        return $this->idRecomen;
    }

    /**
     * Set descRecomen
     *
     * @param string $descRecomen
     * @return Cliente
     */
    public function setDescRecomen($descRecomen)
    {
        $this->descRecomen = $descRecomen;

        return $this;
    }

    /**
     * Get descRecomen
     *
     * @return string 
     */
    public function getDescRecomen()
    {
        return $this->descRecomen;
    }

    /**
     * Set monedaFactura
     *
     * @param string $monedaFactura
     * @return Cliente
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
     * Set idClasifacturaSalario
     *
     * @param string $idClasifacturaSalario
     * @return Cliente
     */
    public function setIdClasifacturaSalario($idClasifacturaSalario)
    {
        $this->idClasifacturaSalario = $idClasifacturaSalario;

        return $this;
    }

    /**
     * Get idClasifacturaSalario
     *
     * @return string 
     */
    public function getIdClasifacturaSalario()
    {
        return $this->idClasifacturaSalario;
    }

    /**
     * Set idClasifacturaIndemnizacion
     *
     * @param string $idClasifacturaIndemnizacion
     * @return Cliente
     */
    public function setIdClasifacturaIndemnizacion($idClasifacturaIndemnizacion)
    {
        $this->idClasifacturaIndemnizacion = $idClasifacturaIndemnizacion;

        return $this;
    }

    /**
     * Get idClasifacturaIndemnizacion
     *
     * @return string 
     */
    public function getIdClasifacturaIndemnizacion()
    {
        return $this->idClasifacturaIndemnizacion;
    }

    /**
     * Set fechaContrato
     *
     * @param \DateTime $fechaContrato
     * @return Cliente
     */
    public function setFechaContrato($fechaContrato)
    {
        $this->fechaContrato = $fechaContrato;

        return $this;
    }

    /**
     * Get fechaContrato
     *
     * @return \DateTime 
     */
    public function getFechaContrato()
    {
        return $this->fechaContrato;
    }

    /**
     * Set regComercial
     *
     * @param string $regComercial
     * @return Cliente
     */
    public function setRegComercial($regComercial)
    {
        $this->regComercial = $regComercial;

        return $this;
    }

    /**
     * Get regComercial
     *
     * @return string 
     */
    public function getRegComercial()
    {
        return $this->regComercial;
    }

    /**
     * Set codigoOne
     *
     * @param string $codigoOne
     * @return Cliente
     */
    public function setCodigoOne($codigoOne)
    {
        $this->codigoOne = $codigoOne;

        return $this;
    }

    /**
     * Get codigoOne
     *
     * @return string 
     */
    public function getCodigoOne()
    {
        return $this->codigoOne;
    }

    /**
     * Set noctasmc
     *
     * @param string $noctasmc
     * @return Cliente
     */
    public function setNoctasmc($noctasmc)
    {
        $this->noctasmc = $noctasmc;

        return $this;
    }

    /**
     * Get noctasmc
     *
     * @return string 
     */
    public function getNoctasmc()
    {
        return $this->noctasmc;
    }

    /**
     * Set fechaEntrada
     *
     * @param \DateTime $fechaEntrada
     * @return Cliente
     */
    public function setFechaEntrada($fechaEntrada)
    {
        $this->fechaEntrada = $fechaEntrada;

        return $this;
    }

    /**
     * Get fechaEntrada
     *
     * @return \DateTime 
     */
    public function getFechaEntrada()
    {
        return $this->fechaEntrada;
    }

    /**
     * Set codrutadist
     *
     * @param string $codrutadist
     * @return Cliente
     */
    public function setCodrutadist($codrutadist)
    {
        $this->codrutadist = $codrutadist;

        return $this;
    }

    /**
     * Get codrutadist
     *
     * @return string 
     */
    public function getCodrutadist()
    {
        return $this->codrutadist;
    }

    /**
     * Set tiponcf
     *
     * @param integer $tiponcf
     * @return Cliente
     */
    public function setTiponcf($tiponcf)
    {
        $this->tiponcf = $tiponcf;

        return $this;
    }

    /**
     * Get tiponcf
     *
     * @return integer 
     */
    public function getTiponcf()
    {
        return $this->tiponcf;
    }

    /**
     * Set factvsanticipo
     *
     * @param boolean $factvsanticipo
     * @return Cliente
     */
    public function setFactvsanticipo($factvsanticipo)
    {
        $this->factvsanticipo = $factvsanticipo;

        return $this;
    }

    /**
     * Get factvsanticipo
     *
     * @return boolean 
     */
    public function getFactvsanticipo()
    {
        return $this->factvsanticipo;
    }

    /**
     * Set valorLimiteMc
     *
     * @param integer $valorLimiteMc
     * @return Cliente
     */
    public function setValorLimiteMc($valorLimiteMc)
    {
        $this->valorLimiteMc = $valorLimiteMc;

        return $this;
    }

    /**
     * Get valorLimiteMc
     *
     * @return integer 
     */
    public function getValorLimiteMc()
    {
        return $this->valorLimiteMc;
    }

    /**
     * Set creditoMc
     *
     * @param integer $creditoMc
     * @return Cliente
     */
    public function setCreditoMc($creditoMc)
    {
        $this->creditoMc = $creditoMc;

        return $this;
    }

    /**
     * Get creditoMc
     *
     * @return integer 
     */
    public function getCreditoMc()
    {
        return $this->creditoMc;
    }

    /**
     * Set preferencial
     *
     * @param boolean $preferencial
     * @return Cliente
     */
    public function setPreferencial($preferencial)
    {
        $this->preferencial = $preferencial;

        return $this;
    }

    /**
     * Get preferencial
     *
     * @return boolean 
     */
    public function getPreferencial()
    {
        return $this->preferencial;
    }

    /**
     * Set vip
     *
     * @param boolean $vip
     * @return Cliente
     */
    public function setVip($vip)
    {
        $this->vip = $vip;

        return $this;
    }

    /**
     * Get vip
     *
     * @return boolean 
     */
    public function getVip()
    {
        return $this->vip;
    }

    /**
     * Set importeAfavor
     *
     * @param integer $importeAfavor
     * @return Cliente
     */
    public function setImporteAfavor($importeAfavor)
    {
        $this->importeAfavor = $importeAfavor;

        return $this;
    }

    /**
     * Get importeAfavor
     *
     * @return integer 
     */
    public function getImporteAfavor()
    {
        return $this->importeAfavor;
    }

    /**
     * Set potencial
     *
     * @param boolean $potencial
     * @return Cliente
     */
    public function setPotencial($potencial)
    {
        $this->potencial = $potencial;

        return $this;
    }

    /**
     * Get potencial
     *
     * @return boolean 
     */
    public function getPotencial()
    {
        return $this->potencial;
    }

    /**
     * Set idClasifCliente
     *
     * @param string $idClasifCliente
     * @return Cliente
     */
    public function setIdClasifCliente($idClasifCliente)
    {
        $this->idClasifCliente = $idClasifCliente;

        return $this;
    }

    /**
     * Get idClasifCliente
     *
     * @return string 
     */
    public function getIdClasifCliente()
    {
        return $this->idClasifCliente;
    }
}
