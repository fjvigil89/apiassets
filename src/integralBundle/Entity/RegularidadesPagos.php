<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegularidadesPagos
 *
 * @ORM\Table(name="Regularidades_Pagos", indexes={@ORM\Index(name="Pk_Reg_Pagos", columns={"items"}), @ORM\Index(name="Ix1_Reg_Pagos", columns={"Tipo_Doc", "Forma_Pago", "Id_clasif_Rx", "Moneda"})})
 * @ORM\Entity
 */
class RegularidadesPagos
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
     * @ORM\Column(name="Tipo_Doc", type="string", length=3, nullable=false)
     */
    private $tipoDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="Forma_Pago", type="string", length=3, nullable=false)
     */
    private $formaPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_clasif_Rx", type="string", length=10, nullable=false)
     */
    private $idClasifRx;

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda", type="string", length=3, nullable=false)
     */
    private $moneda;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Operacion", type="boolean", nullable=false)
     */
    private $operacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Cta", type="string", length=50, nullable=false)
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
     * @ORM\Column(name="SubCta", type="string", length=50, nullable=false)
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
     * @ORM\Column(name="Analisis", type="string", length=50, nullable=false)
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
     * @ORM\Column(name="SubAnalisis", type="string", length=50, nullable=false)
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
     * @ORM\Column(name="Epigrafe", type="string", length=50, nullable=false)
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
     * @ORM\Column(name="Partida", type="string", length=50, nullable=false)
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
     * @var boolean
     *
     * @ORM\Column(name="Copiar", type="boolean", nullable=false)
     */
    private $copiar;

    /**
     * @var integer
     *
     * @ORM\Column(name="PORCIENTO", type="integer", nullable=false)
     */
    private $porciento;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_clasif_Rx_NEW", type="string", length=10, nullable=false)
     */
    private $idClasifRxNew;



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
     * Set tipoDoc
     *
     * @param string $tipoDoc
     * @return RegularidadesPagos
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
     * Set formaPago
     *
     * @param string $formaPago
     * @return RegularidadesPagos
     */
    public function setFormaPago($formaPago)
    {
        $this->formaPago = $formaPago;

        return $this;
    }

    /**
     * Get formaPago
     *
     * @return string 
     */
    public function getFormaPago()
    {
        return $this->formaPago;
    }

    /**
     * Set idClasifRx
     *
     * @param string $idClasifRx
     * @return RegularidadesPagos
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
     * Set moneda
     *
     * @param string $moneda
     * @return RegularidadesPagos
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
     * Set operacion
     *
     * @param boolean $operacion
     * @return RegularidadesPagos
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
     * @return RegularidadesPagos
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
     * @return RegularidadesPagos
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
     * @return RegularidadesPagos
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
     * @return RegularidadesPagos
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
     * @return RegularidadesPagos
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
     * @return RegularidadesPagos
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
     * @return RegularidadesPagos
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
     * @return RegularidadesPagos
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
     * @return RegularidadesPagos
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
     * @return RegularidadesPagos
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
     * @return RegularidadesPagos
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
     * @return RegularidadesPagos
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
     * @return RegularidadesPagos
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
     * Set copiar
     *
     * @param boolean $copiar
     * @return RegularidadesPagos
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
     * Set porciento
     *
     * @param integer $porciento
     * @return RegularidadesPagos
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

    /**
     * Set idClasifRxNew
     *
     * @param string $idClasifRxNew
     * @return RegularidadesPagos
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
}
