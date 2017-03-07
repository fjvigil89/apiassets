<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaracterizacionFinanzas
 *
 * @ORM\Table(name="Caracterizacion_Finanzas")
 * @ORM\Entity
 */
class CaracterizacionFinanzas
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="Validar_Imp_DocPago", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $validarImpDocpago;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen_PROPIO", type="string", length=5, nullable=false)
     */
    private $idAlmacenPropio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Genera_Comprobante_xDeuda_Cliente", type="boolean", nullable=false)
     */
    private $generaComprobanteXdeudaCliente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Genera_Comprobante_xDeuda_Proveedor", type="boolean", nullable=false)
     */
    private $generaComprobanteXdeudaProveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Localidad_Solic_Cheque", type="string", length=60, nullable=false)
     */
    private $localidadSolicCheque;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Incluir_Nota_EstCuenta_Bank", type="boolean", nullable=false)
     */
    private $incluirNotaEstcuentaBank;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias_Cheque_Vence", type="smallint", nullable=false)
     */
    private $diasChequeVence;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Usar_Fecha_Proveedor_enPPend", type="boolean", nullable=false)
     */
    private $usarFechaProveedorEnppend;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Usar_Datos_Tecnotex", type="boolean", nullable=false)
     */
    private $usarDatosTecnotex;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Usar_Porc_Retencion", type="boolean", nullable=false)
     */
    private $usarPorcRetencion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Forzar_Entrar_Concepto", type="boolean", nullable=false)
     */
    private $forzarEntrarConcepto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Usar_enCH_Default_MB", type="boolean", nullable=false)
     */
    private $usarEnchDefaultMb;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Pasar_Automatico_Cobros_aCH", type="boolean", nullable=false)
     */
    private $pasarAutomaticoCobrosAch;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Entrar_enCH_Movim_Fondo_Conc", type="boolean", nullable=false)
     */
    private $entrarEnchMovimFondoConc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consec_Ini_Reembolso", type="integer", nullable=false)
     */
    private $consecIniReembolso;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consec_Ini_Reembolso_MC", type="integer", nullable=false)
     */
    private $consecIniReembolsoMc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consec_Ini_Movimiento", type="integer", nullable=false)
     */
    private $consecIniMovimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consec_Ini_Movimiento_MC", type="integer", nullable=false)
     */
    private $consecIniMovimientoMc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consec_Ini_Liquidaciones", type="integer", nullable=false)
     */
    private $consecIniLiquidaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consec_Ini_Liquidaciones_MC", type="integer", nullable=false)
     */
    private $consecIniLiquidacionesMc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consec_Ini_Arqueos", type="integer", nullable=false)
     */
    private $consecIniArqueos;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consec_Ini_Arqueos_MC", type="integer", nullable=false)
     */
    private $consecIniArqueosMc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Forzar_Cierre_Fin", type="boolean", nullable=false)
     */
    private $forzarCierreFin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Forzar_Liquidar_Completo", type="boolean", nullable=false)
     */
    private $forzarLiquidarCompleto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="CH_1Solo_Anticipo_xEmpleado", type="boolean", nullable=false)
     */
    private $ch1soloAnticipoXempleado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consec_Ini_Depositos", type="integer", nullable=false)
     */
    private $consecIniDepositos;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consec_Ini_Depositos_MC", type="integer", nullable=false)
     */
    private $consecIniDepositosMc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Apertura_Cerrada_Fin", type="boolean", nullable=false)
     */
    private $aperturaCerradaFin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Usar_Fin_Centralizadas", type="boolean", nullable=false)
     */
    private $usarFinCentralizadas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Tr_Bank_Visib11", type="boolean", nullable=false)
     */
    private $trBankVisib11;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Incluir_Client_EstCuenta_Bank", type="boolean", nullable=false)
     */
    private $incluirClientEstcuentaBank;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Generar_Co_xDevolucion", type="boolean", nullable=false)
     */
    private $generarCoXdevolucion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Nuevo_Recibo_Fin", type="boolean", nullable=false)
     */
    private $nuevoReciboFin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Afectar_Fondo_Co_xMP", type="boolean", nullable=false)
     */
    private $afectarFondoCoXmp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Usar_MultiMoneda", type="boolean", nullable=false)
     */
    private $usarMultimoneda;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_FPago", type="string", length=3, nullable=false)
     */
    private $idFpago;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Concepto", type="string", length=10, nullable=false)
     */
    private $idConcepto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Compro_Deuda_Cliente_Confirmado", type="boolean", nullable=false)
     */
    private $comproDeudaClienteConfirmado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Compro_Deuda_Provee_Confirmado", type="boolean", nullable=false)
     */
    private $comproDeudaProveeConfirmado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Usar_PPto", type="boolean", nullable=false)
     */
    private $usarPpto;

    /**
     * @var integer
     *
     * @ORM\Column(name="BKI", type="smallint", nullable=false)
     */
    private $bki;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Generar_Pa_xDevolucion", type="boolean", nullable=false)
     */
    private $generarPaXdevolucion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consec_Cambio_Cl_Fa", type="integer", nullable=false)
     */
    private $consecCambioClFa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consec_Cambio_Cl_Rx", type="integer", nullable=false)
     */
    private $consecCambioClRx;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consec_Cambio_Cl_DeuCli", type="integer", nullable=false)
     */
    private $consecCambioClDeucli;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consec_Cambio_Cl_DeuPro", type="integer", nullable=false)
     */
    private $consecCambioClDeupro;



    /**
     * Get validarImpDocpago
     *
     * @return boolean 
     */
    public function getValidarImpDocpago()
    {
        return $this->validarImpDocpago;
    }

    /**
     * Set idAlmacenPropio
     *
     * @param string $idAlmacenPropio
     * @return CaracterizacionFinanzas
     */
    public function setIdAlmacenPropio($idAlmacenPropio)
    {
        $this->idAlmacenPropio = $idAlmacenPropio;

        return $this;
    }

    /**
     * Get idAlmacenPropio
     *
     * @return string 
     */
    public function getIdAlmacenPropio()
    {
        return $this->idAlmacenPropio;
    }

    /**
     * Set generaComprobanteXdeudaCliente
     *
     * @param boolean $generaComprobanteXdeudaCliente
     * @return CaracterizacionFinanzas
     */
    public function setGeneraComprobanteXdeudaCliente($generaComprobanteXdeudaCliente)
    {
        $this->generaComprobanteXdeudaCliente = $generaComprobanteXdeudaCliente;

        return $this;
    }

    /**
     * Get generaComprobanteXdeudaCliente
     *
     * @return boolean 
     */
    public function getGeneraComprobanteXdeudaCliente()
    {
        return $this->generaComprobanteXdeudaCliente;
    }

    /**
     * Set generaComprobanteXdeudaProveedor
     *
     * @param boolean $generaComprobanteXdeudaProveedor
     * @return CaracterizacionFinanzas
     */
    public function setGeneraComprobanteXdeudaProveedor($generaComprobanteXdeudaProveedor)
    {
        $this->generaComprobanteXdeudaProveedor = $generaComprobanteXdeudaProveedor;

        return $this;
    }

    /**
     * Get generaComprobanteXdeudaProveedor
     *
     * @return boolean 
     */
    public function getGeneraComprobanteXdeudaProveedor()
    {
        return $this->generaComprobanteXdeudaProveedor;
    }

    /**
     * Set localidadSolicCheque
     *
     * @param string $localidadSolicCheque
     * @return CaracterizacionFinanzas
     */
    public function setLocalidadSolicCheque($localidadSolicCheque)
    {
        $this->localidadSolicCheque = $localidadSolicCheque;

        return $this;
    }

    /**
     * Get localidadSolicCheque
     *
     * @return string 
     */
    public function getLocalidadSolicCheque()
    {
        return $this->localidadSolicCheque;
    }

    /**
     * Set incluirNotaEstcuentaBank
     *
     * @param boolean $incluirNotaEstcuentaBank
     * @return CaracterizacionFinanzas
     */
    public function setIncluirNotaEstcuentaBank($incluirNotaEstcuentaBank)
    {
        $this->incluirNotaEstcuentaBank = $incluirNotaEstcuentaBank;

        return $this;
    }

    /**
     * Get incluirNotaEstcuentaBank
     *
     * @return boolean 
     */
    public function getIncluirNotaEstcuentaBank()
    {
        return $this->incluirNotaEstcuentaBank;
    }

    /**
     * Set diasChequeVence
     *
     * @param integer $diasChequeVence
     * @return CaracterizacionFinanzas
     */
    public function setDiasChequeVence($diasChequeVence)
    {
        $this->diasChequeVence = $diasChequeVence;

        return $this;
    }

    /**
     * Get diasChequeVence
     *
     * @return integer 
     */
    public function getDiasChequeVence()
    {
        return $this->diasChequeVence;
    }

    /**
     * Set usarFechaProveedorEnppend
     *
     * @param boolean $usarFechaProveedorEnppend
     * @return CaracterizacionFinanzas
     */
    public function setUsarFechaProveedorEnppend($usarFechaProveedorEnppend)
    {
        $this->usarFechaProveedorEnppend = $usarFechaProveedorEnppend;

        return $this;
    }

    /**
     * Get usarFechaProveedorEnppend
     *
     * @return boolean 
     */
    public function getUsarFechaProveedorEnppend()
    {
        return $this->usarFechaProveedorEnppend;
    }

    /**
     * Set usarDatosTecnotex
     *
     * @param boolean $usarDatosTecnotex
     * @return CaracterizacionFinanzas
     */
    public function setUsarDatosTecnotex($usarDatosTecnotex)
    {
        $this->usarDatosTecnotex = $usarDatosTecnotex;

        return $this;
    }

    /**
     * Get usarDatosTecnotex
     *
     * @return boolean 
     */
    public function getUsarDatosTecnotex()
    {
        return $this->usarDatosTecnotex;
    }

    /**
     * Set usarPorcRetencion
     *
     * @param boolean $usarPorcRetencion
     * @return CaracterizacionFinanzas
     */
    public function setUsarPorcRetencion($usarPorcRetencion)
    {
        $this->usarPorcRetencion = $usarPorcRetencion;

        return $this;
    }

    /**
     * Get usarPorcRetencion
     *
     * @return boolean 
     */
    public function getUsarPorcRetencion()
    {
        return $this->usarPorcRetencion;
    }

    /**
     * Set forzarEntrarConcepto
     *
     * @param boolean $forzarEntrarConcepto
     * @return CaracterizacionFinanzas
     */
    public function setForzarEntrarConcepto($forzarEntrarConcepto)
    {
        $this->forzarEntrarConcepto = $forzarEntrarConcepto;

        return $this;
    }

    /**
     * Get forzarEntrarConcepto
     *
     * @return boolean 
     */
    public function getForzarEntrarConcepto()
    {
        return $this->forzarEntrarConcepto;
    }

    /**
     * Set usarEnchDefaultMb
     *
     * @param boolean $usarEnchDefaultMb
     * @return CaracterizacionFinanzas
     */
    public function setUsarEnchDefaultMb($usarEnchDefaultMb)
    {
        $this->usarEnchDefaultMb = $usarEnchDefaultMb;

        return $this;
    }

    /**
     * Get usarEnchDefaultMb
     *
     * @return boolean 
     */
    public function getUsarEnchDefaultMb()
    {
        return $this->usarEnchDefaultMb;
    }

    /**
     * Set pasarAutomaticoCobrosAch
     *
     * @param boolean $pasarAutomaticoCobrosAch
     * @return CaracterizacionFinanzas
     */
    public function setPasarAutomaticoCobrosAch($pasarAutomaticoCobrosAch)
    {
        $this->pasarAutomaticoCobrosAch = $pasarAutomaticoCobrosAch;

        return $this;
    }

    /**
     * Get pasarAutomaticoCobrosAch
     *
     * @return boolean 
     */
    public function getPasarAutomaticoCobrosAch()
    {
        return $this->pasarAutomaticoCobrosAch;
    }

    /**
     * Set entrarEnchMovimFondoConc
     *
     * @param boolean $entrarEnchMovimFondoConc
     * @return CaracterizacionFinanzas
     */
    public function setEntrarEnchMovimFondoConc($entrarEnchMovimFondoConc)
    {
        $this->entrarEnchMovimFondoConc = $entrarEnchMovimFondoConc;

        return $this;
    }

    /**
     * Get entrarEnchMovimFondoConc
     *
     * @return boolean 
     */
    public function getEntrarEnchMovimFondoConc()
    {
        return $this->entrarEnchMovimFondoConc;
    }

    /**
     * Set consecIniReembolso
     *
     * @param integer $consecIniReembolso
     * @return CaracterizacionFinanzas
     */
    public function setConsecIniReembolso($consecIniReembolso)
    {
        $this->consecIniReembolso = $consecIniReembolso;

        return $this;
    }

    /**
     * Get consecIniReembolso
     *
     * @return integer 
     */
    public function getConsecIniReembolso()
    {
        return $this->consecIniReembolso;
    }

    /**
     * Set consecIniReembolsoMc
     *
     * @param integer $consecIniReembolsoMc
     * @return CaracterizacionFinanzas
     */
    public function setConsecIniReembolsoMc($consecIniReembolsoMc)
    {
        $this->consecIniReembolsoMc = $consecIniReembolsoMc;

        return $this;
    }

    /**
     * Get consecIniReembolsoMc
     *
     * @return integer 
     */
    public function getConsecIniReembolsoMc()
    {
        return $this->consecIniReembolsoMc;
    }

    /**
     * Set consecIniMovimiento
     *
     * @param integer $consecIniMovimiento
     * @return CaracterizacionFinanzas
     */
    public function setConsecIniMovimiento($consecIniMovimiento)
    {
        $this->consecIniMovimiento = $consecIniMovimiento;

        return $this;
    }

    /**
     * Get consecIniMovimiento
     *
     * @return integer 
     */
    public function getConsecIniMovimiento()
    {
        return $this->consecIniMovimiento;
    }

    /**
     * Set consecIniMovimientoMc
     *
     * @param integer $consecIniMovimientoMc
     * @return CaracterizacionFinanzas
     */
    public function setConsecIniMovimientoMc($consecIniMovimientoMc)
    {
        $this->consecIniMovimientoMc = $consecIniMovimientoMc;

        return $this;
    }

    /**
     * Get consecIniMovimientoMc
     *
     * @return integer 
     */
    public function getConsecIniMovimientoMc()
    {
        return $this->consecIniMovimientoMc;
    }

    /**
     * Set consecIniLiquidaciones
     *
     * @param integer $consecIniLiquidaciones
     * @return CaracterizacionFinanzas
     */
    public function setConsecIniLiquidaciones($consecIniLiquidaciones)
    {
        $this->consecIniLiquidaciones = $consecIniLiquidaciones;

        return $this;
    }

    /**
     * Get consecIniLiquidaciones
     *
     * @return integer 
     */
    public function getConsecIniLiquidaciones()
    {
        return $this->consecIniLiquidaciones;
    }

    /**
     * Set consecIniLiquidacionesMc
     *
     * @param integer $consecIniLiquidacionesMc
     * @return CaracterizacionFinanzas
     */
    public function setConsecIniLiquidacionesMc($consecIniLiquidacionesMc)
    {
        $this->consecIniLiquidacionesMc = $consecIniLiquidacionesMc;

        return $this;
    }

    /**
     * Get consecIniLiquidacionesMc
     *
     * @return integer 
     */
    public function getConsecIniLiquidacionesMc()
    {
        return $this->consecIniLiquidacionesMc;
    }

    /**
     * Set consecIniArqueos
     *
     * @param integer $consecIniArqueos
     * @return CaracterizacionFinanzas
     */
    public function setConsecIniArqueos($consecIniArqueos)
    {
        $this->consecIniArqueos = $consecIniArqueos;

        return $this;
    }

    /**
     * Get consecIniArqueos
     *
     * @return integer 
     */
    public function getConsecIniArqueos()
    {
        return $this->consecIniArqueos;
    }

    /**
     * Set consecIniArqueosMc
     *
     * @param integer $consecIniArqueosMc
     * @return CaracterizacionFinanzas
     */
    public function setConsecIniArqueosMc($consecIniArqueosMc)
    {
        $this->consecIniArqueosMc = $consecIniArqueosMc;

        return $this;
    }

    /**
     * Get consecIniArqueosMc
     *
     * @return integer 
     */
    public function getConsecIniArqueosMc()
    {
        return $this->consecIniArqueosMc;
    }

    /**
     * Set forzarCierreFin
     *
     * @param boolean $forzarCierreFin
     * @return CaracterizacionFinanzas
     */
    public function setForzarCierreFin($forzarCierreFin)
    {
        $this->forzarCierreFin = $forzarCierreFin;

        return $this;
    }

    /**
     * Get forzarCierreFin
     *
     * @return boolean 
     */
    public function getForzarCierreFin()
    {
        return $this->forzarCierreFin;
    }

    /**
     * Set forzarLiquidarCompleto
     *
     * @param boolean $forzarLiquidarCompleto
     * @return CaracterizacionFinanzas
     */
    public function setForzarLiquidarCompleto($forzarLiquidarCompleto)
    {
        $this->forzarLiquidarCompleto = $forzarLiquidarCompleto;

        return $this;
    }

    /**
     * Get forzarLiquidarCompleto
     *
     * @return boolean 
     */
    public function getForzarLiquidarCompleto()
    {
        return $this->forzarLiquidarCompleto;
    }

    /**
     * Set ch1soloAnticipoXempleado
     *
     * @param boolean $ch1soloAnticipoXempleado
     * @return CaracterizacionFinanzas
     */
    public function setCh1soloAnticipoXempleado($ch1soloAnticipoXempleado)
    {
        $this->ch1soloAnticipoXempleado = $ch1soloAnticipoXempleado;

        return $this;
    }

    /**
     * Get ch1soloAnticipoXempleado
     *
     * @return boolean 
     */
    public function getCh1soloAnticipoXempleado()
    {
        return $this->ch1soloAnticipoXempleado;
    }

    /**
     * Set consecIniDepositos
     *
     * @param integer $consecIniDepositos
     * @return CaracterizacionFinanzas
     */
    public function setConsecIniDepositos($consecIniDepositos)
    {
        $this->consecIniDepositos = $consecIniDepositos;

        return $this;
    }

    /**
     * Get consecIniDepositos
     *
     * @return integer 
     */
    public function getConsecIniDepositos()
    {
        return $this->consecIniDepositos;
    }

    /**
     * Set consecIniDepositosMc
     *
     * @param integer $consecIniDepositosMc
     * @return CaracterizacionFinanzas
     */
    public function setConsecIniDepositosMc($consecIniDepositosMc)
    {
        $this->consecIniDepositosMc = $consecIniDepositosMc;

        return $this;
    }

    /**
     * Get consecIniDepositosMc
     *
     * @return integer 
     */
    public function getConsecIniDepositosMc()
    {
        return $this->consecIniDepositosMc;
    }

    /**
     * Set aperturaCerradaFin
     *
     * @param boolean $aperturaCerradaFin
     * @return CaracterizacionFinanzas
     */
    public function setAperturaCerradaFin($aperturaCerradaFin)
    {
        $this->aperturaCerradaFin = $aperturaCerradaFin;

        return $this;
    }

    /**
     * Get aperturaCerradaFin
     *
     * @return boolean 
     */
    public function getAperturaCerradaFin()
    {
        return $this->aperturaCerradaFin;
    }

    /**
     * Set usarFinCentralizadas
     *
     * @param boolean $usarFinCentralizadas
     * @return CaracterizacionFinanzas
     */
    public function setUsarFinCentralizadas($usarFinCentralizadas)
    {
        $this->usarFinCentralizadas = $usarFinCentralizadas;

        return $this;
    }

    /**
     * Get usarFinCentralizadas
     *
     * @return boolean 
     */
    public function getUsarFinCentralizadas()
    {
        return $this->usarFinCentralizadas;
    }

    /**
     * Set trBankVisib11
     *
     * @param boolean $trBankVisib11
     * @return CaracterizacionFinanzas
     */
    public function setTrBankVisib11($trBankVisib11)
    {
        $this->trBankVisib11 = $trBankVisib11;

        return $this;
    }

    /**
     * Get trBankVisib11
     *
     * @return boolean 
     */
    public function getTrBankVisib11()
    {
        return $this->trBankVisib11;
    }

    /**
     * Set incluirClientEstcuentaBank
     *
     * @param boolean $incluirClientEstcuentaBank
     * @return CaracterizacionFinanzas
     */
    public function setIncluirClientEstcuentaBank($incluirClientEstcuentaBank)
    {
        $this->incluirClientEstcuentaBank = $incluirClientEstcuentaBank;

        return $this;
    }

    /**
     * Get incluirClientEstcuentaBank
     *
     * @return boolean 
     */
    public function getIncluirClientEstcuentaBank()
    {
        return $this->incluirClientEstcuentaBank;
    }

    /**
     * Set generarCoXdevolucion
     *
     * @param boolean $generarCoXdevolucion
     * @return CaracterizacionFinanzas
     */
    public function setGenerarCoXdevolucion($generarCoXdevolucion)
    {
        $this->generarCoXdevolucion = $generarCoXdevolucion;

        return $this;
    }

    /**
     * Get generarCoXdevolucion
     *
     * @return boolean 
     */
    public function getGenerarCoXdevolucion()
    {
        return $this->generarCoXdevolucion;
    }

    /**
     * Set nuevoReciboFin
     *
     * @param boolean $nuevoReciboFin
     * @return CaracterizacionFinanzas
     */
    public function setNuevoReciboFin($nuevoReciboFin)
    {
        $this->nuevoReciboFin = $nuevoReciboFin;

        return $this;
    }

    /**
     * Get nuevoReciboFin
     *
     * @return boolean 
     */
    public function getNuevoReciboFin()
    {
        return $this->nuevoReciboFin;
    }

    /**
     * Set afectarFondoCoXmp
     *
     * @param boolean $afectarFondoCoXmp
     * @return CaracterizacionFinanzas
     */
    public function setAfectarFondoCoXmp($afectarFondoCoXmp)
    {
        $this->afectarFondoCoXmp = $afectarFondoCoXmp;

        return $this;
    }

    /**
     * Get afectarFondoCoXmp
     *
     * @return boolean 
     */
    public function getAfectarFondoCoXmp()
    {
        return $this->afectarFondoCoXmp;
    }

    /**
     * Set usarMultimoneda
     *
     * @param boolean $usarMultimoneda
     * @return CaracterizacionFinanzas
     */
    public function setUsarMultimoneda($usarMultimoneda)
    {
        $this->usarMultimoneda = $usarMultimoneda;

        return $this;
    }

    /**
     * Get usarMultimoneda
     *
     * @return boolean 
     */
    public function getUsarMultimoneda()
    {
        return $this->usarMultimoneda;
    }

    /**
     * Set idFpago
     *
     * @param string $idFpago
     * @return CaracterizacionFinanzas
     */
    public function setIdFpago($idFpago)
    {
        $this->idFpago = $idFpago;

        return $this;
    }

    /**
     * Get idFpago
     *
     * @return string 
     */
    public function getIdFpago()
    {
        return $this->idFpago;
    }

    /**
     * Set idConcepto
     *
     * @param string $idConcepto
     * @return CaracterizacionFinanzas
     */
    public function setIdConcepto($idConcepto)
    {
        $this->idConcepto = $idConcepto;

        return $this;
    }

    /**
     * Get idConcepto
     *
     * @return string 
     */
    public function getIdConcepto()
    {
        return $this->idConcepto;
    }

    /**
     * Set comproDeudaClienteConfirmado
     *
     * @param boolean $comproDeudaClienteConfirmado
     * @return CaracterizacionFinanzas
     */
    public function setComproDeudaClienteConfirmado($comproDeudaClienteConfirmado)
    {
        $this->comproDeudaClienteConfirmado = $comproDeudaClienteConfirmado;

        return $this;
    }

    /**
     * Get comproDeudaClienteConfirmado
     *
     * @return boolean 
     */
    public function getComproDeudaClienteConfirmado()
    {
        return $this->comproDeudaClienteConfirmado;
    }

    /**
     * Set comproDeudaProveeConfirmado
     *
     * @param boolean $comproDeudaProveeConfirmado
     * @return CaracterizacionFinanzas
     */
    public function setComproDeudaProveeConfirmado($comproDeudaProveeConfirmado)
    {
        $this->comproDeudaProveeConfirmado = $comproDeudaProveeConfirmado;

        return $this;
    }

    /**
     * Get comproDeudaProveeConfirmado
     *
     * @return boolean 
     */
    public function getComproDeudaProveeConfirmado()
    {
        return $this->comproDeudaProveeConfirmado;
    }

    /**
     * Set usarPpto
     *
     * @param boolean $usarPpto
     * @return CaracterizacionFinanzas
     */
    public function setUsarPpto($usarPpto)
    {
        $this->usarPpto = $usarPpto;

        return $this;
    }

    /**
     * Get usarPpto
     *
     * @return boolean 
     */
    public function getUsarPpto()
    {
        return $this->usarPpto;
    }

    /**
     * Set bki
     *
     * @param integer $bki
     * @return CaracterizacionFinanzas
     */
    public function setBki($bki)
    {
        $this->bki = $bki;

        return $this;
    }

    /**
     * Get bki
     *
     * @return integer 
     */
    public function getBki()
    {
        return $this->bki;
    }

    /**
     * Set generarPaXdevolucion
     *
     * @param boolean $generarPaXdevolucion
     * @return CaracterizacionFinanzas
     */
    public function setGenerarPaXdevolucion($generarPaXdevolucion)
    {
        $this->generarPaXdevolucion = $generarPaXdevolucion;

        return $this;
    }

    /**
     * Get generarPaXdevolucion
     *
     * @return boolean 
     */
    public function getGenerarPaXdevolucion()
    {
        return $this->generarPaXdevolucion;
    }

    /**
     * Set consecCambioClFa
     *
     * @param integer $consecCambioClFa
     * @return CaracterizacionFinanzas
     */
    public function setConsecCambioClFa($consecCambioClFa)
    {
        $this->consecCambioClFa = $consecCambioClFa;

        return $this;
    }

    /**
     * Get consecCambioClFa
     *
     * @return integer 
     */
    public function getConsecCambioClFa()
    {
        return $this->consecCambioClFa;
    }

    /**
     * Set consecCambioClRx
     *
     * @param integer $consecCambioClRx
     * @return CaracterizacionFinanzas
     */
    public function setConsecCambioClRx($consecCambioClRx)
    {
        $this->consecCambioClRx = $consecCambioClRx;

        return $this;
    }

    /**
     * Get consecCambioClRx
     *
     * @return integer 
     */
    public function getConsecCambioClRx()
    {
        return $this->consecCambioClRx;
    }

    /**
     * Set consecCambioClDeucli
     *
     * @param integer $consecCambioClDeucli
     * @return CaracterizacionFinanzas
     */
    public function setConsecCambioClDeucli($consecCambioClDeucli)
    {
        $this->consecCambioClDeucli = $consecCambioClDeucli;

        return $this;
    }

    /**
     * Get consecCambioClDeucli
     *
     * @return integer 
     */
    public function getConsecCambioClDeucli()
    {
        return $this->consecCambioClDeucli;
    }

    /**
     * Set consecCambioClDeupro
     *
     * @param integer $consecCambioClDeupro
     * @return CaracterizacionFinanzas
     */
    public function setConsecCambioClDeupro($consecCambioClDeupro)
    {
        $this->consecCambioClDeupro = $consecCambioClDeupro;

        return $this;
    }

    /**
     * Get consecCambioClDeupro
     *
     * @return integer 
     */
    public function getConsecCambioClDeupro()
    {
        return $this->consecCambioClDeupro;
    }
}
