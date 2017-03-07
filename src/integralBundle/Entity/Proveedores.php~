<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proveedores
 *
 * @ORM\Table(name="Proveedores", indexes={@ORM\Index(name="Org_Proveedor", columns={"Id_Organismo"})})
 * @ORM\Entity
 */
class Proveedores
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Proveedor", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Proveedor", type="string", length=50, nullable=false)
     */
    private $descProveedor;

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
     * @ORM\Column(name="E_mail", type="string", length=50, nullable=false)
     */
    private $eMail;

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
     * @var string
     *
     * @ORM\Column(name="DescuentoMB", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $descuentomb;

    /**
     * @var string
     *
     * @ORM\Column(name="DescuentoMC", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $descuentomc;

    /**
     * @var string
     *
     * @ORM\Column(name="RecargoMB", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $recargomb;

    /**
     * @var string
     *
     * @ORM\Column(name="RecargoMC", type="decimal", precision=5, scale=2, nullable=false)
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
     * @var string
     *
     * @ORM\Column(name="Id_Clasirecep", type="string", length=10, nullable=false)
     */
    private $idClasirecep;

    /**
     * @var string
     *
     * @ORM\Column(name="PrefijoOC", type="string", length=15, nullable=false)
     */
    private $prefijooc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ContadorOC", type="integer", nullable=false)
     */
    private $contadoroc;

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda", type="string", length=5, nullable=false)
     */
    private $moneda;

    /**
     * @var string
     *
     * @ORM\Column(name="Beneficiario", type="string", length=50, nullable=false)
     */
    private $beneficiario;

    /**
     * @var boolean
     *
     * @ORM\Column(name="GenerarNCF", type="boolean", nullable=false)
     */
    private $generarncf;

    /**
     * @var boolean
     *
     * @ORM\Column(name="GenerarNCF_PDir", type="boolean", nullable=false)
     */
    private $generarncfPdir;

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
     * @var boolean
     *
     * @ORM\Column(name="ExentoNCF", type="boolean", nullable=false)
     */
    private $exentoncf;

    /**
     * @var boolean
     *
     * @ORM\Column(name="VIP", type="boolean", nullable=false)
     */
    private $vip;



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
     * @return Proveedores
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
     * Set nombreContacto
     *
     * @param string $nombreContacto
     * @return Proveedores
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
     * @return Proveedores
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
     * @return Proveedores
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
     * @return Proveedores
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
     * @return Proveedores
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
     * @return Proveedores
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
     * @return Proveedores
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
     * @return Proveedores
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
     * @return Proveedores
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
     * Set eMail
     *
     * @param string $eMail
     * @return Proveedores
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
     * Set nota
     *
     * @param string $nota
     * @return Proveedores
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
     * @return Proveedores
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
     * @return Proveedores
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
     * @return Proveedores
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
     * @return Proveedores
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
     * @param string $descuentomb
     * @return Proveedores
     */
    public function setDescuentomb($descuentomb)
    {
        $this->descuentomb = $descuentomb;

        return $this;
    }

    /**
     * Get descuentomb
     *
     * @return string 
     */
    public function getDescuentomb()
    {
        return $this->descuentomb;
    }

    /**
     * Set descuentomc
     *
     * @param string $descuentomc
     * @return Proveedores
     */
    public function setDescuentomc($descuentomc)
    {
        $this->descuentomc = $descuentomc;

        return $this;
    }

    /**
     * Get descuentomc
     *
     * @return string 
     */
    public function getDescuentomc()
    {
        return $this->descuentomc;
    }

    /**
     * Set recargomb
     *
     * @param string $recargomb
     * @return Proveedores
     */
    public function setRecargomb($recargomb)
    {
        $this->recargomb = $recargomb;

        return $this;
    }

    /**
     * Get recargomb
     *
     * @return string 
     */
    public function getRecargomb()
    {
        return $this->recargomb;
    }

    /**
     * Set recargomc
     *
     * @param string $recargomc
     * @return Proveedores
     */
    public function setRecargomc($recargomc)
    {
        $this->recargomc = $recargomc;

        return $this;
    }

    /**
     * Get recargomc
     *
     * @return string 
     */
    public function getRecargomc()
    {
        return $this->recargomc;
    }

    /**
     * Set limiteCredito
     *
     * @param integer $limiteCredito
     * @return Proveedores
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
     * @return Proveedores
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
     * Set descontinuado
     *
     * @param boolean $descontinuado
     * @return Proveedores
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
     * @return Proveedores
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
     * @return Proveedores
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
     * @return Proveedores
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
     * Set idClasirecep
     *
     * @param string $idClasirecep
     * @return Proveedores
     */
    public function setIdClasirecep($idClasirecep)
    {
        $this->idClasirecep = $idClasirecep;

        return $this;
    }

    /**
     * Get idClasirecep
     *
     * @return string 
     */
    public function getIdClasirecep()
    {
        return $this->idClasirecep;
    }

    /**
     * Set prefijooc
     *
     * @param string $prefijooc
     * @return Proveedores
     */
    public function setPrefijooc($prefijooc)
    {
        $this->prefijooc = $prefijooc;

        return $this;
    }

    /**
     * Get prefijooc
     *
     * @return string 
     */
    public function getPrefijooc()
    {
        return $this->prefijooc;
    }

    /**
     * Set contadoroc
     *
     * @param integer $contadoroc
     * @return Proveedores
     */
    public function setContadoroc($contadoroc)
    {
        $this->contadoroc = $contadoroc;

        return $this;
    }

    /**
     * Get contadoroc
     *
     * @return integer 
     */
    public function getContadoroc()
    {
        return $this->contadoroc;
    }

    /**
     * Set moneda
     *
     * @param string $moneda
     * @return Proveedores
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
     * Set beneficiario
     *
     * @param string $beneficiario
     * @return Proveedores
     */
    public function setBeneficiario($beneficiario)
    {
        $this->beneficiario = $beneficiario;

        return $this;
    }

    /**
     * Get beneficiario
     *
     * @return string 
     */
    public function getBeneficiario()
    {
        return $this->beneficiario;
    }

    /**
     * Set generarncf
     *
     * @param boolean $generarncf
     * @return Proveedores
     */
    public function setGenerarncf($generarncf)
    {
        $this->generarncf = $generarncf;

        return $this;
    }

    /**
     * Get generarncf
     *
     * @return boolean 
     */
    public function getGenerarncf()
    {
        return $this->generarncf;
    }

    /**
     * Set generarncfPdir
     *
     * @param boolean $generarncfPdir
     * @return Proveedores
     */
    public function setGenerarncfPdir($generarncfPdir)
    {
        $this->generarncfPdir = $generarncfPdir;

        return $this;
    }

    /**
     * Get generarncfPdir
     *
     * @return boolean 
     */
    public function getGenerarncfPdir()
    {
        return $this->generarncfPdir;
    }

    /**
     * Set nosucursal
     *
     * @param string $nosucursal
     * @return Proveedores
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
     * @return Proveedores
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
     * Set exentoncf
     *
     * @param boolean $exentoncf
     * @return Proveedores
     */
    public function setExentoncf($exentoncf)
    {
        $this->exentoncf = $exentoncf;

        return $this;
    }

    /**
     * Get exentoncf
     *
     * @return boolean 
     */
    public function getExentoncf()
    {
        return $this->exentoncf;
    }

    /**
     * Set vip
     *
     * @param boolean $vip
     * @return Proveedores
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
}
