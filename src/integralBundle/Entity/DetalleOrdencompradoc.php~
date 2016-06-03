<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleOrdencompradoc
 *
 * @ORM\Table(name="Detalle_OrdenCompraDoc")
 * @ORM\Entity
 */
class DetalleOrdencompradoc
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Doc", type="integer", nullable=false)
     */
    private $idDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Doc", type="smallint", nullable=false)
     */
    private $anoDoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ContadorDoc", type="integer", nullable=false)
     */
    private $contadordoc;

    /**
     * @var string
     *
     * @ORM\Column(name="TipoDoc", type="string", length=1, nullable=false)
     */
    private $tipodoc;



    /**
     * Get contador
     *
     * @return integer 
     */
    public function getContador()
    {
        return $this->contador;
    }

    /**
     * Set idDoc
     *
     * @param integer $idDoc
     * @return DetalleOrdencompradoc
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
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return DetalleOrdencompradoc
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
     * Set anoDoc
     *
     * @param integer $anoDoc
     * @return DetalleOrdencompradoc
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
     * Set contadordoc
     *
     * @param integer $contadordoc
     * @return DetalleOrdencompradoc
     */
    public function setContadordoc($contadordoc)
    {
        $this->contadordoc = $contadordoc;

        return $this;
    }

    /**
     * Get contadordoc
     *
     * @return integer 
     */
    public function getContadordoc()
    {
        return $this->contadordoc;
    }

    /**
     * Set tipodoc
     *
     * @param string $tipodoc
     * @return DetalleOrdencompradoc
     */
    public function setTipodoc($tipodoc)
    {
        $this->tipodoc = $tipodoc;

        return $this;
    }

    /**
     * Get tipodoc
     *
     * @return string 
     */
    public function getTipodoc()
    {
        return $this->tipodoc;
    }
}
