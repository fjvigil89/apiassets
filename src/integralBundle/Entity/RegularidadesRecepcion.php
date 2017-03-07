<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegularidadesRecepcion
 *
 * @ORM\Table(name="Regularidades_Recepcion", uniqueConstraints={@ORM\UniqueConstraint(name="Pk_Reg_Rx", columns={"items"})}, indexes={@ORM\Index(name="Ix1_Reg_Rx", columns={"Clasif_Cont_Prod", "Tipo_Doc", "Id_Almacen", "Id_clasif_Rx"})})
 * @ORM\Entity
 */
class RegularidadesRecepcion
{
    /**
     * @var string
     *
     * @ORM\Column(name="Subcontrol", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $subcontrol;

    /**
     * @var string
     *
     * @ORM\Column(name="Clasif_Cont_Prod", type="string", length=12, nullable=false)
     */
    private $clasifContProd;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_clasif_Rx", type="string", length=10, nullable=false)
     */
    private $idClasifRx;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Doc", type="string", length=10, nullable=false)
     */
    private $tipoDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Operacion", type="boolean", nullable=false)
     */
    private $operacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Cta", type="string", length=20, nullable=false)
     */
    private $cta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_SubCta", type="smallint", nullable=false)
     */
    private $tipoSubcta;

    /**
     * @var string
     *
     * @ORM\Column(name="SubCta", type="string", length=20, nullable=false)
     */
    private $subcta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Analisis", type="smallint", nullable=false)
     */
    private $tipoAnalisis;

    /**
     * @var string
     *
     * @ORM\Column(name="Analisis", type="string", length=20, nullable=false)
     */
    private $analisis;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Subanalisis", type="smallint", nullable=false)
     */
    private $tipoSubanalisis;

    /**
     * @var string
     *
     * @ORM\Column(name="SubAnalisis", type="string", length=20, nullable=false)
     */
    private $subanalisis;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Epigrafe", type="smallint", nullable=false)
     */
    private $tipoEpigrafe;

    /**
     * @var string
     *
     * @ORM\Column(name="Epigrafe", type="string", length=20, nullable=false)
     */
    private $epigrafe;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Partida", type="smallint", nullable=false)
     */
    private $tipoPartida;

    /**
     * @var string
     *
     * @ORM\Column(name="Partida", type="string", length=20, nullable=false)
     */
    private $partida;

    /**
     * @var integer
     *
     * @ORM\Column(name="Afecta", type="smallint", nullable=false)
     */
    private $afecta;

    /**
     * @var integer
     *
     * @ORM\Column(name="items", type="integer", nullable=false)
     */
    private $items;

    /**
     * @var string
     *
     * @ORM\Column(name="Contabilizar_A", type="string", length=20, nullable=false)
     */
    private $contabilizarA;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Copiar", type="boolean", nullable=false)
     */
    private $copiar;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_clasif_Rx_NEW", type="string", length=10, nullable=false)
     */
    private $idClasifRxNew;

    /**
     * @var integer
     *
     * @ORM\Column(name="PORCIENTO", type="integer", nullable=false)
     */
    private $porciento;



    /**
     * Get subcontrol
     *
     * @return string 
     */
    public function getSubcontrol()
    {
        return $this->subcontrol;
    }

    /**
     * Set clasifContProd
     *
     * @param string $clasifContProd
     * @return RegularidadesRecepcion
     */
    public function setClasifContProd($clasifContProd)
    {
        $this->clasifContProd = $clasifContProd;

        return $this;
    }

    /**
     * Get clasifContProd
     *
     * @return string 
     */
    public function getClasifContProd()
    {
        return $this->clasifContProd;
    }

    /**
     * Set idClasifRx
     *
     * @param string $idClasifRx
     * @return RegularidadesRecepcion
     */
    public function setIdClasifRx($idClasifRx)
    {
        $this->idClasifRx = $idClasifRx;

        return $this;
    }

    /**
     * Get idClasifRx
     *
     * @return string 
     */
    public function getIdClasifRx()
    {
        return $this->idClasifRx;
    }

    /**
     * Set tipoDoc
     *
     * @param string $tipoDoc
     * @return RegularidadesRecepcion
     */
    public function setTipoDoc($tipoDoc)
    {
        $this->tipoDoc = $tipoDoc;

        return $this;
    }

