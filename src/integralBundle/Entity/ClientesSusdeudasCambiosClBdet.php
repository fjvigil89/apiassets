<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientesSusdeudasCambiosClBdet
 *
 * @ORM\Table(name="Clientes_SusDeudas_Cambios_Cl_BDet")
 * @ORM\Entity
 */
class ClientesSusdeudasCambiosClBdet
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
     * @ORM\Column(name="Id_Cliente", type="string", length=15, nullable=false)
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
     * @ORM\Column(name="Id_Clasif_Fa_Ini", type="string", length=10, nullable=false)
     */
    private $idClasifFaIni;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_Fa_Fin", type="string", length=10, nullable=false)
     */
    private $idClasifFaFin;

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
     * @return ClientesSusdeudasCambiosClBdet
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
     * @return ClientesSusdeudasCambiosClBdet
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
     * @return ClientesSusdeudasCambiosClBdet
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
     * @return ClientesSusdeudasCambiosClBdet
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
     * @return ClientesSusdeudasCambiosClBdet
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
     * @return ClientesSusdeudasCambiosClBdet
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
     * Set idCliente
     *
     * @param string $idCliente
     * @return ClientesSusdeudasCambiosClBdet
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
     * @return ClientesSusdeudasCambiosClBdet
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
     * Set idClasifFaIni
     *
     * @param string $idClasifFaIni
     * @return ClientesSusdeudasCambiosClBdet
     */
    public function setIdClasifFaIni($idClasifFaIni)
    {
        $this->idClasifFaIni = $idClasifFaIni;

        return $this;
    }

    /**
     * Get idClasifFaIni
     *
     * @return string 
     */
    public function getIdClasifFaIni()
    {
        return $this->idClasifFaIni;
    }

    /**
     * Set idClasifFaFin
     *
     * @param string $idClasifFaFin
     * @return ClientesSusdeudasCambiosClBdet
     */
    public function setIdClasifFaFin($idClasifFaFin)
    {
        $this->idClasifFaFin = $idClasifFaFin;

        return $this;
    }

    /**
     * Get idClasifFaFin
     *
     * @return string 
     */
    public function getIdClasifFaFin()
    {
        return $this->idClasifFaFin;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return ClientesSusdeudasCambiosClBdet
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
     * @return ClientesSusdeudasCambiosClBdet
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
     * @return ClientesSusdeudasCambiosClBdet
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
     * @return ClientesSusdeudasCambiosClBdet
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
     * @return ClientesSusdeudasCambiosClBdet
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
     * @return ClientesSusdeudasCambiosClBdet
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
     * @return ClientesSusdeudasCambiosClBdet
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
     * @return ClientesSusdeudasCambiosClBdet
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
     * @return ClientesSusdeudasCambiosClBdet
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
     * @return ClientesSusdeudasCambiosClBdet
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
     * @return ClientesSusdeudasCambiosClBdet
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
     * @return ClientesSusdeudasCambiosClBdet
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
