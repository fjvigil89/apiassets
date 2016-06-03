<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaracterizacionContabilidad
 *
 * @ORM\Table(name="Caracterizacion_Contabilidad")
 * @ORM\Entity
 */
class CaracterizacionContabilidad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Max_Meses_Abiertos", type="smallint", nullable=false)
     */
    private $maxMesesAbiertos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Dar_Quitar_VBueno", type="boolean", nullable=false)
     */
    private $darQuitarVbueno;

    /**
     * @var boolean
     *
     * @ORM\Column(name="NotaDoc_EnComprobante", type="boolean", nullable=false)
     */
    private $notadocEncomprobante;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Usa_Id_Fa_Provee_AlContabilizar_Rx", type="boolean", nullable=false)
     */
    private $usaIdFaProveeAlcontabilizarRx;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Usa_Conduce_AlContabilizar_Fa", type="boolean", nullable=false)
     */
    private $usaConduceAlcontabilizarFa;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Usa_Drag_Drop_Compro_Opened", type="boolean", nullable=false)
     */
    private $usaDragDropComproOpened;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Usar_Parametrizados_Extendidos", type="boolean", nullable=false)
     */
    private $usarParametrizadosExtendidos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Usar_EF_Formato_UNI", type="boolean", nullable=false)
     */
    private $usarEfFormatoUni;

    /**
     * @var string
     *
     * @ORM\Column(name="Siglas_Organismo", type="string", length=10, nullable=false)
     */
    private $siglasOrganismo;

    /**
     * @var string
     *
     * @ORM\Column(name="Siglas_Entidad", type="string", length=10, nullable=false)
     */
    private $siglasEntidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Organismo", type="string", length=5, nullable=false)
     */
    private $idOrganismo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Entidad", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEntidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Provincia", type="string", length=2, nullable=false)
     */
    private $idProvincia;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Municipio", type="string", length=2, nullable=false)
     */
    private $idMunicipio;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Sector", type="string", length=2, nullable=false)
     */
    private $idSector;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Rama", type="string", length=2, nullable=false)
     */
    private $idRama;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_SubRama", type="string", length=2, nullable=false)
     */
    private $idSubrama;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Restar_Debe_Haber", type="boolean", nullable=false)
     */
    private $restarDebeHaber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Usar_ALLCuentas_IN_ER_ES", type="boolean", nullable=false)
     */
    private $usarAllcuentasInErEs;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Forzar_Cierre_AF", type="boolean", nullable=false)
     */
    private $forzarCierreAf;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Forzar_Cierre_CI", type="boolean", nullable=false)
     */
    private $forzarCierreCi;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Forzar_Cierre_FM", type="boolean", nullable=false)
     */
    private $forzarCierreFm;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Forzar_Cierre_PN", type="boolean", nullable=false)
     */
    private $forzarCierrePn;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Forzar_Cierre_UH", type="boolean", nullable=false)
     */
    private $forzarCierreUh;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Forzar_Cierre_PI", type="boolean", nullable=false)
     */
    private $forzarCierrePi;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Forzar_Cierre_TI", type="boolean", nullable=false)
     */
    private $forzarCierreTi;

    /**
     * @var boolean
     *
     * @ORM\Column(name="V2Set", type="boolean", nullable=false)
     */
    private $v2set;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cierre_Anual_xMonedas", type="boolean", nullable=false)
     */
    private $cierreAnualXmonedas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Usar_Cbos_Descr_Cuentas", type="boolean", nullable=false)
     */
    private $usarCbosDescrCuentas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Ajustar_Haber", type="boolean", nullable=false)
     */
    private $ajustarHaber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Generar_Cuentas_Auto", type="boolean", nullable=false)
     */
    private $generarCuentasAuto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Suprimir_Saldos_Cero", type="boolean", nullable=false)
     */
    private $suprimirSaldosCero;

    /**
     * @var string
     *
     * @ORM\Column(name="Variante_Corp", type="string", length=3, nullable=false)
     */
    private $varianteCorp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Requiere_Autoriz_pCerrar", type="boolean", nullable=false)
     */
    private $requiereAutorizPcerrar;

    /**
     * @var string
     *
     * @ORM\Column(name="Variante_ElSele", type="string", length=3, nullable=false)
     */
    private $varianteElsele;



    /**
     * Set maxMesesAbiertos
     *
     * @param integer $maxMesesAbiertos
     * @return CaracterizacionContabilidad
     */
    public function setMaxMesesAbiertos($maxMesesAbiertos)
    {
        $this->maxMesesAbiertos = $maxMesesAbiertos;

        return $this;
    }

    /**
     * Get maxMesesAbiertos
     *
     * @return integer 
     */
    public function getMaxMesesAbiertos()
    {
        return $this->maxMesesAbiertos;
    }

    /**
     * Set darQuitarVbueno
     *
     * @param boolean $darQuitarVbueno
     * @return CaracterizacionContabilidad
     */
    public function setDarQuitarVbueno($darQuitarVbueno)
    {
        $this->darQuitarVbueno = $darQuitarVbueno;

        return $this;
    }

    /**
     * Get darQuitarVbueno
     *
     * @return boolean 
     */
    public function getDarQuitarVbueno()
    {
        return $this->darQuitarVbueno;
    }

    /**
     * Set notadocEncomprobante
     *
     * @param boolean $notadocEncomprobante
     * @return CaracterizacionContabilidad
     */
    public function setNotadocEncomprobante($notadocEncomprobante)
    {
        $this->notadocEncomprobante = $notadocEncomprobante;

        return $this;
    }

    /**
     * Get notadocEncomprobante
     *
     * @return boolean 
     */
    public function getNotadocEncomprobante()
    {
        return $this->notadocEncomprobante;
    }

    /**
     * Set usaIdFaProveeAlcontabilizarRx
     *
     * @param boolean $usaIdFaProveeAlcontabilizarRx
     * @return CaracterizacionContabilidad
     */
    public function setUsaIdFaProveeAlcontabilizarRx($usaIdFaProveeAlcontabilizarRx)
    {
        $this->usaIdFaProveeAlcontabilizarRx = $usaIdFaProveeAlcontabilizarRx;

        return $this;
    }

    /**
     * Get usaIdFaProveeAlcontabilizarRx
     *
     * @return boolean 
     */
    public function getUsaIdFaProveeAlcontabilizarRx()
    {
        return $this->usaIdFaProveeAlcontabilizarRx;
    }

    /**
     * Set usaConduceAlcontabilizarFa
     *
     * @param boolean $usaConduceAlcontabilizarFa
     * @return CaracterizacionContabilidad
     */
    public function setUsaConduceAlcontabilizarFa($usaConduceAlcontabilizarFa)
    {
        $this->usaConduceAlcontabilizarFa = $usaConduceAlcontabilizarFa;

        return $this;
    }

    /**
     * Get usaConduceAlcontabilizarFa
     *
     * @return boolean 
     */
    public function getUsaConduceAlcontabilizarFa()
    {
        return $this->usaConduceAlcontabilizarFa;
    }

    /**
     * Set usaDragDropComproOpened
     *
     * @param boolean $usaDragDropComproOpened
     * @return CaracterizacionContabilidad
     */
    public function setUsaDragDropComproOpened($usaDragDropComproOpened)
    {
        $this->usaDragDropComproOpened = $usaDragDropComproOpened;

        return $this;
    }

    /**
     * Get usaDragDropComproOpened
     *
     * @return boolean 
     */
    public function getUsaDragDropComproOpened()
    {
        return $this->usaDragDropComproOpened;
    }

    /**
     * Set usarParametrizadosExtendidos
     *
     * @param boolean $usarParametrizadosExtendidos
     * @return CaracterizacionContabilidad
     */
    public function setUsarParametrizadosExtendidos($usarParametrizadosExtendidos)
    {
        $this->usarParametrizadosExtendidos = $usarParametrizadosExtendidos;

        return $this;
    }

    /**
     * Get usarParametrizadosExtendidos
     *
     * @return boolean 
     */
    public function getUsarParametrizadosExtendidos()
    {
        return $this->usarParametrizadosExtendidos;
    }

    /**
     * Set usarEfFormatoUni
     *
     * @param boolean $usarEfFormatoUni
     * @return CaracterizacionContabilidad
     */
    public function setUsarEfFormatoUni($usarEfFormatoUni)
    {
        $this->usarEfFormatoUni = $usarEfFormatoUni;

        return $this;
    }

    /**
     * Get usarEfFormatoUni
     *
     * @return boolean 
     */
    public function getUsarEfFormatoUni()
    {
        return $this->usarEfFormatoUni;
    }

    /**
     * Set siglasOrganismo
     *
     * @param string $siglasOrganismo
     * @return CaracterizacionContabilidad
     */
    public function setSiglasOrganismo($siglasOrganismo)
    {
        $this->siglasOrganismo = $siglasOrganismo;

        return $this;
    }

    /**
     * Get siglasOrganismo
     *
     * @return string 
     */
    public function getSiglasOrganismo()
    {
        return $this->siglasOrganismo;
    }

    /**
     * Set siglasEntidad
     *
     * @param string $siglasEntidad
     * @return CaracterizacionContabilidad
     */
    public function setSiglasEntidad($siglasEntidad)
    {
        $this->siglasEntidad = $siglasEntidad;

        return $this;
    }

    /**
     * Get siglasEntidad
     *
     * @return string 
     */
    public function getSiglasEntidad()
    {
        return $this->siglasEntidad;
    }

    /**
     * Set idOrganismo
     *
     * @param string $idOrganismo
     * @return CaracterizacionContabilidad
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
     * Get idEntidad
     *
     * @return string 
     */
    public function getIdEntidad()
    {
        return $this->idEntidad;
    }

    /**
     * Set idProvincia
     *
     * @param string $idProvincia
     * @return CaracterizacionContabilidad
     */
    public function setIdProvincia($idProvincia)
    {
        $this->idProvincia = $idProvincia;

        return $this;
    }

    /**
     * Get idProvincia
     *
     * @return string 
     */
    public function getIdProvincia()
    {
        return $this->idProvincia;
    }

    /**
     * Set idMunicipio
     *
     * @param string $idMunicipio
     * @return CaracterizacionContabilidad
     */
    public function setIdMunicipio($idMunicipio)
    {
        $this->idMunicipio = $idMunicipio;

        return $this;
    }

    /**
     * Get idMunicipio
     *
     * @return string 
     */
    public function getIdMunicipio()
    {
        return $this->idMunicipio;
    }

    /**
     * Set idSector
     *
     * @param string $idSector
     * @return CaracterizacionContabilidad
     */
    public function setIdSector($idSector)
    {
        $this->idSector = $idSector;

        return $this;
    }

    /**
     * Get idSector
     *
     * @return string 
     */
    public function getIdSector()
    {
        return $this->idSector;
    }

    /**
     * Set idRama
     *
     * @param string $idRama
     * @return CaracterizacionContabilidad
     */
    public function setIdRama($idRama)
    {
        $this->idRama = $idRama;

        return $this;
    }

    /**
     * Get idRama
     *
     * @return string 
     */
    public function getIdRama()
    {
        return $this->idRama;
    }

    /**
     * Set idSubrama
     *
     * @param string $idSubrama
     * @return CaracterizacionContabilidad
     */
    public function setIdSubrama($idSubrama)
    {
        $this->idSubrama = $idSubrama;

        return $this;
    }

    /**
     * Get idSubrama
     *
     * @return string 
     */
    public function getIdSubrama()
    {
        return $this->idSubrama;
    }

    /**
     * Set restarDebeHaber
     *
     * @param boolean $restarDebeHaber
     * @return CaracterizacionContabilidad
     */
    public function setRestarDebeHaber($restarDebeHaber)
    {
        $this->restarDebeHaber = $restarDebeHaber;

        return $this;
    }

    /**
     * Get restarDebeHaber
     *
     * @return boolean 
     */
    public function getRestarDebeHaber()
    {
        return $this->restarDebeHaber;
    }

    /**
     * Set usarAllcuentasInErEs
     *
     * @param boolean $usarAllcuentasInErEs
     * @return CaracterizacionContabilidad
     */
    public function setUsarAllcuentasInErEs($usarAllcuentasInErEs)
    {
        $this->usarAllcuentasInErEs = $usarAllcuentasInErEs;

        return $this;
    }

    /**
     * Get usarAllcuentasInErEs
     *
     * @return boolean 
     */
    public function getUsarAllcuentasInErEs()
    {
        return $this->usarAllcuentasInErEs;
    }

    /**
     * Set forzarCierreAf
     *
     * @param boolean $forzarCierreAf
     * @return CaracterizacionContabilidad
     */
    public function setForzarCierreAf($forzarCierreAf)
    {
        $this->forzarCierreAf = $forzarCierreAf;

        return $this;
    }

    /**
     * Get forzarCierreAf
     *
     * @return boolean 
     */
    public function getForzarCierreAf()
    {
        return $this->forzarCierreAf;
    }

    /**
     * Set forzarCierreCi
     *
     * @param boolean $forzarCierreCi
     * @return CaracterizacionContabilidad
     */
    public function setForzarCierreCi($forzarCierreCi)
    {
        $this->forzarCierreCi = $forzarCierreCi;

        return $this;
    }

    /**
     * Get forzarCierreCi
     *
     * @return boolean 
     */
    public function getForzarCierreCi()
    {
        return $this->forzarCierreCi;
    }

    /**
     * Set forzarCierreFm
     *
     * @param boolean $forzarCierreFm
     * @return CaracterizacionContabilidad
     */
    public function setForzarCierreFm($forzarCierreFm)
    {
        $this->forzarCierreFm = $forzarCierreFm;

        return $this;
    }

    /**
     * Get forzarCierreFm
     *
     * @return boolean 
     */
    public function getForzarCierreFm()
    {
        return $this->forzarCierreFm;
    }

    /**
     * Set forzarCierrePn
     *
     * @param boolean $forzarCierrePn
     * @return CaracterizacionContabilidad
     */
    public function setForzarCierrePn($forzarCierrePn)
    {
        $this->forzarCierrePn = $forzarCierrePn;

        return $this;
    }

    /**
     * Get forzarCierrePn
     *
     * @return boolean 
     */
    public function getForzarCierrePn()
    {
        return $this->forzarCierrePn;
    }

    /**
     * Set forzarCierreUh
     *
     * @param boolean $forzarCierreUh
     * @return CaracterizacionContabilidad
     */
    public function setForzarCierreUh($forzarCierreUh)
    {
        $this->forzarCierreUh = $forzarCierreUh;

        return $this;
    }

    /**
     * Get forzarCierreUh
     *
     * @return boolean 
     */
    public function getForzarCierreUh()
    {
        return $this->forzarCierreUh;
    }

    /**
     * Set forzarCierrePi
     *
     * @param boolean $forzarCierrePi
     * @return CaracterizacionContabilidad
     */
    public function setForzarCierrePi($forzarCierrePi)
    {
        $this->forzarCierrePi = $forzarCierrePi;

        return $this;
    }

    /**
     * Get forzarCierrePi
     *
     * @return boolean 
     */
    public function getForzarCierrePi()
    {
        return $this->forzarCierrePi;
    }

    /**
     * Set forzarCierreTi
     *
     * @param boolean $forzarCierreTi
     * @return CaracterizacionContabilidad
     */
    public function setForzarCierreTi($forzarCierreTi)
    {
        $this->forzarCierreTi = $forzarCierreTi;

        return $this;
    }

    /**
     * Get forzarCierreTi
     *
     * @return boolean 
     */
    public function getForzarCierreTi()
    {
        return $this->forzarCierreTi;
    }

    /**
     * Set v2set
     *
     * @param boolean $v2set
     * @return CaracterizacionContabilidad
     */
    public function setV2set($v2set)
    {
        $this->v2set = $v2set;

        return $this;
    }

    /**
     * Get v2set
     *
     * @return boolean 
     */
    public function getV2set()
    {
        return $this->v2set;
    }

    /**
     * Set cierreAnualXmonedas
     *
     * @param boolean $cierreAnualXmonedas
     * @return CaracterizacionContabilidad
     */
    public function setCierreAnualXmonedas($cierreAnualXmonedas)
    {
        $this->cierreAnualXmonedas = $cierreAnualXmonedas;

        return $this;
    }

    /**
     * Get cierreAnualXmonedas
     *
     * @return boolean 
     */
    public function getCierreAnualXmonedas()
    {
        return $this->cierreAnualXmonedas;
    }

    /**
     * Set usarCbosDescrCuentas
     *
     * @param boolean $usarCbosDescrCuentas
     * @return CaracterizacionContabilidad
     */
    public function setUsarCbosDescrCuentas($usarCbosDescrCuentas)
    {
        $this->usarCbosDescrCuentas = $usarCbosDescrCuentas;

        return $this;
    }

    /**
     * Get usarCbosDescrCuentas
     *
     * @return boolean 
     */
    public function getUsarCbosDescrCuentas()
    {
        return $this->usarCbosDescrCuentas;
    }

    /**
     * Set ajustarHaber
     *
     * @param boolean $ajustarHaber
     * @return CaracterizacionContabilidad
     */
    public function setAjustarHaber($ajustarHaber)
    {
        $this->ajustarHaber = $ajustarHaber;

        return $this;
    }

    /**
     * Get ajustarHaber
     *
     * @return boolean 
     */
    public function getAjustarHaber()
    {
        return $this->ajustarHaber;
    }

    /**
     * Set generarCuentasAuto
     *
     * @param boolean $generarCuentasAuto
     * @return CaracterizacionContabilidad
     */
    public function setGenerarCuentasAuto($generarCuentasAuto)
    {
        $this->generarCuentasAuto = $generarCuentasAuto;

        return $this;
    }

    /**
     * Get generarCuentasAuto
     *
     * @return boolean 
     */
    public function getGenerarCuentasAuto()
    {
        return $this->generarCuentasAuto;
    }

    /**
     * Set suprimirSaldosCero
     *
     * @param boolean $suprimirSaldosCero
     * @return CaracterizacionContabilidad
     */
    public function setSuprimirSaldosCero($suprimirSaldosCero)
    {
        $this->suprimirSaldosCero = $suprimirSaldosCero;

        return $this;
    }

    /**
     * Get suprimirSaldosCero
     *
     * @return boolean 
     */
    public function getSuprimirSaldosCero()
    {
        return $this->suprimirSaldosCero;
    }

    /**
     * Set varianteCorp
     *
     * @param string $varianteCorp
     * @return CaracterizacionContabilidad
     */
    public function setVarianteCorp($varianteCorp)
    {
        $this->varianteCorp = $varianteCorp;

        return $this;
    }

    /**
     * Get varianteCorp
     *
     * @return string 
     */
    public function getVarianteCorp()
    {
        return $this->varianteCorp;
    }

    /**
     * Set requiereAutorizPcerrar
     *
     * @param boolean $requiereAutorizPcerrar
     * @return CaracterizacionContabilidad
     */
    public function setRequiereAutorizPcerrar($requiereAutorizPcerrar)
    {
        $this->requiereAutorizPcerrar = $requiereAutorizPcerrar;

        return $this;
    }

    /**
     * Get requiereAutorizPcerrar
     *
     * @return boolean 
     */
    public function getRequiereAutorizPcerrar()
    {
        return $this->requiereAutorizPcerrar;
    }

    /**
     * Set varianteElsele
     *
     * @param string $varianteElsele
     * @return CaracterizacionContabilidad
     */
    public function setVarianteElsele($varianteElsele)
    {
        $this->varianteElsele = $varianteElsele;

        return $this;
    }

    /**
     * Get varianteElsele
     *
     * @return string 
     */
    public function getVarianteElsele()
    {
        return $this->varianteElsele;
    }
}