    /**
     * Get tipoDoc
     *
     * @return string 
     */
    public function getTipoDoc()
    {
        return $this->tipoDoc;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return RegularidadesRecepcion
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
     * Set operacion
     *
     * @param boolean $operacion
     * @return RegularidadesRecepcion
     */
    public function setOperacion($operacion)
    {
        $this->operacion = $operacion;

        return $this;
    }

    /**
     * Get operacion
     *
     * @return boolean 
     */
    public function getOperacion()
    {
        return $this->operacion;
    }

    /**
     * Set cta
     *
     * @param string $cta
     * @return RegularidadesRecepcion
     */
    public function setCta($cta)
    {
        $this->cta = $cta;

        return $this;
    }

    /**
     * Get cta
     *
     * @return string 
     */
    public function getCta()
    {
        return $this->cta;
    }

    /**
     * Set tipoSubcta
     *
     * @param integer $tipoSubcta
     * @return RegularidadesRecepcion
     */
    public function setTipoSubcta($tipoSubcta)
    {
        $this->tipoSubcta = $tipoSubcta;

        return $this;
    }

    /**
     * Get tipoSubcta
     *
     * @return integer 
     */
    public function getTipoSubcta()
    {
        return $this->tipoSubcta;
    }

    /**
     * Set subcta
     *
     * @param string $subcta
     * @return RegularidadesRecepcion
     */
    public function setSubcta($subcta)
    {
        $this->subcta = $subcta;

        return $this;
    }

    /**
     * Get subcta
     *
     * @return string 
     */
    public function getSubcta()
    {
        return $this->subcta;
    }

    /**
     * Set tipoAnalisis
     *
     * @param integer $tipoAnalisis
     * @return RegularidadesRecepcion
     */
    public function setTipoAnalisis($tipoAnalisis)
    {
        $this->tipoAnalisis = $tipoAnalisis;

        return $this;
    }

    /**
     * Get tipoAnalisis
     *
     * @return integer 
     */
    public function getTipoAnalisis()
    {
        return $this->tipoAnalisis;
    }

    /**
     * Set analisis
     *
     * @param string $analisis
     * @return RegularidadesRecepcion
     */
    public function setAnalisis($analisis)
    {
        $this->analisis = $analisis;

        return $this;
    }

    /**
     * Get analisis
     *
     * @return string 
     */
    public function getAnalisis()
    {
        return $this->analisis;
    }

    /**
     * Set tipoSubanalisis
     *
     * @param integer $tipoSubanalisis
     * @return RegularidadesRecepcion
     */
    public function setTipoSubanalisis($tipoSubanalisis)
    {
        $this->tipoSubanalisis = $tipoSubanalisis;

        return $this;
    }

    /**
     * Get tipoSubanalisis
     *
     * @return integer 
     */
    public function getTipoSubanalisis()
    {
        return $this->tipoSubanalisis;
    }

    /**
     * Set subanalisis
     *
     * @param string $subanalisis
     * @return RegularidadesRecepcion
     */
    public function setSubanalisis($subanalisis)
    {
        $this->subanalisis = $subanalisis;

        return $this;
    }

    /**
     * Get subanalisis
     *
     * @return string 
     */
    public function getSubanalisis()
    {
        return $this->subanalisis;
    }

    /**
     * Set tipoEpigrafe
     *
     * @param integer $tipoEpigrafe
     * @return RegularidadesRecepcion
     */
    public function setTipoEpigrafe($tipoEpigrafe)
    {
        $this->tipoEpigrafe = $tipoEpigrafe;

        return $this;
    }

    /**
     * Get tipoEpigrafe
     *
     * @return integer 
     */
    public function getTipoEpigrafe()
    {
        return $this->tipoEpigrafe;
    }

    /**
     * Set epigrafe
     *
     * @param string $epigrafe
     * @return RegularidadesRecepcion
     */
    public function setEpigrafe($epigrafe)
    {
        $this->epigrafe = $epigrafe;

        return $this;
    }

    /**
     * Get epigrafe
     *
     * @return string 
     */
    public function getEpigrafe()
    {
        return $this->epigrafe;
    }

    /**
     * Set tipoPartida
     *
     * @param integer $tipoPartida
     * @return RegularidadesRecepcion
     */
    public function setTipoPartida($tipoPartida)
    {
        $this->tipoPartida = $tipoPartida;

        return $this;
    }

    /**
     * Get tipoPartida
     *
     * @return integer 
     */
    public function getTipoPartida()
    {
        return $this->tipoPartida;
    }

    /**
     * Set partida
     *
     * @param string $partida
     * @return RegularidadesRecepcion
     */
    public function setPartida($partida)
    {
        $this->partida = $partida;

        return $this;
    }

    /**
     * Get partida
     *
     * @return string 
     */
    public function getPartida()
    {
        return $this->partida;
    }

    /**
     * Set afecta
     *
     * @param integer $afecta
     * @return RegularidadesRecepcion
     */
    public function setAfecta($afecta)
    {
        $this->afecta = $afecta;

        return $this;
    }

    /**
     * Get afecta
     *
     * @return integer 
     */
    public function getAfecta()
    {
        return $this->afecta;
    }

    /**
     * Set items
     *
     * @param integer $items
     * @return RegularidadesRecepcion
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
     * Set contabilizarA
     *
     * @param string $contabilizarA
     * @return RegularidadesRecepcion
     */
    public function setContabilizarA($contabilizarA)
    {
        $this->contabilizarA = $contabilizarA;

        return $this;
    }

    /**
     * Get contabilizarA
     *
     * @return string 
     */
    public function getContabilizarA()
    {
        return $this->contabilizarA;
    }

    /**
     * Set copiar
     *
     * @param boolean $copiar
     * @return RegularidadesRecepcion
     */
    public function setCopiar($copiar)
    {
        $this->copiar = $copiar;

        return $this;
    }

    /**
     * Get copiar
     *
     * @return boolean 
     */
    public function getCopiar()
    {
        return $this->copiar;
    }

    /**
     * Set idClasifRxNew
     *
     * @param string $idClasifRxNew
     * @return RegularidadesRecepcion
     */
    public function setIdClasifRxNew($idClasifRxNew)
    {
        $this->idClasifRxNew = $idClasifRxNew;

        return $this;
    }

    /**
     * Get idClasifRxNew
     *
     * @return string 
     */
    public function getIdClasifRxNew()
    {
        return $this->idClasifRxNew;
    }

    /**
     * Set porciento
     *
     * @param integer $porciento
     * @return RegularidadesRecepcion
     */
    public function setPorciento($porciento)
    {
        $this->porciento = $porciento;

        return $this;
    }

    /**
     * Get porciento
     *
     * @return integer 
     */
    public function getPorciento()
    {
        return $this->porciento;
    }
}
