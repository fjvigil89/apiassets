<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivoFijoParametros
 *
 * @ORM\Table(name="Activo_Fijo_Parametros")
 * @ORM\Entity
 */
class ActivoFijoParametros
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_TipoActivoFijo", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoactivofijo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Entrada_Activo", type="string", length=3, nullable=false)
     */
    private $idEntradaActivo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Salida_Activo", type="string", length=3, nullable=false)
     */
    private $idSalidaActivo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Movim_Activo", type="string", length=3, nullable=false)
     */
    private $idMovimActivo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasificacion", type="string", length=5, nullable=false)
     */
    private $idClasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Subclasificacion", type="string", length=5, nullable=false)
     */
    private $idSubclasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Cod_Espec_ActivoFijo", type="string", length=15, nullable=false)
     */
    private $codEspecActivofijo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_State_Rent", type="string", length=3, nullable=false)
     */
    private $idStateRent;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_State_Sale", type="string", length=3, nullable=false)
     */
    private $idStateSale;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Movim_SC", type="string", length=3, nullable=false)
     */
    private $idMovimSc;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_State_Almacen", type="string", length=3, nullable=false)
     */
    private $idStateAlmacen;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AutomCode", type="boolean", nullable=false)
     */
    private $automcode;

    /**
     * @var integer
     *
     * @ORM\Column(name="LenAutomCode", type="smallint", nullable=false)
     */
    private $lenautomcode;

    /**
     * @var integer
     *
     * @ORM\Column(name="AutomCodeCount", type="integer", nullable=false)
     */
    private $automcodecount;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_State_Rent_Devol", type="string", length=3, nullable=false)
     */
    private $idStateRentDevol;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Movim_DV", type="string", length=3, nullable=false)
     */
    private $idMovimDv;

    /**
     * @var boolean
     *
     * @ORM\Column(name="One_RentInvoice", type="boolean", nullable=false)
     */
    private $oneRentinvoice;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Entrada_Activo_Open", type="string", length=3, nullable=false)
     */
    private $idEntradaActivoOpen;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Opening_Close", type="boolean", nullable=false)
     */
    private $openingClose;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AF_Listas", type="boolean", nullable=false)
     */
    private $afListas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="CCosto_User_Access", type="boolean", nullable=false)
     */
    private $ccostoUserAccess;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Rent_Date_Close_Updt", type="boolean", nullable=false)
     */
    private $rentDateCloseUpdt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Rent_Day_Last_Sum", type="boolean", nullable=false)
     */
    private $rentDayLastSum;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_State_Return", type="string", length=3, nullable=false)
     */
    private $idStateReturn;



    /**
     * Get idTipoactivofijo
     *
     * @return string 
     */
    public function getIdTipoactivofijo()
    {
        return $this->idTipoactivofijo;
    }

    /**
     * Set idEntradaActivo
     *
     * @param string $idEntradaActivo
     * @return ActivoFijoParametros
     */
    public function setIdEntradaActivo($idEntradaActivo)
    {
        $this->idEntradaActivo = $idEntradaActivo;

        return $this;
    }

    /**
     * Get idEntradaActivo
     *
     * @return string 
     */
    public function getIdEntradaActivo()
    {
        return $this->idEntradaActivo;
    }

    /**
     * Set idSalidaActivo
     *
     * @param string $idSalidaActivo
     * @return ActivoFijoParametros
     */
    public function setIdSalidaActivo($idSalidaActivo)
    {
        $this->idSalidaActivo = $idSalidaActivo;

        return $this;
    }

    /**
     * Get idSalidaActivo
     *
     * @return string 
     */
    public function getIdSalidaActivo()
    {
        return $this->idSalidaActivo;
    }

    /**
     * Set idMovimActivo
     *
     * @param string $idMovimActivo
     * @return ActivoFijoParametros
     */
    public function setIdMovimActivo($idMovimActivo)
    {
        $this->idMovimActivo = $idMovimActivo;

        return $this;
    }

    /**
     * Get idMovimActivo
     *
     * @return string 
     */
    public function getIdMovimActivo()
    {
        return $this->idMovimActivo;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return ActivoFijoParametros
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
     * Set idClasificacion
     *
     * @param string $idClasificacion
     * @return ActivoFijoParametros
     */
    public function setIdClasificacion($idClasificacion)
    {
        $this->idClasificacion = $idClasificacion;

        return $this;
    }

    /**
     * Get idClasificacion
     *
     * @return string 
     */
    public function getIdClasificacion()
    {
        return $this->idClasificacion;
    }

    /**
     * Set idSubclasificacion
     *
     * @param string $idSubclasificacion
     * @return ActivoFijoParametros
     */
    public function setIdSubclasificacion($idSubclasificacion)
    {
        $this->idSubclasificacion = $idSubclasificacion;

        return $this;
    }

    /**
     * Get idSubclasificacion
     *
     * @return string 
     */
    public function getIdSubclasificacion()
    {
        return $this->idSubclasificacion;
    }

    /**
     * Set codEspecActivofijo
     *
     * @param string $codEspecActivofijo
     * @return ActivoFijoParametros
     */
    public function setCodEspecActivofijo($codEspecActivofijo)
    {
        $this->codEspecActivofijo = $codEspecActivofijo;

        return $this;
    }

    /**
     * Get codEspecActivofijo
     *
     * @return string 
     */
    public function getCodEspecActivofijo()
    {
        return $this->codEspecActivofijo;
    }

    /**
     * Set idStateRent
     *
     * @param string $idStateRent
     * @return ActivoFijoParametros
     */
    public function setIdStateRent($idStateRent)
    {
        $this->idStateRent = $idStateRent;

        return $this;
    }

    /**
     * Get idStateRent
     *
     * @return string 
     */
    public function getIdStateRent()
    {
        return $this->idStateRent;
    }

    /**
     * Set idStateSale
     *
     * @param string $idStateSale
     * @return ActivoFijoParametros
     */
    public function setIdStateSale($idStateSale)
    {
        $this->idStateSale = $idStateSale;

        return $this;
    }

    /**
     * Get idStateSale
     *
     * @return string 
     */
    public function getIdStateSale()
    {
        return $this->idStateSale;
    }

    /**
     * Set idMovimSc
     *
     * @param string $idMovimSc
     * @return ActivoFijoParametros
     */
    public function setIdMovimSc($idMovimSc)
    {
        $this->idMovimSc = $idMovimSc;

        return $this;
    }

    /**
     * Get idMovimSc
     *
     * @return string 
     */
    public function getIdMovimSc()
    {
        return $this->idMovimSc;
    }

    /**
     * Set idStateAlmacen
     *
     * @param string $idStateAlmacen
     * @return ActivoFijoParametros
     */
    public function setIdStateAlmacen($idStateAlmacen)
    {
        $this->idStateAlmacen = $idStateAlmacen;

        return $this;
    }

    /**
     * Get idStateAlmacen
     *
     * @return string 
     */
    public function getIdStateAlmacen()
    {
        return $this->idStateAlmacen;
    }

    /**
     * Set automcode
     *
     * @param boolean $automcode
     * @return ActivoFijoParametros
     */
    public function setAutomcode($automcode)
    {
        $this->automcode = $automcode;

        return $this;
    }

    /**
     * Get automcode
     *
     * @return boolean 
     */
    public function getAutomcode()
    {
        return $this->automcode;
    }

    /**
     * Set lenautomcode
     *
     * @param integer $lenautomcode
     * @return ActivoFijoParametros
     */
    public function setLenautomcode($lenautomcode)
    {
        $this->lenautomcode = $lenautomcode;

        return $this;
    }

    /**
     * Get lenautomcode
     *
     * @return integer 
     */
    public function getLenautomcode()
    {
        return $this->lenautomcode;
    }

    /**
     * Set automcodecount
     *
     * @param integer $automcodecount
     * @return ActivoFijoParametros
     */
    public function setAutomcodecount($automcodecount)
    {
        $this->automcodecount = $automcodecount;

        return $this;
    }

    /**
     * Get automcodecount
     *
     * @return integer 
     */
    public function getAutomcodecount()
    {
        return $this->automcodecount;
    }

    /**
     * Set idStateRentDevol
     *
     * @param string $idStateRentDevol
     * @return ActivoFijoParametros
     */
    public function setIdStateRentDevol($idStateRentDevol)
    {
        $this->idStateRentDevol = $idStateRentDevol;

        return $this;
    }

    /**
     * Get idStateRentDevol
     *
     * @return string 
     */
    public function getIdStateRentDevol()
    {
        return $this->idStateRentDevol;
    }

    /**
     * Set idMovimDv
     *
     * @param string $idMovimDv
     * @return ActivoFijoParametros
     */
    public function setIdMovimDv($idMovimDv)
    {
        $this->idMovimDv = $idMovimDv;

        return $this;
    }

    /**
     * Get idMovimDv
     *
     * @return string 
     */
    public function getIdMovimDv()
    {
        return $this->idMovimDv;
    }

    /**
     * Set oneRentinvoice
     *
     * @param boolean $oneRentinvoice
     * @return ActivoFijoParametros
     */
    public function setOneRentinvoice($oneRentinvoice)
    {
        $this->oneRentinvoice = $oneRentinvoice;

        return $this;
    }

    /**
     * Get oneRentinvoice
     *
     * @return boolean 
     */
    public function getOneRentinvoice()
    {
        return $this->oneRentinvoice;
    }

    /**
     * Set idEntradaActivoOpen
     *
     * @param string $idEntradaActivoOpen
     * @return ActivoFijoParametros
     */
    public function setIdEntradaActivoOpen($idEntradaActivoOpen)
    {
        $this->idEntradaActivoOpen = $idEntradaActivoOpen;

        return $this;
    }

    /**
     * Get idEntradaActivoOpen
     *
     * @return string 
     */
    public function getIdEntradaActivoOpen()
    {
        return $this->idEntradaActivoOpen;
    }

    /**
     * Set openingClose
     *
     * @param boolean $openingClose
     * @return ActivoFijoParametros
     */
    public function setOpeningClose($openingClose)
    {
        $this->openingClose = $openingClose;

        return $this;
    }

    /**
     * Get openingClose
     *
     * @return boolean 
     */
    public function getOpeningClose()
    {
        return $this->openingClose;
    }

    /**
     * Set afListas
     *
     * @param boolean $afListas
     * @return ActivoFijoParametros
     */
    public function setAfListas($afListas)
    {
        $this->afListas = $afListas;

        return $this;
    }

    /**
     * Get afListas
     *
     * @return boolean 
     */
    public function getAfListas()
    {
        return $this->afListas;
    }

    /**
     * Set ccostoUserAccess
     *
     * @param boolean $ccostoUserAccess
     * @return ActivoFijoParametros
     */
    public function setCcostoUserAccess($ccostoUserAccess)
    {
        $this->ccostoUserAccess = $ccostoUserAccess;

        return $this;
    }

    /**
     * Get ccostoUserAccess
     *
     * @return boolean 
     */
    public function getCcostoUserAccess()
    {
        return $this->ccostoUserAccess;
    }

    /**
     * Set rentDateCloseUpdt
     *
     * @param boolean $rentDateCloseUpdt
     * @return ActivoFijoParametros
     */
    public function setRentDateCloseUpdt($rentDateCloseUpdt)
    {
        $this->rentDateCloseUpdt = $rentDateCloseUpdt;

        return $this;
    }

    /**
     * Get rentDateCloseUpdt
     *
     * @return boolean 
     */
    public function getRentDateCloseUpdt()
    {
        return $this->rentDateCloseUpdt;
    }

    /**
     * Set rentDayLastSum
     *
     * @param boolean $rentDayLastSum
     * @return ActivoFijoParametros
     */
    public function setRentDayLastSum($rentDayLastSum)
    {
        $this->rentDayLastSum = $rentDayLastSum;

        return $this;
    }

    /**
     * Get rentDayLastSum
     *
     * @return boolean 
     */
    public function getRentDayLastSum()
    {
        return $this->rentDayLastSum;
    }

    /**
     * Set idStateReturn
     *
     * @param string $idStateReturn
     * @return ActivoFijoParametros
     */
    public function setIdStateReturn($idStateReturn)
    {
        $this->idStateReturn = $idStateReturn;

        return $this;
    }

    /**
     * Get idStateReturn
     *
     * @return string 
     */
    public function getIdStateReturn()
    {
        return $this->idStateReturn;
    }
}
