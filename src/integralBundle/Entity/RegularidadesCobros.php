<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegularidadesCobros
 *
 * @ORM\Table(name="Regularidades_Cobros", uniqueConstraints={@ORM\UniqueConstraint(name="Pk_Reg_Cobros", columns={"Items"})}, indexes={@ORM\Index(name="Ix1_Reg_Cobros", columns={"Tipo_Doc", "forma_Pago", "Id_Clasif_Factura", "Moneda"})})
 * @ORM\Entity
 */
class RegularidadesCobros
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
     * @ORM\Column(name="forma_Pago", type="string", length=3, nullable=false)
     */
    private $formaPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda", type="string", length=2, nullable=false)
     */
    private $moneda;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_Factura", type="string", length=10, nullable=false)
     */
    private $idClasifFactura;

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
     * @ORM\Column(name="Items", type="integer", nullable=false)
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
     * @ORM\Column(name="Id_Clasif_FacturaNEW", type="string", length=10, nullable=false)
     */
    private $idClasifFacturanew;



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
     * @return RegularidadesCobros
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
     * @return RegularidadesCobros
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
     * Set moneda
     *
     * @param string $moneda
     * @return RegularidadesCobros
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
     * Set idClasifFactura
     *
     * @param string $idClasifFactura
     * @return RegularidadesCobros
     */
    public function setIdClasifFactura($idClasifFactura)
    {
        $this->idClasifFactura = $idClasifFactura;

        return $this;
    }

    /**
     * Get idClasifFactura
     *
     * @return string 
     */
    public function getIdClasifFactura()
    {
        return $this->idClasifFactura;
    }

    /**
     * Set operacion
     *
     * @param boolean $operacion
     * @return RegularidadesCobros
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
     * @return RegularidadesCobros
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
     * @return RegularidadesCobros
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
     * @return RegularidadesCobros
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
     * @return RegularidadesCobros
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
     * @return RegularidadesCobros
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
     * @return RegularidadesCobros
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
     * @return RegularidadesCobros
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
     * @return RegularidadesCobros
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
     * @return RegularidadesCobros
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
     * @return RegularidadesCobros
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
     * @return RegularidadesCobros
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
     * @return RegularidadesCobros
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
     * @return RegularidadesCobros
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
     * @return RegularidadesCobros
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
     * @return RegularidadesCobros
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
     * Set idClasifFacturanew
     *
     * @param string $idClasifFacturanew
     * @return RegularidadesCobros
     */
    public function setIdClasifFacturanew($idClasifFacturanew)
    {
        $this->idClasifFacturanew = $idClasifFacturanew;

        return $this;
    }

    /**
     * Get idClasifFacturanew
     *
     * @return string 
     */
    public function getIdClasifFacturanew()
    {
        return $this->idClasifFacturanew;
    }
}
