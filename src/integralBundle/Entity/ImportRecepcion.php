<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImportRecepcion
 *
 * @ORM\Table(name="Import_Recepcion")
 * @ORM\Entity
 */
class ImportRecepcion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_SPID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSpid;

    /**
     * @var integer
     *
     * @ORM\Column(name="Items", type="integer", nullable=false)
     */
    private $items;

    /**
     * @var string
     *
     * @ORM\Column(name="Referencia", type="string", length=40, nullable=false)
     */
    private $referencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Recepcion", type="integer", nullable=false)
     */
    private $idRecepcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Recepcion", type="smallint", nullable=false)
     */
    private $anoRecepcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Confirmacion", type="datetime", nullable=false)
     */
    private $fechaConfirmacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_FacturaProveedor", type="string", length=15, nullable=false)
     */
    private $idFacturaproveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Proveedor", type="string", length=15, nullable=false)
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
     * @ORM\Column(name="Id_Comercial", type="string", length=5, nullable=false)
     */
    private $idComercial;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Comercial", type="string", length=50, nullable=false)
     */
    private $descComercial;

    /**
     * @var integer
     *
     * @ORM\Column(name="Credito", type="smallint", nullable=false)
     */
    private $credito;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Proveedor", type="datetime", nullable=false)
     */
    private $fechaProveedor;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteTotalMB", type="integer", nullable=false)
     */
    private $importetotalmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteTotalMC", type="integer", nullable=false)
     */
    private $importetotalmc;

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda", type="string", length=5, nullable=false)
     */
    private $moneda;

    /**
     * @var string
     *
     * @ORM\Column(name="Tasa_Cambio", type="decimal", precision=12, scale=6, nullable=false)
     */
    private $tasaCambio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AplicaPlazoCobro", type="boolean", nullable=false)
     */
    private $aplicaplazocobro;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=200, nullable=false)
     */
    private $nota;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ClasiRecep", type="string", length=10, nullable=false)
     */
    private $idClasirecep;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Almacen", type="string", length=50, nullable=false)
     */
    private $descAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado", type="smallint", nullable=false)
     */
    private $estado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias1", type="smallint", nullable=false)
     */
    private $dias1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe1", type="integer", nullable=false)
     */
    private $importe1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias2", type="smallint", nullable=false)
     */
    private $dias2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe2", type="integer", nullable=false)
     */
    private $importe2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias3", type="smallint", nullable=false)
     */
    private $dias3;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe3", type="integer", nullable=false)
     */
    private $importe3;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias4", type="smallint", nullable=false)
     */
    private $dias4;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe4", type="integer", nullable=false)
     */
    private $importe4;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias5", type="smallint", nullable=false)
     */
    private $dias5;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe5", type="integer", nullable=false)
     */
    private $importe5;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias6", type="smallint", nullable=false)
     */
    private $dias6;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe6", type="integer", nullable=false)
     */
    private $importe6;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias7", type="smallint", nullable=false)
     */
    private $dias7;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe7", type="integer", nullable=false)
     */
    private $importe7;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias8", type="smallint", nullable=false)
     */
    private $dias8;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe8", type="integer", nullable=false)
     */
    private $importe8;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dias9", type="smallint", nullable=false)
     */
    private $dias9;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe9", type="integer", nullable=false)
     */
    private $importe9;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Encredito", type="boolean", nullable=false)
     */
    private $encredito;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EnFecha", type="boolean", nullable=false)
     */
    private $enfecha;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Xtrans", type="boolean", nullable=false)
     */
    private $xtrans;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_User", type="string", length=15, nullable=false)
     */
    private $idUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Op", type="datetime", nullable=false)
     */
    private $fechaOp;

    /**
     * @var string
     *
     * @ORM\Column(name="Contrato", type="string", length=20, nullable=false)
     */
    private $contrato;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Emb", type="integer", nullable=false)
     */
    private $idEmb;



    /**
     * Get idSpid
     *
     * @return integer 
     */
    public function getIdSpid()
    {
        return $this->idSpid;
    }

    /**
     * Set items
     *
     * @param integer $items
     * @return ImportRecepcion
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * Get items
     *
     * @return integer 
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set referencia
     *
     * @param string $referencia
     * @return ImportRecepcion
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
     * Set idRecepcion
     *
     * @param integer $idRecepcion
     * @return ImportRecepcion
     */
    public function setIdRecepcion($idRecepcion)
    {
        $this->idRecepcion = $idRecepcion;

        return $this;
    }

    /**
     * Get idRecepcion
     *
     * @return integer 
     */
    public function getIdRecepcion()
    {
        return $this->idRecepcion;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return ImportRecepcion
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
     * Set anoRecepcion
     *
     * @param integer $anoRecepcion
     * @return ImportRecepcion
     */
    public function setAnoRecepcion($anoRecepcion)
    {
        $this->anoRecepcion = $anoRecepcion;

        return $this;
    }

    /**
     * Get anoRecepcion
     *
     * @return integer 
     */
    public function getAnoRecepcion()
    {
        return $this->anoRecepcion;
    }

    /**
     * Set fechaConfirmacion
     *
     * @param \DateTime $fechaConfirmacion
     * @return ImportRecepcion
     */
    public function setFechaConfirmacion($fechaConfirmacion)
    {
        $this->fechaConfirmacion = $fechaConfirmacion;

        return $this;
    }

    /**
     * Get fechaConfirmacion
     *
     * @return \DateTime 
     */
    public function getFechaConfirmacion()
    {
        return $this->fechaConfirmacion;
    }

    /**
     * Set idFacturaproveedor
     *
     * @param string $idFacturaproveedor
     * @return ImportRecepcion
     */
    public function setIdFacturaproveedor($idFacturaproveedor)
    {
        $this->idFacturaproveedor = $idFacturaproveedor;

        return $this;
    }

    /**
     * Get idFacturaproveedor
     *
     * @return string 
     */
    public function getIdFacturaproveedor()
    {
        return $this->idFacturaproveedor;
    }

    /**
     * Set idProveedor
     *
     * @param string $idProveedor
     * @return ImportRecepcion
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
     * @return ImportRecepcion
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
     * Set idComercial
     *
     * @param string $idComercial
     * @return ImportRecepcion
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
     * Set descComercial
     *
     * @param string $descComercial
     * @return ImportRecepcion
     */
    public function setDescComercial($descComercial)
    {
        $this->descComercial = $descComercial;

        return $this;
    }

    /**
     * Get descComercial
     *
     * @return string 
     */
    public function getDescComercial()
    {
        return $this->descComercial;
    }

    /**
     * Set credito
     *
     * @param integer $credito
     * @return ImportRecepcion
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
     * Set fechaProveedor
     *
     * @param \DateTime $fechaProveedor
     * @return ImportRecepcion
     */
    public function setFechaProveedor($fechaProveedor)
    {
        $this->fechaProveedor = $fechaProveedor;

        return $this;
    }

    /**
     * Get fechaProveedor
     *
     * @return \DateTime 
     */
    public function getFechaProveedor()
    {
        return $this->fechaProveedor;
    }

    /**
     * Set importetotalmb
     *
     * @param integer $importetotalmb
     * @return ImportRecepcion
     */
    public function setImportetotalmb($importetotalmb)
    {
        $this->importetotalmb = $importetotalmb;

        return $this;
    }

    /**
     * Get importetotalmb
     *
     * @return integer 
     */
    public function getImportetotalmb()
    {
        return $this->importetotalmb;
    }

    /**
     * Set importetotalmc
     *
     * @param integer $importetotalmc
     * @return ImportRecepcion
     */
    public function setImportetotalmc($importetotalmc)
    {
        $this->importetotalmc = $importetotalmc;

        return $this;
    }

    /**
     * Get importetotalmc
     *
     * @return integer 
     */
    public function getImportetotalmc()
    {
        return $this->importetotalmc;
    }

    /**
     * Set moneda
     *
     * @param string $moneda
     * @return ImportRecepcion
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
     * Set tasaCambio
     *
     * @param string $tasaCambio
     * @return ImportRecepcion
     */
    public function setTasaCambio($tasaCambio)
    {
        $this->tasaCambio = $tasaCambio;

        return $this;
    }

    /**
     * Get tasaCambio
     *
     * @return string 
     */
    public function getTasaCambio()
    {
        return $this->tasaCambio;
    }

    /**
     * Set aplicaplazocobro
     *
     * @param boolean $aplicaplazocobro
     * @return ImportRecepcion
     */
    public function setAplicaplazocobro($aplicaplazocobro)
    {
        $this->aplicaplazocobro = $aplicaplazocobro;

        return $this;
    }

    /**
     * Get aplicaplazocobro
     *
     * @return boolean 
     */
    public function getAplicaplazocobro()
    {
        return $this->aplicaplazocobro;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return ImportRecepcion
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
     * Set idClasirecep
     *
     * @param string $idClasirecep
     * @return ImportRecepcion
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
     * Set descAlmacen
     *
     * @param string $descAlmacen
     * @return ImportRecepcion
     */
    public function setDescAlmacen($descAlmacen)
    {
        $this->descAlmacen = $descAlmacen;

        return $this;
    }

    /**
     * Get descAlmacen
     *
     * @return string 
     */
    public function getDescAlmacen()
    {
        return $this->descAlmacen;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return ImportRecepcion
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set dias1
     *
     * @param integer $dias1
     * @return ImportRecepcion
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
     * Set importe1
     *
     * @param integer $importe1
     * @return ImportRecepcion
     */
    public function setImporte1($importe1)
    {
        $this->importe1 = $importe1;

        return $this;
    }

    /**
     * Get importe1
     *
     * @return integer 
     */
    public function getImporte1()
    {
        return $this->importe1;
    }

    /**
     * Set dias2
     *
     * @param integer $dias2
     * @return ImportRecepcion
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
     * Set importe2
     *
     * @param integer $importe2
     * @return ImportRecepcion
     */
    public function setImporte2($importe2)
    {
        $this->importe2 = $importe2;

        return $this;
    }

    /**
     * Get importe2
     *
     * @return integer 
     */
    public function getImporte2()
    {
        return $this->importe2;
    }

    /**
     * Set dias3
     *
     * @param integer $dias3
     * @return ImportRecepcion
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
     * Set importe3
     *
     * @param integer $importe3
     * @return ImportRecepcion
     */
    public function setImporte3($importe3)
    {
        $this->importe3 = $importe3;

        return $this;
    }

    /**
     * Get importe3
     *
     * @return integer 
     */
    public function getImporte3()
    {
        return $this->importe3;
    }

    /**
     * Set dias4
     *
     * @param integer $dias4
     * @return ImportRecepcion
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
     * Set importe4
     *
     * @param integer $importe4
     * @return ImportRecepcion
     */
    public function setImporte4($importe4)
    {
        $this->importe4 = $importe4;

        return $this;
    }

    /**
     * Get importe4
     *
     * @return integer 
     */
    public function getImporte4()
    {
        return $this->importe4;
    }

    /**
     * Set dias5
     *
     * @param integer $dias5
     * @return ImportRecepcion
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
     * Set importe5
     *
     * @param integer $importe5
     * @return ImportRecepcion
     */
    public function setImporte5($importe5)
    {
        $this->importe5 = $importe5;

        return $this;
    }

    /**
     * Get importe5
     *
     * @return integer 
     */
    public function getImporte5()
    {
        return $this->importe5;
    }

    /**
     * Set dias6
     *
     * @param integer $dias6
     * @return ImportRecepcion
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
     * Set importe6
     *
     * @param integer $importe6
     * @return ImportRecepcion
     */
    public function setImporte6($importe6)
    {
        $this->importe6 = $importe6;

        return $this;
    }

    /**
     * Get importe6
     *
     * @return integer 
     */
    public function getImporte6()
    {
        return $this->importe6;
    }

    /**
     * Set dias7
     *
     * @param integer $dias7
     * @return ImportRecepcion
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
     * Set importe7
     *
     * @param integer $importe7
     * @return ImportRecepcion
     */
    public function setImporte7($importe7)
    {
        $this->importe7 = $importe7;

        return $this;
    }

    /**
     * Get importe7
     *
     * @return integer 
     */
    public function getImporte7()
    {
        return $this->importe7;
    }

    /**
     * Set dias8
     *
     * @param integer $dias8
     * @return ImportRecepcion
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
     * Set importe8
     *
     * @param integer $importe8
     * @return ImportRecepcion
     */
    public function setImporte8($importe8)
    {
        $this->importe8 = $importe8;

        return $this;
    }

    /**
     * Get importe8
     *
     * @return integer 
     */
    public function getImporte8()
    {
        return $this->importe8;
    }

    /**
     * Set dias9
     *
     * @param integer $dias9
     * @return ImportRecepcion
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
     * Set importe9
     *
     * @param integer $importe9
     * @return ImportRecepcion
     */
    public function setImporte9($importe9)
    {
        $this->importe9 = $importe9;

        return $this;
    }

    /**
     * Get importe9
     *
     * @return integer 
     */
    public function getImporte9()
    {
        return $this->importe9;
    }

    /**
     * Set encredito
     *
     * @param boolean $encredito
     * @return ImportRecepcion
     */
    public function setEncredito($encredito)
    {
        $this->encredito = $encredito;

        return $this;
    }

    /**
     * Get encredito
     *
     * @return boolean 
     */
    public function getEncredito()
    {
        return $this->encredito;
    }

    /**
     * Set enfecha
     *
     * @param boolean $enfecha
     * @return ImportRecepcion
     */
    public function setEnfecha($enfecha)
    {
        $this->enfecha = $enfecha;

        return $this;
    }

    /**
     * Get enfecha
     *
     * @return boolean 
     */
    public function getEnfecha()
    {
        return $this->enfecha;
    }

    /**
     * Set xtrans
     *
     * @param boolean $xtrans
     * @return ImportRecepcion
     */
    public function setXtrans($xtrans)
    {
        $this->xtrans = $xtrans;

        return $this;
    }

    /**
     * Get xtrans
     *
     * @return boolean 
     */
    public function getXtrans()
    {
        return $this->xtrans;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return ImportRecepcion
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

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
     * Set fechaOp
     *
     * @param \DateTime $fechaOp
     * @return ImportRecepcion
     */
    public function setFechaOp($fechaOp)
    {
        $this->fechaOp = $fechaOp;

        return $this;
    }

    /**
     * Get fechaOp
     *
     * @return \DateTime 
     */
    public function getFechaOp()
    {
        return $this->fechaOp;
    }

    /**
     * Set contrato
     *
     * @param string $contrato
     * @return ImportRecepcion
     */
    public function setContrato($contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato
     *
     * @return string 
     */
    public function getContrato()
    {
        return $this->contrato;
    }

    /**
     * Set idEmb
     *
     * @param integer $idEmb
     * @return ImportRecepcion
     */
    public function setIdEmb($idEmb)
    {
        $this->idEmb = $idEmb;

        return $this;
    }

    /**
     * Get idEmb
     *
     * @return integer 
     */
    public function getIdEmb()
    {
        return $this->idEmb;
    }
}
