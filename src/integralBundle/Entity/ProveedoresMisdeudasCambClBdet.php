<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProveedoresMisdeudasCambClBdet
 *
 * @ORM\Table(name="Proveedores_MisDeudas_Camb_Cl_BDet")
 * @ORM\Entity
 */
class ProveedoresMisdeudasCambClBdet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Doc", type="integer", nullable=false)
     */
    private $idDoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Doc", type="smallint", nullable=false)
     */
    private $anoDoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador_Deu", type="integer", nullable=false)
     */
    private $contadorDeu;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Deuda", type="integer", nullable=false)
     */
    private $idDeuda;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

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
     * @ORM\Column(name="Id_Clasif_Rx_Ini", type="string", length=10, nullable=false)
     */
    private $idClasifRxIni;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_Rx_Fin", type="string", length=10, nullable=false)
     */
    private $idClasifRxFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estado", type="smallint", nullable=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas", type="string", length=120, nullable=false)
     */
    private $notas;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Compro", type="integer", nullable=false)
     */
    private $idCompro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes_Compro", type="smallint", nullable=false)
     */
    private $mesCompro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Compro", type="smallint", nullable=false)
     */
    private $anoCompro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador_Compro", type="integer", nullable=false)
     */
    private $contadorCompro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Pre_Assets", type="boolean", nullable=false)
     */
    private $preAssets;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     */
    private $idAgrupacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="A_Contabilizar", type="boolean", nullable=false)
     */
    private $aContabilizar;

    /**
     * @var integer
     *
     * @ORM\Column(name="Item", type="integer", nullable=false)
     */
    private $item;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe", type="integer", nullable=false)
     */
    private $importe;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_MC", type="integer", nullable=false)
     */
    private $importeMc;



    /**
     * Get contador1
     *
     * @return integer 
     */
    public function getContador1()
    {
        return $this->contador1;
    }

    /**
     * Set idDoc
     *
     * @param integer $idDoc
     * @return ProveedoresMisdeudasCambClBdet
     */
    public function setIdDoc($idDoc)
    {
        $this->idDoc = $idDoc;

        return $this;
    }

    /**
     * Get idDoc
     *
     * @return integer 
     */
    public function getIdDoc()
    {
        return $this->idDoc;
    }

    /**
     * Set anoDoc
     *
     * @param integer $anoDoc
     * @return ProveedoresMisdeudasCambClBdet
     */
    public function setAnoDoc($anoDoc)
    {
        $this->anoDoc = $anoDoc;

        return $this;
    }

    /**
     * Get anoDoc
     *
     * @return integer 
     */
    public function getAnoDoc()
    {
        return $this->anoDoc;
    }

    /**
     * Set contadorDeu
     *
     * @param integer $contadorDeu
     * @return ProveedoresMisdeudasCambClBdet
     */
    public function setContadorDeu($contadorDeu)
    {
        $this->contadorDeu = $contadorDeu;

        return $this;
    }

    /**
     * Get contadorDeu
     *
     * @return integer 
     */
    public function getContadorDeu()
    {
        return $this->contadorDeu;
    }

    /**
     * Set idDeuda
     *
     * @param integer $idDeuda
     * @return ProveedoresMisdeudasCambClBdet
     */
    public function setIdDeuda($idDeuda)
    {
        $this->idDeuda = $idDeuda;

        return $this;
    }

    /**
     * Get idDeuda
     *
     * @return integer 
     */
    public function getIdDeuda()
    {
        return $this->idDeuda;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return ProveedoresMisdeudasCambClBdet
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return ProveedoresMisdeudasCambClBdet
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set idProveedor
     *
     * @param string $idProveedor
     * @return ProveedoresMisdeudasCambClBdet
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
     * @return ProveedoresMisdeudasCambClBdet
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
     * Set idClasifRxIni
     *
     * @param string $idClasifRxIni
     * @return ProveedoresMisdeudasCambClBdet
     */
    public function setIdClasifRxIni($idClasifRxIni)
    {
        $this->idClasifRxIni = $idClasifRxIni;

        return $this;
    }

    /**
     * Get idClasifRxIni
     *
     * @return string 
     */
    public function getIdClasifRxIni()
    {
        return $this->idClasifRxIni;
    }

    /**
     * Set idClasifRxFin
     *
     * @param string $idClasifRxFin
     * @return ProveedoresMisdeudasCambClBdet
     */
    public function setIdClasifRxFin($idClasifRxFin)
    {
        $this->idClasifRxFin = $idClasifRxFin;

        return $this;
    }

    /**
     * Get idClasifRxFin
     *
     * @return string 
     */
    public function getIdClasifRxFin()
    {
        return $this->idClasifRxFin;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return ProveedoresMisdeudasCambClBdet
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
     * Set notas
     *
     * @param string $notas
     * @return ProveedoresMisdeudasCambClBdet
     */
    public function setNotas($notas)
    {
        $this->notas = $notas;

        return $this;
    }

    /**
     * Get notas
     *
     * @return string 
     */
    public function getNotas()
    {
        return $this->notas;
    }

    /**
     * Set idCompro
     *
     * @param integer $idCompro
     * @return ProveedoresMisdeudasCambClBdet
     */
    public function setIdCompro($idCompro)
    {
        $this->idCompro = $idCompro;

        return $this;
    }

    /**
     * Get idCompro
     *
     * @return integer 
     */
    public function getIdCompro()
    {
        return $this->idCompro;
    }

    /**
     * Set mesCompro
     *
     * @param integer $mesCompro
     * @return ProveedoresMisdeudasCambClBdet
     */
    public function setMesCompro($mesCompro)
    {
        $this->mesCompro = $mesCompro;

        return $this;
    }

    /**
     * Get mesCompro
     *
     * @return integer 
     */
    public function getMesCompro()
    {
        return $this->mesCompro;
    }

    /**
     * Set anoCompro
     *
     * @param integer $anoCompro
     * @return ProveedoresMisdeudasCambClBdet
     */
    public function setAnoCompro($anoCompro)
    {
        $this->anoCompro = $anoCompro;

        return $this;
    }

    /**
     * Get anoCompro
     *
     * @return integer 
     */
    public function getAnoCompro()
    {
        return $this->anoCompro;
    }

    /**
     * Set contadorCompro
     *
     * @param integer $contadorCompro
     * @return ProveedoresMisdeudasCambClBdet
     */
    public function setContadorCompro($contadorCompro)
    {
        $this->contadorCompro = $contadorCompro;

        return $this;
    }

    /**
     * Get contadorCompro
     *
     * @return integer 
     */
    public function getContadorCompro()
    {
        return $this->contadorCompro;
    }

    /**
     * Set preAssets
     *
     * @param boolean $preAssets
     * @return ProveedoresMisdeudasCambClBdet
     */
    public function setPreAssets($preAssets)
    {
        $this->preAssets = $preAssets;

        return $this;
    }

    /**
     * Get preAssets
     *
     * @return boolean 
     */
    public function getPreAssets()
    {
        return $this->preAssets;
    }

    /**
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return ProveedoresMisdeudasCambClBdet
     */
    public function setIdAgrupacion($idAgrupacion)
    {
        $this->idAgrupacion = $idAgrupacion;

        return $this;
    }

    /**
     * Get idAgrupacion
     *
     * @return string 
     */
    public function getIdAgrupacion()
    {
        return $this->idAgrupacion;
    }

    /**
     * Set aContabilizar
     *
     * @param boolean $aContabilizar
     * @return ProveedoresMisdeudasCambClBdet
     */
    public function setAContabilizar($aContabilizar)
    {
        $this->aContabilizar = $aContabilizar;

        return $this;
    }

    /**
     * Get aContabilizar
     *
     * @return boolean 
     */
    public function getAContabilizar()
    {
        return $this->aContabilizar;
    }

    /**
     * Set item
     *
     * @param integer $item
     * @return ProveedoresMisdeudasCambClBdet
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
     * Set importe
     *
     * @param integer $importe
     * @return ProveedoresMisdeudasCambClBdet
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
     * Set importeMc
     *
     * @param integer $importeMc
     * @return ProveedoresMisdeudasCambClBdet
     */
    public function setImporteMc($importeMc)
    {
        $this->importeMc = $importeMc;

        return $this;
    }

    /**
     * Get importeMc
     *
     * @return integer 
     */
    public function getImporteMc()
    {
        return $this->importeMc;
    }
}
