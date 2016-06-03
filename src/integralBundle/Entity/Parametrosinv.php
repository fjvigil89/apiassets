<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametrosinv
 *
 * @ORM\Table(name="ParametrosInv")
 * @ORM\Entity
 */
class Parametrosinv
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_User", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="Fac_FrmPrint", type="smallint", nullable=false)
     */
    private $facFrmprint;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Fac_CanArt", type="boolean", nullable=false)
     */
    private $facCanart;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Fac_PrintCompo", type="boolean", nullable=false)
     */
    private $facPrintcompo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Vale_FrmPrint", type="smallint", nullable=false)
     */
    private $valeFrmprint;

    /**
     * @var integer
     *
     * @ORM\Column(name="Fac_Retroceso", type="smallint", nullable=false)
     */
    private $facRetroceso;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Fac_ExcluirSinE", type="boolean", nullable=false)
     */
    private $facExcluirsine;

    /**
     * @var string
     *
     * @ORM\Column(name="Fac_Campos", type="string", length=20, nullable=false)
     */
    private $facCampos;

    /**
     * @var integer
     *
     * @ORM\Column(name="Rec_FrmPrint", type="smallint", nullable=false)
     */
    private $recFrmprint;

    /**
     * @var string
     *
     * @ORM\Column(name="Rec_Campos", type="string", length=20, nullable=false)
     */
    private $recCampos;

    /**
     * @var integer
     *
     * @ORM\Column(name="Rec_Retroceso", type="smallint", nullable=false)
     */
    private $recRetroceso;

    /**
     * @var integer
     *
     * @ORM\Column(name="Vale_Retroceso", type="smallint", nullable=false)
     */
    private $valeRetroceso;

    /**
     * @var string
     *
     * @ORM\Column(name="Vale_Campos", type="string", length=10, nullable=false)
     */
    private $valeCampos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Vale_CanArt", type="boolean", nullable=false)
     */
    private $valeCanart;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dev_FrmPrint", type="smallint", nullable=false)
     */
    private $devFrmprint;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Dev_PrintCompo", type="boolean", nullable=false)
     */
    private $devPrintcompo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Rec_CheckPrecio", type="boolean", nullable=false)
     */
    private $recCheckprecio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Fac_Aduana", type="boolean", nullable=false)
     */
    private $facAduana;

    /**
     * @var string
     *
     * @ORM\Column(name="Fac_PathAduana", type="string", length=100, nullable=false)
     */
    private $facPathaduana;

    /**
     * @var integer
     *
     * @ORM\Column(name="OT_FrmPrint", type="smallint", nullable=false)
     */
    private $otFrmprint;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Fac_Page", type="boolean", nullable=false)
     */
    private $facPage;

    /**
     * @var boolean
     *
     * @ORM\Column(name="OT_DatosTec", type="boolean", nullable=false)
     */
    private $otDatostec;

    /**
     * @var integer
     *
     * @ORM\Column(name="OF_FrmPrint", type="smallint", nullable=false)
     */
    private $ofFrmprint;

    /**
     * @var integer
     *
     * @ORM\Column(name="OC_FrmPrint", type="smallint", nullable=false)
     */
    private $ocFrmprint;

    /**
     * @var boolean
     *
     * @ORM\Column(name="OT_Real", type="boolean", nullable=false)
     */
    private $otReal;

    /**
     * @var string
     *
     * @ORM\Column(name="OT_CausaNoF", type="string", length=8, nullable=false)
     */
    private $otCausanof;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Fac_Cobro", type="boolean", nullable=false)
     */
    private $facCobro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Rec_ValiFact", type="boolean", nullable=false)
     */
    private $recValifact;

    /**
     * @var integer
     *
     * @ORM\Column(name="Fac_FrmImpor", type="smallint", nullable=false)
     */
    private $facFrmimpor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Rec_Nota", type="boolean", nullable=false)
     */
    private $recNota;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Rec_PrecF", type="boolean", nullable=false)
     */
    private $recPrecf;

    /**
     * @var integer
     *
     * @ORM\Column(name="Prod_TipoImport", type="smallint", nullable=false)
     */
    private $prodTipoimport;

    /**
     * @var string
     *
     * @ORM\Column(name="Prod_PathFile", type="string", length=100, nullable=false)
     */
    private $prodPathfile;

    /**
     * @var string
     *
     * @ORM\Column(name="FacPv_Campos", type="string", length=16, nullable=false)
     */
    private $facpvCampos;

    /**
     * @var integer
     *
     * @ORM\Column(name="FacPv_FrmPrint", type="smallint", nullable=false)
     */
    private $facpvFrmprint;

    /**
     * @var integer
     *
     * @ORM\Column(name="FacPv_Retroceso", type="smallint", nullable=false)
     */
    private $facpvRetroceso;

    /**
     * @var string
     *
     * @ORM\Column(name="Path_Export", type="string", length=255, nullable=false)
     */
    private $pathExport;

    /**
     * @var integer
     *
     * @ORM\Column(name="SM_Retroceso", type="smallint", nullable=false)
     */
    private $smRetroceso;

    /**
     * @var string
     *
     * @ORM\Column(name="FacPv_IdFormaP", type="string", length=3, nullable=false)
     */
    private $facpvIdformap;

    /**
     * @var string
     *
     * @ORM\Column(name="FacPv_DescFormaP", type="string", length=50, nullable=false)
     */
    private $facpvDescformap;

    /**
     * @var string
     *
     * @ORM\Column(name="FacPv_IdConcep", type="string", length=2, nullable=false)
     */
    private $facpvIdconcep;

    /**
     * @var boolean
     *
     * @ORM\Column(name="FacPv_Efectivo", type="boolean", nullable=false)
     */
    private $facpvEfectivo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="FacPv_Tecla", type="boolean", nullable=false)
     */
    private $facpvTecla;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Ord_PrintCompo", type="boolean", nullable=false)
     */
    private $ordPrintcompo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Fac_Repetir", type="boolean", nullable=false)
     */
    private $facRepetir;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Rec_Pago", type="boolean", nullable=false)
     */
    private $recPago;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MarcaCerrar", type="boolean", nullable=false)
     */
    private $marcacerrar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="NoSgestMan", type="boolean", nullable=false)
     */
    private $nosgestman;

    /**
     * @var boolean
     *
     * @ORM\Column(name="CotizaMultiple", type="boolean", nullable=false)
     */
    private $cotizamultiple;

    /**
     * @var string
     *
     * @ORM\Column(name="Coti_Campos", type="string", length=20, nullable=false)
     */
    private $cotiCampos;



    /**
     * Get idUser
     *
     * @return string 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set facFrmprint
     *
     * @param integer $facFrmprint
     * @return Parametrosinv
     */
    public function setFacFrmprint($facFrmprint)
    {
        $this->facFrmprint = $facFrmprint;

        return $this;
    }

    /**
     * Get facFrmprint
     *
     * @return integer 
     */
    public function getFacFrmprint()
    {
        return $this->facFrmprint;
    }

    /**
     * Set facCanart
     *
     * @param boolean $facCanart
     * @return Parametrosinv
     */
    public function setFacCanart($facCanart)
    {
        $this->facCanart = $facCanart;

        return $this;
    }

    /**
     * Get facCanart
     *
     * @return boolean 
     */
    public function getFacCanart()
    {
        return $this->facCanart;
    }

    /**
     * Set facPrintcompo
     *
     * @param boolean $facPrintcompo
     * @return Parametrosinv
     */
    public function setFacPrintcompo($facPrintcompo)
    {
        $this->facPrintcompo = $facPrintcompo;

        return $this;
    }

    /**
     * Get facPrintcompo
     *
     * @return boolean 
     */
    public function getFacPrintcompo()
    {
        return $this->facPrintcompo;
    }

    /**
     * Set valeFrmprint
     *
     * @param integer $valeFrmprint
     * @return Parametrosinv
     */
    public function setValeFrmprint($valeFrmprint)
    {
        $this->valeFrmprint = $valeFrmprint;

        return $this;
    }

    /**
     * Get valeFrmprint
     *
     * @return integer 
     */
    public function getValeFrmprint()
    {
        return $this->valeFrmprint;
    }

    /**
     * Set facRetroceso
     *
     * @param integer $facRetroceso
     * @return Parametrosinv
     */
    public function setFacRetroceso($facRetroceso)
    {
        $this->facRetroceso = $facRetroceso;

        return $this;
    }

    /**
     * Get facRetroceso
     *
     * @return integer 
     */
    public function getFacRetroceso()
    {
        return $this->facRetroceso;
    }

    /**
     * Set facExcluirsine
     *
     * @param boolean $facExcluirsine
     * @return Parametrosinv
     */
    public function setFacExcluirsine($facExcluirsine)
    {
        $this->facExcluirsine = $facExcluirsine;

        return $this;
    }

    /**
     * Get facExcluirsine
     *
     * @return boolean 
     */
    public function getFacExcluirsine()
    {
        return $this->facExcluirsine;
    }

    /**
     * Set facCampos
     *
     * @param string $facCampos
     * @return Parametrosinv
     */
    public function setFacCampos($facCampos)
    {
        $this->facCampos = $facCampos;

        return $this;
    }

    /**
     * Get facCampos
     *
     * @return string 
     */
    public function getFacCampos()
    {
        return $this->facCampos;
    }

    /**
     * Set recFrmprint
     *
     * @param integer $recFrmprint
     * @return Parametrosinv
     */
    public function setRecFrmprint($recFrmprint)
    {
        $this->recFrmprint = $recFrmprint;

        return $this;
    }

    /**
     * Get recFrmprint
     *
     * @return integer 
     */
    public function getRecFrmprint()
    {
        return $this->recFrmprint;
    }

    /**
     * Set recCampos
     *
     * @param string $recCampos
     * @return Parametrosinv
     */
    public function setRecCampos($recCampos)
    {
        $this->recCampos = $recCampos;

        return $this;
    }

    /**
     * Get recCampos
     *
     * @return string 
     */
    public function getRecCampos()
    {
        return $this->recCampos;
    }

    /**
     * Set recRetroceso
     *
     * @param integer $recRetroceso
     * @return Parametrosinv
     */
    public function setRecRetroceso($recRetroceso)
    {
        $this->recRetroceso = $recRetroceso;

        return $this;
    }

    /**
     * Get recRetroceso
     *
     * @return integer 
     */
    public function getRecRetroceso()
    {
        return $this->recRetroceso;
    }

    /**
     * Set valeRetroceso
     *
     * @param integer $valeRetroceso
     * @return Parametrosinv
     */
    public function setValeRetroceso($valeRetroceso)
    {
        $this->valeRetroceso = $valeRetroceso;

        return $this;
    }

    /**
     * Get valeRetroceso
     *
     * @return integer 
     */
    public function getValeRetroceso()
    {
        return $this->valeRetroceso;
    }

    /**
     * Set valeCampos
     *
     * @param string $valeCampos
     * @return Parametrosinv
     */
    public function setValeCampos($valeCampos)
    {
        $this->valeCampos = $valeCampos;

        return $this;
    }

    /**
     * Get valeCampos
     *
     * @return string 
     */
    public function getValeCampos()
    {
        return $this->valeCampos;
    }

    /**
     * Set valeCanart
     *
     * @param boolean $valeCanart
     * @return Parametrosinv
     */
    public function setValeCanart($valeCanart)
    {
        $this->valeCanart = $valeCanart;

        return $this;
    }

    /**
     * Get valeCanart
     *
     * @return boolean 
     */
    public function getValeCanart()
    {
        return $this->valeCanart;
    }

    /**
     * Set devFrmprint
     *
     * @param integer $devFrmprint
     * @return Parametrosinv
     */
    public function setDevFrmprint($devFrmprint)
    {
        $this->devFrmprint = $devFrmprint;

        return $this;
    }

    /**
     * Get devFrmprint
     *
     * @return integer 
     */
    public function getDevFrmprint()
    {
        return $this->devFrmprint;
    }

    /**
     * Set devPrintcompo
     *
     * @param boolean $devPrintcompo
     * @return Parametrosinv
     */
    public function setDevPrintcompo($devPrintcompo)
    {
        $this->devPrintcompo = $devPrintcompo;

        return $this;
    }

    /**
     * Get devPrintcompo
     *
     * @return boolean 
     */
    public function getDevPrintcompo()
    {
        return $this->devPrintcompo;
    }

    /**
     * Set recCheckprecio
     *
     * @param boolean $recCheckprecio
     * @return Parametrosinv
     */
    public function setRecCheckprecio($recCheckprecio)
    {
        $this->recCheckprecio = $recCheckprecio;

        return $this;
    }

    /**
     * Get recCheckprecio
     *
     * @return boolean 
     */
    public function getRecCheckprecio()
    {
        return $this->recCheckprecio;
    }

    /**
     * Set facAduana
     *
     * @param boolean $facAduana
     * @return Parametrosinv
     */
    public function setFacAduana($facAduana)
    {
        $this->facAduana = $facAduana;

        return $this;
    }

    /**
     * Get facAduana
     *
     * @return boolean 
     */
    public function getFacAduana()
    {
        return $this->facAduana;
    }

    /**
     * Set facPathaduana
     *
     * @param string $facPathaduana
     * @return Parametrosinv
     */
    public function setFacPathaduana($facPathaduana)
    {
        $this->facPathaduana = $facPathaduana;

        return $this;
    }

    /**
     * Get facPathaduana
     *
     * @return string 
     */
    public function getFacPathaduana()
    {
        return $this->facPathaduana;
    }

    /**
     * Set otFrmprint
     *
     * @param integer $otFrmprint
     * @return Parametrosinv
     */
    public function setOtFrmprint($otFrmprint)
    {
        $this->otFrmprint = $otFrmprint;

        return $this;
    }

    /**
     * Get otFrmprint
     *
     * @return integer 
     */
    public function getOtFrmprint()
    {
        return $this->otFrmprint;
    }

    /**
     * Set facPage
     *
     * @param boolean $facPage
     * @return Parametrosinv
     */
    public function setFacPage($facPage)
    {
        $this->facPage = $facPage;

        return $this;
    }

    /**
     * Get facPage
     *
     * @return boolean 
     */
    public function getFacPage()
    {
        return $this->facPage;
    }

    /**
     * Set otDatostec
     *
     * @param boolean $otDatostec
     * @return Parametrosinv
     */
    public function setOtDatostec($otDatostec)
    {
        $this->otDatostec = $otDatostec;

        return $this;
    }

    /**
     * Get otDatostec
     *
     * @return boolean 
     */
    public function getOtDatostec()
    {
        return $this->otDatostec;
    }

    /**
     * Set ofFrmprint
     *
     * @param integer $ofFrmprint
     * @return Parametrosinv
     */
    public function setOfFrmprint($ofFrmprint)
    {
        $this->ofFrmprint = $ofFrmprint;

        return $this;
    }

    /**
     * Get ofFrmprint
     *
     * @return integer 
     */
    public function getOfFrmprint()
    {
        return $this->ofFrmprint;
    }

    /**
     * Set ocFrmprint
     *
     * @param integer $ocFrmprint
     * @return Parametrosinv
     */
    public function setOcFrmprint($ocFrmprint)
    {
        $this->ocFrmprint = $ocFrmprint;

        return $this;
    }

    /**
     * Get ocFrmprint
     *
     * @return integer 
     */
    public function getOcFrmprint()
    {
        return $this->ocFrmprint;
    }

    /**
     * Set otReal
     *
     * @param boolean $otReal
     * @return Parametrosinv
     */
    public function setOtReal($otReal)
    {
        $this->otReal = $otReal;

        return $this;
    }

    /**
     * Get otReal
     *
     * @return boolean 
     */
    public function getOtReal()
    {
        return $this->otReal;
    }

    /**
     * Set otCausanof
     *
     * @param string $otCausanof
     * @return Parametrosinv
     */
    public function setOtCausanof($otCausanof)
    {
        $this->otCausanof = $otCausanof;

        return $this;
    }

    /**
     * Get otCausanof
     *
     * @return string 
     */
    public function getOtCausanof()
    {
        return $this->otCausanof;
    }

    /**
     * Set facCobro
     *
     * @param boolean $facCobro
     * @return Parametrosinv
     */
    public function setFacCobro($facCobro)
    {
        $this->facCobro = $facCobro;

        return $this;
    }

    /**
     * Get facCobro
     *
     * @return boolean 
     */
    public function getFacCobro()
    {
        return $this->facCobro;
    }

    /**
     * Set recValifact
     *
     * @param boolean $recValifact
     * @return Parametrosinv
     */
    public function setRecValifact($recValifact)
    {
        $this->recValifact = $recValifact;

        return $this;
    }

    /**
     * Get recValifact
     *
     * @return boolean 
     */
    public function getRecValifact()
    {
        return $this->recValifact;
    }

    /**
     * Set facFrmimpor
     *
     * @param integer $facFrmimpor
     * @return Parametrosinv
     */
    public function setFacFrmimpor($facFrmimpor)
    {
        $this->facFrmimpor = $facFrmimpor;

        return $this;
    }

    /**
     * Get facFrmimpor
     *
     * @return integer 
     */
    public function getFacFrmimpor()
    {
        return $this->facFrmimpor;
    }

    /**
     * Set recNota
     *
     * @param boolean $recNota
     * @return Parametrosinv
     */
    public function setRecNota($recNota)
    {
        $this->recNota = $recNota;

        return $this;
    }

    /**
     * Get recNota
     *
     * @return boolean 
     */
    public function getRecNota()
    {
        return $this->recNota;
    }

    /**
     * Set recPrecf
     *
     * @param boolean $recPrecf
     * @return Parametrosinv
     */
    public function setRecPrecf($recPrecf)
    {
        $this->recPrecf = $recPrecf;

        return $this;
    }

    /**
     * Get recPrecf
     *
     * @return boolean 
     */
    public function getRecPrecf()
    {
        return $this->recPrecf;
    }

    /**
     * Set prodTipoimport
     *
     * @param integer $prodTipoimport
     * @return Parametrosinv
     */
    public function setProdTipoimport($prodTipoimport)
    {
        $this->prodTipoimport = $prodTipoimport;

        return $this;
    }

    /**
     * Get prodTipoimport
     *
     * @return integer 
     */
    public function getProdTipoimport()
    {
        return $this->prodTipoimport;
    }

    /**
     * Set prodPathfile
     *
     * @param string $prodPathfile
     * @return Parametrosinv
     */
    public function setProdPathfile($prodPathfile)
    {
        $this->prodPathfile = $prodPathfile;

        return $this;
    }

    /**
     * Get prodPathfile
     *
     * @return string 
     */
    public function getProdPathfile()
    {
        return $this->prodPathfile;
    }

    /**
     * Set facpvCampos
     *
     * @param string $facpvCampos
     * @return Parametrosinv
     */
    public function setFacpvCampos($facpvCampos)
    {
        $this->facpvCampos = $facpvCampos;

        return $this;
    }

    /**
     * Get facpvCampos
     *
     * @return string 
     */
    public function getFacpvCampos()
    {
        return $this->facpvCampos;
    }

    /**
     * Set facpvFrmprint
     *
     * @param integer $facpvFrmprint
     * @return Parametrosinv
     */
    public function setFacpvFrmprint($facpvFrmprint)
    {
        $this->facpvFrmprint = $facpvFrmprint;

        return $this;
    }

    /**
     * Get facpvFrmprint
     *
     * @return integer 
     */
    public function getFacpvFrmprint()
    {
        return $this->facpvFrmprint;
    }

    /**
     * Set facpvRetroceso
     *
     * @param integer $facpvRetroceso
     * @return Parametrosinv
     */
    public function setFacpvRetroceso($facpvRetroceso)
    {
        $this->facpvRetroceso = $facpvRetroceso;

        return $this;
    }

    /**
     * Get facpvRetroceso
     *
     * @return integer 
     */
    public function getFacpvRetroceso()
    {
        return $this->facpvRetroceso;
    }

    /**
     * Set pathExport
     *
     * @param string $pathExport
     * @return Parametrosinv
     */
    public function setPathExport($pathExport)
    {
        $this->pathExport = $pathExport;

        return $this;
    }

    /**
     * Get pathExport
     *
     * @return string 
     */
    public function getPathExport()
    {
        return $this->pathExport;
    }

    /**
     * Set smRetroceso
     *
     * @param integer $smRetroceso
     * @return Parametrosinv
     */
    public function setSmRetroceso($smRetroceso)
    {
        $this->smRetroceso = $smRetroceso;

        return $this;
    }

    /**
     * Get smRetroceso
     *
     * @return integer 
     */
    public function getSmRetroceso()
    {
        return $this->smRetroceso;
    }

    /**
     * Set facpvIdformap
     *
     * @param string $facpvIdformap
     * @return Parametrosinv
     */
    public function setFacpvIdformap($facpvIdformap)
    {
        $this->facpvIdformap = $facpvIdformap;

        return $this;
    }

    /**
     * Get facpvIdformap
     *
     * @return string 
     */
    public function getFacpvIdformap()
    {
        return $this->facpvIdformap;
    }

    /**
     * Set facpvDescformap
     *
     * @param string $facpvDescformap
     * @return Parametrosinv
     */
    public function setFacpvDescformap($facpvDescformap)
    {
        $this->facpvDescformap = $facpvDescformap;

        return $this;
    }

    /**
     * Get facpvDescformap
     *
     * @return string 
     */
    public function getFacpvDescformap()
    {
        return $this->facpvDescformap;
    }

    /**
     * Set facpvIdconcep
     *
     * @param string $facpvIdconcep
     * @return Parametrosinv
     */
    public function setFacpvIdconcep($facpvIdconcep)
    {
        $this->facpvIdconcep = $facpvIdconcep;

        return $this;
    }

    /**
     * Get facpvIdconcep
     *
     * @return string 
     */
    public function getFacpvIdconcep()
    {
        return $this->facpvIdconcep;
    }

    /**
     * Set facpvEfectivo
     *
     * @param boolean $facpvEfectivo
     * @return Parametrosinv
     */
    public function setFacpvEfectivo($facpvEfectivo)
    {
        $this->facpvEfectivo = $facpvEfectivo;

        return $this;
    }

    /**
     * Get facpvEfectivo
     *
     * @return boolean 
     */
    public function getFacpvEfectivo()
    {
        return $this->facpvEfectivo;
    }

    /**
     * Set facpvTecla
     *
     * @param boolean $facpvTecla
     * @return Parametrosinv
     */
    public function setFacpvTecla($facpvTecla)
    {
        $this->facpvTecla = $facpvTecla;

        return $this;
    }

    /**
     * Get facpvTecla
     *
     * @return boolean 
     */
    public function getFacpvTecla()
    {
        return $this->facpvTecla;
    }

    /**
     * Set ordPrintcompo
     *
     * @param boolean $ordPrintcompo
     * @return Parametrosinv
     */
    public function setOrdPrintcompo($ordPrintcompo)
    {
        $this->ordPrintcompo = $ordPrintcompo;

        return $this;
    }

    /**
     * Get ordPrintcompo
     *
     * @return boolean 
     */
    public function getOrdPrintcompo()
    {
        return $this->ordPrintcompo;
    }

    /**
     * Set facRepetir
     *
     * @param boolean $facRepetir
     * @return Parametrosinv
     */
    public function setFacRepetir($facRepetir)
    {
        $this->facRepetir = $facRepetir;

        return $this;
    }

    /**
     * Get facRepetir
     *
     * @return boolean 
     */
    public function getFacRepetir()
    {
        return $this->facRepetir;
    }

    /**
     * Set recPago
     *
     * @param boolean $recPago
     * @return Parametrosinv
     */
    public function setRecPago($recPago)
    {
        $this->recPago = $recPago;

        return $this;
    }

    /**
     * Get recPago
     *
     * @return boolean 
     */
    public function getRecPago()
    {
        return $this->recPago;
    }

    /**
     * Set marcacerrar
     *
     * @param boolean $marcacerrar
     * @return Parametrosinv
     */
    public function setMarcacerrar($marcacerrar)
    {
        $this->marcacerrar = $marcacerrar;

        return $this;
    }

    /**
     * Get marcacerrar
     *
     * @return boolean 
     */
    public function getMarcacerrar()
    {
        return $this->marcacerrar;
    }

    /**
     * Set nosgestman
     *
     * @param boolean $nosgestman
     * @return Parametrosinv
     */
    public function setNosgestman($nosgestman)
    {
        $this->nosgestman = $nosgestman;

        return $this;
    }

    /**
     * Get nosgestman
     *
     * @return boolean 
     */
    public function getNosgestman()
    {
        return $this->nosgestman;
    }

    /**
     * Set cotizamultiple
     *
     * @param boolean $cotizamultiple
     * @return Parametrosinv
     */
    public function setCotizamultiple($cotizamultiple)
    {
        $this->cotizamultiple = $cotizamultiple;

        return $this;
    }

    /**
     * Get cotizamultiple
     *
     * @return boolean 
     */
    public function getCotizamultiple()
    {
        return $this->cotizamultiple;
    }

    /**
     * Set cotiCampos
     *
     * @param string $cotiCampos
     * @return Parametrosinv
     */
    public function setCotiCampos($cotiCampos)
    {
        $this->cotiCampos = $cotiCampos;

        return $this;
    }

    /**
     * Get cotiCampos
     *
     * @return string 
     */
    public function getCotiCampos()
    {
        return $this->cotiCampos;
    }
}
