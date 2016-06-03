<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PorContabilizar
 *
 * @ORM\Table(name="Por_Contabilizar")
 * @ORM\Entity
 */
class PorContabilizar
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Doc", type="string", length=18, nullable=false)
     */
    private $idDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Doc", type="string", length=50, nullable=false)
     */
    private $tipoDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="Forma_Pago", type="string", length=50, nullable=false)
     */
    private $formaPago;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Contabilizado", type="boolean", nullable=false)
     */
    private $contabilizado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_DocRef", type="string", length=15, nullable=false)
     */
    private $idDocref;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1", type="integer", nullable=false)
     */
    private $contador1;



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
     * Set idDoc
     *
     * @param string $idDoc
     * @return PorContabilizar
     */
    public function setIdDoc($idDoc)
    {
        $this->idDoc = $idDoc;

        return $this;
    }

    /**
     * Get idDoc
     *
     * @return string 
     */
    public function getIdDoc()
    {
        return $this->idDoc;
    }

    /**
     * Set tipoDoc
     *
     * @param string $tipoDoc
     * @return PorContabilizar
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
     * @return PorContabilizar
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
     * Set contabilizado
     *
     * @param boolean $contabilizado
     * @return PorContabilizar
     */
    public function setContabilizado($contabilizado)
    {
        $this->contabilizado = $contabilizado;

        return $this;
    }

    /**
     * Get contabilizado
     *
     * @return boolean 
     */
    public function getContabilizado()
    {
        return $this->contabilizado;
    }

    /**
     * Set idDocref
     *
     * @param string $idDocref
     * @return PorContabilizar
     */
    public function setIdDocref($idDocref)
    {
        $this->idDocref = $idDocref;

        return $this;
    }

    /**
     * Get idDocref
     *
     * @return string 
     */
    public function getIdDocref()
    {
        return $this->idDocref;
    }

    /**
     * Set contador1
     *
     * @param integer $contador1
     * @return PorContabilizar
     */
    public function setContador1($contador1)
    {
        $this->contador1 = $contador1;

        return $this;
    }

    /**
     * Get contador1
     *
     * @return integer 
     */
    public function getContador1()
    {
        return $this->contador1;
    }
}
