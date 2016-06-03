<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UtilToolParametros
 *
 * @ORM\Table(name="Util_Tool_Parametros")
 * @ORM\Entity
 */
class UtilToolParametros
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_UH", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClasifUh;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_Entrada_UH", type="string", length=3, nullable=false)
     */
    private $idClasifEntradaUh;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_Salida_UH", type="string", length=3, nullable=false)
     */
    private $idClasifSalidaUh;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_Traslado_UH", type="string", length=3, nullable=false)
     */
    private $idClasifTrasladoUh;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_Entrada_Open", type="string", length=3, nullable=false)
     */
    private $idClasifEntradaOpen;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Opening_Close", type="boolean", nullable=false)
     */
    private $openingClose;



    /**
     * Get idClasifUh
     *
     * @return string 
     */
    public function getIdClasifUh()
    {
        return $this->idClasifUh;
    }

    /**
     * Set idClasifEntradaUh
     *
     * @param string $idClasifEntradaUh
     * @return UtilToolParametros
     */
    public function setIdClasifEntradaUh($idClasifEntradaUh)
    {
        $this->idClasifEntradaUh = $idClasifEntradaUh;

        return $this;
    }

    /**
     * Get idClasifEntradaUh
     *
     * @return string 
     */
    public function getIdClasifEntradaUh()
    {
        return $this->idClasifEntradaUh;
    }

    /**
     * Set idClasifSalidaUh
     *
     * @param string $idClasifSalidaUh
     * @return UtilToolParametros
     */
    public function setIdClasifSalidaUh($idClasifSalidaUh)
    {
        $this->idClasifSalidaUh = $idClasifSalidaUh;

        return $this;
    }

    /**
     * Get idClasifSalidaUh
     *
     * @return string 
     */
    public function getIdClasifSalidaUh()
    {
        return $this->idClasifSalidaUh;
    }

    /**
     * Set idClasifTrasladoUh
     *
     * @param string $idClasifTrasladoUh
     * @return UtilToolParametros
     */
    public function setIdClasifTrasladoUh($idClasifTrasladoUh)
    {
        $this->idClasifTrasladoUh = $idClasifTrasladoUh;

        return $this;
    }

    /**
     * Get idClasifTrasladoUh
     *
     * @return string 
     */
    public function getIdClasifTrasladoUh()
    {
        return $this->idClasifTrasladoUh;
    }

    /**
     * Set idClasifEntradaOpen
     *
     * @param string $idClasifEntradaOpen
     * @return UtilToolParametros
     */
    public function setIdClasifEntradaOpen($idClasifEntradaOpen)
    {
        $this->idClasifEntradaOpen = $idClasifEntradaOpen;

        return $this;
    }

    /**
     * Get idClasifEntradaOpen
     *
     * @return string 
     */
    public function getIdClasifEntradaOpen()
    {
        return $this->idClasifEntradaOpen;
    }

    /**
     * Set openingClose
     *
     * @param boolean $openingClose
     * @return UtilToolParametros
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
}
